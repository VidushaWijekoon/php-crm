<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$created_by = $_SESSION['user_id'];

if (isset($_POST['create_order'])) {

    $get_customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);
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
        '$get_customer_id',
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
    echo $query;
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "<script>
            alert('Successfully Created Customer');
            window.location.href=' ./create_order?customer_id=$get_customer_id';
        </script>";
    } else {
        echo "Sorry Cannot Insert this item";
    }
}

if (isset($_POST['choose_customer'])) {
    $customer_id = mysqli_real_escape_string($connection, $_POST['customer_id']);
    header("Location: create_order?customer_id=$customer_id");
}


if (isset($_POST['update_and_save'])) {
    $customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);
    $qyer = "SELECT sales_order_id FROM sales_order_items ORDER BY sales_order_id DESC";
    $run = mysqli_query($connection, $qyer);
    $insert_order_id = 0;
    foreach ($run as $x) {
        if ($x['sales_order_id'] != 0) {
            $insert_order_id = $x['sales_order_id'];
            break;
        }
    }
    $insert_order_id++;
    $update_q_id = "UPDATE sales_order_items SET sales_order_id = '$insert_order_id' WHERE customer_id = '$customer_id' AND sales_order_id = 'sales_order_id'";
    $update_q = mysqli_query($connection, $update_q_id);
    if ($update_q) {
        header("Location: ./all_orders.php");
    } else {
        echo "failed to create order please contact IT department";
    }
}

if (isset($_POST['remove_created_items'])) {
    // getting the user information
    $sales_order_item_id = mysqli_real_escape_string($connection, $_GET['sales_order_item_id']);
    // should not delete current user
    $dele_q = "DELETE FROM sales_order_items WHERE sales_order_id = 0";
    $d_result = mysqli_query($connection, $dele_q);

    if ($d_result) {
        echo "<script>
            alert('Are u sure want to go back');
            window.location.href='./create_order';
        </script>";
    } else {
        header('Location: users?err=delete_failed');
    }
}

$reference1 = null;
$shipping_date1 = null;
$expected_payment_date1 = null;
$payment_term1 = null;
$get_customer_id = null;

$get_customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);
$s_d = "SELECT reference, shipping_date, expected_payment_date, payment_term FROM sales_order_items WHERE customer_id = '$get_customer_id' AND approve = '0' AND sales_order_id  = '0' ORDER BY sales_order_item_id DESC ";
$sx = mysqli_query($connection, $s_d);
while ($i = mysqli_fetch_assoc($sx)) {
    $reference1 = $i['reference'];
    $shipping_date1 = $i['shipping_date'];
    $expected_payment_date1 = $i['expected_payment_date'];
    $payment_term1 = $i['payment_term'];
}
?>

<style>
.select2-selection__rendered {
    line-height: 17px !important;
    padding-left: 0px !important;
}

.select2 {
    /* width: 100%; */
    font-size: 10px;
}

