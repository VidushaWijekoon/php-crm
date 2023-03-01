<?php
require_once('../../../functions/db_connection.php');

if (isset($_GET['user_id'])) {
	// getting the user information
	$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
	// should not delete current user
	$query = "UPDATE users SET is_active = 0 WHERE user_id = '$user_id' LIMIT 1";
	echo $query;
	$result = mysqli_query($connection, $query);

	if ($result) {
		header('Location: ../users');
	} else {
		header('Location: users?err=delete_failed');
	}
}
