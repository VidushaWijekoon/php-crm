<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');


// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$user_id = $_SESSION['user_id'];


?>
<style>
    a {
        color: #000;
    }

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

    .pageNavigation a {
        color: #168EB4;
        font-weight: 600;
    }

    .pagination {
        width: 100%;
        display: flex;
        justify-content: flex-end;

    }

    .page-item .active .page-link {
        background-color: #168EB4;
        border-color: #168EB4;
    }

    .pagination a {
        font-weight: bold;
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        /* border: 1px solid black; */
    }

    .pagination a.active {
        background-color: #168EB4;
        color: #fff;
    }

    .pagination a:hover:not(.active) {
        background-color: skyblue;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
<script src="../../plugins/jquery/jquery.min.js"></script>


<div class="row pageNavigation pt-2 pl-2">
    <a href="./sales_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashbord</a>
</div>
<div class="row pl-4 pt-2">
    <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
    <h6 class="pageName">Daily Sales Person Task</h6>
</div>


<div class="row mx-1 px-2" style="background-color: #ffffff;">
    <div class="col-sm-12 grid-margin stretch-card justify-content-center mx-auto mt-3">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#create" class="nav-link active tblLable" id="create-tab" data-bs-toggle="tab" data-bs-target="#create" role="tab" aria-controls="create" aria-selected="true">Customer
                    Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#posting" class="nav-link tblLable" id="posting-tab" data-bs-toggle="tab" data-bs-target="#posting" role="tab" aria-controls="posting" aria-selected="false">Post to
                    Customer</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="create">
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
                                                <input class='radioRed' type="radio" id="uae_pickup2" name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioYellow' type="radio" id="uae_pickup3" name="uae_pickup1" value="3">
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

                            $per_page_record = 25;

                            if (isset($_GET["page"])) {
                                $page  = $_GET["page"];
                            } else {
                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page_record;

                            $query = "SELECT * FROM sales_daily_customer_informations WHERE created_by = '$user_id' LIMIT $start_from, $per_page_record ";
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
                    <?php

                    $query = "SELECT COUNT(*) FROM sales_daily_customer_informations";
                    $rs_result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];

                    echo "</br>";
                    // Number of pages required.   
                    $total_pages = ceil($total_records / $per_page_record);
                    $pagLink = "";

                    ?>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p class="">Showing <?php echo $page ?>/<?php echo $total_pages ?> of
                                <?php echo $total_pages ?> Entries</p>
                        </div>
                        <div class="">
                            <div class="pagination mb-4">
                                <?php


                                if ($page >= 2) {
                                    echo "<a class='page-link' href='sales_assistant_daily_task.php?page=" . ($page - 1) . "'>  Prev </a>";
                                }

                                for ($i = 1; $i <= $total_pages; $i++) {

                                    if ($i == $page) {
                                        $pagLink .= "<a class='active'href='sales_assistant_daily_task.php?page=" . $i . "'>" . $i . " </a>";
                                    } else {
                                        $pagLink .= "<a class='page-item page-link' href='sales_assistant_daily_task.php?page=" . $i . "'> " . $i . " </a>";
                                    }
                                };
                                echo $pagLink;

                                if ($page < $total_pages) {
                                    echo "<a class='page-link' href='sales_assistant_daily_task.php?page=" . ($page + 1) . "'>  Next </a>";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="posting">
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
                        <select name="country_name" id="create_customer_country" class="select2 w-75" onchange="showUser(this.value)">
                            <?php
                            $query = "SELECT country_name FROM sales_daily_customer_informations WHERE created_by = '$user_id' GROUP BY country_name";
                            $result = mysqli_query($connection, $query);

                            while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                <option value="<?php echo $resident_country["country_name"]; ?>">
                                    <?php echo strtoupper($resident_country["country_name"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">

                </div>

                <div class="">
                    <button class="btnT float-right mt-3 mb-4 w-25">Submit</button>
                </div>
            </div>
            <div class="tab-pane" id="messages">messages</div>
            <div class="tab-pane" id="settings">settings</div>
        </div>
    </div>
</div>

<script>
    $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');

    // 
    function go2Page() {
        var page = document.getElementById("page").value;
        var user_id = document.getElementById("page").value;
        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
        window.location.href = 'users.php?page=' + page;
    }
</script>

<?php require_once('../includes/footer.php'); ?>