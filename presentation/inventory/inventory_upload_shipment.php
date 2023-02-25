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

.ecomOrderFormSec {
    display: flex;
    align-items: center;
    justify-content: center;

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
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.btnT {
    background: #FFFFFF;
    border: 1px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.tableSecSupSheet table {
    height: 75vh;
}

.tableSecSupSheet table th {
    color: #168EB4;
}

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
    <i class="pageNameIcon fa-solid fa-cloud-arrow-up"></i>
    <h6 class="pageName pt-1">Upload Shipment</h6>
</div>

<div class="rowuploadShipmentBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Upload Supplier Sheet
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="uploadSupBodySec">

            <div class="w-100 d-flex flex-row-reverse mr-2">
                <button class="btnT">
                    <i class="fa-solid fa-download"></i> Download Master
                </button>
            </div>

            <div class="row ml-4">
                Select CSV file to Upload Supplier Sheet
            </div>
            <div class="row ml-4 mt-2">
                <input class="btnT mr-2" type="file" name="file">

                </input>
                <input class="btnT" type="submit" name="submit" value="Submit">

                </input>
            </div>

            <!-- uploaded details -->

            <div class="ml-2 mt-4">
                <div class="createListingHeading">
                    <span>
                        Uploaded Supplier Sheet Details
                    </span>
                </div>
            </div>
            <hr class="sectionUnderline">

            <div class="tableSecSupSheet">
                <div class="row">

                    <table class="table mx-3 table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Suppler Name</th>
                                <th scope="col">Customer Name</th>
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
                                <th scope="col">Graphic Brand</th>
                                <th scope="col">Graphic Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>b20</td>
                                <td>John Doe</td>
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

                                <td>Nvidia</td>
                                <td>4GB</td>


                            </tr>

                        </tbody>
                    </table>

                </div>



            </div>



            <!--  -->


        </div>




    </div>
</div>



<?php
require_once('../includes/footer.php')

?>