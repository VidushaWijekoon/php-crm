<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'new_wms';

$connection = mysqli_connect('localhost', 'root', '', 'new_wms');

// Checking the connection
if (mysqli_connect_errno()) {
	die('Database connection failed ' . mysqli_connect_error());
}
 
?>