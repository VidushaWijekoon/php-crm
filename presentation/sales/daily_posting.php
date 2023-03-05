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
$choose_country = null;
$load_country = $_GET['choose_country'];

if (isset($_POST['country_name'])) {
    $choose_country = mysqli_real_escape_string($connection, $_POST['customer_country_name']);
    header("Location: daily_posting?choose_country=$choose_country");
}

if (isset($_POST['create_post'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $post_model_1 = mysqli_real_escape_string($connection, $_POST['post_model_1']);
    $post_model_2 = mysqli_real_escape_string($connection, $_POST['post_model_2']);
    $model = mysqli_real_escape_string($connection, $_POST['model']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $uae_pickup1 = mysqli_real_escape_string($connection, $_POST['uae_pickup1']);

    $query1 = "UPDATE sales_daily_customer_informations SET post_model_1 = '$post_model_1', post_model_2 = '$post_model_2', 
                        customer_asking_model = '$model', customer_asking_price = '$price', uae_pickup1 = '$uae_pickup1', updated_time = now() 
                    WHERE id = '$id'";
    echo $query1;
    $run = mysqli_query($connection, $query1);
    if ($run) {
        header("Location: daily_posting?choose_country=$load_country");
    } else {
        echo "Sorry not updated ";
    }
}

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

<div class="row pageNavigation pt-2 pl-2">
    <a href="./sales_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashbord</a>
</div>
<div class="row pl-4 pt-2">
    <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
    <h6 class="pageName">Daily Posting to Customer</h6>
</div>


<div class="row mx-1 px-2" style="background-color: #ffffff;">
    <div class="col-sm-12 grid-margin stretch-card justify-content-center mx-auto mt-3">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./daily_create_customer.php">Create Customer Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./daily_posting">Create Daily Posting</a>
            </li>
        </ul>

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
        <div class="">
            <form action="" method="POST">
                <div class="d-flex mb-3">
                    <span class="mx-2" style="font-size: 12px; margin-top: 5px">Please Select Country First: </span>
                    <div class="mx-1">
                        <select name="customer_country_name" id="create_customer_country" class="select2 w-100" onchange="showUser(this.value)">
                            <?php
                            if ($load_country != 0) { ?>
                                <option value="<?php echo $load_country ?>" selected><?php echo $load_country ?></option>
                            <?php } else { ?>
                                <option selected>--Select Resident Country--</option>
                            <?php }
                            $query = "SELECT country_name FROM sales_daily_customer_informations WHERE created_by = '$user_id' GROUP BY country_name";
                            $result = mysqli_query($connection, $query);

                            while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                <option value="<?php echo $resident_country["country_name"]; ?>">
                                    <?php echo strtoupper($resident_country["country_name"]); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" name="country_name" class="btn btn-xs btnTB">Choose Country</button>
                </div>
            </form>
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
                        <th scope="col">Status</th>
                        <th scope="col">Posted Time</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                    <?php

                    $per_page_record = 100;
                    $post_model_1 = null;
                    $post_model_2 = null;
                    $customer_asking_model = null;
                    $customer_asking_price = null;
                    $uae_pickup1 = null;
                    $updated_time = null;

                    if (isset($_GET["page"])) {
                        $page  = $_GET["page"];
                    } else {
                        $page = 1;
                    }

                    $start_from = ($page - 1) * $per_page_record;

                    $q1 = "SELECT * FROM sales_daily_customer_informations 
                            WHERE country_name = '$load_country' AND created_by = '$user_id' LIMIT $start_from, $per_page_record ";
                    $result = mysqli_query($connection, $q1);

                    while ($xd = mysqli_fetch_array($result)) {
                        $customer_name = $xd['customer_name'];
                        $customer_phone_code = $xd['customer_phone_code'];
                        $customer_whatsapp_code = $xd['customer_whatsapp_code'];
                        $platform = $xd['platform'];
                        $model_selling_buying = $xd['model_selling_buying'];
                        $post_model_1 = $xd['post_model_1'];
                        $post_model_2 = $xd['post_model_2'];
                        $customer_asking_model = $xd['customer_asking_model'];
                        $customer_asking_price = $xd['customer_asking_price'];
                        $uae_pickup1 = $xd['uae_pickup1'];
                        $updated_time = $xd['updated_time'];

                        strtotime($updated_time);
                        $x = date($updated_time);

                        $today = Date('Y-m-d 00:00:00');

                        //Create the first date object that will assign the current date
                        $dateVal1 = date_create($today);
                        //Create the second date object that will assign a particular date
                        $dateVal2 = date_create($updated_time);

                        $dateVal3 = date_create($updated_time);

                        //Calculate the interval from the first date to the second date
                        $ival = date_diff($dateVal2, $dateVal1);

                        //Calculate the interval from the second date to the first date
                        $ival = date_diff($dateVal1, $dateVal2);
                        $x = $ival->format('%r%a');


                    ?>

                        <tr>
                            <form action="" method="POST">
                                <td class="d-none"><input type="text" name="id" value="<?php echo $xd['id']; ?>"></td>
                                <td>
                                    <p><?php echo $customer_name; ?></p>
                                </td>
                                <td>
                                    <p><?php echo "+ " . $customer_phone_code . " " . $customer_whatsapp_code ?></p>
                                </td>
                                <td>
                                    <p>
                                        <?php
                                        if ($platform == 1) echo "Facebook";
                                        if ($platform == 2) echo "Instgram";
                                        if ($platform == 3) echo "Lazada";
                                        if ($platform == 4) echo "Shopee";
                                        if ($platform == 5) echo "Tokopedia";
                                        if ($platform == 6) echo "Amazon.com";
                                        if ($platform == 7) echo "Amazon.uk";
                                        if ($platform == 8) echo "Tiktok";
                                        if ($platform == 9) echo "Loopzap";
                                        if ($platform == 10) echo "Pigiame";
                                        if ($platform == 11) echo "Kebuysell";
                                        if ($platform == 12) echo "Kenya Group";
                                        if ($platform == 13) echo "Loozap";
                                        if ($platform == 14) echo "Website";
                                        if ($platform == 15) echo "jiji.co.ke";
                                        if ($platform == 16) echo "olist.ng";
                                        if ($platform == 17) echo "jiji.ng";
                                        if ($platform == 18) echo "Google";
                                        if ($platform == 19) echo "Pc Exporters";
                                        if ($platform == 20) echo "Jumia";
                                        if ($platform == 21) echo "The Brokersite";
                                        if ($platform == 22) echo "Avechi.com";
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p><?php echo $model_selling_buying ?></p>
                                </td>
                                <td>

                                    <?php if (($x <= '-7') || ($post_model_1 == null)) { ?>
                                        <input type="text" name="post_model_1">
                                    <?php } else { ?>
                                        <p> <?php echo $post_model_1 ?></p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (($x <= '-7') || $post_model_2 == null) { ?>
                                        <input type="text" name="post_model_2">
                                    <?php } else { ?>
                                        <p> <?php echo $post_model_2 ?></p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (($x <= '-7') || $customer_asking_model == null) { ?>
                                        <input type="text" name="model">
                                    <?php } else { ?>
                                        <p> <?php echo $customer_asking_model ?></p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (($x <= '-7') || $customer_asking_price == null) { ?>
                                        <input type="text" name="price">
                                    <?php } else { ?>
                                        <p> <?php echo $customer_asking_price ?></p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (($x <= '-7') || ($uae_pickup1 == null)) { ?>
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="1">
                                                <div class="label_values" for="uae_pickup1">Yes</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioRed' type="radio" id="uae_pickup2" name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioYellow' type="radio" id="uae_pickup3" name="uae_pickup1" value="3">
                                                <div class="label_values" for="uae_pickup3">N/A</div>
                                            </div>
                                        </div>
                                    <?php }
                                    if (($x <= '-7') || ($uae_pickup1 == 1)) { ?>
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="1" checked disabled>
                                                <div class="label_values" for="uae_pickup1">Yes</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioRed' type="radio" id="uae_pickup2" disabled name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioYellow' type="radio" id="uae_pickup3" disabled name="uae_pickup1" value="3">
                                                <div class="label_values" for="uae_pickup3">N/A</div>
                                            </div>
                                        </div>
                                    <?php }
                                    if (($x <= '-7') || ($uae_pickup1 == 0)) { ?>
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="1" disabled>
                                                <div class="label_values" for="uae_pickup1">Yes</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioRed' type="radio" id="uae_pickup2" checked disabled name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioYellow' type="radio" id="uae_pickup3" disabled name="uae_pickup1" value="3">
                                                <div class="label_values" for="uae_pickup3">N/A</div>
                                            </div>
                                        </div>
                                    <?php }
                                    if (($x <= '-7') || ($uae_pickup1 == 3)) { ?>
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-2">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="1" disabled>
                                                <div class="label_values" for="uae_pickup1">Yes</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioRed' type="radio" id="uae_pickup2" disabled name="uae_pickup1" value="0">
                                                <div class="label_values" for="uae_pickup2">No</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <input class='radioYellow' type="radio" id="uae_pickup3" checked disabled name="uae_pickup1" value="3">
                                                <div class="label_values" for="uae_pickup3">N/A</div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if (($x <= '-7') || ($updated_time == null)) { ?>
                                        <button type="submit" name="create_post" style="background: transparent; border:none;">
                                            <i class="fa-solid fa-circle-plus fa-2x text-primary"></i>
                                        </button>
                                    <?php }
                                    if (($x <= '-7') || ($updated_time != null)) { ?>
                                        <button type="button" class="btn btn-xs btn-success" disabled>Posted </button>
                                    <?php } ?>
                                </td>


                                <td>
                                    <p><?php echo $updated_time; ?></p>
                                </td>
                            </form>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

            <?php

            $x1 = "SELECT COUNT(*) FROM sales_daily_customer_informations WHERE country_name = '$load_country'";
            $rs_result = mysqli_query($connection, $x1);
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
                            echo "<a class='page-link' href='daily_posting.php?country_name=$load_country&page=" . ($page - 1) . "'>  Prev </a>";
                        }

                        for ($i = 1; $i <= $total_pages; $i++) {

                            if ($i == $page) {
                                $pagLink .= "<a class='active'href='daily_posting.php?country_name=$load_country&page=" . $i . "'>" . $i . " </a>";
                            } else {
                                $pagLink .= "<a class='page-item page-link' href='daily_posting.php?country_name=$load_country&page=" . $i . "'> " . $i . " </a>";
                            }
                        };
                        echo $pagLink;

                        if ($page < $total_pages) {
                            echo "<a class='page-link' href='daily_posting.php?country_name=$load_country&page=" . ($page + 1) . "'>  Next </a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../plugins/jquery/jquery.min.js"></script>

<script>
    function go2Page() {
        var page = document.getElementById("page").value;
        var user_id = document.getElementById("page").value;
        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
        window.location.href = 'daily_posting?country_name=' + $load_country + '&page=' + page;
    }
</script>

<?php include_once('../includes/footer.php');  ?>