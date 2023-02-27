<?php
session_start();
$brand = trim($_POST['brand']);
$core=trim($_POST['core']);
$gen=trim($_POST['generation']);
$model=trim($_POST['model']);
$screen_type=trim($_POST['touch_or_non_touch']);
$battery=trim($_POST['battery']);
$mfg=trim($_POST['mfg']);
$device=trim($_POST['device']);
$series=trim($_POST['series']);
$processor=trim($_POST['processor']);
$speed=trim($_POST['speed']);
$lcd_size=trim($_POST['lcd_size']);
$resolution=trim($_POST['resolution']);
$dvd=trim($_POST['dvd']);

$con = mysqli_connect("localhost", "root", "", "wms");
$sql="INSERT INTO `brand`( `brand`) VALUES ('$brand')";
$result = mysqli_query($con,$qq);
?>