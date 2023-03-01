<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
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

<div class="row" style="background-color: #fff;">
    <div class="col-sm-10">
        <div class="row mt-3">
            <div class="col-sm-3">
                <p class="px-4 mt-1">Customer Name</p>
            </div>
            <div class="col-sm-9">
                <div class="">
                    <select class="select2 w-75" name="visa_type" id="">
                        <option selected>Select Customer</option>

                    </select>
                </div>

                <div class="row mt-2 mb-2 addressSec">
                    <div class="col-sm-5 mb-2 billAddress">
                        <div>
                            <p>
                                Billing Address
                                Billing Address
                                Billing Address
                                Billing Address
                                Billing Address
                                Billing Address
                            </p>
                            <a href="" data-toggle="modal" data-target="#billing_address">Add Billing Address</a>
                        </div>
                    </div>
                    <div class="col-sm-5 shipAddress">
                        <div>
                            <p>Shipping Address</p>
                            <a href="" data-toggle="modal" data-target="#shipping_address">Add Shipping Address</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>



        <!-- ///////// -->
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1 required">Order Number</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" value="SO-12345" style="width:100%;" required>
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
                        <input type="text" value="WH-132" style="width:100%;">
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
                        <p class="px-4 mt-1 required">Order Date</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" value="25/02/2023" style="width:100%;">
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
                        <input type="date" value="25/02/2023" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p class=" px-4 mt-1">Payment Terms</p>
                    </div>
                    <div class="col-sm-6">
                        <select name="" class="DropDown" style="width: 100%;">
                            <option value="" selected="">--Select Payment Terms--
                            </option>
                            <option value="net 15">Net 15</option>
                            <option value="net 30">Net 30</option>
                            <option value="net 45">Net 45</option>
                            <option value="net 60">Net 60</option>
                            <option value="due end of the month">Due end of the
                                month</option>
                            <option value="duo end the the next month">Due end
                                of the next month</option>
                            <option value="due on receipt">Due on Receipt
                            </option>
                        </select>

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
                    <select name="" id="" class="DropDown select2">
                        <option value="" selected>--Select Device--</option>
                        <option value="laptop">Laptop</option>
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
                    <select class="DropDown select2" aria-label="Default select example" name="brand" id="brand"
                        required>
                        <option value="" selected>--Select brand--</option>

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
                    <select name="" id="" class="DropDown select2">
                        <option value="" selected>--Select Model--</option>
                        <option value="">Thinkpad</option>
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
                    <select class="DropDown select2" aria-label="Default select example" name="processor" id="processor"
                        required>
                        <option value="" selected>--Select Processor--</option>

                    </select>
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
                    <select name="" id="" class="DropDown select2">
                        <option value="" selected>--Select Core--</option>
                        <option value=""></option>
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
                    <select class="DropDown select2" aria-label="Default select example" name="gen" id="gen" required>
                        <option value="" selected>--Select Gen--</option>

                    </select>
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
                    <select name="" id="" class="DropDown select2">
                        <option value="" selected>--Select Speed--</option>
                        <option value="">1.80GHz</option>
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
                    <select class="DropDown" aria-label="Default select example" name="touch" id="touch" required>
                        <option value="no" selected>No</option>
                        <option value="Yes">Yes</option>

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
                    <p class="required">HDD Type </p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="hdd_type" id="hdd_type" onchange="" required>
                        <option value="">Select Storage Type</option>
                        <option value="SSD">SSD</option>
                        <option selected value="SATA">SATA</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="row">
                <div class="lableSec pt-2 col-3">
                    <p class="required">HDD Capacity</p>
                </div>
                <div class="inputSec col-9">
                    <input type="text" placeholder="256 GB">
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
                    <p class="required">OS</p>
                </div>
                <div class="inputSec col-9">
                    <select class="DropDown" name="os" id="os">
                        <!-- <option value="">Select Operating System</option> -->
                        <option selected value="windows">Original Windows 10 Pro</option>
                        <option value="chrome os">Chrome OS</option>
                        <option value="linux">Linux</option>
                        <option value="mac os">Mac OS</option>
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
                    <select class="DropDown " name="packing_type">
                        <option selected="">--Select Inventory--</option>
                        <option value="ecom_inventory">E-Commerce Inventory</option>
                        <option value="big_inventory">Big Inventory</option>
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
                            <option value="">Select Language </option>
                            <option value="us">US</option>
                            <option value="french">FRENCH</option>
                            <option value="arabic">ARABIC</option>
                            <option value="germany">GERMANY</option>
                            <option value="danish">DANISH</option>
                            <option value="dutch">DUTCH</option>
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

                            <option value="yes">Yes</option>
                            <option value="no" selected>No</option>

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
                        <select class="DropDown" name="graphic_type">
                            <option selected="">--Select Graphic Type--</option>
                            <option value="intel">Intel</option>
                            <option value="amd">Amd</option>
                            <option value="nvidia">nVidia</option>
                            <option value="mix">Mix</option>
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
                        <select class="DropDown" name="graphic_capacity">
                            <option selected="">--Select Graphic Capacity--</option>
                            <option value="1">1GB</option>
                            <option value="2">2GB</option>
                            <option value="4">4GB</option>
                            <option value="6">6GB</option>
                            <option value="8">8GB</option>
                            <option value="mix">Mix</option>
                            <option value="n/a">N/A</option>
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
                        <select class="DropDown" name="charger">
                            <option selected="">--Select Charger Type--</option>
                            <option value="us">US Standard</option>
                            <option value="uk">UK Standard</option>
                            <option value="eu">EU Standard</option>
                            <option value="unos">No Charger</option>
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
                        <select class="DropDown" name="watt">
                            <option selected="">--Select Charger Watt--</option>
                            <option value="65">65w</option>

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
                        <select class="DropDown" name="pin_colour">
                            <option selected="">--Select Pin Colour--</option>
                            <option value="blue">blue</option>
                            <option value="yellow">Yellow</option>
                            <option value="white">white</option>
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
                        <select class="DropDown" name="condition">
                            <option selected="">--Select Condition--</option>
                            <option value="fully refurbished"
                                title="A B C D Painting, LCD No Scratch, Battery Health 80%">
                                Fully Refurbished-A B C D Painting, LCD No Scratch, Battery Health
                                80%</option>
                            <option value="a grade"
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
                        <p class="required">Packing Type</p>
                    </div>
                    <div class="inputSec col-9">
                        <select class="DropDown " name="packing_type">
                            <option selected="">--Select Packing Type--</option>
                            <option value="single box">Single Box</option>
                            <option value="bulk packing">Bulk Packing</option>
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
                        <select class="DropDown" name="shipping_method" id="shipping_method">
                            <option selected="">--Select Shipping Method--</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5 mt-2">
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div class="lableSec pt-2 col-3">
                        <p class="required">QTY</p>
                    </div>
                    <div class="inputSec col-9">
                        <input type="text" id="orderQty" onchange="getTot()" placeholder="Enter Listing Qty">
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div class="lableSec pt-2 col-3">
                        <p class="required">Unit Price</p>
                    </div>
                    <div class="inputSec col-9">
                        <input type="text" id="unitPrice" onchange="getTot()" placeholder="Enter Unit Price">
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5 mt-2">
            <div class="col-sm-12 col-lg-5">
                <div class="row">
                    <div class="lableSec pt-2 col-3">
                        <p class="required">Discount</p>
                    </div>
                    <div class="inputSec col-9">
                        <input type="text" id="discount" onchange="getTot()" placeholder="Enter Discount %">
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
                        <input type="text" id="tot" placeholder="Total Price">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btnT mx-2 mt-3 mb-3 col-md-2">
            <i class="fa-solid fa-plus mx-1"></i>Add Items
        </button>

    </div>


