<?php
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>


<style>
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
    font-size: 15px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
}

/* //////////////////////// */

/* table styles */
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

.tableDataSec {
    overflow-x: scroll;
    -webkit-overflow-scrolling: scroll;
    width: 100%;
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

/* .tableSpec .leftSec {
    width: 30%;
} */

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


/* /// */

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Completed Tasks</h6>
</div>

<div class="row invTeamLeaderBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    All Completed Orders
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- table Sec -->

        <div class="row mt-2">
            <div class="sampleTable">
                <!-- <div class="titleHeader">
                    Table Header
                </div> -->


                <div class="containerCard mt-2">
                    <div class="tableSec mx-3 row">


                        <!-- Table Tab and Search Bar Section  -->
                        <div class="tableSpec px-3 col-12">

                            <div class="leftSec">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Completed</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="rightSec">
                                <div class="row">
                                    <!-- Search section -->
                                    <div class="searchSec">
                                        <input type="text">
                                        <i class="fa-solid fa-magnifying-glass ml-2"
                                            style="color: #168EB4; font-size:20px"></i>

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

                        <!-- ////////////////////Table from Here///////////////////// -->

                        <div class="tableDataSec">
                            <table class="table mx-3 table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>S/O No</th>
                                        <th>Order No</th>
                                        <th>Order Type</th>
                                        <th>Order Qty</th>
                                        <th>Completed Qty</th>
                                        <th>Progress</th>
                                        <th>Created By</th>
                                        <th>Prepared By</th>
                                        <th>Created Date</th>
                                        <th>Deadline Date</th>
                                        <th>Remaning Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="./inventory_order_details.php">
                                                so12345
                                            </a></td>
                                        <td>12342</td>
                                        <td>FBA</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>xxxxx</td>
                                        <td>Sales Person 1</td>
                                        <td>inv 10</td>
                                        <td>2022-10-10</td>
                                        <td>2022-10-15</td>
                                        <td>00:00:00</td>

                                    </tr>
                                    <tr>
                                        <td><a href="">
                                                so12345
                                            </a></td>
                                        <td>12342</td>
                                        <td>FBA</td>
                                        <td>100</td>
                                        <td>80</td>
                                        <td>xxxxx</td>
                                        <td>Sales Person 1</td>
                                        <td>inv 10</td>
                                        <td>2022-10-10</td>
                                        <td>2022-10-15</td>
                                        <td>00:00:00</td>

                                    </tr>
                                    <tr>
                                        <td><a href="">
                                                so12345
                                            </a></td>
                                        <td>12342</td>
                                        <td>FBA</td>
                                        <td>100</td>
                                        <td>80</td>
                                        <td>xxxxx</td>
                                        <td>Sales Person 1</td>
                                        <td>inv 10</td>
                                        <td>2022-10-10</td>
                                        <td>2022-10-15</td>
                                        <td>00:00:00</td>

                                    </tr>
                                    <tr>
                                        <td><a href="">
                                                so12345
                                            </a></td>
                                        <td>12342</td>
                                        <td>FBA</td>
                                        <td>100</td>
                                        <td>80</td>
                                        <td>xxxxx</td>
                                        <td>Sales Person 1</td>
                                        <td>inv 10</td>
                                        <td>2022-10-10</td>
                                        <td>2022-10-15</td>
                                        <td>00:00:00</td>

                                    </tr>


                                </tbody>
                            </table>

                        </div>





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
<?php
require_once('../includes/footer.php')

?>