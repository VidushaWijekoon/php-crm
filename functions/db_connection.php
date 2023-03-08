<?php

try {
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'main_project';
	if ($connection = mysqli_connect('localhost', 'root', '', 'main_project')) {
		// echo "Successfully Connected";
	} else {
		throw new Exception("Database Unable to Connect") . mysqli_connect_error();
	}
} catch (Exception $e) {
	echo $e->getMessage();
}
