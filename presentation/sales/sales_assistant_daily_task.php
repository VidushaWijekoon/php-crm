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
a:link {
    color: #0c2e5b;
}

thead th {
    color: #168EB4;
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

.tblLable {
    font-weight: 700;
    /* color: #0c2e5b; */
}

.nav-tabs .nav-link.active {
    color: #919EAB !important;
}

input {
    height: 22px;
}

.DropDown {
    height: 24px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

.select2-container--default .select2-results__option--highlighted {
    background-color: #3498db;
    /* font-size: 10px; */
}

.select2-container .select2-selection--single .select2-selection__rendered {
    font-size: 10px;
}

.select2-container--default .select2-selection--single {
    border: 1px solid #D1CDCD;
}

.select2-selection__rendered {
    line-height: 14px !important;
    padding-left: 0px !important;
}

.select2-container .select2-selection--single {
    height: 24px;
}

.watsappField {
    display: flex;
    justify-content: space-between;
    gap: 5px;
}
</style>

<!-- <div class="row">
    <div class="col-md-5 align-self-center d-flex p-2">
        <i class="fa-solid fa-users"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;">Daily Sales Person Task</h6>
    </div>
</div> -->
<div class="row pl-4 pt-2">
    <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
    <h6 class="pageName">Daily Sales Person Task</h6>
</div>

<!-- ============================================================== -->
<!-- Create Customer -->
<!-- ============================================================== -->
<div class="row mx-1 px-2" style="background-color: #ffffff;">
    <div class="col-sm-12 grid-margin stretch-card justify-content-center mx-auto mt-3">
        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active tblLable" id="custom-content-below-all-tab" data-toggle="pill"
                    href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all"
                    aria-selected="true">Customer Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tblLable" id="custom-content-below-packing-tab" data-toggle="pill"
                    href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing"
                    aria-selected="false">Post to Customer</a>
            </li>
        </ul>
        <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel"
                aria-labelledby="custom-content-below-all-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Day</th>
                                <th scope="col">Platform</th>
                                <th scope="col">Search by Keyword</th>
                                <th scope="col" class="text-center">Today Need Create New Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><a href="order_view.php">1</a></td>
                                <td>Monday</td>
                                <td>Facebook</td>
                                <td>
                                    <div style="display: grid">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 1"
                                            name="search_keyword_1">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 2"
                                            name="search_keyword_2">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 3"
                                            name="search_keyword_3">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 4"
                                            name="search_keyword_4">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 5"
                                            name="search_keyword_5">
                                    </div>

                                </td>
                                <td>
                                    <div class=""
                                        style="display: flex; justify-content: center; align-items: center; height: 100px; font-size: 75px; font-weight: bold;">
                                        5
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Country</th>
                                <th scope="col">Whatsapp Number</th>
                                <th scope="col">Platform</th>
                                <th scope="col">Model He Selling & Buying</th>
                                <th scope="col">He Can Pick Up From UAE?</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="w-100"></td>
                                <td>
                                    <select name="visa_type" class="w-100  select2">
                                        <option selected>Select Country</option>
                                        <option selected>UAE</option>

                                    </select>
                                </td>
                                <td>
                                    <div class="watsappField">
                                        <input class="w-25" type="text">
                                        <input class="w-75" type="text">

                                    </div>

                                <td>
                                    <select class="text-capitalize w-100 DropDown" name="platform1" required>
                                        <option value="jumia" selected="">
                                            jumia</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="instgram">Instgram</option>
                                        <option value="lazada">Lazada</option>
                                        <option value="shopee">Shopee</option>
                                        <option value="tokopedia">Tokopedia</option>
                                        <option value="amazon.com">amazon.com</option>
                                        <option value="amazon.uk">amazon.uk</option>
                                        <option value="tiktok">tiktok</option>
                                        <option value="loopzap">Loopzap</option>
                                        <option value="pigiame">Pigiame</option>
                                        <option value="kebuysell">Kebuysell</option>
                                        <option value="kenyagroup">Kenya Group</option>
                                        <option value="loozap">Loozap</option>
                                        <option value="website">Website</option>
                                        <option value="jiji.co.ke">jiji.co.ke</option>
                                        <option value="olist">olist.ng</option>
                                        <option value="jiji.ng">jiji.ng</option>
                                        <option value="google">google</option>
                                        <option value="pcexporters">Pc Exporters</option>
                                        <option value="jumia">Jumia</option>
                                        <option value="thebrokersite">The Brokersite</option>
                                    </select>
                                    <!-- <select name="visa_type" class="w-100 DropDown">
                                        <option selected>--Please Select Visa Type--</option>
                                        <option value="visit">Visit Visa</option>
                                        <option value="own">Own Visa</option>
                                        <option value="company">Company Visa</option>
                                        <option value="cancel">Cancel Visa</option>
                                        <option value="student">Student Visa</option>
                                    </select> -->
                                </td>
                                <td>
                                    <input type="text" class="w-100">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center mr-2">
                                            <input type="radio" id="uae_pickup1" name="uae_pickup1" value="yes">
                                            <div class="label_values" for="uae_pickup1">Yes
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mr-2">
                                            <input type="radio" id="uae_pickup2" name="uae_pickup1" value="no">
                                            <div class="label_values" for="uae_pickup2">No
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mr-2">
                                            <input type="radio" id="uae_pickup3" name="uae_pickup1" value="n/a">
                                            <div class="label_values" for="uae_pickup3">N/A
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" name="add_customer"
                                        style="background: transparent; border:none;" fdprocessedid="4ckj3h">
                                        <i class="fa-solid fa-circle-plus fa-2x text-primary"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ============================================================== -->
                <!-- View Created Customer Details -->
                <!-- ============================================================== -->
                <div class="row mt-4 table-responsive" style="background-color: #ffffff;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Country</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Whatsapp Number</th>
                                <th scope="col">Platform</th>
                                <th scope="col">Model He Buying & Selling</th>
                                <th scope="col">He Can Pick Up From UAE?</th>
                                <th scope="col">Created Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                            <tr>
                                <td>Nigeria</td>
                                <td>1IRN TOPNET</td>
                                <td>+989395401832</td>
                                <td>Facebook</td>
                                <td>HP 1030 G3</td>
                                <td>No</td>
                                <td>02/21/2023 20:17</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="custom-content-below-packing" role="tabpanel"
                aria-labelledby="custom-content-below-packing-tab">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Morning
                                        9.00A.M-2.00P.M</th>
                                    <th scope="col">Afternoon
                                        3.00A.M-6.15P.M</th>
                                    <th scope="col">
                                        Evening
                                        6.45A.M-9.00P.M
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>
                                        <div>
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100"
                                                name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100"
                                                name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100"
                                                name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100"
                                                name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100"
                                                name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100"
                                                name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100"
                                                name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100"
                                                name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100"
                                                name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100"
                                                name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger p-1">Please Follow the Order</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Platform</th>
                                    <th scope="col">Morning
                                        9.00A.M-2.00P.M</th>
                                    <th scope="col">Afternoon
                                        3.00A.M-6.15P.M</th>
                                    <th scope="col">
                                        Evening
                                        6.45A.M-9.00P.M
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Facebook
                                    </td>
                                    <td>
                                        <div style="display: grid">
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100"
                                                name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100"
                                                name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100"
                                                name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100"
                                                name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100"
                                                name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: grid">
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100"
                                                name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100"
                                                name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100"
                                                name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100"
                                                name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100"
                                                name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger p-1">Please Follow the Order</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex">
                    <p class="" style="font-size: 10px; margin-top: 5px">Please Select Country First: </p>
                    <div class="mx-1">
                        <select name="visa_type" style="height: 24px">
                            <option selected>--Select Country--</option>
                            <option value="visit">USA</option>
                            <option value="own">UK</option>
                            <option value="company">Japan</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Whatsapp Number</th>
                                <th scope="col" style="width: 5%">Platform</th>
                                <th scope="col">Model He Selling/ Buying</th>
                                <th scope="col">Posted Model 1</th>
                                <th scope="col">Posted Model 2</th>
                                <th scope="col">Customer Asking Model</th>
                                <th scope="col">Customer Asking Price</th>
                                <th scope="col">He Can Pick Up From UAE?</th>
                                <th scope="col">Posted Time</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                            <tr>
                                <td>1IRN Topnet</td>
                                <td>989395401832</td>
                                <td>instgram</td>
                                <td>folio</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>Yes</td>
                                <td>02/18/2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="">
                    <button class="btnT float-right mt-3 mb-4 w-25">Submit</button>
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



<?php require_once('../includes/footer.php') ?>