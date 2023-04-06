<?php 
ob_start();
session_start();
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$user_id=$_SESSION['username'];

    $device = $_POST['device'];
            $processor = $_POST['processor'];
            $core = $_POST['core'];
            $generation = $_POST['generation'];
            $model = $_POST['model'];
            $brand = $_POST['brand'];
            $mfg = $_POST['mfg'];
            $speed = $_POST['speed'];
            $battery = $_POST['battery'];
            $lcd_size= $_POST['lcd_size'];
            $screen_type = $_POST['touch'];
            $dvd = $_POST['dvd'];

            $resolution = $_POST['resolution'];
   $query = "INSERT INTO `main_inventory_informations`(
            `device`,
            `processor`,
            `core`,
            `generation`,
            `model`,
            `brand`,
            `create_by_inventory_id`,
            `mfg`,
            `speed`,
            `battery`,
            `lcd_size`,
            `touch_or_none_touch`,
             `optical`,
             keyboard_backlight,
             screen_resolution,
             location,
             send_to_production
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
            '$speed',
            '$battery',
            '$lcd_size',
            '$screen_type',
            '$dvd',
            '$keyboard_backlight',
            '$resolution',
            'WH2',
            '1'
        )";
    $query1 = mysqli_query($connection, $query);
    header('Location: ../manual');
   
?>