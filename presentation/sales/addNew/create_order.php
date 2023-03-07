<?php
session_start();
require_once("../../../functions/db_connection.php");

$created_by = $_SESSION['user_id'];

if (isset($_POST['create_order'])) {

    $customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);
    $reference = mysqli_real_escape_string($connection, $_POST['reference']);
    $shipping_date = mysqli_real_escape_string($connection, $_POST['shipping_date']);
    $expected_payment_date = mysqli_real_escape_string($connection, $_POST['expected_payment_date']);
    $payment_term = mysqli_real_escape_string($connection, $_POST['payment_term']);
    $device = mysqli_real_escape_string($connection, $_POST['device']);
    $brand = mysqli_real_escape_string($connection, $_POST['brand']);
    $model = mysqli_real_escape_string($connection, $_POST['model']);
    $processor = mysqli_real_escape_string($connection, $_POST['processor']);
    $core = mysqli_real_escape_string($connection, $_POST['core']);
    $generation = mysqli_real_escape_string($connection, $_POST['generation']);
    $speed = mysqli_real_escape_string($connection, $_POST['speed']);
    $touch_type = mysqli_real_escape_string($connection, $_POST['touch_type']);
    $screen_size = mysqli_real_escape_string($connection, $_POST['screen_size']);
    $resolution = mysqli_real_escape_string($connection, $_POST['resolution']);
    $hdd_capacity = mysqli_real_escape_string($connection, $_POST['hdd_capacity']);
    $hdd_type = mysqli_real_escape_string($connection, $_POST['hdd_type']);
    $ram = mysqli_real_escape_string($connection, $_POST['ram']);
    $os = mysqli_real_escape_string($connection, $_POST['os']);
    $inventory_location = mysqli_real_escape_string($connection, $_POST['inventory_location']);
    $keybord_language = mysqli_real_escape_string($connection, $_POST['keybord_language']);
    $keybord_backlight = mysqli_real_escape_string($connection, $_POST['keybord_backlight']);
    $graphic_type = mysqli_real_escape_string($connection, $_POST['graphic_type']);
    $graphic_capacity = mysqli_real_escape_string($connection, $_POST['graphic_capacity']);
    $charger = mysqli_real_escape_string($connection, $_POST['charger']);
    $charger_watt = mysqli_real_escape_string($connection, $_POST['charger_watt']);
    $charger_color = mysqli_real_escape_string($connection, $_POST['charger_color']);
    $condition = mysqli_real_escape_string($connection, $_POST['condition']);
    $packing_type = mysqli_real_escape_string($connection, $_POST['packing_type']);
    $shipping_method = mysqli_real_escape_string($connection, $_POST['shipping_method']);
    $order_qty = mysqli_real_escape_string($connection, $_POST['order_qty']);
    $unit_price = mysqli_real_escape_string($connection, $_POST['unit_price']);
    $discount = mysqli_real_escape_string($connection, $_POST['discount']);
    $total_price = mysqli_real_escape_string($connection, $_POST['total_price']);

    $query = "INSERT INTO `sales_order_items`(
    `customer_id`,
    `reference`,
    `shipping_date`,
    `expected_payment_date`,
    `payment_term`,
    `order_device`,
    `order_brand`,
    `order_model`,
    `order_processor`,
    `order_core`,
    `order_generation`,
    `order_speed`,
    `order_touch_status`,
    `order_screen_size`,
    `order_resolution`,
    `order_hdd_capacity`,
    `order_hdd_type`,
    `order_ram`,
    `order_os`,
    `order_inventory_location`,
    `order_keyboard_language`,
    `order_keyboard_backlight`,
    `order_graphic_type`,
    `order_graphic_capacity`,
    `order_charger_type`,
    `order_charger_watt`,
    `charging_pin_color`,
    `order_condition`,
    `order_packing_type`,
    `order_shipping_method`,
    `order_qty`,
    `order_unit_price`,
    `order_discount`,
    `order_total_price`,
    `order_created_by`,
    `order_created_time`
    )
    VALUES(
        '$customer_id',
        '$reference',
        '$shipping_date',
        '$expected_payment_date',
        '$payment_term',
        '$device',
        '$brand',
        '$model',
        '$processor',
        '$core',
        '$generation',
        '$speed',
        '$touch_type',
        '$screen_size',
        '$resolution',
        '$hdd_capacity',
        '$hdd_type',
        '$ram',
        '$os',
        '$inventory_location',
        '$keybord_language',
        '$keybord_backlight',
        '$graphic_type',
        '$graphic_capacity',
        '$charger',
        '$charger_watt',
        '$charger_color',
        '$condition',
        '$packing_type',
        '$shipping_method',
        '$order_qty',
        '$unit_price',
        '$discount',
        '$total_price',
        '$created_by',
        NOW()
    )
    ";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        header("Location: ../create_order?customer_id=$customer_id");
    } else {
        echo "Sorry Cannot Insert this item";
    }
}
