<?php

require_once('../includes/header.php')

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
</style>



<div class="row mb-4">

    <i class="pageNameIcon fa-regular fa-users-medical"></i>
    <h6 class="pageName pt-1">Upload Shipment</h6>
</div>

<div class="rowuploadShipmentBodySec">
    <div class="cardContainer">
        <div class="">
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
                    Download Master
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

            <div class="mt-3">
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



            <!--  -->


        </div>




    </div>
</div>



<?php
require_once('../includes/footer.php')

?>