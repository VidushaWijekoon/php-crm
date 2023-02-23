<?php
require_once('../includes/header.php')
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

.ecomViewOrdersBodySec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;

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

.tableSpec .leftSec {
    display: flex;
}

.tableSpec .rightSec {
    /* padding-top: 5px; */

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
    .dropdownFilter {
        display: none;
    }

    .tableSpec .leftSec {
        width: 40%;
        order: 1;
    }

    .tableSpec .rightSec {
        width: 60%;
        order: 2;
    }

    .searchSec input {
        width: 100px;
    }



}

@media screen and (max-width:426px) {
    .tableSpec {
        flex-direction: column;
        height: 110px;
    }

    .tableSpec .leftSec {
        order: 2;
        display: flex;
        flex-direction: row;
        width: 100%;

    }

    .tableSpec .rightSec {
        order: 1;
        margin-bottom: 5px;
        width: 100%;

    }

    .searchSec {
        margin-bottom: 5px;
    }

    .searchSec input {
        width: 200px;
    }

}

.tableSec1 {
    height: 500px;
    overflow-y: auto;
    overflow-x: auto;
    width: 100%;
}

.dropdownFilter {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
}
</style>

<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">E-Commerce FBA (Amazon) Orders</h6>
</div>

<div class="ecomViewOrdersBodySec">
    <div class="cardContainer">

        <div class="tableSec mx-3 row">


            <!-- Table Tab and Search Bar Section  -->
            <div class="tableSpec px-3 col-12">

                <div class="leftSec">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                            <div class="nav-link active" id="open-tab" data-toggle="tab" href="#open" role="tab"
                                aria-controls="profile" aria-selected="false">
                                <span style="color: #7a7575; font-weight: 700">Open </span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link" id="closed-tab" data-toggle="tab" href="#closed" role="tab"
                                aria-controls="contact" aria-selected="false">
                                <span style="color: #7a7575; font-weight: 700">Packed </span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                aria-controls="home" aria-selected="true">
                                <span style="color: #7a7575; font-weight: 700;">All </span>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="rightSec">
                    <div class="row">

                        <!-- Filter Section -->
                        <div class="dateSec">
                            <input type="date" name="" id="fromDate" class="mr-1">
                            <input type="date" name="" id="toDate">
                            <i class="fa-solid fa-calendar ml-2" style="color: #168EB4; font-size:20px"></i>
                            <!-- <select name="" id="" class="dropdownFilter ml-2">
                                <option value="">Order Type</option>
                                <option value="">Direct Amazon</option>
                                <option value="">Direct Noon</option>
                                <option value="">Direct Cartlow</option>
                            </select> -->
                        </div>
                        <!-- //// -->
                        <!-- Search section -->
                        <div class="searchSec">
                            <input type="text">
                            <i class="fa-solid fa-magnifying-glass ml-2" style="color: #168EB4; font-size:20px"></i>

                        </div>
                        <!-- ///// -->
                    </div>
                </div>

            </div>

            <!-- ////////////////////Table from Here///////////////////// -->
            <div class="tab-content tableSec1" id="myTabContent">

                <div class="tab-pane fade show active" id="open" role="tabpanel" aria-labelledby="open-tab">
                    <table class="table table-hover text-center">
                        <thead style="background-color: #fff;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">S/O NO. </th>
                                <th scope="col">Order NO.</th>
                                <th scope="col">ASIN</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Order Type</th>
                                <th scope="col">Order Details</th>

                                <th scope="col">Order Qty</th>
                                <th scope="col">Packed Qty</th>
                                <th scope="col">Created By</th>


                                <th scope="col">Created Date</th>
                                <th scope="col">DeadLine Date</th>
                                <th scope="col">Remaining Time</th>
                                <th scope="col">Updated Time</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:black">1</th>
                                <td><a href="e_com_orderdetail_list.php" style="color:black;">ALSk1234</a>
                                </td>
                                <td>S51231sD</td>
                                <td>As124</td>
                                <td>Amazon</td>
                                <td>FBA</td>
                                <td>Thinkpad T460 </td>
                                <!-- <td>E-Commerce</td>                            -->
                                <td>10</td>
                                <td>5</td>
                                <td>Sales Person 1</td>
                                <td>2022-10-02</td>
                                <td>2022-10-31</td>
                                <td>00:00:00</td>
                                <td>2022-10-31 10:50</td>

                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="closed" role="tabpanel" aria-labelledby="closed-tab">
                    <table class="table table-hover text-center">
                        <thead style="background-color: #fff;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">S/O NO. </th>
                                <th scope="col">Order NO.</th>
                                <th scope="col">ASIN</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Order Type</th>
                                <th scope="col">Order Details</th>

                                <th scope="col">Order Qty</th>
                                <th scope="col">Packed Qty</th>
                                <th scope="col">Created By</th>

                                <th scope="col">Created Date</th>
                                <th scope="col">DeadLine Date</th>
                                <th scope="col">Remaining Time</th>
                                <th scope="col">Updated Time</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:black">1</th>
                                <td><a href="./ecom_orderdetail_list.php" style="color:black;">ALSk1234</a></td>
                                <td>S51231sD</td>
                                <td>AS1234</td>
                                <td>Amazon</td>
                                <td>FBA</td>
                                <td>Thinkpad T460 </td>

                                <td>10</td>
                                <td>10</td>
                                <td>Sales Person 1</td>
                                <td>2022-10-02</td>
                                <td>2022-10-31</td>
                                <td>00:00:00</td>
                                <td>2022-10-31 10:50</td>

                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <table class="table table-hover text-center">
                        <thead style="background-color: #fff;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">S/O NO. </th>
                                <th scope="col">Order Number</th>
                                <th scope="col">ASIN</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Order Type</th>
                                <th scope="col">Order Details</th>

                                <th scope="col">OrderQty</th>
                                <th scope="col">Packed Qty</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Order Status</th>

                                <th scope="col">Created Date</th>
                                <th scope="col">DeadLine Date</th>
                                <th scope="col">Remaining Time</th>
                                <th scope="col">Updated Time</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="color:black">1</th>
                                <td>ALSk1234
                                </td>
                                <td>S51231sD</td>
                                <td>AS124</td>
                                <td>Amazon</td>
                                <td>FBA</td>
                                <td>Thinkpad T460 </td>
                                <!-- <td>E-Commerce</td>                            -->
                                <td>10</td>
                                <td>5</td>
                                <td>Sales Person 1</td>
                                <td class="text-info">On Going</td>
                                <td>2022-10-02</td>
                                <td>2022-10-31</td>
                                <td>00:00:00</td>
                                <td>2022-10-31 10:50</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <!--  -->



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



    </div>
</div>




<?php
require_once('../includes/footer.php')
?>