<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");


require_once('../../functions/db_connection.php');

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
    <h6 class="pageName">Invoice</h6>
</div>

<div class="row" style="background-color: #fff;">
    <div class="col-sm-10">
        <div class="row mt-3">
            <div class="col-sm-3">
                <p class="px-4 mt-1">Customer Name</p>
            </div>
            <div class="col-sm-9">
                <div class="">
                    <select class="select2 w-75" name="visa_type" id="" onchange="showUser(this.value)">
                        <?php
                        $query = "SELECT customer_id, customer_fname, customer_lname FROM sales_customer_infomations";
                        $result = mysqli_query($connection, $query);

                        while ($xd = mysqli_fetch_array($result, MYSQLI_ASSOC))

                            $customer_first_name = $xd['customer_fname'];
                        $customer_id = $xd['customer_id'];
                        $customer_last_name = $xd['customer_lname']; {
                        ?>
                        <option value="<?php echo $customer_id; ?>">
                            <?php echo ucfirst($customer_first_name . '' . $customer_last_name); ?>
                        </option>
                        <?php } ?>

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
        <div class="row mb-1">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1 required">Invoice Number</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" value="" style="width:100%;" required placeholder="Inv-12345">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1 required">S/O Number</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" value="" style="width:100%;" required placeholder="Inv-12345">
                    </div>
                </div>
            </div>
        </div>

        <!-- // -->
        <!-- ///////// -->
        <div class="row mb-1">
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
        <div class="row mb-1">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1 required">Invoice Date</p>
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
        <div class="row mb-1">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="px-4 mt-1">Due Date</p>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" value="25/02/2023" style="width:100%;">
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
<!-- Order Details Address  -->
<!-- ============================================================== -->

<hr>

<!-- ============================================================== -->
<!-- Add Item Details  -->
<!-- ============================================================== -->
<div class="row" style="background-color: #fff;">
    <div class="row my-2">
        <div class="col-sm-6">
            <p class=" px-4 mt-1">Delevery Method</p>
        </div>
        <div class="col-sm-6">
            <select name="" class="DropDown" style="width: 100%;">
                <option value="" selected="">--Select Delevery Method--
                </option>

            </select>

        </div>

    </div>
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Item Details</th>
                    <th scope="col">Invoiced Qty</th>
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
        Save Invoice
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

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        console.log(xmlhttp)
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "session_set.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>




<?php require_once('../includes/footer.php'); ?>