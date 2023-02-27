<?php
session_start();
require_once "phpqrcode/qrlib.php";
$brand = trim($_POST['brand']);
$core=trim($_POST['core']);
$generation=trim($_POST['gen']);
$model=trim($_POST['model']);
$screen_type=trim($_POST['screen_type']);
$battery=trim($_POST['battery']);
$mfg=trim($_POST['mfg']);
$device=trim($_POST['device']);
$series=trim($_POST['series']);
$processor=trim($_POST['processor']);
$speed=trim($_POST['speed']);
$lcd_size=trim($_POST['lcd_size']);
$resolution=trim($_POST['resolution']);
$dvd=trim($_POST['dvd']);
$machine_id=trim($_POST['machine_id']);
$user_id=$_SESSION['user_id'];

$connection = mysqli_connect("localhost", "root", "", "wms");

$query = "INSERT INTO `warehouse_information_sheet`(
            `device`,
            `processor`,
            `core`,
            `generation`,
            `model`,
            `brand`,
            `create_by_inventory_id`,
            `mfg`,
            `machine_from_supplier_id`,
            `series`,
            `speed`,
            `battery`,
            `lcd_size`,
            `touch_or_non_touch`,
             `dvd`,
             screen_resolution,
             location
        )
        VALUES(
            '$device',
            '$processor',
            '$core',
            '$generation',
            '$model',
            '$brand',
            '$user_id',
            '$mfg',
            '$machine_id',
            '$series',
            '$speed',
            '$battery',
            '$lcd_size',
            '$screen_type',
            '$dvd',
            '$resolution',
            'WH2'
        )";
    $query1 = mysqli_query($connection, $query);


$sql="SELECT inventory_id,generation,model,brand,core,speed FROM warehouse_information_sheet WHERE create_by_inventory_id='$user_id' ORDER BY inventory_id DESC LIMIT 1";
$result = mysqli_query($connection,$sql);
 $id=0;
while($row = mysqli_fetch_array($result)) {
   $id=$row['inventory_id'];
   $generation=strtoupper($row['generation']);
   $model=strtoupper($row['model']);
   $brand=strtoupper($row['brand']);
   $core=strtoupper($row['core']);
   $speed=strtoupper($row['speed']);
    $tempDir = 'temp/';
    $filename = $id;
    $codeContents = $id;

    QRcode::png($codeContents, $tempDir . '' . $filename . '.png', QR_ECLEVEL_L, 5, 1);
}

// (A) IMAGE OBJECT
$width = 500; $height = 220;
$img = imagecreate($width, $height);
 
// (B) SETTINGS
$txtSize = 5;
$txtX = 10; $txtY = 10;
$red = imagecolorallocate($img, 255, 255, 255);
$white = imagecolorallocate($img, 0, 0, 0);
 
// (C) DRAW BACKGROUND (RED RECTANGLE)
imagefilledrectangle($img, 0, 0, $width, $height, $red);
 
// (D) WRITE TEXT
// imagestring($img, $txtSize, $txtX, $txtY, $txt, $white);
 imagestring($img, 12, 10, 10, "$brand $model ", $white);
   imagestring($img, 12, 10, 30, "$core $speed", $white);
   imagestring($img, 9, 10, 180, "ALSAKB$id", $white);
    imagestring($img, 9, 10, 195, "WH2-$generation-$model", $white);
 
// (E) SAVE TO FILE
imagepng($img, "files/demo1.png");
imagedestroy($img); // optional


////////////////////////////////////////////////////////////////////////////////////
// Create image instances
$dest = imagecreatefrompng(
'files/demo1.png');
$src = imagecreatefrompng(
"temp/$id.png");
 
// Copy and merge
imagecopymerge($dest, $src, 15, 50, 0, 0, 110, 110, 75);
 
// Output and free from memory
header('Content-Type: image/png');
imagegif($dest,"files/demo22.png");
 header("Location: samples.php?test=1");
// imagedestroy($dest);
// imagedestroy($src);