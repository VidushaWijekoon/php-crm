<?php
$connection = mysqli_connect("localhost", "root", "", "wms");

if (isset($_GET['emp_id'])) {

    $emp_id     = mysqli_real_escape_string($connection, $_GET['emp_id']);
    $query      = "SELECT first_name, last_name, department_id, role_id FROM employees WHERE emp_id = '{$emp_id}'";
    $result_set = mysqli_query($connection, $query);

    $datils = "<option selected>--Select User ID--</option>";
    while ($result = mysqli_fetch_assoc($result_set)) {
        $datils .= "<option value=\"{$result['first_name']}\" class='info_select'>{$result['first_name']}</option>";
    }
    echo $datils;
}
