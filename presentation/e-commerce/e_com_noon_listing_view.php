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

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

/* Card 1 --Count showing Styles */
.dashCard {
    /* width: 180px;
    height: 80px; */
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    color: black;
    padding: 10px 12px;
}

.dashCardTop {
    /* width: 100%; */
    display: flex;
    justify-content: space-between;
}

/* 
.cardIcon {
    width: 20%;
    padding: 5px 15px;
} */

.cardTitle {
    width: 100%;
    /* padding: 8px 15px; */
    margin-left: 10px;
    margin-top: 2px;
    font-weight: 500;
    font-size: 12px;
    color: #000000;
}

.cardValue {
    font-weight: 550;
    font-size: 15px;
    color: #000000;
    margin-top: 2px;
    margin-left: 5px;

}



/* //////////////////////// */

.viewListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

/* table sec styles */
.sampleTable {
    color: black;
    width: 100%;
}

.titleHeader {
    color: #168EB4;
    font-weight: 600;
    font-size: 24px;
}

.containerCard {
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
    border-radius: 5px;
}

.tableName {
    font-weight: 600;
    font-size: 24px;
    color: #000000;

}

.tableSec table {
    width: 100%;
    text-align: center;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;

}

.tableSpec {
    display: flex;
    justify-content: space-between;
    height: 40px;
    /* width: 100%; */
}

/* .tableSpec .leftSec {
    width: 30%;
} */

.tableSpec .rightSec {
    /* padding-top: 5px; */
    /* width: 70%; */
    display: flex;
    justify-content: flex-end;

}

.filterSec {
    display: flex;
    align-items: center;
    margin-right: 10px;
    font-size: 10px;

}

.searchSec {
    display: flex;
    align-items: center;
    margin-right: 10px;
}

.searchSec input {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
    width: 200px;

}

.searchSec i:hover {
    cursor: pointer;
}

.dateSec {
    display: flex;
    align-items: center;
    margin-right: 5px;
    font-size: 10px;

}

.dateSec input[type="date"] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
}

.dateSec i:hover {
    cursor: pointer;
}

.tablePagination {
    width: 100%;
    display: flex;
    justify-content: flex-end;

}

.page-item.active .page-link {
    background-color: #168EB4;
    border-color: #168EB4;
}

@media screen and (max-width:1024px) {
    .tableSpec .leftSec {
        /* width: 20%; */
        /* display: none; */
        order: 1;
    }

    .dateSec {
        display: none;
    }

    .tableSpec .rightSec {
        width: 80%;
        order: 2;
    }



}

@media screen and (max-width:426px) {
    .tableSpec {
        flex-direction: column;
        height: 150px;
    }

    .tableSpec .leftSec {
        display: none;
        order: 2;

    }

    .tableSpec .rightSec {
        order: 1;
        margin-bottom: 5px;

    }

    .searchSec {
        margin-bottom: 5px;
    }

    .dateSec {
        display: block;
    }

    .btnDownloadSec {
        margin-top: 5px;
    }

}

.tableWindow {
    height: 50vh;
}

/* //////////////// */

.DropDown {
    height: 30px;
    width: 83%;
    border-radius: 5px;
    border: 1px solid #A1A3A8;
    /* padding: 0px 10px; */
}

.modal-content {
    width: 70vw;
    margin-left: -300px;
}

.modal-content .tableSec {
    width: 100%;
    overflow-x: scroll;
    overflow-y: auto;
}

.modal-content td input[type="text"] {
    width: 100%;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
}

