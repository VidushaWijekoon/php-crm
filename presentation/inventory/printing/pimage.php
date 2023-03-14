<?php
session_start();
require_once "phpqrcode/qrlib.php";
$inventory_id=0;
$machine_id=0;
$keyboard_backlight=0;
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
if(empty($_POST['keyboard_backlight'])){}else{$keyboard_backlight=trim($_POST['keyboard_backlight']);}
if(empty($_POST['machine_id'])){}else{$machine_id=trim($_POST['machine_id']);}
if(empty($_POST['inventory_id'])){}else{$inventory_id=trim($_POST['inventory_id']);}
$user_id=$_SESSION['user_id'];
$connection = mysqli_connect("localhost", "root", "", "main_project");
 $id=0;
if($inventory_id==0){
$query = "INSERT INTO `main_inventory_informations`(
            `device`,
            `processor`,
            `core`,
            `generation`,
            `model`,
            `brand`,
            `create_by_inventory_id`,
            `mfg`,
            `machine_id`,
            `series`,
            `speed`,
            `battery`,
            `lcd_size`,
            `touch_or_none_touch`,
             `optical`,
             keyboard_backlight,
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
            '$keyboard_backlight',
            '$resolution',
            'WH2'
        )";
    $query1 = mysqli_query($connection, $query);
    $sql="UPDATE machine_from_suppliers SET add_to_inventory='1' WHERE machine_id='$machine_id'";
    $sql_run=mysqli_query($connection,$sql);
   
$sql="SELECT inventory_id,generation,model,brand,core,speed FROM main_inventory_informations WHERE create_by_inventory_id='$user_id' ORDER BY inventory_id DESC LIMIT 1";
$result = mysqli_query($connection,$sql);

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
$query = "INSERT INTO `performance_records`(
    `user_id`,
    `department_id`,
    `qr_number`,
    `job_description`,
    `start_time`,
    `end_time`,
    `target`,
    status
    )
    VALUES(
    '$user_id',
    '1',
    '$id',
    '22',
     now(),
     now(),
    '1',
    '1'
    ) ";
    $result = mysqli_query($connection,$query);
}else{
    $id=$inventory_id;
   $generation=strtoupper($generation);
   $model=strtoupper($model);
   $brand=strtoupper($brand);
   $core=strtoupper($core);
   $speed=strtoupper($speed);
   $sql="UPDATE
    `main_inventory_informations`
SET
    `brand` = '$brand',
    `model` = '$model',
    `processor` = '$processor',
    `series` = '$series',
    `core` = '$core',
    `generation` = '$generation',
    `mfg` = '$mfg',
    `speed` = '$speed',
    `battery` = '$battery',
    `lcd_size` = '$lcd_size',
    `touch_or_none_touch` = '$screen_type',
    `optical` = '$dvd',
    `screen_resolution` = '$resolution'
    WHERE 
    inventory_id='$inventory_id'";
     $result = mysqli_query($connection,$sql); 
   $query = "INSERT INTO `performance_records`(
    `user_id`,
    `department_id`,
    `qr_number`,
    `job_description`,
    `start_time`,
    `end_time`,
    `target`,
    status
    )
    VALUES(
    '$user_id',
    '1',
    '$id',
    '23',
     now(),
     now(),
    '1',
    '1'
    ) ";
    $result = mysqli_query($connection,$query); 
}
// (A) IMAGE OBJECT
$width = 400; $height = 215;
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
 imagestring($img, 15, 10, 10, "$brand $model ", $white);
   imagestring($img, 15, 10, 30, "$core $speed", $white);
   imagestring($img, 12, 10, 180, "ALSAKB $id", $white);
    imagestring($img, 12, 10, 195, "WH2-$generation-$model", $white);
 
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
if($inventory_id !=0){
header("Location: samples.php?inventory=1");
}else{
header("Location: samples.php");
}

// imagedestroy($dest);
// imagedestroy($src);