.select2 option {
    /* width: 100%; */
    font-size: 10px;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.ecomOrderFormSec {
    display: flex;
    align-items: center;
    justify-content: center;

}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.createListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.formSec {
    padding: 0px 20px;
}

.platformes {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.DropDown {
    height: 30px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    font-size: 10px;
    /* padding: 0px 10px; */
}

.lableSec {
    font-weight: 500;
    font-size: 12px;
}

input[type="text"] {
    height: 30px;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    width: 100%;
    font-size: 10px;
}

input[type="date"] {
    height: 30px;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    width: 100%;
    font-size: 10px;
}

.required:after {
    content: " *";
    color: red;
}

.addressSec p {
    font-size: 10px;
    margin-bottom: 0px;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./sales_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashbord</a>
</div>

<div class="row p-2">
    <i class="pageNameIcon fa-solid fa-shopping-cart mx-2"></i>
    <h6 class="pageName">Create New Order</h6>
</div>

<div class=" row" style="background-color: #fff;">
    <div class="col-sm-10">
        <form action="" method="POST">
            <div class="row mt-3">
                <div class="col-sm-3">
                    <p class="px-4 mt-1">Customer Name</p>
                </div>
                <div class="col-sm-9">
                    <div class="d-flex">
                        <?php
                        $get_cs_id = 0;
                        $get_cs_id = mysqli_real_escape_string($connection, $_GET['customer_id']);

                        $cus1 = "SELECT customer_id, customer_fname, customer_lname FROM sales_customer_infomations WHERE created_by = '$created_by' AND customer_id = '$get_cs_id'";
                        $cs_r = mysqli_query($connection, $cus1);
                        while ($dx = mysqli_fetch_assoc($cs_r)) {
                            $fname = $dx['customer_fname'];
                            $lname = $dx['customer_lname'];
                        }
                        ?>
                        <select class="select2 w-25 mt-1" name="customer_id" id="">
                            <?php

                            if ($get_cs_id != 0) { ?>
                            <option value="<?php echo $get_cs_id ?>" selected>
                                <?php echo strtoupper($fname  . " " .  $lname) ?></option>
                            <?php } else { ?>
                            <option selected>--Select Resident Country--</option>
                            <?php }
                            $q1 = "SELECT customer_id, customer_fname, customer_lname FROM sales_customer_infomations WHERE created_by = '$created_by'";
                            $r2 = mysqli_query($connection, $q1);

                            while ($x = mysqli_fetch_assoc($r2)) { ?>
                            <option value="<?php echo $x["customer_id"]; ?>">
                                <?php echo strtoupper($x["customer_fname"] . " " . $x['customer_lname']); ?>
                            </option>
                            <?php } ?>
                        </select>
                        <button class="btn btn-xs btn-primary mx-2" name="choose_customer" type="submit">Choose
                            Customer</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>

        <!-- ///////// -->
        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1 required">Order Number</p>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            $sales_order_id = null;

                            $sn = "SELECT sales_order_id FROM sales_order_items GROUP BY sales_order_id DESC LIMIT 1";
                            $sd = mysqli_query($connection, $sn);
                            while ($m = mysqli_fetch_assoc($sd)) {
                                $sales_order_id = $m['sales_order_id'];
                            }
                            ?>
                            <input type="text" disabled value="SO-<?php $sales_order_id++;
                                                                    echo $sales_order_id ?>" style="width:100%;"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>

            <!-- // -->
            <!-- ///////// -->
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1">Reference</p>
                        </div>
                        <div class="col-sm-6">
                            <?php if ($reference1 == null) { ?>
                            <input type="text" value="" style="width:100%;" name="reference" placeholder="Reference">
                            <?php } else { ?>
                            <input type="text" value="<?php echo $reference1 ?>" style="width:100%;" name="reference">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>

            <!-- // -->
            <!-- ///////// -->
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1 required">Shipping Date</p>
                        </div>
                        <div class="col-sm-6">
                            <?php if ($shipping_date1 == null) { ?>
                            <input type="date" value="" style="width:100%;" name="shipping_date">
                            <?php } else { ?>
                            <input type="text" value="<?php echo $shipping_date1 ?>" style="width:100%;"
                                name="reference">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>

            <!-- // -->
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1">Expected Payment Date</p>
                        </div>
                        <div class="col-sm-6">
                            <?php if ($expected_payment_date1 == null) { ?>
                            <input type="date" value="" style="width:100%;" name="expected_payment_date">
                            <?php } else { ?>
                            <input type="text" value="<?php echo $expected_payment_date1 ?>" style="width:100%;"
                                name="reference">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class=" px-4 mt-1">Payment Terms</p>
                        </div>
                        <div class="col-sm-6">
                            <?php if ($expected_payment_date1 == null) { ?>
                            <select name="payment_term" class="DropDown" style="width: 100%;">
                                <option value="" selected="">--Select Payment Terms--</option>
                                <option value="1">Net 15</option>
                                <option value="2">Net 30</option>
                                <option value="3">Net 45</option>
                                <option value="4">Net 60</option>
                                <option value="5">Due end of the
                                    month</option>
                                <option value="6">Due end
                                    of the next month</option>
                                <option value="7">Due on Receipt
                                </option>
                            </select>
                            <?php } else { ?>
                            <input type="text" value="<?php
                                                            if ($payment_term1 == 1) {
                                                                echo 'Net 15';
                                                            }
                                                            if ($payment_term1 == 2) {
                                                                echo 'Net 30';
                                                            }
                                                            if ($payment_term1 == 3) {
                                                                echo 'Net 45';
                                                            }
                                                            if ($payment_term1 == 4) {
                                                                echo 'Net 60';
                                                            }
                                                            if ($payment_term1 == 5) {
                                                                echo 'Due end of the month';
                                                            }
                                                            if ($payment_term1 == 6) {
                                                                echo 'Due end of the next month';
                                                            }
                                                            if ($payment_term1 == 7) {
                                                                echo 'Due on Receipt';
                                                            } ?>" style="width:100%;" name="reference">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </div>
</div>

<!-- ============================================================== -->
<!-- Order Details Address  -->
<!-- ============================================================== -->
<div class="" style="background-color: #fff;">
    <div class="row px-5">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Device</p>
                </div>
                <div class="inputSec col-9">
                    <select name="device" id="device" class="DropDown select2" style="border-radius: 5px; width: 100%">
                        <option selected value="">--Select Device--</option>
                        <?php
                        $query = "SELECT device FROM main_inventory_informations GROUP BY device ASC";
                        $result = mysqli_query($connection, $query);

                        while ($xd = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                        ?>
                        <option value="<?php echo $xd["device"]; ?>">
                            <?php echo strtoupper($xd["device"]); ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Brand</p>
                </div>
                <div class="inputSec col-9">
                    <select name="brand" id="brand" class="DropDown select2" style="border-radius: 5px; width: 100%;">
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Model</p>
                </div>
                <div class="inputSec col-9">
                    <select name="model" id="model" class="DropDown select2" style="border-radius: 5px; width: 100%;">
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Processor</p>
                </div>
                <div class="inputSec col-9">
                    <select name="processor" id="processor" class="DropDown select2"
                        style="border-radius: 5px; width: 100%;"> </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Core</p>
                </div>
                <div class="inputSec col-9">
                    <select name="core" id="core" class="DropDown select2" style="border-radius: 5px; width: 100%;">
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Generation</p>
                </div>
                <div class="inputSec col-9">
                    <select name="generation" id="generation" class="DropDown select2"
                        style="border-radius: 5px; width: 100%;"> </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Speed</p>
                </div>
                <div class="inputSec col-9">
                    <select name="speed" id="speed" class="DropDown select2" style="border-radius: 5px; width: 100%;">
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Touch</p>
                </div>
                <div class="inputSec col-9">
                    <select name="touch_type" id="screen_size" class="DropDown" required>
                        <option value="">--Select Touch Type--</option>
                        <option value="1">yes</option>
                        <option value="0">no</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Screen Size</p>
                </div>
                <div class="inputSec col-9">
                    <select name="screen_size" id="screen_size" class="DropDown" required>
                        <option value="">--Select Screen Size--</option>
                        <option value="11.6">11.6</option>
                        <option value="12">12</option>
                        <option value="13.3">13.3</option>
                        <option value="14">14</option>
                        <option value="15.6">15.6</option>
                        <option value="17.3">17.3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Resolution</p>
                </div>
                <div class="inputSec col-9">
                    <select name="resolution" id="resolution" class="DropDown" required>
                        <option value="">Select Display Resolution</option>
                        <option value="1920 x 1080">1920 x 1080</option>
                        <option value="1368 x 768">1368 x 768</option>

                        <!-- <option value=""></option> -->
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">

        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">HDD Capacity</p>
                </div>
                <div class="inputSec col-9">
                    <input type="text" value="256 GB" required name="hdd_capacity">
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">HDD Type </p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="hdd_type" id="hdd_type" onchange="" required>
                        <option value="" selected>Select Storage Type</option>
                        <option value="1">SSD</option>
                        <option value="2">SATA</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row px-5 mt-2">
    <div class="col-sm-12 col-lg-5">
        <div class="row">
            <div class="lableSec pt-2 col-3">
                <p class="required">Ram</p>
            </div>
            <div class="inputSec col-9">
                <select class="DropDown" name="ram" id="ram" required>
                    <option selected="">--Select Ram--</option>
                    <option value="2">2GB</option>
                    <option value="4">4GB</option>
                    <option value="8">8GB</option>
                    <option value="16">16GB</option>
                    <option value="32">32GB</option>
                    <option value="64">64GB</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-2">

    </div>
    <div class="col-sm-12 col-lg-5">
        <div class="row">
            <div class="lableSec pt-2 col-3">
                <p class="required">OS</p>
            </div>
            <div class="inputSec col-9">
                <select class="DropDown" name="os" id="os" required>
                    <!-- <option value="">Select Operating System</option> -->
                    <option selected value="0">Original Windows 10 Pro</option>
                    <option value="1">Chrome OS</option>
                    <option value="2">Linux</option>
                    <option value="3">Mac OS</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row px-5 mt-2">
    <div class="col-sm-12 col-lg-5">
        <div class="row">
            <div class="lableSec pt-2 col-3">
                <p class="required">Inventory Location</p>
            </div>
            <div class="inputSec col-9">
                <select class="DropDown " name="inventory_location" required>
                    <option selected="">--Select Inventory--</option>
                    <option value="1">E-Commerce Inventory</option>
                    <option value="2">Big Inventory</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-2">

    </div>
    <div class="col-sm-12 col-lg-5">
        <div class="row">
            <div class="lableSec pt-2 col-3">

            </div>
            <div class="inputSec col-9">

            </div>
        </div>
    </div>
</div>

<!-- ////////////////////////filling section//////////////////////////// -->
<div class="pt-3 pb-3" style="background-color:#3494b333;">
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Keyboard Language </p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="keybord_language" id="keybord_language" onchange="" required>
                        <option>Select Language </option>
                        <option value="1" selected>US</option>
                        <option value="2">UK</option>
                        <option value="3">FRENCH</option>
                        <option value="4">ARABIC</option>
                        <option value="5">DANISH</option>
                        <option value="6">DUTCH</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Keyboard Backlight</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="keybord_backlight" id="keybord_backlight" onchange="" required>
                        <option value="1">Yes</option>
                        <option value="0" selected>No</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Graphic Brand</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="graphic_type" required>
                        <option selected>--Select Graphic Type--</option>
                        <option value="1">Intel</option>
                        <option value="2">Amd</option>
                        <option value="3">nVidia</option>
                        <option value="4">Mix</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Graphic Capacity</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="graphic_capacity" required>
                        <option selected>--Select Graphic Capacity--</option>
                        <option value="1">1GB</option>
                        <option value="2">2GB</option>
                        <option value="4">4GB</option>
                        <option value="6">6GB</option>
                        <option value="8">8GB</option>
                        <option value="10">Mix</option>
                        <option value="0">N/A</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Charger Type</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="charger" required>
                        <option selected="">--Select Charger Type--</option>
                        <option value="1">US Standard</option>
                        <option value="2">UK Standard</option>
                        <option value="3">EU Standard</option>
                        <option value="4">No Charger</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Charger Watt</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="charger_watt" required>
                        <option selected="">--Select Charger Watt--</option>
                        <option value="45">45w</option>
                        <option value="65">65w</option>
                        <option value="90">90w</option>
                        <option value="130">130w</option>
                        <option value="180">180w</option>
                        <option value="240">240w</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Charger Pin Colour</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="charger_color" required>
                        <option selected>--Select Pin Colour--</option>
                        <option value="1">blue</option>
                        <option value="2">Yellow</option>
                        <option value="3">white</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Condition</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="condition" required>
                        <option selected="">--Select Condition--</option>
                        <option value="1" title="A B C D Painting, LCD No Scratch, Battery Health 80%">
                            Fully Refurbished-A B C D Painting, LCD No Scratch, Battery Health
                            80%</option>
                        <option value="2" title="A B C D Small Scratch, No Dent, LCD Small Scratch, Battery Health 60%">
                            A Grade-A B C D Small Scratch, No Dent, LCD Small Scratch, Battery
                            Health 60%</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Packing Type</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" required name="packing_type">
                        <option selected="">--Select Packing Type--</option>
                        <option value="1">Single Box</option>
                        <option value="2">Bulk Packing</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">Shipping Method</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="shipping_method" id="shipping_method" required>
                        <option selected>--Select Shipping Method--</option>
                        <option value="1">Local Pickup</option>
                        <option value="2">DHL</option>
                        <option value="3">Fedex</option>
                        <option value="4">UPS</option>
                        <option value="5">Other</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required" required>QTY</p>
                </div>
                <div class="inputSec col-9">
                    <input type="number" class="w-100" min="1" id="orderQty" name="order_qty" onchange="getTot()"
                        placeholder="Enter Listing Qty">
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required" required> Unit Price</p>
                </div>
                <div class="inputSec col-9">
                    <input type="number" class="w-100" min="1" id="unitPrice" name="unit_price" onchange="getTot()"
                        placeholder="Enter Unit Price">
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required" required>Discount</p>
                </div>
                <div class="inputSec col-9">
                    <input type="number" class="w-100" min="0" id="discount" name="discount" onchange="getTot()"
                        placeholder="Enter Discount %">
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p>Total</p>
                </div>
                <div class="inputSec col-9">
                    <input type="number" class="w-100" min="1" id="tot" readonly name="total_price"
                        placeholder="Total Price">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-end">
    <button type="submit" name="create_order" class="btnT mx-2 mt-3 mb-3 col-md-2">
        <i class="fa-solid fa-plus mx-1"></i>Add Items
    </button>

</div>
</form>



<!-- ============================================================== -->
<!-- Add Item Details  -->
<!-- ============================================================== -->
<div class="row" style="background-color: #fff;">
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Item Details</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Amount</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $customer_id = 0;

                $customer_id = mysqli_real_escape_string($connection, $_GET['customer_id']);

                $query = "SELECT * FROM sales_order_items WHERE customer_id = '$customer_id' AND approve = '0' AND sales_order_id  = '0' ORDER BY sales_order_item_id DESC";
                $run = mysqli_query($connection, $query);
                while ($xd = mysqli_fetch_assoc($run)) {

                    $order_device = $xd['order_device'];
                    $order_brand = $xd['order_brand'];
                    $order_model = $xd['order_model'];
                    $order_processor = $xd['order_processor'];
                    $order_core = $xd['order_core'];
                    $order_generation = $xd['order_generation'];
                    $order_speed = $xd['order_speed'];
                    $order_touch_status = $xd['order_touch_status'];
                    $order_screen_size = $xd['order_screen_size'];
                    $order_resolution = $xd['order_resolution'];
                    $order_hdd_capacity = $xd['order_hdd_capacity'];
                    $order_hdd_type = $xd['order_hdd_type'];
                    $order_ram = $xd['order_ram'];
                    $order_os = $xd['order_os'];
                    $order_inventory_location = $xd['order_inventory_location'];
                    $order_keyboard_language = $xd['order_keyboard_language'];
                    $order_keyboard_backlight = $xd['order_keyboard_backlight'];
                    $order_graphic_type = $xd['order_graphic_type'];
                    $order_graphic_capacity = $xd['order_graphic_capacity'];
                    $order_charger_type = $xd['order_charger_type'];
                    $order_charger_watt = $xd['order_charger_watt'];
                    $charging_pin_color = $xd['charging_pin_color'];
                    $order_condition = $xd['order_condition'];
                    $order_packing_type = $xd['order_packing_type'];
                    $order_shipping_method = $xd['order_shipping_method'];
                    $order_qty = $xd['order_qty'];
                    $order_unit_price = $xd['order_unit_price'];
                    $order_discount = $xd['order_discount'];
                    $order_total_price = $xd['order_total_price'];

                ?>
                <tr>
                    <td>
                        <p>
                            <b class="text-capitalize">
                                <?php echo $order_device . ", " . $order_brand . ", " . $order_model . ", " . $order_processor . ", " . $order_core . ", " . $order_generation . ", " . $order_speed . ", ";
                                    if ($order_touch_status == 0) {
                                        echo "yes" . ", ";
                                    } else {
                                        echo "no" . ", ";
                                    };
                                    echo $order_screen_size . ", ";
                                    echo $order_resolution . ", ";
                                    echo $order_hdd_capacity . ", ";
                                    if ($order_hdd_type == 0) {
                                        echo "SSD" . ", ";
                                    }
                                    if ($order_hdd_type == 1) {
                                        echo "SATA" . ", ";
                                    };

                                    echo $order_ram . "GB" . ", ";
                                    if ($order_os == 0) {
                                        echo "Windows" . ", ";
                                    }
                                    if ($order_os == 1) {
                                        echo "Chrome OS" . ", ";
                                    }
                                    if ($order_os == 2) {
                                        echo "Linux" . ", ";
                                    }
                                    if ($order_os == 3) {
                                        echo "Mac OS" . ", ";
                                    };
                                    if ($order_keyboard_language == 1) {
                                        echo "US" . ", ";
                                    }
                                    if ($order_keyboard_language == 2) {
                                        echo "UK" . ", ";
                                    }
                                    if ($order_keyboard_language == 3) {
                                        echo "Franch" . ", ";
                                    }
                                    if ($order_keyboard_language == 4) {
                                        echo "Arabic" . ", ";
                                    }
                                    if ($order_keyboard_language == 5) {
                                        echo "Danish" . ", ";
                                    }
                                    if ($order_keyboard_language == 6) {
                                        echo "Dutch" . ", ";
                                    };
                                    if ($order_keyboard_backlight == 0) {
                                        echo "yes" . ", ";
                                    } else {
                                        echo "no" . ", ";
                                    };
                                    if ($order_graphic_type == 1) {
                                        echo "Intel" . ", ";
                                    }
                                    if ($order_graphic_type == 2) {
                                        echo "Amd" . ", ";
                                    }
                                    if ($order_graphic_type == 3) {
                                        echo "Nvidia" . ", ";
                                    }
                                    if ($order_graphic_type == 4) {
                                        echo "Mix" . ", ";
                                    };
                                    echo $order_graphic_capacity . "GB" . ", ";
                                    if ($order_charger_type == 1) {
                                        echo "US Standard" . ", ";
                                    }
                                    if ($order_charger_type == 2) {
                                        echo "UK Standard" . ", ";
                                    }
                                    if ($order_charger_type == 3) {
                                        echo "EU Standard" . ", ";
                                    }
                                    if ($order_charger_type == 4) {
                                        echo "Without Charger" . ", ";
                                    };
                                    if ($order_charger_watt == 1) {
                                        echo "65W" . ", ";
                                    };
                                    if ($charging_pin_color == 1) {
                                        echo "Blue" . ", ";
                                    }
                                    if ($charging_pin_color == 2) {
                                        echo "Yellow" . ", ";
                                    }
                                    if ($charging_pin_color == 3) {
                                        echo "White" . ", ";
                                    };
                                    if ($order_condition == 1) {
                                        echo "Fully Refurbished-A B C D Painting, LCD No Scratch, Battery Health 80%" . ", ";
                                    }
                                    if ($order_condition == 2) {
                                        echo " A Grade-A B C D Small Scratch, No Dent, LCD Small Scratch, Battery Health 60%" . ", ";
                                    };
                                    if ($order_packing_type == 1) {
                                        echo "Single Box" . ", ";
                                    }
                                    if ($order_packing_type == 2) {
                                        echo "Bulk Packing" . ", ";
                                    };
                                    if ($order_shipping_method == 1) {
                                        echo "Local Pickup" . ", ";
                                    }
                                    if ($order_shipping_method == 2) {
                                        echo "DHL" . ", ";
                                    }
                                    if ($order_shipping_method == 3) {
                                        echo "Fedex" . ", ";
                                    }
                                    if ($order_shipping_method == 4) {
                                        echo "UPS" . ", ";
                                    }
                                    if ($order_shipping_method == 5) {
                                        echo "UPS" . ", ";
                                    };
                                    ?>

                            </b>
                        </p>
                    </td>
                    <td class="p-0">
                        <input type="text" disabled value="<?php echo $order_qty ?>">
                    </td>
                    <td class="p-0">
                        <input type="text" disabled value="<?php echo $order_unit_price ?>">
                    </td>
                    <td class="p-0">
                        <input type="text" disabled value="<?php echo $order_discount ?>">
                    </td>
                    <td class="p-0">
                        <input type="text" disabled value="<?php echo $order_total_price ?>">
                    </td>
                    <td>
                        <?php
                            echo
                            "<a class='btn btn-xs mx-1 text-danger' href=\"./addNew/order/remove_items?remove_order_single_item={$xd['sales_order_item_id']}&customer_id={$xd['customer_id']}\"
                                    onclick=\"return confirm('Are you sure you want to remove this item?');\">
                                        <i class='fa-solid fa-circle-minus fa-2x text-danger' style='font-size: 15px;'></i>
                            </a>";

                            ?>

                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<!-- ============================================================== -->
<!-- Billing  -->
<!-- ============================================================== -->
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6 mt-4 mb-3 px-3">
            <!-- <p>Customer Note</p>
            <textarea class="w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Customer Note" name="customer_note"></textarea> -->
        </div>
        <div class="col-sm-6" style="background-color:#3494b333;">
            <div class="d-flex justify-content-between">
                <p class="p-4">Sub Total</p>
                <p class="p-4">0.00</p>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="p-4">Total ($)</h6>

                <p class="p-4">
                    <?php
                    $query1 = "SELECT SUM(order_total_price) AS Total_Price FROM sales_order_items ORDER BY sales_order_item_id DESC";
                    $run_d = mysqli_query($connection, $query1);
                    while ($d = mysqli_fetch_assoc($run_d)) {
                        echo number_format($d['Total_Price'], 2);
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Term and Conditions -->
    <!-- ============================================================== -->

    <!-- <div class="row">
        <div class="col-sm-6 mt-4 mb-3 px-3">
            <p>Term and Conditions</p>
            <textarea class="w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Term and Condition" name="term_condition"></textarea>
        </div>
    </div> -->

    <div class="d-flex justify-content-end">
        <button type="submit" name="update_and_save" class="btnTB mx-2 mt-3 mb-3">
            Save Order
        </button>
        <button type="submit" name="remove_created_items" class="btnTC mx-2 mt-3 mb-3">
            Cancel
        </button>
    </div>
</form>

<!-- ============================================================== -->
<!-- Create Customer Model -->
<!-- ============================================================== -->
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="pageName">Create Customer</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 bg-white">
                        <div class="row pl-4">
                            <!-- <i class="pageNameIcon fa-solid fa-store"></i> -->
                            <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>

                        </div>
                    </div>
                </div>
                <form action="./addNew/create_customer" method="POST">
                    <div class="row mt-4">
                        <div class="col-sm-12 col-lg-12 bg-white">
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p class="required">Customer Type</p>
                                </div>
                                <div class="col-sm-8 d-flex pb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="cutomer_type" value="0"
                                            id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1"
                                            style="margin-left: 6px;">
                                            Business
                                        </label>
                                    </div>
                                    <div class="form-check mx-2  d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="cutomer_type" value="1"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2"
                                            style="margin-left: 6px;">
                                            Individual
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-lg-2">
                                    <p class="required">Primary Contact</p>
                                </div>
                                <div class="col-lg-8 col-sm-12 d-flex">
                                    <div class="">
                                        <select name="salutation" id="salutation" class="DropDown w-100">
                                            <option selected value="mr">Mr</option>
                                            <option value="0">Mrs</option>
                                            <option value="1">Miss</option>
                                            <option value="2">Ms</option>
                                            <option value="3">DR</option>
                                        </select>
                                    </div>
                                    <div class="mx-3"><input class="w-100" type="text" name="customer_fname" id="fName"
                                            placeholder="First Name" required></div>
                                    <div class=""><input class="w-100" type="text" name="customer_lname" id="lName"
                                            placeholder="Last Name" required></div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p>Company Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <div><input class="w-25" type="text" name="company_name" placeholder="Company Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p>Display Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class=""><input class="w-25" type="text" name="display_name"
                                            placeholder="Customer Display Name"></div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p>Customer Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class=""><input class="w-25" type="text" name="customer_email"
                                            placeholder="E-mail"></div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p class="required">Customer Resident</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="">
                                        <select name="resident_country" id="country_name" class="w-25 DropDown"
                                            required>
                                            <option selected>--Select Resident Country--</option>
                                            <?php
                                            $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                            $result = mysqli_query($connection, $query);

                                            while ($x = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?php echo $x["country_name"]; ?>">
                                                <?php echo strtoupper($x["country_name"]); ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p class="required">Customer Phone</p>
                                </div>
                                <div class="col-sm-8 d-flex">
                                    <div class="">
                                        <select name="country_code" id="country_code" required
                                            style="border-radius: 5px;" class="w-100">

                                        </select>
                                    </div>
                                    <div class="mx-2">
                                        <input type="text" name="country_number" placeholder="Customer Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-sm-2">
                                    <p>Whatsapp Number</p>
                                </div>
                                <div class="col-sm-8 d-flex">
                                    <div class="">
                                        <select name="whatsapp_code" class="DropDown">
                                            <option selected>--Country Code--</option>
                                            <?php
                                            $query = "SELECT phone_code FROM countries";
                                            $result = mysqli_query($connection, $query);

                                            while ($x = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?php echo $x["phone_code"]; ?>">
                                                <?php echo "+" . $x["phone_code"]; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mx-2">
                                        <input type="text" placeholder="Whatsapp Number" name="whatsapp_number">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- ============================================================== -->
                            <!-- Customer Other Details  -->
                            <!-- ============================================================== -->
                            <div class="">
                                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                    <li class="nav-item">
                                        <div class="nav-link active tabLable"
                                            id="custom-content-below-other-details-tab" data-toggle="pill"
                                            href="#custom-content-below-other-details" role="tab"
                                            aria-controls="custom-content-below-other-details" aria-selected="true">
                                            Other Details
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-link tabLable" id="custom-content-below-address-tab"
                                            data-toggle="pill" href="#custom-content-below-address" role="tab"
                                            aria-controls="custom-content-below-address" aria-selected="false">Address
                                            </dvi>
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-link tabLable" id="custom-content-below-contact-person-tab"
                                            data-toggle="pill" href="#custom-content-below-contact-person" role="tab"
                                            aria-controls="custom-content-below-contact-person" aria-selected="false">
                                            Contact
                                            Persons
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-link tabLable" id="custom-content-below-remark-tab"
                                            data-toggle="pill" href="#custom-content-below-remark" role="tab"
                                            aria-controls="custom-content-below-remark" aria-selected="false">Remark
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content" id="custom-content-below-tabContent">
                                    <div class="tab-pane fade show active" id="custom-content-below-other-details"
                                        role="tabpanel" aria-labelledby="custom-content-below-other-details-tab">
                                        <div class="m-2">
                                            <div class="row mt-2">
                                                <div class="col-sm-2">
                                                    <p class="required">Currency</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="currency" class="w-25 DropDown" required>
                                                        <option value="" selected="">--Select Currency-- </option>
                                                        <option value="aed">AED د.إ</option>
                                                        <option value="usd">USD $</option>
                                                        <option value="euro">Euro €</option>
                                                        <option value="pound">Pound £</option>
                                                        <option value="yen">Yen ¥</option>
                                                        <option value="franc">Franc ₣</option>
                                                        <option value="ruppe">Ruppe ₹</option>
                                                        <option value="yuan">Yuan ¥</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="required" title=" Speaking language">Language</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="language" class="w-25 DropDown"
                                                        title=" Select Customer Speaking language" required>
                                                        <option value="" selected="">--Select Languages--
                                                        </option>
                                                        <option value="english">English</option>
                                                        <option value="arabic">Arabic</option>
                                                        <option value="chinese">Chinese</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="france">France</option>
                                                        <option value="italian">Italian</option>
                                                        <option value="japanese">Japanese</option>
                                                        <option value="hindi">Hindi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="required">Payment Terms</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="payment_terms" class="w-25 DropDown" required>
                                                        <option value="" selected="">--Select Payment Terms--
                                                        </option>
                                                        <option value="1">Net 15</option>
                                                        <option value="2">Net 30</option>
                                                        <option value="3">Net 45</option>
                                                        <option value="4">Net 60</option>
                                                        <option value="5">Due end of the
                                                            month</option>
                                                        <option value="6">Due end
                                                            of the next month</option>
                                                        <option value="7">Due on Receipt
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p>Facebook</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="" name="facebook" class="w-25">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p>Instagram</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="" name="instagram" class="w-25">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="custom-content-below-address" role="tabpanel"
                                        aria-labelledby="custom-content-below-address-tab">
                                        <div class="row px-4">
                                            <div class="col-sm-6">
                                                <h6 class="text-uppercase mt-4 mb-3">Billing Address</h6>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Attention</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_attention"
                                                                class="w-75 ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Country</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select name="billing_country" class="w-75 DropDown">
                                                            <option selected>--Select Resident Country--</option>
                                                            <?php
                                                            $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                                            $result = mysqli_query($connection, $query);

                                                            while ($x = mysqli_fetch_assoc($result)) { ?>
                                                            <option value="<?php echo $x["country_name"]; ?>">
                                                                <?php echo strtoupper($x["country_name"]); ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Address</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control w-75" rows="3"
                                                            placeholder="Billing Address 1"
                                                            name="billing_address1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control mt-1 w-75" rows="3"
                                                            placeholder="Billing Address 2"
                                                            name="billing_address2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-sm-3">
                                                        <p>City</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_city"
                                                                class="w-75">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>State</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_state"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Zip Code</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_zip_code"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Phone</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_phone"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Fax</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="billing_fax"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="text-uppercase mt-4 mb-3">Shipping Address</h6>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Attention</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_attention"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Country/ Region</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select name="shipping_country" class="w-75 DropDown">
                                                            <option selected>--Select Resident Country--</option>
                                                            <?php
                                                            $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                                            $result = mysqli_query($connection, $query);

                                                            while ($x = mysqli_fetch_assoc($result)) { ?>
                                                            <option value="<?php echo $x["country_name"]; ?>">
                                                                <?php echo strtoupper($x["country_name"]); ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Address</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control w-75" rows="3"
                                                            placeholder="Shipping Address"
                                                            name="shipping_address1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control mt-1 w-75" rows="3"
                                                            placeholder="Shipping Adderess"
                                                            name="shipping_address2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-sm-3">
                                                        <p>City</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_city"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>State</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_state"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Zip Code</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_zip_code"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Phone</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_phone"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p>Fax</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <input type="text" placeholder="" name="shipping_fax"
                                                                class="w-75">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="text-uppercase mt-4">

                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-content-below-contact-person" role="tabpanel"
                                        aria-labelledby="custom-content-below-contact-person-tab">
                                        <div class="col-sm-12 table-responsive w-100">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Salutation</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Email Address</th>
                                                        <th scope="col">Work Phone</th>
                                                        <th scope="col">Mobile</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="p-0">
                                                            <select name="contact_salutation" class="DropDown">
                                                                <option selected>Select</option>
                                                                <option value="1">Mrs</option>
                                                                <option value="2">MS</option>
                                                                <option value="3">Miss</option>
                                                                <option value="4">DR</option>
                                                            </select>
                                                        </td>
                                                        <td class="p-0"><input type="text" name="contact_fist_name"
                                                                class="w-100"></td>
                                                        <td class="p-0"><input type="text" name="contact_last_name"
                                                                class="w-100"></td>
                                                        <td class="p-0"><input type="text" name="contact_email"
                                                                class="w-100"></td>
                                                        <td class="p-0"><input type="text"
                                                                name="contact_work_phone_number" class="w-100"></td>
                                                        <td class="p-0"><input type="text" name="contact_mobile_number"
                                                                class="w-100"></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-content-below-remark" role="tabpanel"
                                        aria-labelledby="custom-content-below-remark-tab">
                                        <div class="form-group">
                                            <textarea class="form-control mt-4" rows="3" placeholder="Remarks"
                                                name="remarks" style="width: 50%;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3 float-right">
                                    <button type="submit" name="create_customer" class="btnTB ">Create Customer</button>
                                    <button type="button" class="btnTC" data-dismiss="modal">Cancel</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="./create_order.js"></script>

<?php require_once('../includes/footer.php'); ?>