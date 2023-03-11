<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
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

/* btn card Styles */
.btnCard {
    /* width: 112px; */
    padding: 0px 5px;
    height: 28px;
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    display: flex;
    color: #000000;
    justify-content: center;
    align-items: center;
    gap: 10px;

}

.btnCardLable {
    font-weight: 600;
    font-size: 10px;
}

/* //////// */

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
    margin-right: 20px;
    margin-left: 20px;
    margin-bottom: 0;
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
</style>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Inventory Team Leader Dashboard</h6>
</div>

<div class="row invTeamLeaderBodySec">
    <div class="cardContainer">

        <!-- top button sec -->
        <div class="row addbtnSec px-4 mb-2">
            <!-- Btn Card -->
            <a href="./inventory_add_laptop.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable"> Add Laptop</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_update_laptop.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-edit" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable"> Update Item</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_completed_tasks.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-note" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable"> Completed Task</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_upload_shipment.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-cloud-arrow-up" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable"> Upload Shipment</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_shipment_sorting.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-edit" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable">Shipment Sorting</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_remove_parts.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-wrench" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable">Remove Parts</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_team_member.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">

                        <i class="fa-solid fa-user-group" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable"> Our Team</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_final_audit.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-check-to-slot" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable">Laptop Final Audit</div>
                </div>
            </a>
            <!-- ////////////// -->

            <!-- Btn Card -->
            <a href="./inventory_pallets_qr">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-edit" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable">Pallet QR Print</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_add_items_to_pallet.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-books-medical" style="color: #168EB4;font-size: 15px;"></i>

                    </div>
                    <div class="btnCardLable">Add Items to Pallet</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_other_inventory.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid  fa-warehouse-full" style="color: #168EB4;font-size: 15px;"></i>

                    </div>
                    <div class="btnCardLable">Other Inventory</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_battery_qr_printing.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-battery-bolt" style="color: #168EB4;font-size: 15px;"></i>
                    </div>
                    <div class="btnCardLable">Battery QR Print</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-battery-exclamation" style="color: #168EB4;font-size: 15px;"></i>
                    </div>

                    <div class="btnCardLable">Battery Issues</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_motherboard_issues.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-microchip-ai" style="color: #168EB4;font-size: 15px;"></i>
                    </div>


                    <div class="btnCardLable">Motherbord Issues</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_lcd_issues.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-tv" style="color: #168EB4;font-size: 15px;"></i>
                    </div>

                    <div class="btnCardLable">LCD Issues</div>
                </div>
            </a>
            <!-- ////////////// -->
            <!-- Btn Card -->
            <a href="./inventory_fixed_incoming.php">
                <div class="btnCard mr-3 mt-2 mb-1">
                    <div class="btnCardIcon">
                        <i class="fa-solid fa-tv" style="color: #168EB4;font-size: 15px;"></i>
                    </div>

                    <div class="btnCardLable">Fixed Incoming</div>
                </div>
            </a>
            <!-- ////////////// -->


        </div>

        <hr class="sectionUnderline">

        <!-- count card section -->
        <div class="row px-4">
            <!-- Card 1 -->
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Total Inventory</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php $sql="SELECT COUNT(inventory_id) as count  FROM main_inventory_informations WHERE send_to_production='0' "; 
                        $sql_run=mysqli_query($connection,$sql);
                        foreach($sql_run as $data){
                            echo $data['count'];
                        }
                        ?>
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Production</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php $sql="SELECT COUNT(inventory_id) as count  FROM main_inventory_informations WHERE send_to_production='1' AND dispatch='0' "; 
                        $sql_run=mysqli_query($connection,$sql);
                        foreach($sql_run as $data){
                            echo $data['count'];
                        }
                        ?>
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Dispatch</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php $sql="SELECT COUNT(inventory_id) as count  FROM main_inventory_informations WHERE send_to_production='1' AND dispatch='1' "; 
                        $sql_run=mysqli_query($connection,$sql);
                        foreach($sql_run as $data){
                            echo $data['count'];
                        }
                        ?>
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Team Members</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php 
                        $sql="SELECT COUNT(emp_id)as count FROM employees WHERE department_id='6'";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count'];
                        }
                        ?>
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        Received Qty from MB</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php 
                        $sql="SELECT COUNT(issue_type2)as count FROM issue_laptops WHERE mb_received='1' AND issue_type2='1'   ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count']."/";
                        }
                        ?>
                        <span style="font-size: 14px;">
                            <?php 
                        $sql="SELECT COUNT(issue_type2)as count FROM issue_laptops WHERE issue_type2='1'  ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count'];
                        }
                        ?>
                        </span>
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->

            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Completed Qty in MB</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php 
                        $sql="SELECT COUNT(issue_type2)as count FROM issue_laptops WHERE status='2' AND issue_type2='1'  ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count']."/";
                        }
                        ?>
                        <span style="font-size: 12px;cursor:pointer; color:#168eb4;" data-toggle="modal"
                            data-target="#motherboardModel">
                            <?php 
                        $sql="SELECT COUNT(issue_type2)as count FROM issue_laptops WHERE issue_type2='1'  ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count'];
                        }
                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- ////////////// -->
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class=" dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        Received Qty from LCD</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php 
                        $sql="SELECT COUNT(issue_type)as count FROM issue_laptops WHERE lcd_received='1' AND issue_type='1'  ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count']."/";
                        }
                        ?>
                        <span style="font-size: 14px;">
                            <?php 
                        $sql="SELECT COUNT(issue_type)as count FROM issue_laptops WHERE issue_type='1' ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count'];
                        }
                        ?>
                        </span>
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->

            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Completed Qty in LCD</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">
                        <?php 
                        $sql="SELECT COUNT(issue_type)as count FROM issue_laptops WHERE status='2' AND issue_type='1'  ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count']."/";
                        }
                        ?>
                        <span style="font-size: 12px; cursor:pointer; color:#168eb4;" data-toggle="modal"
                            data-target="#lcdModel">
                            <?php 
                        $sql="SELECT COUNT(issue_type)as count FROM issue_laptops WHERE issue_type='1' ";
                        $sql_run=mysqli_query($connection,$sql);
                        while($row = mysqli_fetch_array($sql_run)){
                            echo $row['count'];
                        }
                        ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- ////////////// -->

        </div>
        <!-- table Sec -->

        <div class="row mt-5">
            <div class="sampleTable">
                <!-- <div class="titleHeader">
                    Table Header
                </div> -->
                <div class="tableName col-12 pl-3">
                    Sales Orders
                </div>

                <hr class="sectionUnderline">

                <div class="containerCard mt-2">
                    <div class="tableSec mx-3 row">


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
                                        <td id="orderQty">100</td>
                                        <td id="completedQty">80</td>
                                        <td>
                                            <div class="progress border-2">
                                                <div class="progress-bar progress-bar-striped bg-info"
                                                    role="progressbar" style="width: 50%" aria-valuenow="50"
                                                    aria-valuemin="0" aria-valuemax="100" id='progressBar'></div>
                                            </div>
                                        </td>
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

        <!-- Model Sec -->

        <!-- Modal for LCD -->
        <div class="modal fade" id="lcdModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">LCD Send Items Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">

                            <div class="tableSec">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ASIN No</th>
                                            <th>Model</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                12345
                                            </td>
                                            <td>Latitude e5430</td>
                                            <td>On Going</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>34535</td>
                                            <td>Latitude e7280</td>
                                            <td>Completed</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

        <!--  -->
        <!-- Modal for MotherBoard -->
        <div class="modal fade" id="motherboardModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Motherboard Send Items Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">

                            <div class="tableSec">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ASIN No</th>
                                            <th>Model</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                12345
                                            </td>
                                            <td>Latitude e5430</td>
                                            <td>Not Completed</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>34535</td>
                                            <td>Latitude e7280</td>
                                            <td>Completed</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

        <!--  -->


    </div>
</div>

<script>
// progress bar eke progress eka calculate karana eka
window.onload = showProgress = () => {
    // var orderQty = $("#orderQty").val();
    var orderQty = document.getElementById('orderQty').innerHTML;
    var completedQty = document.getElementById('completedQty').innerHTML;
    // var completedQty = $("#completedQty").val().innerHTML;

    console.log(orderQty);
    console.log(completedQty);

    var x = (completedQty / orderQty) * 100;
    console.log(x);

}
</script>

<?php
require_once('../includes/footer.php')

?>