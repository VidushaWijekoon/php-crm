<?php

session_start();
require_once('functions/db_connection.php');

$_SESSION = array();
$user_id = $_GET['user_id'];
$log_time_id = $_GET['log_time_id'];

$query = "UPDATE users_logged_in_time SET log_out_time = NOW() WHERE user_id = $user_id AND id = $log_time_id LIMIT 1";
$run = mysqli_query($connection, $query);

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

session_destroy();

// redirecting the user to the login page
header('Location: index.php?logout=yes');
