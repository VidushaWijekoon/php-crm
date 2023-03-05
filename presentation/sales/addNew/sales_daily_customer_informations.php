<?php

session_start();
require_once('../../../functions/db_connection.php');
$created_by = $_SESSION['user_id'];

if (isset($_POST['submit_customer'])) {
    $customer_name = mysqli_real_escape_string($connection, $_POST['customer_name']);
    $country_name = mysqli_real_escape_string($connection, $_POST['country_name']);
    $phone_code = mysqli_real_escape_string($connection, $_POST['phone_code']);
    $whatsapp_number = mysqli_real_escape_string($connection, $_POST['whatsappnumber']);
    $platform = mysqli_real_escape_string($connection, $_POST['platform']);
    $customer_buying_selling_model = mysqli_real_escape_string($connection, $_POST['customer_buying_selling_model']);
    $uae_pickup1 = mysqli_real_escape_string($connection, $_POST['uae_pickup1']);

    $query = "INSERT INTO sales_daily_customer_informations(customer_name, country_name, customer_phone_code, customer_whatsapp_code, platform, 
                                                            model_selling_buying, uae_pickup, created_by, created_time) 
            VALUES('$customer_name', '$country_name', '$phone_code', '$whatsapp_number', '$platform', '$customer_buying_selling_model',
                    '$uae_pickup1', '$created_by', now())";
    echo $query;
    $run = mysqli_query($connection, $query);
    if ($run) {
        header("Location: ../daily_create_customer");
    }
}
