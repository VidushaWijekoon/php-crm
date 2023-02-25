<?php
session_start();
require_once('../../../functions/db_connection.php');

// checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

if (isset($_GET['emp_id'])) {
    // getting the user information
    $emp_id = mysqli_real_escape_string($connection, $_GET['emp_id']);
    // should not delete current user

    $query1 = "DELETE FROM users WHERE emp_id = '$emp_id'";
    $result1 = mysqli_query($connection, $query1);

    $query = "DELETE FROM employees WHERE emp_id = '$emp_id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: ../employees.php');
    }
}
