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
    /* height: 75vh; */
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



.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
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

/* tab pane styles */
.nav-tabs .nav-link.active {
    color: #168EB4;
}

.tabLable {
    font-weight: 700;
}

/*  */
/* table sec */
.tableSec {
    overflow-x: auto;
    width: 100%;
}

.tableSec table {
    width: 100%;
    font-size: 10px;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
    font-size: 10px;
}

/*  */
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>

<div class="row ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-tv"></i>
    <h6 class="pageName">LCD Issues</h6>
</div>

<!-- count card section -->
<div class="row px-4">
    <!-- Card 1 -->
    <div class="dashCard mt-2 mb-1 mr-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 16px;"></i>
            </div>
            <div class="cardTitle">Received Qty from LCD</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue">10
                <span style="font-size: 12px;">/38</span></span>
            </div>
        </div>

    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard mt-2 mb-1 mr-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 16px;"></i>
            </div>
            <div class="cardTitle">Completed Qty in LCD</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue">20
                <span style="font-size: 12px;">/38</span></span>
            </div>
        </div>

    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard mt-2 mb-1 mr-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 16px;"></i>
            </div>
            <div class="cardTitle">Remaining Qty in LCD</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue">18
                <span style="font-size: 12px;">/38</span></span>
            </div>
        </div>

    </div>
    <!-- ////////////// -->
</div>

<div class="row motherBordIssueBodySec mt-4">
    <div class="cardContainer col-12">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Details
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="row">
            <div class="inventorySec row mx-4 mt-3 w-100">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <div class="nav-item nav-link" id="nav-Received-tab" data-toggle="tab" href="#nav-Received"
                            role="tab" aria-controls="nav-Received" aria-selected="true">
                            <span class="tabLable">
                                Received
                            </span>
                        </div>
                        <div class="nav-item nav-link active" id="nav-Completed-tab" data-toggle="tab"
                            href="#nav-Completed" role="tab" aria-controls="nav-Completed" aria-selected="false">
                            <span class="tabLable">
                                Completed(Not Received)
                            </span>
                        </div>
                        <div class="nav-item nav-link" id="nav-Remaining-tab" data-toggle="tab" href="#nav-Remaining"
                            role="tab" aria-controls="nav-Remaining" aria-selected="false">
                            <span class="tabLable">
                                Remaining
                            </span>
                        </div>

                    </div>
                </nav>

                <div class="tab-content w-100" id="nav-tabContent">
                    <div class="tab-pane fade show" id="nav-Received" role="tabpanel"
                        aria-labelledby="nav-Received-tab">
                        <div class="row" style="justify-content: center;">
                            <!-- Received Table -->
                            <div class="tableSec mx-3">
                                <table class="table  table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Inventory ID</th>
                                            <th>Model</th>
                                            <th>Core</th>
                                            <th>Generation</th>
                                            <th>Sent Date</th>
                                            <th>Status</th>
                                            <th>Received Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /// -->
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="nav-Completed" role="tabpanel"
                        aria-labelledby="nav-Completed-tab">
                        <div class="row" style="justify-content: center;">
                            <!-- Completed Table -->
                            <div class="tableSec mx-3 w-100">
                                <table class="table  table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Inventory ID</th>
                                            <th>Model</th>
                                            <th>Core</th>
                                            <th>Generation</th>
                                            <th>Sent Date</th>
                                            <th>Status</th>
                                            <th>Completed Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Completed</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /// -->
                        </div>


                    </div>
                    <div class="tab-pane fade show " id="nav-Remaining" role="tabpanel"
                        aria-labelledby="nav-Remaining-tab">
                        <div class="row" style="justify-content: center;">
                            <!-- Remaining Tble -->
                            <div class="tableSec mx-3 w-100">
                                <table class="table  table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Inventory ID</th>
                                            <th>Model</th>
                                            <th>Core</th>
                                            <th>Generation</th>
                                            <th>Sent Date</th>
                                            <th>Status</th>
                                            <th>Completed Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Not Started</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Not Started</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>244234</td>
                                            <td>Elitebook 840 G3</td>
                                            <td>I5-5200U</td>
                                            <td>5</td>
                                            <td>2023-01-25 00:00:00</td>
                                            <td>Not Started</td>
                                            <td>2023-01-25 00:00:00</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!--  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>