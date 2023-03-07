<?php
require_once('../../../functions/db_connection.php');

if (isset($_GET['sales_order_id'])) {
    // getting the user information
    $sales_order_id = mysqli_real_escape_string($connection, $_GET['sales_order_id']);
    // should not delete current user
    $query = "UPDATE sales_order_items SET approve = 1 WHERE sales_order_id = '$sales_order_id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: ../manager_sales');
    } else {
        header('Location: users?err=delete_failed');
    }
}
