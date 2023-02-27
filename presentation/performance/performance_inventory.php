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

.empDetailsHeading {
    font-weight: 600;
    font-size: 17px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
}

.sectionUnderlineModel {
    margin-top: 0px;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.DropDown {
    height: 24px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

input[type=text] {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 24px;
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
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-check-to-slot"></i>
    <h6 class="pageName">Performance Page</h6>
</div>

<div class="row performanceBodySec">
    <div class="cardContainer">
        <div class="">
            <!-- Emp Heading -->
            <div class="empDetailsHeading mb-3">
                <div class="col-12">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Name :
                            <span>John Doe</span>
                        </div>
                        <div class="empNo">Emp No :
                            <span> Inv 202</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-1">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Department :
                            <span>Inventory</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Performance Details -->

        <div class="empDetails mb-3 mx-3 mt-3">

            <!-- Detail Sec -->
            <div class="col-12">
                <div class="row mx-4  justify-content-between">

                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Job Description
                        </div>
                        <div class="userinput col-7">
                            <select class="DropDown" name="" id="">
                                <option value="">PC Scanned</option>
                            </select>

                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Target
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <div class="row mx-4  justify-content-between">
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Scan QR
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text" placeholder="Scan QR">
                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Today Completed Qty
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="row mx-4  justify-content-between">
                    <div class="row col-lg-6">
                        <div class="userName col-4">

                        </div>
                        <div class="userinput col-7">

                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Remaining Qty
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>


                </div>
            </div>
            <!-- ///////////////// -->

            <!-- TIME SEC -->

            <a href="./timeline.php">
                <button>time</button>
            </a>


            <!-- Table Sec -->
            <div class="performDetailTableSec mt-4">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>Job Description</th>
                                <th>Scanned QR</th>
                                <th>Model</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Completed Qty</th>
                                <th>Target</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PC SCANNED</td>
                                <td>
                                    62136jhbh
                                </td>
                                <td>Latitude T460</td>
                                <td>00:00:00</td>
                                <td>00:00:00</td>
                                <td>1</td>
                                <td>100</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>



    </div>
</div>
</div>

</div>



</div>
</div>