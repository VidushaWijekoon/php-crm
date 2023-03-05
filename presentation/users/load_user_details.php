<?php

require_once("../../functions/db_connection.php");

// Get the user id
$emp_id = $_GET['emp_id'];

if ($emp_id !== "") {

    $query = "SELECT first_name, last_name, users.emp_id, employees.emp_id, employees.department_id, employees.role_id, departments.department_id,
                    departments.department_name, user_roles.role_id, user_roles.role_name 
            FROM employees LEFT JOIN users ON users.emp_id = employees.emp_id
            LEFT JOIN departments ON employees.department_id = departments.department_id
            LEFT JOIN user_roles ON employees.role_id = user_roles.role_id 
            WHERE users.user_id IS NULL AND employees.emp_id = $emp_id";
    $run = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($run);

    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $department = $row["department_name"];
    $role = $row["role_name"];
}

// Store it in a array
$result = array("$first_name", "$last_name", "$department", "$role");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
