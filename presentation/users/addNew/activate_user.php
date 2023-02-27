<?php
session_start();
require_once('../../../functions/db_connection.php');

if (isset($_GET['user_id'])) {
	// getting the user information
	$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
	// should not delete current user
	$query = "UPDATE users SET is_active = 1 WHERE user_id = '$user_id' LIMIT 1";
	$result = mysqli_query($connection, $query);

	if ($result) {
		header('Location: ../users.php');
	} else {
		header('Location: users.php?err=delete_failed');
	}
}
