<?php

if (isset($_POST['update_and_save'])) {
    $customer_note = mysqli_real_escape_string($connection, $_POST['customer_note']);
    $term_condition = mysqli_real_escape_string($connection, $_POST['term_condition']);

    $query = "UPDATE sales_order_items SET visa_type = '$visa_type', department_id = '$department', role_id = '$role' WHERE emp_id = '$emp_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header("Location: ./employees.php");
    } else {
        echo "<script>alert('failed to update this employee')</script>";
    }
}