</div>
<hr>

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
                <tr>
                    <td>
                        <p><b>
                                Laptop, Dell, Latitude e7470, Intel, i7-6600u, 8, 2.40ghz, Touch, 15.6, FHD, 8GB,
                                256GB,
                                SSD, Windows 10 Pro, US Keyboard, Backlight, Intel, 2GB, US Standard Charger, 65W,
                                Fully
                                Refurbished, Bulk, Local Pickup
                            </b>

                        </p>
                    </td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td>AED 15000.00</td>
                    <td>
                        <button type="submit" style="background: transparent; border:none;">
                            <i class="fa-solid fa-circle-minus fa-2x text-danger"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Laptop, Dell, Latitude e7470, Intel, i7-6600u, 8, 2.40ghz, Touch, 15.6, FHD, 8GB, 256GB,
                            SSD, Windows 10 Pro, US Keyboard, Backlight, Intel, 2GB, US Standard Charger, 65W, Fully
                            Refurbished, Bulk, Local Pickup
                        </p>
                    </td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td>AED 75000.00</td>
                    <td>
                        <button type="submit" style="background: transparent; border:none;">
                            <i class="fa-solid fa-circle-minus fa-2x text-danger"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Laptop, Dell, Latitude e7470, Intel, i7-6600u, 8, 2.40ghz, Touch, 15.6, FHD, 8GB, 256GB,
                            SSD, Windows 10 Pro, US Keyboard, Backlight, Intel, 2GB, US Standard Charger, 65W, Fully
                            Refurbished, Bulk, Local Pickup
                        </p>
                    </td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td>AED 105000.00</td>
                    <td>
                        <button type="submit" style="background: transparent; border:none;">
                            <i class="fa-solid fa-circle-minus fa-2x text-danger"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Laptop, Dell, Latitude e7470, Intel, i7-6600u, 8, 2.40ghz, Touch, 15.6, FHD, 8GB, 256GB,
                            SSD, Windows 10 Pro, US Keyboard, Backlight, Intel, 2GB, US Standard Charger, 65W, Fully
                            Refurbished, Bulk, Local Pickup
                        </p>
                    </td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td class="p-0"><input type="text"></td>
                    <td>AED 85000.00</td>
                    <td>
                        <button type="submit" style="background: transparent; border:none;">
                            <i class="fa-solid fa-circle-minus fa-2x text-danger"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
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
            <p class="p-4">110.00</p>
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

