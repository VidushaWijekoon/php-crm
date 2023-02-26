<?php

require_once("../../functions/db_connection.php");

// Get the user id
$emp_id = $_REQUEST['emp_id'];

// Database connection

if ($emp_id !== "") {

    // Get corresponding first name and
    // last name for that user id	
    // $query = mysqli_query($con, "SELECT first_name,	last_name FROM userdata WHERE user_id='$user_id'");
    $query = "SELECT * FROM employees WHERE emp_id = '$emp_id'";
    $run = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($run);

    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $department = $row["department_id"];
    $role = $row["role_id"];
}

// Store it in a array
$result = array("$first_name", "$last_name", "$department", "$role");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
