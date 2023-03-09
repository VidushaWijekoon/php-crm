<?php
session_start();
require_once("../../../functions/db_connection.php");

$created_by = $_SESSION['user_id'];
if (isset($_POST['create_order'])) {

    $get_platform = mysqli_real_escape_string($connection, $_POST['platform']);
    $get_orderType = mysqli_real_escape_string($connection, $_POST['orderType']);
    $orderNumber = mysqli_real_escape_string($connection, $_POST['orderNumber']);
    $get_asin = mysqli_real_escape_string($connection, $_POST['asin']);
    $get_device = mysqli_real_escape_string($connection, $_POST['device']);
    // $get_device = mysqli_real_escape_string($connection, $_POST['brand']);
    $get_brand = mysqli_real_escape_string($connection, $_POST['brand']);
    $get_model = mysqli_real_escape_string($connection, $_POST['model']);
    $get_processor = mysqli_real_escape_string($connection, $_POST['processor']);
    $get_core = mysqli_real_escape_string($connection, $_POST['core']);
    $get_gen = mysqli_real_escape_string($connection, $_POST['gen']);
    $get_speed = mysqli_real_escape_string($connection, $_POST['speed']);
    $get_touch = mysqli_real_escape_string($connection, $_POST['touch']);
    $get_screen_size = mysqli_real_escape_string($connection, $_POST['screen_size']);
    $get_resolution = mysqli_real_escape_string($connection, $_POST['resolution']);
    $get_hdd_type = mysqli_real_escape_string($connection, $_POST['hdd_type']);
    $get_hdd_capacity = mysqli_real_escape_string($connection, $_POST['hdd_capacity']);
    $get_ram = mysqli_real_escape_string($connection, $_POST['ram']);
    $get_os = mysqli_real_escape_string($connection, $_POST['os']);
    $inv_location = mysqli_real_escape_string($connection, $_POST['inv_location']);
    $keybord_language = mysqli_real_escape_string($connection, $_POST['keybord_language']);
    $keybord_backlight = mysqli_real_escape_string($connection, $_POST['keybord_backlight']);
    $graphic_type = mysqli_real_escape_string($connection, $_POST['graphic_type']);
    $graphic_capacity = mysqli_real_escape_string($connection, $_POST['graphic_capacity']);
    $charger = mysqli_real_escape_string($connection, $_POST['charger']);
    $watt = mysqli_real_escape_string($connection, $_POST['watt']);
    $pin_colour = mysqli_real_escape_string($connection, $_POST['pin_colour']);
    $condition = mysqli_real_escape_string($connection, $_POST['condition']);
    $packing_type = mysqli_real_escape_string($connection, $_POST['packing_type']);
    $shipping_method = mysqli_real_escape_string($connection, $_POST['shipping_method']);
    $item_qty = mysqli_real_escape_string($connection, $_POST['item_qty']);
    $unit_price = mysqli_real_escape_string($connection, $_POST['unit_price']);
    $discount = mysqli_real_escape_string($connection, $_POST['discount']);
    $total = mysqli_real_escape_string($connection, $_POST['total']);


    $query = "INSERT INTO `e_com_orders`(
     
    `platform`,
    `order_type`, 
    `order_number`, 
    `asin_sku_number`,
    `device`, 
    `brand`, 
    `model`,
    `processor`,
    `core`,
    `gen`,
    `speed`,
    `touch`, 
    `screen_size`,
    `resolution`,
    `hdd_type`,
    `hdd_capacity`, 
    `ram`,
    `os`,
    `inv_location`,
    `keybord_language`,
    `keybord_backlight`,
    `graphic_brand`,
    `graphic_capacity`,
    `charger_type`,
    `charger_watt`,
    `charger_pin`,
    `order_condition`,
    `packing_type`,
    `shipping_method`,
    `qty`,
    `unit_price`,
    `discount`,
    `total`,
    `created_by`
     ) 
     VALUES (
    '$get_platform',
    '$get_orderType',
    '$orderNumber',
    '$get_asin',
    '$get_device',
    '$get_brand',
    '$get_model',
    '$get_processor',
    '$get_core',
    '$get_gen',
    '$get_speed',
    '$get_touch',
    '$get_screen_size',
    '$get_resolution',
    '$get_hdd_type',
    '$get_hdd_capacity',
    '$get_ram',
    '$get_os',
    '$inv_location',
    '$keybord_language',
    '$keybord_backlight',
    '$graphic_type',
    '$graphic_capacity',
    '$charger',
    '$watt',
    '$pin_colour',
    '$condition',
    '$packing_type',
    '$shipping_method',
    '$item_qty',
    '$unit_price',
    '$discount',
    '$total',
    '$created_by')";

    $result = mysqli_query($connection, $query);

    echo $query;

    

    if ($result) {
        echo "
        <script>
               alert('Successfully Created Ecom Order');
                window.location.href='../e_com_view_all_orders';
        </script>
        ";
       
    } else {
        echo "
        <script>
               alert('Fail create order');
        </script>
        ";
    }
    //  header("Location: .?order_number=$order_number'");
}

?>