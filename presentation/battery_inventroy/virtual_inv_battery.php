<?php
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack_no = null;
$qty = null;

// $q_r = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'b-2' GROUP BY rack_no";
// $q = mysqli_query($connection, $q_r);
// while ($xd = mysqli_fetch_assoc($q)) {
//     $rack_no = $xd['rack_no'];
//     $qty = $xd['qty'];
//     $total_qty = $xd['Total_qty'];
// }
// 
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

.virtualInvSec {
    display: flex;
    align-items: center;
    justify-content: center;

}


.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}


.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

/* Rack eke Styles */

.rackSturcture {
    display: flex;
    flex-direction: column;
    height: 150px;
    width: 250px;
}



.rackLayer {
    display: flex;
    height: 25%;
    border-left: 1px solid #dee2e6;
    border-right: 1px solid #dee2e6;
    border-bottom: 1px solid #dee2e6;
}


.box {
    position: relative;
    padding: 5px;
    height: 100%;
    width: 100%;
}



.box button {
    width: 100%;
    height: 100%;
}


/* ///// */

/* patte lable section eka */

.lableLeftSec {
    display: flex;
    flex-direction: column;
    height: 200px;
    width: 15px;
    font-weight: 600;
}

.lableLayer {
    font-size: 10px;
    display: flex;
    height: 18%;
    align-items: center;
}

/* Yata Lable Sec Eke  */

.lableBoxLayer {
    display: flex;
    width: 100%;
}

.colNu {
    width: 25%;
    text-align: center;
    font-size: 10px;

}

.rack {
    display: flex;
    justify-content: center;
}

/* Box button eke styles */

.btnBox {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff !important;
}

.btnBox:hover+.hide {
    /* background-color: #dee2e6; */
    display: block;
}

/* hover Btn Sec */
.hide {
    display: none;
    position: absolute;
    padding: 5px 10px;
    top: -105px;
    left: 20px;
}

/*  */

.insideDetails {
    background-color: black;
    opacity: 0.5;
    color: #ffffff;
    border-radius: 10px;
}

.tableModel {
    width: 100%;

}

/* Rack Name */
.rackLbl {
    display: flex;
    width: 93%;
    justify-content: space-between;
    font-weight: 600;
    margin-left: 10px;

}
</style>