.editModel {
    width: 100%;
    overflow-x: auto;
    overflow-y: auto;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp;Dashboard</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">All Noon Listings</h6>
</div>

<div class="row noonViewBodySec">
    <div class="cardContainer">
        <!-- Card Section -->
        <div class="row mb-4">
            <!-- Card 1 -->
            <div class="dashCard m-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 18px;"></i>
                    </div>
                    <div class="cardTitle">All Listings</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">100</div>
                </div>

            </div>

            <div class="dashCard m-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 18px;"></i>
                    </div>
                    <div class="cardTitle">Approved</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">60/ <span style="font-size: 12px;">100</span> </div>
                </div>

            </div>
            <div class="dashCard m-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 18px;"></i>
                    </div>
                    <div class="cardTitle">Waiting</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">40/ <span style="font-size: 12px;">100</span> </div>
                </div>

            </div>
            <div class="dashCard m-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 18px;"></i>
                    </div>
                    <div class="cardTitle">FBN Done</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">20/ <span style="font-size: 12px;">100</span> </div>
                </div>

            </div>
            <div class="dashCard m-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 18px;"></i>
                    </div>
                    <div class="cardTitle">Promotion</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">28/ <span style="font-size: 12px;">100</span> </div>
                </div>

            </div>
            <!-- ////////////// -->

        </div>

        <!-- Card Section End -->

        <!-- View  listing Details -->
        <div class="viewDetailsSec">

            <div class="">
                <div class="viewListingHeading">
                    All Listings
                </div>
            </div>
            <hr class="sectionUnderline">

            <!--View table Section -->


            <div class="row">
                <div class="sampleTable">


                    <div class="containerCard">
                        <div class="tableSec px-3 row">

                            <!-- Table Tab and Search Bar Section  -->
                            <div class="tableSpec px-3 col-12">

                                <div class="leftSec">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">ALL</button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="rightSec">
                                    <div class="row">
                                        <!-- filter Section -->
                                        <div class="filterSec">
                                            <div class="statusFilter">
                                                <select class="DropDown" aria-label="Default select example">
                                                    <option selected>Filter Status</option>
                                                    <option value="prepared for listing">
                                                        <?php echo 'Prepared for listing'; ?>
                                                    </option>
                                                    <option value="listing submitted">
                                                        <?php echo 'Listing submitted'; ?>
                                                    </option>
                                                    <option value="listing approved">
                                                        <?php echo 'Listing approved'; ?>
                                                    </option>
                                                    <option value="listed done on noon">
                                                        <?php echo 'Listed done on noon'; ?>
                                                    </option>
                                                    <option value="promotion">
                                                        <?php echo 'Promotion'; ?>
                                                    </option>
                                                    <option value="FBN Done">
                                                        <?php echo 'FBN Done'; ?>
                                                    </option>
                                                    <option value="S/O Created">
                                                        <?php echo 'S/O Created'; ?>
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="promoFilter">
                                                <select class="DropDown" aria-label="Default select example">
                                                    <!-- <option option selected>--Select Promotion Type--</option> -->
                                                    <option selected>Filter Promo</option>

                                                    <option value="weekly">
                                                        <?php echo 'weekly'; ?>
                                                    </option>
                                                    <option value="11:11">
                                                        <?php echo '11:11'; ?>
                                                    </option>
                                                    <option value="B friday">
                                                        <?php echo 'B friday'; ?>
                                                    </option>
                                                    <option value="Christmas">
                                                        <?php echo 'Christmas'; ?>
                                                    </option>
                                                    <option value="Ramadan">
                                                        <?php echo 'Ramadan'; ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Search section -->
                                        <div class="searchSec">
                                            <input type="text">
                                            <i class="fa-solid fa-magnifying-glass ml-2"
                                                style="color: #168EB4; font-size:20px"></i>
                                        </div>
                                        <!-- Filter date Section -->
                                        <div class="dateSec">
                                            <input type="date" name="" id="" placeholder="date">
                                            <input type="date" name="" id="">
                                            <i class="fa-solid fa-calendar ml-2"
                                                style="color: #168EB4; font-size:20px"></i>
                                            <!-- <div><i class="fa-solid fa-calender  ml-2" style="color: #168EB4; font-size:20px"></i> -->
                                        </div>
                                        <!-- download Btn Sec -->
                                        <div class="btnDownloadSec">
                                            <button class=" btn btn-info"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- ////////////////////Table from Here///////////////////// -->

                            <div class="tableWindow table-responsive mb-4">
                                <table class="table mx-3 table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Mark</th>
                                            <th>Status</th>
                                            <th>Promo Type</th>
                                            <th>Partner SKU</th>
                                            <th>Device</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Processor</th>
                                            <th>Gen</th>
                                            <th>RAM</th>
                                            <th>HDD</th>
                                            <th>Qty</th>
                                            <th>Wholesale Price</th>
                                            <th>Current Noon Price</th>
                                            <th>Other Noon Price</th>
                                            <th>Amazon Price</th>
                                            <th>Cartlow Price</th>
                                            <th>Cost with WIndows AC </th>
                                            <th>Gross Profit </th>
                                            <th>Noon Charges </th>
                                            <th>Noon Sale Price </th>
                                            <th>Noon Paid </th>
                                            <th>Noon Net Profit </th>
                                            <th>Profit Precentage </th>
                                            <th>EXP Date </th>
                                            <th>Created Date </th>
                                            <th>updated Date </th>
                                            <th>Created By </th>
                                            <th>
                                                <div style="width: 150px;">
                                                    Action Buttons
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>Listing Submited</td>
                                            <td>Weekly</td>
                                            <td>123123131</td>
                                            <td>Laptop</td>
                                            <td>Lenovo</td>
                                            <td>Thinkpad X1 Yoga G1</td>
                                            <td>i5</td>
                                            <td>6th</td>
                                            <td>8GB</td>
                                            <td>256GB</td>
                                            <td>10</td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>1000 <span style="font-size: x-small;">AED</span> </td>
                                            <td>10%</td>
                                            <td>2023-01-30</td>
                                            <td>2023-01-30</td>
                                            <td>2023-01-30</td>
                                            <td>Sales Person 1</td>

                                            <td>
                                                <div class="">
                                                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View</button> -->
                                                    <button class="btn" data-toggle="modal" data-target="#myModal">
                                                        <i class=" text-info fa-solid fa-pen-to-square">
                                                        </i>
                                                    </button>

                                                    <button class=" btn"><i
                                                            class="text-danger fa-solid fa-trash"></i></button>
                                                    <button class="btn" data-toggle="modal"
                                                        data-target="#myModalFull"><i
                                                            class="text-success fa-solid fa-eye"></i></button>
                                                </div>
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!--Update model-->
                            <div id="myModal" class="modal fade editModel" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tableSec row col-md-12">
                                                <table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>
                                                                <div style="width: 120px;">
                                                                    Status
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div style="width: 100px;">
                                                                    Promo Type
                                                                </div>
                                                            </th>
                                                            <th>Partner SKU</th>
                                                            <th>Device</th>
                                                            <th>Brand</th>
                                                            <th>
                                                                <div style="width: 100px;">
                                                                    Model
                                                                </div>
                                                            </th>
                                                            <th>CPU</th>
                                                            <th>Gen</th>
                                                            <th>RAM</th>
                                                            <th>HDD</th>
                                                            <th>QTY</th>
                                                            <th>
                                                                <div>
                                                                    Wholesale Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Current Noon Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Other Noon Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Amazon Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Cartlow Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Cost with Windows AC
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Gross Profit
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Noon Charges
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Noon Sale Price
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Noon Paid
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Noon Net Profit
                                                                </div>
                                                            </th>
                                                            <th>Profit Precentage</th>
                                                            <th>
                                                                <div>
                                                                    Exp Date
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Created Date
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Updated Date
                                                                </div>
                                                            </th>
                                                            <th>Created By</th>
                                                            <th>
                                                                <div style="width: 100px;">
                                                                    Action Buttons
                                                                </div>
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <select class="DropDown"
                                                                        aria-label="Default select example">
                                                                        <!-- <option selected>--Select Status--</option> -->
                                                                        <option value="prepared for listing">
                                                                            <?php echo 'Prepared for listing'; ?>
                                                                        </option>
                                                                        <option value="listing submitted">
                                                                            <?php echo 'Listing submitted'; ?>
                                                                        </option>
                                                                        <option value="listing approved">
                                                                            <?php echo 'Listing approved'; ?>
                                                                        </option>
                                                                        <option value="listed done on noon">
                                                                            <?php echo 'Listed done on noon'; ?>
                                                                        </option>
                                                                        <option value="promotion">
                                                                            <?php echo 'Promotion'; ?>
                                                                        </option>
                                                                        <option value="FBN Done">
                                                                            <?php echo 'FBN Done'; ?>
                                                                        </option>
                                                                        <option value="S/O Created">
                                                                            <?php echo 'S/O Created'; ?>
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <select class="DropDown"
                                                                        aria-label="Default select example">
                                                                        <!-- <option option selected>--Select Promotion Type--</option> -->
                                                                        <option selected value="None">
                                                                            <?php echo 'None'; ?>
                                                                        </option>

                                                                        <option value="weekly">
                                                                            <?php echo 'weekly'; ?>
                                                                        </option>
                                                                        <option value="11:11">
                                                                            <?php echo '11:11'; ?>
                                                                        </option>
                                                                        <option value="B friday">
                                                                            <?php echo 'B friday'; ?>
                                                                        </option>
                                                                        <option value="Christmas">
                                                                            <?php echo 'Christmas'; ?>
                                                                        </option>
                                                                        <option value="Ramadan">
                                                                            <?php echo 'Ramadan'; ?>
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>123123131</td>
                                                            <td>Laptop</td>
                                                            <td>Lenovo</td>
                                                            <td>Thinkpad X1 Yoga G1</td>
                                                            <td>i5</td>
                                                            <td>6th</td>
                                                            <td>8GB</td>
                                                            <td>256GB</td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="10">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="10%">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="1000">
                                                                </div>
                                                            </td>

                                                            <td>2023-01-30</td>
                                                            <td>2023-01-30</td>
                                                            <td>2023-01-30</td>
                                                            <td>Sales Person 1</td>
                                                            <td>

                                                                <div class="">
                                                                    <button class="btnTB">Update</button>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ////////// -->


                            <!-- full View Model -->

                            <!-- model-->
                            <div id="myModalFull" class="modal fade editModel" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tableSec row col-md-12">
                                                <table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>
                                                                <div>
                                                                    Family
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Product Type
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    Product SUB TYpe
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    What's In the box
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div>
                                                                    GTIN
                                                                </div>
                                                            </th>
                                                            <th>Partner SKU</th>
                                                            <th>Brand</th>
                                                            <th>
                                                                <div>
                                                                    Product Title
                                                                </div>
                                                            </th>
                                                            <th>Country of Origin</th>
                                                            <th>Warrenty Years</th>
                                                            <th>Model Year</th>
                                                            <th>Model Name</th>
                                                            <th>Model Number</th>
                                                            <th>
                                                                Colour Name
                                                            </th>
                                                            <th>
                                                                Colour Family
                                                            </th>
                                                            <th>
                                                                Keyboard Language
                                                            </th>
                                                            <th>
                                                                Item Condition
                                                            </th>
                                                            <th>
                                                                Grade
                                                            </th>
                                                            <th>
                                                                Screen Size
                                                            </th>
                                                            <th>
                                                                Screen Size Unit
                                                            </th>
                                                            <th>
                                                                RAM Size
                                                            </th>
                                                            <th>
                                                                RAM Size Unit
                                                            </th>
                                                            <th>
                                                                RAM Type
                                                            </th>
                                                            <th>
                                                                Internal Memory
                                                            </th>
                                                            <th>Internal Memory Unit</th>
                                                            <th>
                                                                Storage Type
                                                            </th>
                                                            <th>
                                                                HDD Rotation
                                                            </th>
                                                            <th>
                                                                HDD Rotation Unit
                                                            </th>
                                                            <th>Processor Brand</th>
                                                            <th>
                                                                Processor Type
                                                            </th>
                                                            <th>
                                                                Processor Generation
                                                            </th>
                                                            <th>
                                                                Number of Cores
                                                            </th>
                                                            <th>
                                                                Processor Version
                                                            </th>
                                                            <th>
                                                                Processor Speed
                                                            </th>
                                                            <th>
                                                                Processor Speed Unit
                                                            </th>
                                                            <th>
                                                                Graphic Memory
                                                            </th>
                                                            <th>
                                                                Graphic Memory Unit
                                                            </th>
                                                            <th>
                                                                Graphic Card
                                                            </th>
                                                            <th>
                                                                Graphic Card Version
                                                            </th>
                                                            <th>
                                                                Graphic Type
                                                            </th>
                                                            <th>
                                                                Operating System
                                                            </th>
                                                            <th>
                                                                Operating System Version
                                                            </th>
                                                            <th>
                                                                Display Type
                                                            </th>
                                                            <th>Display Resolution</th>
                                                            <th>Display Resolution Type</th>
                                                            <th>Screen Features</th>
                                                            <th>Pixels Per Inch</th>
                                                            <th>Camera Type</th>
                                                            <th>Primary Camera Resolution</th>
                                                            <th>Primary Camera Resolution Unit</th>
                                                            <th>Secondary Camera Resolution</th>
                                                            <th>Secondary Camera Resolution Unit</th>
                                                            <th>Average Battery Life</th>
                                                            <th>Battery Type</th>
                                                            <th>Battery Size</th>
                                                            <th>Battery Size Unit</th>
                                                            <th>Wireless</th>
                                                            <th>Audio Jack</th>
                                                            <th>Number of HDMI Ports</th>
                                                            <th>Connection Type</th>
                                                            <th>HDMI Output</th>
                                                            <th>Number of USB Ports</th>
                                                            <th>Adobe Flash Competible</th>
                                                            <th>SD Card Slot</th>
                                                            <th>SIM Type</th>
                                                            <th>Long Description</th>
                                                            <th>Feature 1</th>
                                                            <th>Feature 2</th>
                                                            <th>Feature 3</th>
                                                            <th>Feature 4</th>
                                                            <th>Feature 5</th>
                                                            <th>Feature Bullet 1</th>
                                                            <th>Feature Bullet 2</th>
                                                            <th>Feature Bullet 3</th>
                                                            <th>Feature Bullet 4</th>
                                                            <th>Feature Bullet 5</th>
                                                            <th>Product Length</th>
                                                            <th>Product Length Unit</th>
                                                            <th>Product Height</th>
                                                            <th>Product Height Unit</th>
                                                            <th>Product Width/Depth</th>
                                                            <th>Product Width/Depth Unit</th>
                                                            <th>Product Weight</th>
                                                            <th>Product Weight Unit</th>
                                                            <th>Image URL 1</th>
                                                            <th>Image URL 2</th>
                                                            <th>Image URL 3</th>
                                                            <th>Image URL 4</th>
                                                            <th>Image URL 5</th>
                                                            <th>Image URL 6</th>
                                                            <th>Image URL 7</th>
                                                            <th>Shipping Length</th>
                                                            <th>Shipping Length Unit</th>
                                                            <th>Shipping Height</th>
                                                            <th>Shipping Height Unit</th>
                                                            <th>Shipping Width/Depth</th>
                                                            <th>Shipping Width/Depth Unit</th>
                                                            <th>Shipping Weight</th>
                                                            <th>Shipping Weight Unit</th>
                                                            <th>Shipping Destination</th>
                                                            <th>Recomended Retail Price AE</th>
                                                            <th>Recomended Retail Price AE Unit</th>
                                                            <th>Recomended Retail Price SA</th>
                                                            <th>Recomended Retail Price SA Unit</th>
                                                            <th>Recomended Retail Price EG</th>
                                                            <th>Recomended Retail Price EG Unit</th>
                                                            <th>HS Code</th>
                                                            <th>Monitor Response Time</th>
                                                            <th>Refresh Rates</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>

                                                            </td>

                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>

                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ////////// -->


                            <!-- ///////////// -->

                            <div class="tablePagination">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span class="visually-hidden"></span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>


                        </div>
                        <br>
                        <br>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>




<?php require_once('../includes/footer.php') ?>