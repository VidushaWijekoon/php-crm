<?php
session_start();
require_once("../../../functions/db_connection.php");

$created_by = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cutomer_type = mysqli_real_escape_string($connection, $_POST['cutomer_type']);
    $salutation = mysqli_real_escape_string($connection, $_POST['salutation']);
    $customer_fname = mysqli_real_escape_string($connection, $_POST['customer_fname']);
    $customer_lname = mysqli_real_escape_string($connection, $_POST['customer_lname']);
    $company_name = mysqli_real_escape_string($connection, $_POST['company_name']);
    $display_name = mysqli_real_escape_string($connection, $_POST['display_name']);
    $customer_email = mysqli_real_escape_string($connection, $_POST['customer_email']);
    $resident_country = mysqli_real_escape_string($connection, $_POST['resident_country']);
    $country_code = mysqli_real_escape_string($connection, $_POST['country_code']);
    $country_number = mysqli_real_escape_string($connection, $_POST['country_number']);
    $whatsapp_code = mysqli_real_escape_string($connection, $_POST['whatsapp_code']);
    $whatsapp_number = mysqli_real_escape_string($connection, $_POST['whatsapp_number']);
    $currency = mysqli_real_escape_string($connection, $_POST['currency']);
    $language = mysqli_real_escape_string($connection, $_POST['language']);
    $payment_terms = mysqli_real_escape_string($connection, $_POST['payment_terms']);
    $facebook = mysqli_real_escape_string($connection, $_POST['facebook']);
    $instagram = mysqli_real_escape_string($connection, $_POST['instagram']);
    $billing_attention = mysqli_real_escape_string($connection, $_POST['billing_attention']);
    $billing_country = mysqli_real_escape_string($connection, $_POST['billing_country']);
    $billing_address1 = mysqli_real_escape_string($connection, $_POST['billing_address1']);
    $billing_address2 = mysqli_real_escape_string($connection, $_POST['billing_address2']);
    $billing_city = mysqli_real_escape_string($connection, $_POST['billing_city']);
    $billing_state = mysqli_real_escape_string($connection, $_POST['billing_state']);
    $billing_zip_code = mysqli_real_escape_string($connection, $_POST['billing_zip_code']);
    $billing_phone = mysqli_real_escape_string($connection, $_POST['billing_phone']);
    $billing_fax = mysqli_real_escape_string($connection, $_POST['billing_fax']);
    $shipping_attention = mysqli_real_escape_string($connection, $_POST['shipping_attention']);
    $shipping_country = mysqli_real_escape_string($connection, $_POST['shipping_country']);
    $shipping_address1 = mysqli_real_escape_string($connection, $_POST['shipping_address1']);
    $shipping_address2 = mysqli_real_escape_string($connection, $_POST['shipping_address2']);
    $shipping_city = mysqli_real_escape_string($connection, $_POST['shipping_city']);
    $shipping_state = mysqli_real_escape_string($connection, $_POST['shipping_state']);
    $shipping_zip_code = mysqli_real_escape_string($connection, $_POST['shipping_zip_code']);
    $shipping_phone = mysqli_real_escape_string($connection, $_POST['shipping_phone']);
    $shipping_fax = mysqli_real_escape_string($connection, $_POST['shipping_fax']);
    $contact_salutation = mysqli_real_escape_string($connection, $_POST['contact_salutation']);
    $contact_fist_name = mysqli_real_escape_string($connection, $_POST['contact_fist_name']);
    $contact_last_name = mysqli_real_escape_string($connection, $_POST['contact_last_name']);
    $contact_email = mysqli_real_escape_string($connection, $_POST['contact_email']);
    $contact_work_phone_number = mysqli_real_escape_string($connection, $_POST['contact_work_phone_number']);
    $contact_mobile_number = mysqli_real_escape_string($connection, $_POST['contact_mobile_number']);
    $remarks = mysqli_real_escape_string($connection, $_POST['remarks']);
}
