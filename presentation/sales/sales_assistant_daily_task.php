<?php

ob_start();
session_start();
error_reporting(E_ALL & ~E_WARNING);
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');


// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$user_id = $_SESSION['user_id'];

$country_name;
$customer_phone_code;
$platform;

echo $country_name;
echo $customer_phone_code;
echo $platform;

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
                <a class="nav-link active tblLable" id="custom-content-below-all-tab" data-toggle="pill" href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all" aria-selected="true">Customer Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tblLable" id="custom-content-below-packing-tab" data-toggle="pill" href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing" aria-selected="false">Post to Customer</a>
            </li>
        </ul>
        <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel" aria-labelledby="custom-content-below-all-tab">
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
                                        <input type="text" class="mb-1" placeholder="Search Keyword 1" name="search_keyword_1">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 2" name="search_keyword_2">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 3" name="search_keyword_3">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 4" name="search_keyword_4">
                                        <input type="text" class="mb-1" placeholder="Search Keyword 5" name="search_keyword_5">
                                    </div>

                                </td>
                                <td>
                                    <div class="" style="display: flex; justify-content: center; align-items: center; height: 100px; font-size: 75px; font-weight: bold;">
                                        5
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="./addNew/sales_daily_customer_informations.php" method="POST">
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
                                    <td>
                                        <input type="text" class="w-100" name="customer_name">
                                    </td>
                                    <td>
                                        <select name="country_name" id="create_customer_country" class="select2 w-75">
                                            <option selected>--Select Resident Country--</option>
                                            <?php
                                            $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                            $result = mysqli_query($connection, $query);

                                            while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                                <option value="<?php echo $resident_country["country_name"]; ?>">
                                                    <?php echo strtoupper($resident_country["country_name"]); ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="watsappField">
                                            <select name="phone_code" class="w-25" id="create_phone_code" style="border-radius: 5px;" required>
                                            </select>
                                            <input type="text" class="w-100" name="whatsappnumber">
                                        </div>

                                    <td>
                                        <select class="text-capitalize w-100 DropDown" name="platform" required>
                                            <option value="1">Facebook</option>
                                            <option value="2">Instgram</option>
                                            <option value="3">Lazada</option>
                                            <option value="4">Shopee</option>
                                            <option value="5">Tokopedia</option>
                                            <option value="6">amazon.com</option>
                                            <option value="7">amazon.uk</option>
                                            <option value="8">tiktok</option>
                                            <option value="9">Loopzap</option>
                                            <option value="10">Pigiame</option>
                                            <option value="11">Kebuysell</option>
                                            <option value="12">Kenya Group</option>
                                            <option value="13">Loozap</option>
                                            <option value="14">Website</option>
                                            <option value="15">jiji.co.ke</option>
                                            <option value="16">olist.ng</option>
                                            <option value="17">jiji.ng</option>
                                            <option value="18">google</option>
                                            <option value="19">Pc Exporters</option>
                                            <option value="20">Jumia</option>
                                            <option value="21">The Brokersite</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="w-100" name="customer_buying_selling_model">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="1">
                                                <div class="label_values" for="uae_pickup1">Yes
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup2" name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup3" name="uae_pickup1" value="3">
                                                <div class="label_values" for="uae_pickup3">N/A
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" name="add_customer" style="background: transparent; border:none;">
                                            <i class="fa-solid fa-circle-plus fa-2x text-primary"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

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
                            <?php

                            $query = "SELECT * FROM sales_daily_customer_informations WHERE created_by = '$user_id'";
                            $run = mysqli_query($connection, $query);
                            while ($x = mysqli_fetch_assoc($run)) {
                                $uae_pickup = $x['uae_pickup'];
                                $country_name = $x['country_name'];
                                $customer_phone_code = $x['customer_phone_code'];
                                $platform = $x['platform'];

                            ?>
                                <tr>
                                    <td><?php echo $country_name ?></td>
                                    <td><?php echo $x['customer_name'] ?></td>
                                    <td><?php echo "+ " . $customer_phone_code . " " . $x['customer_whatsapp_code'] ?></td>
                                    <td><?php echo $platform ?></td>
                                    <td><?php echo $x['model_selling_buying'] ?></td>
                                    <td>
                                        <?php if ($uae_pickup == 1) { ?>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup1" checked disabled name="uae_pickup1" value="1">
                                                    <div class="label_values" for="uae_pickup1">Yes
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup2" disabled name="uae_pickup1" value="0">
                                                    <div class="label_values" for="uae_pickup2">No
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup3" disabled name="uae_pickup1" value="3">
                                                    <div class="label_values" for="uae_pickup3">N/A
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                        if ($uae_pickup == 0) { ?>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup1" disabled name="uae_pickup1" value="1">
                                                    <div class="label_values" for="uae_pickup1">Yes
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup2" checked disabled name="uae_pickup1" value="0">
                                                    <div class="label_values" for="uae_pickup2">No
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup3" disabled name="uae_pickup1" value="3">
                                                    <div class="label_values" for="uae_pickup3">N/A
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                        if ($uae_pickup == 3) { ?>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup1" disabled name="uae_pickup1" value="1">
                                                    <div class="label_values" for="uae_pickup1">Yes
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup2" disabled name="uae_pickup1" value="0">
                                                    <div class="label_values" for="uae_pickup2">No
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mr-2">
                                                    <input type="radio" id="uae_pickup3" disabled checked name="uae_pickup1" value="3">
                                                    <div class="label_values" for="uae_pickup3">N/A
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $x['created_time']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Tab2  -->
            <!-- ============================================================== -->
            <div class="tab-pane fade" id="custom-content-below-packing" role="tabpanel" aria-labelledby="custom-content-below-packing-tab">
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
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100" name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100" name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100" name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100" name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100" name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100" name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100" name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100" name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100" name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100" name="search_keyword_5">
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
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100" name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100" name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100" name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100" name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100" name="search_keyword_5">
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: grid">
                                            <input type="text" placeholder="Search Keyword 1" class="mb-1 w-100" name="search_keyword_1">
                                            <input type="text" placeholder="Search Keyword 2" class="mb-1 w-100" name="search_keyword_2">
                                            <input type="text" placeholder="Search Keyword 3" class="mb-1 w-100" name="search_keyword_3">
                                            <input type="text" placeholder="Search Keyword 4" class="mb-1 w-100" name="search_keyword_4">
                                            <input type="text" placeholder="Search Keyword 5" class="mb-1 w-100" name="search_keyword_5">
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

    $(document).ready(function() {
        $("#create_customer_country").on("change", function() {
            var country_name = $("#create_customer_country").val();
            console.log(country_name)
            var getURL = "./addNew/getphonecode.php?country_name=" + country_name;
            console.log(getURL)

            $.get(getURL, function(data, status) {
                $("#create_phone_code").html(data);
            });
        });
    });
</script>



<?php require_once('../includes/footer.php') ?>