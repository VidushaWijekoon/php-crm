<?php
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
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
    font-size: 15px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
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


<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName pt-1">Create E-Commerce Order</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">

        <form action="./add/createOrderPhp.php" method="POST">
            <!-- formSec -->
            <div class="formSec">
                <div class="">
                    <div class="createListingHeading">
                        Customer
                    </div>
                </div>
                <hr class="sectionUnderline">
                <form action="" method="">
                    <!-- select Platform section -->
                    <div class="row mt-3 px-5">
                        <div class="col-3">
                            <p>Select platform</p>
                        </div>
                        <div class="col-9">
                            <div class="platformes">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platform" id="alsakb"
                                        value="alsakb" onclick="setAlsakbShippingMethod()">
                                    <label class="form-check-label pt-1" for="noon">
                                        <b>Alsakb</b>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platform" id="noon" value="noon"
                                        onclick="setNoonShippingMethod()">
                                    <label class="form-check-label pt-1" for="noon">
                                        <b>NOON</b>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platform" id="cartlaw"
                                        value="cartlaw" onclick="setCartlawShippingMethod()">
                                    <label class="form-check-label pt-1" for="cartlaw">
                                        <b>Cartlaw</b>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platform" id="amazon"
                                        value="amazon.com" onclick="setAmazon1ShippingMethod()">
                                    <label class="form-check-label pt-1" for="amazon">
                                        <b>Amazon.com</b>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platform" id="amazonuae"
                                        value="amazon.ae" onclick="setAmazon1ShippingMethod()">
                                    <label class="form-check-label pt-1" for="amazonuae">
                                        <b>Amazon.ae</b>
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- /// -->
                    <div class="row mt-3 px-5">
                        <div class="col-md-3" style="padding-top: 17px;">Select Type </div>
                        <div class="Types col-md-8">
                            <div class="myDiv" id="showOne">
                                <select name="orderType" id="orderTypeDrop" class="DropDown">

                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="createListingHeading">
                            Order Details
                        </div>
                    </div>
                    <hr class="sectionUnderline">

                    <div class="row px-5 mt-4">
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Order Number</p>
                                </div>
                                <div class="inputSec col-9">
                                    <input name="orderNumber" id="orderNumber" type="text">
                                    <?php
                                    $sales_order_id = null;

                                    $query = "SELECT order_number FROM e_com_orders GROUP BY order_number DESC LIMIT 1";
                                    $data = mysqli_query($connection, $query);
                                    while ($x = mysqli_fetch_array($data)) {
                                        $sales_order_id = $x['order_number'];
                                    }
                                    ?>
                                    <!-- <input id="orderNumber" type="text" disabled
                                        value="SO-<?php $sales_order_id++;
                                                    echo $sales_order_id ?>" name="orderNumber"
                                        required> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>ASIN/SKU Number</p>
                                </div>
                                <div class="inputSec col-9">
                                    <input name="asin" id="asin" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Device</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="device" id="device" class="DropDown">
                                        <option value="" selected>--Select Device--</option>
                                        <option value="laptop">Laptop</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <!-- brand tibbe -->
                            <!-- processor -->
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Processor</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" aria-label="Default select example" name="processor"
                                        id="processor" required>
                                        <option value="" selected>--Select Processor--</option>
                                        <option value="intel" selected>intel</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <!-- new Brand -->
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Brand</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" aria-label="Default select example" name="brand" id="brand"
                                        required>
                                        <option value="" selected>--Select brand--</option>
                                        <option value="dell">Dell</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Core</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="core" id="core" class="DropDown">
                                        <option value="" selected>--Select Core--</option>
                                        <option value="i5-5200U">i5-5200U</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <!-- Model -->
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Model</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="model" id="model" class="DropDown">
                                        <option value="" selected>--Select Model--</option>
                                        <option value="Thinkpad">Thinkpad</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Generation</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" aria-label="Default select example" name="gen" id="gen"
                                        required>
                                        <option value="" selected>--Select Gen--</option>
                                        <option value="5" selected>5</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Touch</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" aria-label="Default select example" name="touch" id="touch"
                                        required>
                                        <option value="0" selected>No</option>
                                        <option value="1">Yes</option>

                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Speed</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="speed" id="speed" class="DropDown">
                                        <option value="" selected>--Select Speed--</option>
                                        <option value="1.80Ghz">1.80GHz</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Speed</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="speed" id="speed" class="DropDown">
                                        <option value="" selected>--Select Speed--</option>
                                        <option value="1.80Ghz">1.80GHz</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Touch</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" aria-label="Default select example" name="touch" id="touch"
                                        required>
                                        <option value="0" selected>No</option>
                                        <option value="1">Yes</option>

                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Screen Size</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="screen_size" id="screen_size" class="DropDown" required>
                                        <option>--Select Screen Size--</option>
                                        <option value="11.6">11.6</option>
                                        <option value="12">12</option>
                                        <option value="13.3">13.3</option>
                                        <option value="14">14</option>
                                        <option value="15.6">15.6</option>
                                        <option value="17.3">17.3</option>

                                        <!-- <option value=""></option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Resolution</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select name="resolution" id="resolution" class="DropDown" required>
                                        <option>Select Display Resolution</option>
                                        <option value="1920 x 1080">1920 x 1080</option>
                                        <option value="1368 x 768">1368 x 768</option>
                                        <option value="1600 x 900">1600 x 900</option>

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
                                    <p>HDD Type </p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" name="hdd_type" id="hdd_type" onchange="" required>
                                        <option>Select Storage Type</option>
                                        <option value="1">SSD</option>
                                        <option value="2">SATA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>HDD Capacity</p>
                                </div>
                                <div class="inputSec col-9">
                                    <input name="hdd_capacity" id="hdd_capacity" type="text" placeholder="256 GB">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 mt-2">
                        <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <div class="lableSec pt-2 col-3">
                                    <p>Ram</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" name="ram" id="ram">
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
                                    <p>OS</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown" name="os" id="os">
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
                                    <p>Inventory Location</p>
                                </div>
                                <div class="inputSec col-9">
                                    <select class="DropDown " name="inv_location" id="inv_location">
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
                                        <p>KeyBord Language </p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="keybord_language" id="keybord_language"
                                            onchange="" required>
                                            <option>Select Language </option>
                                            <option value="1" selected>US</option>
                                            <option value="2">FRENCH</option>
                                            <option value="3">ARABIC</option>
                                            <option value="4">GERMANY</option>
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
                                        <p>Keybord Backlight</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="keybord_backlight" id="keybord_backlight"
                                            onchange="" required>

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
                                        <p>Graphic Brand</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="graphic_type">
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
                                        <p>Graphic Capacity</p>

                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="graphic_capacity">
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
                                        <p>Charger Type</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="charger" id="charger">
                                            <option>--Select Charger Type--</option>
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
                                        <p>Charger Watt</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="watt" id="watt">
                                            <option selected>--Select Charger Watt--</option>
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
                                        <p>Charger Pin Colour</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="pin_colour">
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
                                        <p>Condition</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="condition">
                                            <option selected="">--Select Condition--</option>
                                            <option value="1"
                                                title="A B C D Painting, LCD No Scratch, Battery Health 80%">
                                                Fully Refurbished-A B C D Painting, LCD No Scratch, Battery Health
                                                80%</option>
                                            <option value="2"
                                                title="A B C D Small Scratch, No Dent, LCD Small Scratch, Battery Health 60%">
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
                                        <p>Packing Type</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown " name="packing_type">
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
                                        <p>Shipping Method</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <select class="DropDown" name="shipping_method" id="shipping_method">
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
                                        <p>QTY</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <input type="text" name="item_qty" id="item_qty" placeholder="Enter Listing Qty"
                                            onchange="getTot()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="row">
                                    <div class="lableSec pt-2 col-3">
                                        <p>Unit Price</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <input type="text" id="unit_price" name="unit_price"
                                            placeholder="Enter Unit Price" onchange="getTot()">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-5 mt-2">
                            <div class="col-sm-12 col-lg-5">
                                <div class="row">
                                    <div class="lableSec pt-2 col-3">
                                        <p>Discount</p>
                                    </div>
                                    <div class="inputSec col-9">
                                        <input type="text" id="discount" onchange="getTot()" name="discount"
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
                                        <input type="text" name="total" id="total" placeholder="Total Price">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-5 pb-5 mb-5 pr-5" style="width: 100%;">
                        <button class="btn btn-success col-md-2 float-right" name="create_order"
                            type="submit">Submit</button>
                    </div>




                </form>
            </div>
        </form>
    </div>

