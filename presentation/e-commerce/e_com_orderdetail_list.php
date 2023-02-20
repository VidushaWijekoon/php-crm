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

.createListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

/* Table Sec */


.tableName {
    font-weight: 600;
    font-size: 24px;
    color: #000000;

}



.tableSec table {
    width: 100%;
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



.tableSpec .rightSec {
    /* padding-top: 5px; */
    /* width: 70%; */
    display: flex;
    justify-content: flex-end;

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
        width: 20%;
        order: 1;
    }

    .tableSpec .rightSec {
        width: 80%;
        order: 2;
    }



}

@media screen and (max-width:426px) {
    .tableSpec {
        flex-direction: column;
        height: 110px;
    }

    .tableSpec .leftSec {
        order: 2;

    }



    .tableSpec .rightSec {
        order: 1;
        margin-bottom: 5px;

    }

    .searchSec {
        margin-bottom: 5px;
    }

}

.tabPanal {
    display: flex;
    justify-content: space-between;
    width: 100%;

    /* width: 20%; */
}

.packingItemsTable {
    width: 100%;
    overflow-x: auto;
    overflow-y: auto;
}


/* ////// */
</style>

<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
    <a href="./e_com_packing.php"><i class="fa-solid fa-left"></i>&nbsp;packing</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">E-Commerce Order Details</h6>
</div>

