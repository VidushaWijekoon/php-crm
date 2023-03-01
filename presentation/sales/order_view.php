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

<div class="row pageNavigation pt-2 pl-2">
    <a href="./all_orders.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Orders</a>
</div>

<div class="row p-2">
    <i class="pageNameIcon fa-solid fa-shopping-cart mx-2"></i>
    <h6 class="pageName">SO 12345</h6>
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
                        <input type="text" value="Uchechukwu Obualo">
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
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="px-4 mt-1">Expected Payment Date</p>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" value="25/02/2023" style="width:100%;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
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
                    <tr>
                        <td>
                            <p><b>
                                    Laptop, Dell, Latitude e7470, Intel, i7-6600u, 8, 2.40ghz, Touch, 15.6, FHD, 8GB,
                                    256GB,
                                    SSD, Windows 10 Pro, US Keyboard, Backlight, Intel, 2GB, US Standard Charger, 65W,
                                    Fully
                                    Refurbished, Bulk, Local Pickup
                                </b></p>
                        </td>
                        <td class="p-0"><input type="text" class="w-100"></td>
                        <td class="p-0"><input type="text" class="w-100"></td>
                        <td class="p-0"><input type="text" class="w-100"></td>
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

    <div class="row justify-content-end mb-5">
        <a href="./all_orders.php">
            <button class="btnT w-100 ">Back</button>
        </a>
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
                                        <option value="">UAE</option>

                                    </select>
                                </div>
                            </div>
                            <div class=" row">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm-8 d-flex">
                                            <textarea class="" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Street 1" name="shipping_address_1"
                                                style="width: 100%;"></textarea>

                                        </div>
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8 d-flex">
                                            <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Street 2" name="shipping_address_2"
                                                style="width: 100%;"></textarea>
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
                                        <input type="number" class=" w-100" name="shipping_zip_code"
                                            placeholder="Zip Code">
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
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-xs btn-primary">Save changes</button>
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
                                            <option value="">UAE</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 col-form-label">Address</label>
                                    <div class="col-sm-8 d-flex">
                                        <textarea class="" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Street 1" name="shipping_address_1"
                                            style="width: 100%;"></textarea>

                                    </div>
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8 d-flex">
                                        <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Street 2" name="shipping_address_2"
                                            style="width: 100%;"></textarea>
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
                                        <input type="number" class=" w-100" name="shipping_zip_code"
                                            placeholder="Zip Code">
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
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-xs btn-primary">Save changes</button>
                    </div>
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

    <?php require_once('../includes/footer.php'); ?>