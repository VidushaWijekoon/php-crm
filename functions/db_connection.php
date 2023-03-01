<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'main_project';

$connection = mysqli_connect('localhost', 'root', '', 'main_project');

// Checking the connection
if (mysqli_connect_errno()) {
	die('Database connection failed ' . mysqli_connect_error());
}