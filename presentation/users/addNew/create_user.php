<?php

require_once("../../../functions/db_connection.php");

$created_by = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_id = mysqli_real_escape_string($connection, $_POST['emp_id']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // password change into sha1
    $hashed_password = sha1($password);

    $query = "INSERT INTO users(emp_id, user_name, user_password, is_active, user_created_date, created_by) 
                VALUES('$emp_id', '$username', '$hashed_password', '1', NOW(), '$created_by')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        header("Location: ../users");
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }
}