<div class="d-flex justify-content-end">
    <button type="submit" class="btnTB mx-2 mt-3 mb-3">
        Save Order
    </button>
    <button type="submit" class="btnTC mx-2 mt-3 mb-3">
        Cancel
    </button>

</div>


<!-- ============================================================== -->
<!-- Billing Address Model  -->
<!-- ============================================================== -->
<div class="modal fade" id="billing_address">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Add Billing Address</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 justify-content-center mx-auto">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Attention</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_attention">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-4 col-form-label">Country/
                                Region</label>
                            <div class="col-sm-8 d-flex">
                                <select name="shipping_country" class="info_select w-100 select2"
                                    style="border-radius: 5px;width: 100%;"">
                                        <?php
                                        $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                        $result = mysqli_query($connection, $query);

                                        while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                <option value=" <?php echo $resident_country["country_name"]; ?>">
                                    <?php echo strtoupper($resident_country["country_name"]); ?>
                                    </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class=" row">
                            <label class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8 d-flex">
                                <textarea class="" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                    name="shipping_address_1" style="width: 100%;"></textarea>

                            </div>
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 d-flex">
                                <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Street 2" name="shipping_address_2" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">City</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_city" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">State</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_state" placeholder="State">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Zip
                                Code</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_zip_code" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btnTB">Save changes</button>
                <button type="button" class="btnTC" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Shipping Address Model -->
<!-- ============================================================== -->
<div class="modal fade" id="shipping_address">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Add Shipping Address</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 justify-content-center mx-auto">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Attention</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class="w-100" name="shipping_attention">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-4  col-form-label">Country/
                                Region</label>
                            <div class="col-sm-8 d-flex">
                                <select name="shipping_country" class="info_select select2"
                                    style="border-radius: 5px; width: 100%;">
                                    <?php
                                    $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                    <option value="<?php echo $resident_country["country_name"]; ?>">
                                        <?php echo strtoupper($resident_country["country_name"]); ?>
                                    </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8 d-flex">
                                <textarea class="" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                    name="shipping_address_1" style="width: 100%;"></textarea>

                            </div>
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 d-flex">
                                <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Street 2" name="shipping_address_2" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">City</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_city" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">State</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_state" placeholder="State">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Zip
                                Code</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_zip_code" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btnTB">Save changes</button>
                <button type="button" class="btnTC" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

})
</script>

<script>
function getTot() {
    var qty = $('#orderQty').val();
    var x = parseInt(qty);

    var unitPrice = $('#unitPrice').val();
    var y = parseInt(unitPrice);

    var discount = $('#discount').val();
    var z = parseInt(discount);

    var a = x * y;
    var b = a * (z / 100);
    var t = a - b;
    console.log(t);

    $('#tot').val(t);
}
</script>




<?php require_once('../includes/footer.php'); ?>


