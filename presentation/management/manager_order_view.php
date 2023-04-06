<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$billing_attention = null;
$billing_country = null;
$billing_address1 = null;
$billing_address2 = null;
$billing_city = null;
$billing_state = null;
$billing_zip_code = null;
$billing_phone = null;
$billing_fax = null;
$shipping_attention = null;
$shipping_country = null;
$shipping_address1 = null;
$shipping_address2 = null;
$shipping_city = null;
$shipping_state = null;
$shipping_zip_code = null;
$shipping_phone = null;
$shipping_fax = null;
$approve=0;

$order_id = $_GET['order_id'];
$query1 = "SELECT sales_order_id, approve,customer_id, reference, shipping_date, expected_payment_date, payment_term 
            FROM sales_order_items WHERE sales_order_id = '$order_id' GROUP BY sales_order_id DESC";
$run1 = mysqli_query($connection, $query1);
while ($x = mysqli_fetch_assoc($run1)) {
    $sales_order_id = $x['sales_order_id'];
    $reference = $x['reference'];
    $shipping_date = $x['shipping_date'];
    $expected_payment_date = $x['expected_payment_date'];
    $payment_term = $x['payment_term'];
    $customer_id = $x['customer_id'];
    $approve = $x['approve'];
}

$query2 = "SELECT billing_attention, billing_country, billing_address1, billing_address2, billing_city, billing_state, billing_zip_code, billing_phone, billing_fax,
                shipping_attention, shipping_country, shipping_address1, shipping_address2, shipping_city, shipping_state, shipping_zip_code, shipping_phone, shipping_fax,
                customer_id, customer_fname, customer_lname 
            FROM sales_customer_infomations WHERE customer_id = '$customer_id'";
$run2 = mysqli_query($connection, $query2);
while ($y = mysqli_fetch_assoc($run2)) {
    $customer_fname = $y['customer_fname'];
    $customer_lname = $y['customer_lname'];
    $customer_id = $y['customer_id'];
    $billing_attention = $y['billing_attention'];
    $billing_country = $y['billing_country'];
    $billing_address1 = $y['billing_address1'];
    $billing_address2 = $y['billing_address2'];
    $billing_city = $y['billing_city'];
    $billing_state = $y['billing_state'];
    $billing_zip_code = $y['billing_zip_code'];
    $billing_phone = $y['billing_phone'];
    $billing_fax = $y['billing_fax'];
    $shipping_attention = $y['shipping_attention'];
    $shipping_country = $y['shipping_country'];
    $shipping_address1 = $y['shipping_address1'];
    $shipping_address2 = $y['shipping_address2'];
    $shipping_city = $y['shipping_city'];
    $shipping_state = $y['shipping_state'];
    $shipping_zip_code = $y['shipping_zip_code'];
    $shipping_phone = $y['shipping_phone'];
    $shipping_fax = $y['shipping_fax'];
}
?>

<style>
.select2-selection__rendered {
    line-height: 17px !important;
    padding-left: 0px !important;
}

