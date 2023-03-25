<?php 
  ob_start();
  session_start();
  $user_id=0;
  $user_id=$_SESSION['user_id'];
  
  include 'WebClientPrint.php';
  use Neodynamic\SDK\Web\WebClientPrint;
  use Neodynamic\SDK\Web\Utils;

  $title = 'WebClientPrint for PHP - Print Known File Formats';
?>

<div class="container">
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <hr />
                    <div class="checkbox" style="display:none">
                        <label>
                            <input type="checkbox" id="useDefaultPrinter" checked />
                            <strong>Print to Default printer</strong>
                        </label>
                    </div>
                    <script type="text/javascript">
                    //var wcppGetPrintersDelay_ms = 0;
                    var wcppGetPrintersTimeout_ms = 1000; //60 sec
                    var wcppGetPrintersTimeoutStep_ms = 500; //0.5 sec
                    function wcpGetPrintersOnSuccess() {
                        // Display client installed printers
                        if (arguments[0].length > 0) {
                            var p = arguments[0].split("|");
                            var options = '';
                            for (var i = 0; i < p.length; i++) {
                                options += '<option>' + p[i] + '</option>';
                            }
                            $('#installedPrinters').css('visibility', 'visible');
                            $('#installedPrinterName').html(options);
                            $('#installedPrinterName').focus();
                            $('#loadPrinters').hide();
                        } else {
                            alert("No printers are installed in your system.");
                        }
                    }

                    function wcpGetPrintersOnFailure() {
                        // Do something if printers cannot be got from the client
                        alert("No printers are installed in your system.");
                    }
                    </script>
                </div>
                <div class="col-md-4">
                    <hr />
                    <div id="fileToPrint">
                        <select id="ddlFileType" class="form-control d-none" style="display:none">
                            <option selected>PNG</option>
                        </select>
                        <br />

                        <body>
                            <!-- <a class="btn btn-success btn-lg"
                                onClick="javascript:jsWebClientPrint.print('useDefaultPrinter=' + $('#useDefaultPrinter').attr('checked') + '&printerName=' + encodeURIComponent($('#installedPrinterName').val()) + '&filetype=' + $('#ddlFileType').val());">Print
                                File...</a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
  $content = ob_get_contents();
  ob_clean();
?>


<?php
  
    //Get Absolute URL of this page
    $currentAbsoluteURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $currentAbsoluteURL .= $_SERVER["SERVER_NAME"];
    if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
    {
        $currentAbsoluteURL .= ":".$_SERVER["SERVER_PORT"];
    } 
    $currentAbsoluteURL .= $_SERVER["REQUEST_URI"];
    
    //WebClientPrinController.php is at the same page level as WebClientPrint.php
    $webClientPrintControllerAbsoluteURL = substr($currentAbsoluteURL, 0, strrpos($currentAbsoluteURL, '/')).'/WebClientPrintController.php';
    
    //DemoPrintFileController.php is at the same page level as WebClientPrint.php
    $demoPrintFileControllerAbsoluteURL = substr($currentAbsoluteURL, 0, strrpos($currentAbsoluteURL, '/')).'/DemoPrintFileController.php';
    
    //Specify the ABSOLUTE URL to the WebClientPrintController.php and to the file that will create the ClientPrintJob object
    echo WebClientPrint::createScript($webClientPrintControllerAbsoluteURL, $demoPrintFileControllerAbsoluteURL, session_id());
?>

<script type="text/javascript">
// $("#ddlFileType").change(function () {
//     var s = $("#ddlFileType option:selected").text();

//     // if (s == 'PNG') $("#ifPreview").attr("src", "/files/000226.png");
// }).change();
</script>

<?php

  $script = ob_get_contents();
  ob_clean();
  if(empty($_GET['inventory'])){
    ?>
<div class="box3 border" style="display: flex; justify-content: center; align-items: center;" id="printableArea">

    <div class="stikerDetails"> <img style="width: 2.0cm;height: 1.3cm;" src="files/demo22.png">
        <img style="width: 2.0cm;height: 1.3cm;" src="files/demo22.png">
    </div>


</div>

<script>
var int = setInterval('check()', 1000);

function check() {
    if (chobj('div') == true) {
        printDiv('printableArea')
        // window.alert('true');
        int = window.clearInterval(int);
    } else {
        // document.write('<p>false</p>');
    }
}

function chobj(printableArea) {
    return (document.getElementById('printableArea')) ? true : false;
}
document.getElementById("printableArea").innerHTML = x;

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    window.location.href = '../inventory_add_laptop';
}
</script>
<?php
//      echo"<script>";
//   echo" setInterval(() => {";
//   echo"window.location.href = '../inventory_add_laptop.php';";
//   echo "}, 1000);";
//   echo"</script>";
  }else{
    ?>
<div class="box3 border" style="display: flex; justify-content: center; align-items: center;" id="print">

    <div class="stikerDetails"> <img src="files/demo22.png">
    </div>
</div>
<script>
var int = setInterval('check()', 300);

function check() {
    if (chobj('div') == true) {
        printDiv('print')
        // window.alert('true');
        int = window.clearInterval(int);
    } else {
        // document.write('<p>false</p>');
    }
}

function chobj(printableArea1) {
    return (document.getElementById('print')) ? true : false;
}
document.getElementById("print").innerHTML = x;

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    window.location.href = '../inventory_update_laptop.php';
}
</script>
<?php
  }
 
   include("template.php");
 
  
 
?>