<?php
session_start();
require_once "phpqrcode/qrlib.php";
$inventory_id=0;
$machine_id=0;
$asin=0;
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
$resolution_type=trim($_POST['resolution_type']);
$asin=trim($_POST['asin']);
 $string = explode("-", $asin);
        $asin='';
        $asin=$string[1];
         $asin2=$string[0];
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

  $ram=0;
                $hdd=0;
                if($screen_type=='yes'){
                    $screen_type='Touch';
                }
                if($keyboard_backlight =='yes'){
                    $keyboard_backlight='Backlit';
                }
                
                $query = "SELECT ram,hard_disk_capacity FROM `asin_details` WHERE `asin_no`='$asin';";
                $query1 = mysqli_query($connection, $query);
                echo $query;
                foreach($query1 as $abc){
                    $ram=strToUpper($abc['ram']);
                    $hdd=strToUpper($abc['hard_disk_capacity']);
                }
               
                ///////////////////////////////////////////////////////////////////////
                
                    $im = imagecreatetruecolor(450, 200);

                    // Create some colors
                   $white = imagecolorallocate($im, 255, 255, 255);
                    $black = imagecolorallocate($im, 0, 0, 0);
                    imagefilledrectangle($im, 0, 0, 450, 200, $white);
                    
                    // Replace path by your own font path
                     $font = '../../../static/fonts/Poppins-Bold.ttf';

                    // Add some shadow to the text
                    
                    
                /////////////////////////////////////////////////////////////////////////
                $brand=strToUpper($brand);
                $model=strToUpper($model);
                $asin=strToUpper($asin);
                
                ///////////////////////////////////////////

                    // Add the text
                   imagettftext($im, 15, 0, 10, 15, $black, $font, "$brand    $model" );
                    imagettftext($im, 15, 0, 10, 35, $black, $font, "$core $speed $resolution_type $screen_type $keyboard_backlight ");
                    if($ram !=0 && $hdd !=0){
                    imagettftext($im, 15, 0, 150, 80, $black, $font, "$ram GB / $hdd GB");
                    }
                    imagettftext($im, 15, 0, 10, 180, $black, $font, "ALSAKB $id");
                    imagettftext($im, 15, 0, 10, 200, $black, $font, "WH2-$generation-$model");
                    
                    // Output to browser
                    header('Content-Type: image/png');
                    

                    imagepng($im, "files/$user_id test.png");
                    imagedestroy($im);
                //////////////////////////////////////////////////////////////////////////
                
                    ///////////////////////////////////////////////////////////////////////////////////////////
                       $img = imagecreatetruecolor(60, 200);

                    // Create some colors
                    $white = imagecolorallocate($img, 255, 255, 255);
                    $black = imagecolorallocate($img, 0, 0, 0);
                    imagefilledrectangle($img, 0, 0, 60, 200, $white);
                    
                    // Replace path by your own font path
                    // Add some shadow to the text

                    // Add the text
                     imagettftext($img, 16, 90, 20, 195, $black, $font, "$asin2" );
                    imagettftext($img, 16, 90, 40, 195, $black, $font, "$asin" );
                    
                    // Output to browser
                    header('Content-Type: image/png');
                    

                    imagepng($img, "asin/$user_id asin1.png");
                    imagedestroy($img);
                    //////////////////////////////////////////////////////////////////////////////////////////
                  $dest = imagecreatefrompng(
                "files/$user_id test.png");
                $src = imagecreatefrompng(
                "temp/$id.png");
                 $src2 = imagecreatefrompng(
                "asin/$user_id asin1.png");
                 
                // Copy and merge
                  imagecopymerge($dest, $src, 15, 50, 0, 0, 110, 110, 75);
                imagecopymerge($dest, $src2, 395, 0, 0, 0, 50, 200, 75);
                
                // Output and free from memory
                header('Content-Type: image/png');
                imagegif($dest,"files/$user_id sticker.png");
if($inventory_id !=0){
header("Location: samples.php?inventory=1");
}else{
header("Location: sample2.php");
}

// imagedestroy($dest);
// imagedestroy($src);