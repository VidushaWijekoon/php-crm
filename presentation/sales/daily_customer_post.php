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
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./daily_create_customer.php">Create Customer Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./daily_customer_post">Daily Posting</a>
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