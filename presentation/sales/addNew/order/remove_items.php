<?php
require_once('../../../../functions/db_connection.php');

if (isset($_GET['remove_order_single_item'])) {
    // getting the user information
    $sales_order_item_id = mysqli_real_escape_string($connection, $_GET['remove_order_single_item']);
    $customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);
    // should not delete current user
    $query1 = "DELETE FROM sales_order_items WHERE sales_order_item_id = '$sales_order_item_id'";
    $result = mysqli_query($connection, $query1);

    if ($result) {
        header("Location: ../../create_order?customer_id=$customer_id");
    } else {
        header('Location: users?err=delete_failed');
    }
}