<div class="row ecomBodySec">
    <div class="cardContainer">

        <!-- ///////////////////Order Details Table sec -->
        <div class="orderDetailsSec">
            <div class="tableSec mx-3 row">

                <!-- Table Tab and Search Bar Section  -->
                <div class="tableSpec px-3 col-12">

                    <div class="leftSec">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Order</button>
                            </li>

                        </ul>
                    </div>
                    <div class="rightSec">
                        <div class="row">
                            <!-- Search section -->
                            <div class="searchSec">
                                <input type="text">
                                <i class="fa-solid fa-magnifying-glass ml-2" style="color: #168EB4; font-size:20px"></i>

                            </div>
                            <!-- Filter Section -->
                            <div class="dateSec">
                                <input type="date" name="" id="">
                                <input type="date" name="" id="">
                                <i class="fa-solid fa-calendar ml-2" style="color: #168EB4; font-size:20px"></i>
                                <!-- <div><i class="fa-solid fa-calender  ml-2" style="color: #168EB4; font-size:20px"></i> -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ////////////////////Order Details Table from Here///////////////////// -->


                <table class="table mx-3 table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">ASIN/SKU</th>
                            <th scope="col">Device</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Processor</th>
                            <th scope="col">Core</th>
                            <th scope="col">Gen</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Touch</th>
                            <th scope="col">Screen Size</th>
                            <th scope="col">Resolution</th>
                            <th scope="col">HDD Type</th>
                            <th scope="col">HDD Capacity</th>
                            <th scope="col">Ram</th>
                            <th scope="col">OS</th>
                            <th scope="col">Inventory Location</th>
                            <th scope="col">Graphic Brand</th>
                            <th scope="col">Graphic Capacity</th>
                            <th scope="col">Condition</th>
                            <th scope="col">Charger Watt</th>
                            <th scope="col">Charger Type</th>
                            <th scope="col">Charger Pin</th>
                            <th scope="col">Packing Type</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">QTY</th>
                            <th scope="col">DeadLine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="color:black">1</th>
                            <td>abcd123</td>
                            <td>AS123</td>
                            <td>Laptop</td>
                            <td>Lenovo</td>
                            <td>Thinkpad t460</td>
                            <td>Intel</td>
                            <td>i5-3100U</td>
                            <td>3</td>
                            <td>2.80GHz</td>
                            <td>No</td>
                            <td>14</td>
                            <td>1366 x 768</td>
                            <td>SSD</td>
                            <td>256GB</td>
                            <td>8GB</td>
                            <td>Original Windows 10 pro</td>
                            <td>E-Commerce</td>
                            <td>Nvidia</td>
                            <td>4GB</td>
                            <td>Refurbished</td>
                            <td>65W</td>
                            <td>Uk</td>
                            <td>Blue</td>
                            <td>Single Box</td>
                            <td>FBN</td>
                            <td>10</td>

                            <td>2022-10-31</td>
                        </tr>

                    </tbody>
                </table>




            </div>
        </div>
        <!-- /////////////////table sec end ////////////////////////// -->

        <div class="packingItemsViewSec">

            <div class="mt-5">
                <div class="createListingHeading">
                    Packing Item Details

                </div>
            </div>
            <hr class="sectionUnderline">
            <div class="packingItemsTableSec px-2">
                <div class="packingListTable px-2">
                    <!-- tab section -->

                    <!-- Packing Items Details table -->

                    <div class="tabPanal">
                        <!-- Tabs Section -->
                        <div class="tabSec">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <div class="nav-link active" id="packed-tab" data-toggle="tab" href="#packed"
                                        role="tab" aria-controls="packed" aria-selected="true">
                                        <span style="color: #7a7575; font-weight: 700;">Packed Items</span>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                        aria-controls="all" aria-selected="true">
                                        <span style="color: #7a7575; font-weight: 700;">All Items</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- tab section end -->


                        <!-- filter Section -->

                        <div class="filterSec pb-1">
                            <!-- <div class="row"> -->
                            <!-- <div class=""> -->
                            <!-- <select class="DropDown" name="" id="">
                                <option selected value="">Filter By Status</option>
                                <option value="">Not Packed</option>
                                <option value="">Packed</option>
                            </select> -->
                            <!-- </div> -->
                            <!-- <div class=""> -->
                            <button class="btn border"> <i class="fa-solid fa-download text-info"></i></button>
                            <button class="btn border"> <i class="fa-solid fa-print text-success"></i> </button>
                            <!-- </div> -->


                            <!-- </div> -->

                        </div>
                        <!-- end filtor Sec -->
                    </div>

                    <!-- Table Section Section -->

                    <div class="tab-content" id="myTabContent">

                        <div class="packingItemsTable tab-pane fade show active" id="packed" role="tabpanel"
                            aria-labelledby="packed-tab">

                            <!-- Packed Items Table -->
                            <table class="table table-hover text-center">
                                <thead style="background-color: #fff;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">S/O NO.</th>
                                        <th scope="col">Alsakb Number</th>
                                        <th scope="col">ASIN/SKU</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Core</th>
                                        <th scope="col">Gen.</th>
                                        <th scope="col">Speed</th>
                                        <th scope="col">Touch</th>
                                        <th scope="col">HDD</th>
                                        <th scope="col">RAM</th>
                                        <th scope="col">Graphic Brand</th>
                                        <th scope="col">Graphic Capacity</th>
                                        <th scope="col">DeadLine</th>
                                        <th scope="col">Packed Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="color:black">1</th>
                                        <td>abcd123</td>
                                        <td>alsakb12345</td>
                                        <td>As123</td>
                                        <td>Lenovo</td>
                                        <td>Thinkpad t460</td>
                                        <td>I5-3100U</td>
                                        <td>3</td>
                                        <td>2.80Ghz</td>
                                        <td>No</td>
                                        <td>256GB</td>
                                        <td>8GB</td>
                                        <td>Nvidia</td>
                                        <td>4GB</td>
                                        <td>2022-10-31</td>
                                        <td>2022-10-31 10:31</td>
                                    </tr>
                                    <tr>
                                        <th style="color:black">1</th>
                                        <td>abcd123</td>
                                        <td>alsakb12345</td>
                                        <td>AS123</td>
                                        <td>Lenovo</td>
                                        <td>Thinkpad t460</td>
                                        <td>I5-3100U</td>
                                        <td>3</td>
                                        <td>2.80Ghz</td>
                                        <td>No</td>
                                        <td>256GB</td>
                                        <td>8GB</td>
                                        <td>Nvidia</td>
                                        <td>4GB</td>
                                        <td>2022-10-31</td>
                                        <td>2022-10-31 10:31</td>
                                    </tr>


                                </tbody>
                            </table>
                            <!-- //// -->
                        </div>
                        <div class="packingItemsTable tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">

                            <!-- view All items Table -->
                            <table class="table table-hover text-center">
                                <thead style="background-color: #fff;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">S/O NO.</th>
                                        <th scope="col">Alsakb Number</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Core</th>
                                        <th scope="col">Gen</th>
                                        <th scope="col">Speed</th>
                                        <th scope="col">Touch</th>
                                        <th scope="col">HDD</th>
                                        <th scope="col">RAM</th>
                                        <th scope="col">Graphic Brand</th>
                                        <th scope="col">Graphic Capacity</th>
                                        <th scope="col">DeadLine</th>
                                        <th scope="col">Remaining Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="color:black">1</th>
                                        <td>abcd123</td>
                                        <td>alsakb12345</td>
                                        <td>Lenovo</td>
                                        <td>Thinkpad t460</td>
                                        <td>I5-3100U</td>
                                        <td>3</td>
                                        <td>2.80Ghz</td>
                                        <td>No</td>
                                        <td>256GB</td>
                                        <td>8GB</td>
                                        <td>Nvidia</td>
                                        <td>4GB</td>
                                        <td>2022-10-31</td>
                                        <td class="text-info">10Hr 13Min</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- //// -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>



<?php
require_once('../includes/footer.php')

?>