.select2 {
    width: 220px;
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
    height: 24px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

.lableSec {
    font-weight: 500;
    font-size: 12px;
}

input {
    height: 24px;
}

.inputSec input[type="text"] {
    height: 24px;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    width: 100%;
}

.required:after {
    content: " *";
    color: red;
}

th {
    color: #168EB4;
}

td {
    font-size: 10px;
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

<?php if ($department_id == 4 && $role_id == 4) { ?>
<div class="row pageNavigation pt-2 pl-2">
    <a href="./all_orders.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Orders</a>
</div>
<?php }
if ($department_id == 18 && $role_id == 12) { ?>
<div class="row pageNavigation pt-2 pl-2">
    <a href="../management/manager_sales"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Orders</a>
</div>
<?php } if ($department_id == 11 && $role_id == 1) { ?>
<div class="row pageNavigation pt-2 pl-2">
    <a href="../management/manager_sales"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Orders</a>
</div>
<?php } ?>

<div class="row p-2">
    <i class="pageNameIcon fa-solid fa-shopping-cart mx-2"></i>
    <h6 class="pageName">SO-<?php echo $sales_order_id; ?></h6>
</div>

<div class="px-2">

    <div class="row" style="background-color: #fff;">
        <div class="col-sm-10">
            <div class="row mt-3">
                <div class="col-sm-3">
                    <p class="px-4 mt-1">Customer Name</p>
                </div>
                <div class="col-sm-9">
                    <div class="cusName">
                        <input type="text" readonly class="w-50"
                            value="<?php echo $customer_fname . " " . $customer_lname ?>">
                        <?php if($approve ==1){ ?>
                        <button class="btn btn-xs btn-success mx-2 ">Approved</button>
                        <?php  } ?>
                    </div>
                    <div class="row mt-2 mb-2 addressSec w-50">
                        <div class="col-sm-5 mb-2 billAddress">
                            <p style="font-weight: bold;">Billing Address</p>
                            <div class="d-flex">
                                <?php if ($billing_attention == null && $billing_address1 == null && $billing_address2 == null && $billing_country == null && $billing_city == null && $billing_state == null && $billing_zip_code == null && $billing_phone == null && $billing_fax == null) { ?>
                                <span>No Billing Address - </span>
                                <a href="" data-toggle="modal" data-target="#billing_address">Add
                                    Billing
                                    Address</a>
                                <?php } else { ?>
                                <div class="d-inline">
                                    <p><?php echo $billing_attention ?></p>
                                    <p><?php echo $billing_country ?></p>
                                    <p><?php echo $billing_address1 ?></p>
                                    <p><?php echo $billing_address2 ?></p>
                                    <p><?php echo $billing_city ?></p>
                                    <p><?php echo $billing_state ?></p>
                                    <p><?php echo $billing_zip_code ?></p>
                                    <p><?php echo $billing_phone ?></p>
                                    <p><?php echo $billing_fax ?></p>
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-sm-5 shipAddress">
                            <p class="text-bold">Shipping Address</p>
                            <div class="d-flex">
                                <?php if ($shipping_attention == null && $shipping_address1 == null && $shipping_address2 == null && $shipping_country == null || $shipping_city == null || $shipping_state == null || $shipping_zip_code == null || $shipping_phone == null || $shipping_fax == null) { ?>
                                <span>No Shipping Address - </span>
                                <a href="" data-toggle="modal" data-target="#shipping_address">Add
                                    Shipping
                                    Address</a>
                                <?php } else { ?>
                                <div class="d-inline">
                                    <p><?php echo $shipping_attention ?></p>
                                    <p><?php echo $shipping_country ?></p>
                                    <p><?php echo $shipping_address1 ?></p>
                                    <p><?php echo $shipping_address2 ?></p>
                                    <p><?php echo $shipping_city ?></p>
                                    <p><?php echo $shipping_state ?></p>
                                    <p><?php echo $shipping_zip_code ?></p>
                                    <p><?php echo $shipping_phone ?></p>
                                    <p><?php echo $shipping_fax ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-2">
                <div class="col-sm-3">
                    <p class="px-4 mt-1">Order Number</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" readonly value="SO-<?php echo $sales_order_id ?>" style="width: 220px;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="px-4 mt-1">Reference</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" readonly value="<?php echo $reference ?>" style="width: 220px;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="px-4 mt-1">Order Date</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" readonly value="<?php echo $shipping_date ?>" style="width: 220px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1">Expected Payment Date</p>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" readonly value="<?php echo $expected_payment_date ?>"
                                style="width:100%;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1">Payment Terms</p>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" readonly value=" <?php
                                                            echo $payment_term 
                                                                ?>  " style="width:100%;">

                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Add Item Details  -->
    <!-- ============================================================== -->
    <div class="row" style="background-color: #fff;">
        <div class="col-sm-12" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Item Details</th>
                        <th style="width: 10px;">Quantity</th>
                        <th style="width: 10px;">Rate</th>
                        <th style="width: 10px;">Discount</th>
                        <th style="width: 10px;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM sales_order_items WHERE sales_order_id = '$order_id'  ORDER BY sales_order_id DESC";
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
                                    echo $order_hdd_type . ", ";
                                    echo $order_ram . "GB" . ", ";
                                    echo $order_os . ", ";
                                    echo $order_keyboard_language  . ", ";
                                    echo $order_keyboard_backlight . ", ";
                                    echo $order_graphic_type . ", ";
                                    echo $order_graphic_capacity . "GB" . ", ";
                                    echo $order_charger_type . ", ";
                                    echo $order_charger_watt . ", ";
                                    echo $charging_pin_color . ", ";
                                    echo $order_condition . ", ";
                                    echo $order_packing_type . ", ";
                                    echo $order_shipping_method;
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

                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Billing  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-6 mt-4 mb-3 px-3">
        <p>Customer Note</p>
        <textarea class="w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Customer Note"
            name="note"></textarea>
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
                $query1 = "SELECT SUM(order_total_price) AS Total_Price FROM sales_order_items WHERE sales_order_id = '$sales_order_id' ORDER BY sales_order_item_id DESC";
                $run_d = mysqli_query($connection, $query1);
                while ($d = mysqli_fetch_assoc($run_d)) {
                    echo $d['Total_Price'];
                }
                ?></p>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Term and Conditions -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-6 mt-4 mb-3 px-3">
        <p>Term and Conditions</p>
        <textarea class="w-75" id="exampleFormControlTextarea1" rows="3" placeholder="Term and Condition"
            name="note"></textarea>
    </div>
</div>

<div class="row p-2" style="box-shadow: 0px 0 0px #888, 0px 0 6px #888;">
    <?php if($approve ==0){ 
        echo $approve;
        ?>
    <button class="btn btn-xs btn-danger">Reject</button>
    <form method="POST">
        <input type='hidden' name='sales_order_id' value='<?php echo $sales_order_id ?>'>
        <button class="btn btn-xs btn-success mx-2" type='submit' name='approve'>Approve</button>
    </form>
    <?php }else{ ?>

    <?php } ?>

</div>

<style>
.select2-selection__rendered {
    line-height: 17px !important;
    padding-left: 0px !important;
}

.select2 {
    width: 220px;
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
    /* padding: 0px 10px; */
}

.lableSec {
    font-weight: 500;
    font-size: 12px;
}

.inputSec input[type="text"] {
    height: 30px;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    width: 100%;
}

.required:after {
    content: " *";
    color: red;
}
</style>

<?php require_once('../includes/footer.php'); ?>
<style>
td {
    font-size: 10px;
}
</style>
<?php
    if(isset($_POST['approve'])){
        $sales_order_id=$_POST['sales_order_id'];
        $sql="UPDATE sales_order_items SET approve='1',approve_by='{$_SESSION['user_id']}' WHERE sales_order_id='$sales_order_id'";
        $sql_run=mysqli_query($connection,$sql);
    }
    ?>
<?php require_once('../includes/footer.php'); ?>