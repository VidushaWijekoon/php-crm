<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row p-2">
    <i class="pageNameIcon fa-solid fa-shopping-cart mx-2"></i>
    <h6 class="pageName">SO 12345</h6>
</div>

<div class="row" style="background-color: #fff;">
    <div class="col-sm-10">
        <div class="row mt-3">
            <div class="col-sm-3">
                <p class="px-4 mt-1">Customer Name</p>
            </div>
            <div class="col-sm-9">
                <div class="">
                    <input type="text" value="Uchechukwu Obualo">
                </div>
                <div class="row mt-4 mb-2">
                    <div class="col-sm-5">
                        <div style="line-height: 5px;">
                            <p class="text-bold">Billing Address</p>
                            <p>Bluum Technology</p>
                            <p>951 Valley View Lane,</p>
                            <p>Suite 180</p>
                            <p>Irving</p>
                            <p>TX 75061</p>
                            <p>Jennifer Deshazer</p>
                            <p>Contact: 501-288-1898</p>
                            <p>USA</p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div style="line-height: 5px;">
                            <p class="text-bold">Shipping Address</p>
                            <p>Bluum Technology</p>
                            <p>951 Valley View Lane,</p>
                            <p>Suite 180</p>
                            <p>Irving</p>
                            <p>TX 75061</p>
                            <p>Jennifer Deshazer</p>
                            <p>Contact: 501-288-1898</p>
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
                <input type="text" value="SO-12345" style="width: 220px;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p class="px-4 mt-1">Reference</p>
            </div>
            <div class="col-sm-9">
                <input type="text" value="WH-132" style="width: 220px;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p class="px-4 mt-1">Order Date</p>
            </div>
            <div class="col-sm-9">
                <input type="text" value="25/02/2023" style="width: 220px;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1">Order Date</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" value="25/02/2023" style="width: 220px;">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="px-4 mt-1">Order Date</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" value="Duo on Receipt" style="width: 220px;">
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
    <div class="col-sm-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Item Details</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
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
                    <td>AED 15000.00</td>

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

<div class="row p-2" style="box-shadow: 0px 0 0px #888, 0px 0 6px #888;">
    <button class="btn btn-xs btn-danger">Back</button>
    <button class="btn btn-xs btn-success mx-2">Approve</button>
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

<?php require_once('../includes/footer.php'); ?>