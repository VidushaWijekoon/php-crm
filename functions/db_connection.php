<?php

try {
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'new_wms';
	if ($connection = mysqli_connect('localhost', 'root', '', 'new_wms')) {
		// echo "Successfully Connected";
	} else {
		throw new Exception("Database Unable to Connect") . mysqli_connect_error();
	}
} catch (Exception $e) {
	echo $e->getMessage();
}

// OCS Management supply