</div>

<?php
require_once('../includes/footer.php')

?>

<script>
function getTot() {
    var qty = $('#item_qty').val();
    var x = parseInt(qty);

    var unitPrice = $('#unit_price').val();
    var y = parseInt(unitPrice);

    var discount = $('#discount').val();
    var z = parseInt(discount);

    var a = x * y;
    var b = a * (z / 100);
    var t = a - b;
    console.log(t);

    $('#total').val(t);
}


function setAlsakbShippingMethod() {
    var value = $("#alsakb").val();
    // var radiobox = document.getElementById("noon");

    // console.log(radiobox);
    console.log(value);

    if (value == 'alsakb') {
        var html = $("#orderTypeDrop").html(
            "<option value=''>In House</option>"
        );
        console.log(html);
    }


}

function setNoonShippingMethod() {
    var value = $("#noon").val();
    // var radiobox = document.getElementById("noon");

    // console.log(radiobox);
    console.log(value);

    if (value == 'noon') {
        var html = $("#orderTypeDrop").html(
            "<option selected value ='FBN'> FBN - Warehouse </option> <option value = 'FBP'> FBP - DirectShipping </option>"
        );
        console.log(html);
    }


}

function setCartlawShippingMethod() {

    var value = $("#cartlaw").val();
    // var radiobox = document.getElementById("noon");

    // console.log(radiobox);
    console.log(value);

    if (value == 'cartlaw') {
        var html = $("#orderTypeDrop").html(
            "<option value=''>Cartlaw Pickup</option>"
        );
        console.log(html);
    }

}


function setAmazon1ShippingMethod() {
    var value = $("#amazon").val();
    // var radiobox = document.getElementById("noon");

    // console.log(radiobox);

    if (value == 'amazon.com' || value == 'amazon.ae') {
        var html = $("#orderTypeDrop").html(
            "<option value=''>FBA-WareHouse</option>"
        );
    }
}
</script>