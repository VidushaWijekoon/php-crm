<?php

include 'WebClientPrint.php';

use Neodynamic\SDK\Web\WebClientPrint;
use Neodynamic\SDK\Web\Utils;
use Neodynamic\SDK\Web\DefaultPrinter;
use Neodynamic\SDK\Web\InstalledPrinter;
use Neodynamic\SDK\Web\PrintFile;
use Neodynamic\SDK\Web\PrintFilePDF;
use Neodynamic\SDK\Web\PrintFileTXT;
use Neodynamic\SDK\Web\PrintRotation;
use Neodynamic\SDK\Web\PrintOrientation;
use Neodynamic\SDK\Web\TextAlignment;
use Neodynamic\SDK\Web\ClientPrintJob;

// Process request
// Generate ClientPrintJob? only if clientPrint param is in the query string
$urlParts = parse_url($_SERVER['REQUEST_URI']);

if (isset($urlParts['query'])) {
    $rawQuery = $urlParts['query'];
    parse_str($rawQuery, $qs);
    if (isset($qs[WebClientPrint::CLIENT_PRINT_JOB])) {

        $useDefaultPrinter = ($qs['useDefaultPrinter'] === 'checked');
        $printerName = urldecode($qs['printerName']);

        $fileName = uniqid() . '.' . $qs['filetype'];

        $filePath = '';
        if ($qs['filetype'] === 'PNG') {
            $filePath = 'files/demo22.png';
        } 
      
        

        if (!Utils::isNullOrEmptyString($filePath)) {
            
            //Create a ClientPrintJob obj that will be processed at the client side by the WCPP
            $cpj = new ClientPrintJob();
            
            if ($qs['filetype'] === 'PDF')
            {
                $myfile = new PrintFilePDF($filePath, $fileName, null);
                $myfile->printRotation = PrintRotation::None;
                $cpj->printFile = $myfile;
            }
            else if ($qs['filetype'] === 'TXT')
            {
                $myfile = new PrintFileTXT($filePath, $fileName, null);
                $myfile->printOrientation = PrintOrientation::Portrait;
                $myfile->fontName = 'Arial';
                $myfile->fontSizeInPoints = 12;
                $cpj->printFile = $myfile;
            }
            else
            {
                $cpj->printFile = new PrintFile($filePath, $fileName, null);
            }
                
            if ($useDefaultPrinter || $printerName === 'null') {
                $cpj->clientPrinter = new DefaultPrinter();
            } else {
                $cpj->clientPrinter = new InstalledPrinter($printerName);
            }

            //Send ClientPrintJob back to the client
            ob_start();
            ob_clean();
            header('Content-type: application/octet-stream');
            echo $cpj->sendToClient();
            ob_end_flush();
            exit();
        }
    }
}
    


 