<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Battery Virtual Inventory</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2 d-flex justify-content-between">
            <div class="createListingHeading">
                <span>
                    <p>Search</p>
                </span>
            </div>

            <div>
                <a href="./virtual_inv_battery_stock.php">
                    <button>Stock</button>
                </a>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Search Sec -->
        <div class="SearchSec mb-4">
            <div class="row text-center">
                <!-- <div class="col-2"></div> -->

                <div class="col-2">Type</div>
                <div class="col-2">Status</div>
                <div class="col-2">Model</div>
            </div>
            <div class="row">
                <!-- <div class="col-2">Search</div> -->

                <div class="col-2">
                    <select name="" id="" class="select2 w-100">
                        <option value="">OEM China</option>
                        <option value="">Original</option>
                    </select>
                </div>
                <div class="col-2">
                    <select name="" id="" class="select2 w-100">
                        <option value="">Tested</option>
                        <option value="">Untest</option>
                        <option value="">Damage-No-Use</option>
                    </select>
                </div>
                <div class="col-3">
                    <input class="w-100" type="text">
                </div>
                <div class="col-1">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
        </div>

        <!-- end Search -->

        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    <p>Rack</p>
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Rack Design Sec -->

        <div class="row w-100">

            <!-- ============================================================== -->
            <!-- Front  -->
            <!-- ============================================================== -->
            <div class="rackSec w-100 m-3 text-center">
                <p style="font-size: 15px; font-weight: 600;">Front-Side</p>
                <br>
                <!-- Rack Eke Lable  -->
                <div class="d-flex justify-content-center">
                    <div class="rackLbl">
                        <div class="w-100">A</div>
                        <div class="w-100">B</div>
                        <div class="w-100">C</div>
                        <div class="w-100">D</div>
                    </div>
                </div>

                <div class="rack">
                    <!-- Patte Lable tika -->
                    <div class="lableLeftSec">
                        <div class="lableLayer">
                            T
                        </div>
                        <div class="lableLayer">
                            3
                        </div>
                        <div class="lableLayer">
                            2
                        </div>
                        <div class="lableLayer">
                            1
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Rack 1  -->
                    <!-- ============================================================== -->
                    <div class=" rackSturcture">
                        <!-- <div class="rackfull"> -->
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- ============================================================== -->
                        <!-- A-3  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $a_3_total_qty = null;

                                $q_a_3 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'a-3' GROUP BY rack_no";
                                $r_a_3 = mysqli_query($connection, $q_a_3);
                                while ($r_a3_x = mysqli_fetch_assoc($r_a_3)) {
                                    $a_3_total_qty = $r_a3_x['Total_qty'];
                                }

                                if ($a_3_total_qty == 0 || $a_3_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=a-3">
                                    <div class="btnEmpty btnBox">
                                        <span>A-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no ='a-3' AND removed_inv = '0'";
                                                    $a_3_r = mysqli_query($connection, $a_3_q);
                                                    while ($a_3_x = mysqli_fetch_assoc($a_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_3_x['model']; ?></td>
                                                    <td><?php echo $a_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($a_3_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=a-3">
                                    <div class="btnTB btnBox">
                                        <span>A-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-3' AND removed_inv = '0'";
                                                    $a_3_r = mysqli_query($connection, $a_3_q);
                                                    while ($a_3_x = mysqli_fetch_assoc($a_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_3_x['model']; ?></td>
                                                    <td><?php echo $a_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- A-2  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $a_2_total_qty = null;

                                $q_a_2 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'a-2' GROUP BY rack_no";
                                $r_a_2 = mysqli_query($connection, $q_a_2);
                                while ($r_a1_x = mysqli_fetch_assoc($r_a_2)) {
                                    $a_2_total_qty = $r_a1_x['Total_qty'];
                                }

                                if ($a_2_total_qty == 0 || $a_2_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=a-2">
                                    <div class="btnEmpty btnBox">
                                        <span>A-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-2' AND removed_inv= '0'";
                                                    $a_2_r = mysqli_query($connection, $a_2_q);
                                                    while ($a_2_x = mysqli_fetch_assoc($a_2_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_2_x['model']; ?></td>
                                                    <td><?php echo $a_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($a_2_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=a-2">
                                    <div class="btnTB btnBox">
                                        <span>A-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-2' AND removed_inv = '0'";
                                                    $a_2_r = mysqli_query($connection, $a_2_q);
                                                    while ($a_2_x = mysqli_fetch_assoc($a_2_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_2_x['model']; ?></td>
                                                    <td><?php echo $a_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- A-1  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $a_1_total_qty = null;

                                $q_a_1 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'a-1' GROUP BY rack_no";
                                $r_a_1 = mysqli_query($connection, $q_a_1);
                                while ($r_a1_x = mysqli_fetch_assoc($r_a_1)) {
                                    $a_1_total_qty = $r_a1_x['Total_qty'];
                                }

                                if ($a_1_total_qty == 0 || $a_1_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=a-1">
                                    <div class="btnEmpty btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-1' AND removed_inv = '0'";
                                                    $a_1_r = mysqli_query($connection, $a_1_q);
                                                    while ($a_1_x = mysqli_fetch_assoc($a_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_1_x['model']; ?></td>
                                                    <td><?php echo $a_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($a_1_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=a-1">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-1'AND removed_inv = '0'";
                                                    $a_1_r = mysqli_query($connection, $a_1_q);
                                                    while ($a_1_x = mysqli_fetch_assoc($a_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_1_x['model']; ?></td>
                                                    <td><?php echo $a_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- Rack 2  -->
                    <!-- ============================================================== -->

                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>

                        <!-- ============================================================== -->
                        <!-- B-3  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $b_3_total_qty = null;

                                $q_b_3 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'b-3' GROUP BY rack_no";
                                $r_b_3 = mysqli_query($connection, $q_b_3);
                                while ($r_b3_x = mysqli_fetch_assoc($r_b_3)) {
                                    $b_3_total_qty = $r_b3_x['Total_qty'];
                                }

                                if ($b_3_total_qty == 0 || $b_3_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=b-3">
                                    <div class="btnEmpty btnBox">
                                        <span>B-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-3' AND removed_inv = '0'";
                                                    $b_3_r = mysqli_query($connection, $b_3_q);
                                                    while ($b_3_x = mysqli_fetch_assoc($b_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_3_x['model']; ?></td>
                                                    <td><?php echo $b_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($b_3_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=b-3">
                                    <div class="btnTB btnBox">
                                        <span>B-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-3' AND removed_inv = '0'";
                                                    $b_3_r = mysqli_query($connection, $b_3_q);
                                                    while ($b_3_x = mysqli_fetch_assoc($b_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_3_x['model']; ?></td>
                                                    <td><?php echo $b_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>

                        <!-- ============================================================== -->
                        <!-- B-2  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $b_2_total_qty = null;

                                $q_b_2 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'b-2' GROUP BY rack_no";
                                $r_b_2 = mysqli_query($connection, $q_b_2);
                                while ($r_b2_x = mysqli_fetch_assoc($r_b_2)) {
                                    $b_2_total_qty = $r_b2_x['Total_qty'];
                                }

                                if ($b_2_total_qty == 0 || $b_2_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=b-2">
                                    <div class="btnEmpty btnBox">
                                        <span>B-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-2' AND removed_inv = '0'";
                                                    $b_2_r = mysqli_query($connection, $b_2_q);
                                                    while ($b_2_x = mysqli_fetch_assoc($b_2_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_2_x['model']; ?></td>
                                                    <td><?php echo $b_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($b_2_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=b-2">
                                    <div class="btnTB btnBox">
                                        <span>B-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-2' AND removed_inv = '0'";
                                                    $b_2_r = mysqli_query($connection, $b_2_q);
                                                    while ($b_2_x = mysqli_fetch_assoc($b_2_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_2_x['model']; ?></td>
                                                    <td><?php echo $b_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>

                        <!-- ============================================================== -->
                        <!-- B-1  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $b_1_total_qty = null;

                                $b_a_1 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'b-1' GROUP BY rack_no";
                                $b_a_1 = mysqli_query($connection, $b_a_1);
                                while ($r_b1_x = mysqli_fetch_assoc($b_a_1)) {
                                    $b_1_total_qty = $r_b1_x['Total_qty'];
                                }

                                if ($b_1_total_qty == 0 || $b_1_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=b-1">
                                    <div class="btnEmpty btnBox">
                                        <span>B-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-1' AND removed_inv = '0'";
                                                    $b_1_r = mysqli_query($connection, $b_1_q);
                                                    while ($b_1_x = mysqli_fetch_assoc($b_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_1_x['model']; ?></td>
                                                    <td><?php echo $b_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($b_1_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=b-1">
                                    <div class="btnTB btnBox">
                                        <span>B-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $b_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'b-1' AND removed_inv = '0'";
                                                    $b_1_r = mysqli_query($connection, $b_1_q);
                                                    while ($b_1_x = mysqli_fetch_assoc($b_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $b_1_x['model']; ?></td>
                                                    <td><?php echo $b_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Rack 3  -->
                    <!-- ============================================================== -->
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- ============================================================== -->
                        <!-- C-3  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $c_3_total_qty = null;

                                $q_c_3 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'c-3' GROUP BY rack_no";
                                $r_c_3 = mysqli_query($connection, $q_c_3);
                                while ($r_c3_x = mysqli_fetch_assoc($r_c_3)) {
                                    $c_3_total_qty = $r_c3_x['Total_qty'];
                                }

                                if ($c_3_total_qty == 0 || $c_3_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=c-3">
                                    <div class="btnEmpty btnBox">
                                        <span>C-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $c_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'c-3' AND removed_inv = '0'";
                                                    $c_3_r = mysqli_query($connection, $c_3_q);
                                                    while ($c_3_x = mysqli_fetch_assoc($c_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $c_3_x['model']; ?></td>
                                                    <td><?php echo $c_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($c_3_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=c-3">
                                    <div class="btnTB btnBox">
                                        <span>C-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $c_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'c-3' AND removed_inv = '0'";
                                                    $c_3_r = mysqli_query($connection, $c_3_q);
                                                    while ($c_3_x = mysqli_fetch_assoc($c_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $c_3_x['model']; ?></td>
                                                    <td><?php echo $c_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- C-2  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $c_2_total_qty = null;

                                $q_c_2 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'c-2' GROUP BY rack_no";
                                $r_c_2 = mysqli_query($connection, $q_c_2);
                                while ($r_c1_x = mysqli_fetch_assoc($r_c_2)) {
                                    $c_2_total_qty = $r_c1_x['Total_qty'];
                                }

                                if ($c_2_total_qty == 0 || $c_2_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=c-2">
                                    <div class="btnEmpty btnBox">
                                        <span>C-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $c_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'c-2' AND removed_inv = '0'";
                                                    $c_2_r = mysqli_query($connection, $c_2_q);
                                                    while ($c_2_x = mysqli_fetch_assoc($c_2_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $c_2_x['model']; ?></td>
                                                    <td><?php echo $c_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($c_2_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=c-2">
                                    <div class="btnTB btnBox">
                                        <span>C-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $a_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'a-1' AND removed_inv = '0'";
                                                    $a_1_r = mysqli_query($connection, $a_1_q);
                                                    while ($a_1_x = mysqli_fetch_assoc($a_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $a_1_x['model']; ?></td>
                                                    <td><?php echo $a_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- C-1  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $c_1_total_qty = null;

                                $q_c_1 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'c-1' GROUP BY rack_no";
                                $r_c_1 = mysqli_query($connection, $q_c_1);
                                while ($r_c1_x = mysqli_fetch_assoc($r_c_1)) {
                                    $c_1_total_qty = $r_c1_x['Total_qty'];
                                }

                                if ($c_1_total_qty == 0 || $c_1_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=c-1">
                                    <div class="btnEmpty btnBox">
                                        <span>C-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $c_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'c-1' AND removed_inv = '0'";
                                                    $c_1_r = mysqli_query($connection, $c_1_q);
                                                    while ($c_1_x = mysqli_fetch_assoc($c_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $c_1_x['model']; ?></td>
                                                    <td><?php echo $c_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($c_1_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=c-1">
                                    <div class="btnTB btnBox">
                                        <span>C-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $c_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'c-1' AND removed_inv = '0'";
                                                    $c_1_r = mysqli_query($connection, $c_1_q);
                                                    while ($c_1_x = mysqli_fetch_assoc($c_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $c_1_x['model']; ?></td>
                                                    <td><?php echo $c_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- Rack 4  -->
                    <!-- ============================================================== -->
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>
                        <!-- ============================================================== -->
                        <!-- D-3  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $d_3_total_qty = null;

                                $q_d_3 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'd-3' GROUP BY rack_no";
                                $r_d_3 = mysqli_query($connection, $q_d_3);
                                while ($r_d3_x = mysqli_fetch_assoc($r_d_3)) {
                                    $d_3_total_qty = $r_d3_x['Total_qty'];
                                }

                                if ($d_3_total_qty == 0 || $d_3_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=d-3">
                                    <div class="btnEmpty btnBox">
                                        <span>D-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-3' AND removed_inv = '0'";
                                                    $d_3_r = mysqli_query($connection, $d_3_q);
                                                    while ($d_3_x = mysqli_fetch_assoc($d_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_3_x['model']; ?></td>
                                                    <td><?php echo $d_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($d_3_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=d-3">
                                    <div class="btnTB btnBox">
                                        <span>D-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_3_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-3' AND removed_inv = '0'";
                                                    $d_3_r = mysqli_query($connection, $d_3_q);
                                                    while ($d_3_x = mysqli_fetch_assoc($d_3_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_3_x['model']; ?></td>
                                                    <td><?php echo $d_3_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- D-2  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $d_2_total_qty = null;

                                $q_d_2 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'd-2' GROUP BY rack_no";
                                $r_d_2 = mysqli_query($connection, $q_d_2);
                                while ($r_d2_x = mysqli_fetch_assoc($r_d_2)) {
                                    $d_2_total_qty = $r_d2_x['Total_qty'];
                                }

                                if ($d_2_total_qty == 0 || $d_2_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=d-2">
                                    <div class="btnEmpty btnBox">
                                        <span>D-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-2' AND removed_inv = '0'";
                                                    $d_2_q = mysqli_query($connection, $d_2_q);
                                                    while ($d_2_x = mysqli_fetch_assoc($d_2_q)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_2_x['model']; ?></td>
                                                    <td><?php echo $d_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($d_2_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=d-2">
                                    <div class="btnTB btnBox">
                                        <span>D-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_2_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-2' AND removed_inv = '0'";
                                                    $d_2_q = mysqli_query($connection, $d_2_q);
                                                    while ($d_2_x = mysqli_fetch_assoc($d_2_q)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_2_x['model']; ?></td>
                                                    <td><?php echo $d_2_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- D-1  -->
                        <!-- ============================================================== -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <?php

                                $d_1_total_qty = null;

                                $q_d_1 = "SELECT *, SUM(qty) Total_qty FROM battery_inventory WHERE rack_no = 'd-1' GROUP BY rack_no";
                                $r_d_1 = mysqli_query($connection, $q_d_1);
                                while ($r_d1_x = mysqli_fetch_assoc($r_d_1)) {
                                    $d_1_total_qty = $r_d1_x['Total_qty'];
                                }

                                if ($d_1_total_qty == 0 || $d_1_total_qty == null) { ?>
                                <a href="./virtual_inv_battery_add_new_item?rack=d-1">
                                    <div class="btnEmpty btnBox">
                                        <span>D-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-1' AND removed_inv = '0'";
                                                    $d_1_r = mysqli_query($connection, $d_1_q);
                                                    while ($d_1_x = mysqli_fetch_assoc($d_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_1_x['model']; ?></td>
                                                    <td><?php echo $d_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                                <?php } elseif ($d_1_total_qty >= 0) { ?>
                                <a href="./virtual_inv_battery_add_remove?rack=d-1">
                                    <div class="btnTB btnBox">
                                        <span>D-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>

                                                <?php
                                                    $d_1_q = "SELECT model, qty FROM battery_inventory WHERE rack_no = 'd-1' AND removed_inv = '0'";
                                                    $d_1_r = mysqli_query($connection, $d_1_q);
                                                    while ($d_1_x = mysqli_fetch_assoc($d_1_r)) {

                                                    ?>
                                                <tr class="text-capitalize">
                                                    <td><?php echo $d_1_x['model']; ?></td>
                                                    <td><?php echo $d_1_x['qty']; ?></td>

                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->

                                </a>
                                <?php } ?>
                            </div>
                            <!-- /// -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once('../includes/footer.php'); ?>