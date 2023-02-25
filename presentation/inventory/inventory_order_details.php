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

    .cardContainer {
        width: 99%;
        background-color: #ffffff;
        padding: 10px 5px;
    }

    .createListingHeading {
        font-weight: 600;
        font-size: 15px;
    }

    /* table sec */

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


    /*  */
    .sectionUnderlineModel {
        margin-top: 0px;
    }

    .modelInput input[type=text] {
        background: #FFFFFF;
        border: 1px solid #A1A3A8;
        border-radius: 5px;
        height: 24px;
        width: 100%;


    }

    /* LCD */

    .lcdSec {
        /* display: flex; */
        /* align-items: center; */
        /* justify-content: center; */
        width: 80%;
    }

    .lcdLable {
        font-size: 15px;
        font-weight: 500;
    }

    .lcdCheq input[type='checkbox'] {
        height: 20px;
        width: 20px;
    }

    .motherboedSec,
    .batterySec {
        display: flex;
        flex-direction: column;
        /* width: 80%; */
        /* justify-content: center; */
        align-items: center;
    }

    .mbLable,
    .btryLbl {
        font-size: 15px;
        font-weight: 500;
    }

    .mbCheq input[type='radio'] {
        height: 15px;
        width: 15px;
    }

    .btryLbl input[type='radio'] {
        height: 15px;
        width: 15px;
        margin-right: 5px;
    }

    /*  */

    .btnT {
        background: #FFFFFF;
        border: 2px solid #168EB4;
        border-radius: 5px;
        font-weight: 600;
        font-size: 15px;
        padding: 5px 10px;
    }
</style>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Order Details</h6>
</div>

<div class="row invOrderDetailsBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Sales Order: SO123
                </span>
                Details

            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="tableSec mx-3 row">


            <!-- Table Tab and Search Bar Section  -->
            <div class="tableSpec px-3 col-12">

                <div class="leftSec">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ALL</button>
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

                    </div>
                </div>

            </div>

            <!-- ////////////////////Table from Here///////////////////// -->

            <div class="tableDataSec">
                <table class="table mx-3 table-hover text-center">
                    <thead>
                        <tr>
                            <th>S/O No</th>
                            <th>ASIN/SKU</th>
                            <th>Device</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Processor</th>
                            <th>Core</th>
                            <th>Gen</th>
                            <th>Speed</th>
                            <th>Screen Type</th>
                            <th>Screen Size</th>
                            <th>Resolution</th>
                            <th>Resolution type</th>
                            <th>RAM</th>
                            <th>HDD Capacity</th>
                            <th>HDD Type</th>
                            <th>Graphic Brand</th>
                            <th>Graphic Capacity</th>
                            <th>OS</th>
                            <th>Condition</th>
                            <th>Charger Watt</th>
                            <th>Charger Type</th>
                            <th>Charger Pin</th>
                            <th>Packing type</th>
                            <th>Shipping method</th>
                            <th>Order Qty</th>
                            <th>Start</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12313</td>
                            <td>AS1231</td>
                            <td>Laptop</td>
                            <td>Dell</td>
                            <td>Latitude e5480</td>
                            <td>Intel</td>
                            <td>i5-2540U</td>
                            <td>2</td>
                            <td>2.50Ghz</td>
                            <td>LCD</td>
                            <td>14</td>
                            <td>1366 x 768</td>
                            <td>HD</td>
                            <td>8GB</td>
                            <td>256GB</td>
                            <td>SSD</td>
                            <td>nVidia</td>
                            <td>4GB</td>
                            <td>Windows 10 pro Original</td>
                            <td>Refurbished</td>
                            <td>65W</td>
                            <td>UK</td>
                            <td>Blue</td>
                            <td>Bulkbox</td>
                            <td>DHL</td>
                            <td>100</td>
                            <td>
                                <button class="btn" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-hourglass-start text-info"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>12313</td>
                            <td>AS1231</td>
                            <td>Laptop</td>
                            <td>Dell</td>
                            <td>Latitude e7480</td>
                            <td>Intel</td>
                            <td>i5-6500U</td>
                            <td>6</td>
                            <td>2.50Ghz</td>
                            <td>LCD</td>
                            <td>14</td>
                            <td>1366 x 768</td>
                            <td>HD</td>
                            <td>8GB</td>
                            <td>256GB</td>
                            <td>SSD</td>
                            <td>nVidia</td>
                            <td>4GB</td>
                            <td>Windows 10 pro Original</td>
                            <td>Refurbished</td>
                            <td>65W</td>
                            <td>UK</td>
                            <td>Blue</td>
                            <td>Bulkbox</td>
                            <td>DHL</td>
                            <td>100</td>
                            <td>
                                <button class="btn" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-hourglass-start text-info"></i></button>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

            <!-- ///model-- Start  Order//// -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">- SO1234 - Latitude e2540 - </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> -->
                        <div class="modal-body">
                            <div class="orderDetailSec">
                                <!-- Order Details -->
                                <div class="text-center mb-1">
                                    <div class="createListingHeading text-info">
                                        Order Request Details
                                    </div>
                                </div>
                                <hr class="sectionUnderlineModel">
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">ASIN</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Backlight</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable"></div>
                                            <div class="col-7 modelInput">
                                                <!-- <input type="text"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Brand</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Model</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Processor</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Core</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Gen</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Speed</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Screen Size</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Resolution</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Touch</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Scaned laptop Details -->


                                <div class="text-center mb-1 mt-3">
                                    <div class="createListingHeading text-info">
                                        Scanned Request Details
                                    </div>
                                </div>
                                <hr class="sectionUnderlineModel">

                                <div class="row d-flex justify-content-center mb-2" style="width: 100%;">
                                    <div class="col-2 modelLable">Scan Alsakb No</div>
                                    <div class="col-4 modelInput">
                                        <input type="text">
                                    </div>
                                </div>


                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">ASIN</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Backlight</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable"></div>
                                            <div class="col-7 modelInput">
                                                <!-- <input type="text"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Brand</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Model</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Processor</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Core</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Gen</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Speed</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Screen Size</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Resolution</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-4 modelLable">Touch</div>
                                            <div class="col-7 modelInput">
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <!--  -->

                                <!-- LCD Sec -->

                                <div class="text-center mb-1 mt-3">
                                    <div class="createListingHeading text-info">
                                        LCD
                                    </div>
                                </div>
                                <hr class="sectionUnderlineModel">

                                <div class="row lcdSec mx-auto">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-7 lcdLable">
                                                Scratch (PGP)
                                            </div>
                                            <div class="col-4 lcdCheq">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-7 lcdLable">
                                                Bazel Broken
                                            </div>
                                            <div class="col-4 lcdCheq">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row lcdSec mx-auto">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-7 lcdLable">
                                                Spot (ZGP+SGP)
                                            </div>
                                            <div class="col-4 lcdCheq">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-7 lcdLable">
                                                Yellow Shadow LCD
                                            </div>
                                            <div class="col-4 lcdCheq">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row lcdSec mx-auto">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-7 lcdLable">
                                                Broken LCD
                                            </div>
                                            <div class="col-4 lcdCheq">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="row">

                                        </div>
                                    </div>

                                </div>

                                <!--  -->

                                <!-- Motherboard -->



                                <div class="text-center mb-1 mt-3">
                                    <div class="createListingHeading text-info">
                                        Motherboard
                                    </div>
                                </div>
                                <hr class="sectionUnderlineModel">
                                <div class="row motherboedSec">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <div class="nav-item nav-link active" id="nav-hp-tab" data-toggle="tab" href="#nav-hp" role="tab" aria-controls="nav-hp" aria-selected="true">HP
                                            </div>
                                            <div class="nav-item nav-link" id="nav-dell-tab" data-toggle="tab" href="#nav-dell" role="tab" aria-controls="nav-dell" aria-selected="false">Dell</div>
                                            <div class="nav-item nav-link" id="nav-lenovo-tab" data-toggle="tab" href="#nav-lenovo" role="tab" aria-controls="nav-lenovo" aria-selected="false">Lenovo</div>
                                            <div class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="false">Other Brand</div>
                                        </div>
                                    </nav>
                                    <div class="tab-content w-100" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-hp" role="tabpanel" aria-labelledby="nav-hp-tab">
                                            <div class="row" style="justify-content: center;">
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Bios Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="hpBiosLock" id="hpBiosLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="hpBiosLock" id="hpBiosUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Computrace / Absolute Software Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="hpSoftLock" id="hpSoftLockActive">
                                                                <span style="font-size: 15px;">Activate</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="hpSoftLock" id="hpSoftLockInActiive">
                                                                <span style="font-size: 15px;">Inactive</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Me Region Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="hpRegionLock" id="hpRegionLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="hpRegionLock" id="hpRegionUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="nav-dell" role="tabpanel" aria-labelledby="nav-dell-tab">

                                            <div class="row" style="justify-content: center;">
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-5 mbLable">Bios Lock</div>
                                                    <div class="col-7 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="dellBiosLock" id="dellBiosLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="dellBiosLock" id="dellBiosUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-5 mbLable">Computrace Lock</div>
                                                    <div class="col-7 mbCheq">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <input type="radio" name="dellSoftLock" id="dellsoftLockActive">
                                                                <span style="font-size: 15px;">Active</span>
                                                            </div>

                                                            <div class="col-4">
                                                                <input type="radio" name="dellSoftLock" id="dellsoftLockDisable">
                                                                <span style="font-size: 15px;">Disable</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="radio" name="dellSoftLock" id="dellsoftLockDeactive">
                                                                <span style="font-size: 15px;">Deactive</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-5 mbLable">TPM Lock</div>
                                                    <div class="col-7 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="dellRegionLock" id="dellRegionLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="dellRegionLock" id="dellRegionUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-lenovo" role="tabpanel" aria-labelledby="nav-lenovo-tab">
                                            <div class="row" style="justify-content: center;">
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Bios Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoBiosLock" id="lenovoBiosLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoBiosLock" id="lenovoBiosUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Computrace Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoSoftLock" id="lenovoSoftLockActive">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoSoftLock" id="lenovoSoftLockUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Any Other Error</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoOtherErr" id="lenovoOtherErr">
                                                                <span style="font-size: 15px;">Have</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="lenovoOtherErr" id="lenovoNoOtherErr">
                                                                <span style="font-size: 15px;">No Have</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">

                                            <div class="row" style="justify-content: center;">
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Bios Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="otherBiosLock" id="otherBiosLock">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="otherBiosLock" id="otherBiosUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Computrace Lock</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="otherSoftLock" id="otherSoftLockActive">
                                                                <span style="font-size: 15px;">Lock</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="otherSoftLock" id="otherSoftLockUnLock">
                                                                <span style="font-size: 15px;">OK</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2" style="width: 70%;">
                                                    <div class="col-7 mbLable">Any Other Error</div>
                                                    <div class="col-5 mbCheq">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="radio" name="otherErr" id="otherErr">
                                                                <span style="font-size: 15px;">Have</span>
                                                            </div>

                                                            <div class="col-6">
                                                                <input type="radio" name="otherErr" id="otherNoErr">
                                                                <span style="font-size: 15px;">No Have</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Battery -->
                                <div class="text-center mb-1 mt-3">
                                    <div class="createListingHeading text-info">
                                        Battery
                                    </div>
                                </div>
                                <hr class="sectionUnderlineModel">
                                <div class="batterySec row">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <div class="nav-item nav-link" id="nav-hpBattery-tab" data-toggle="tab" href="#nav-hpBattery" role="tab" aria-controls="nav-hpBattery" aria-selected="true">HP
                                            </div>
                                            <div class="nav-item nav-link active" id="nav-dellBattery-tab" data-toggle="tab" href="#nav-dellBattery" role="tab" aria-controls="nav-dellBattery" aria-selected="false">Dell</div>
                                            <div class="nav-item nav-link" id="nav-lenovoBattery-tab" data-toggle="tab" href="#nav-lenovoBattery" role="tab" aria-controls="nav-lenovoBattery" aria-selected="false">Lenovo</div>
                                            <div class="nav-item nav-link" id="nav-otherBattery-tab" data-toggle="tab" href="#nav-otherBattery" role="tab" aria-controls="nav-otherBattery" aria-selected="false">Other Brand</div>
                                        </div>
                                    </nav>

                                    <div class="tab-content w-100" id="nav-tabContent">
                                        <div class="tab-pane fade show " id="nav-hpBattery" role="tabpanel" aria-labelledby="nav-hpBattery-tab">
                                            <div class="row" style="justify-content: center;">
                                                hp
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" id="nav-dellBattery" role="tabpanel" aria-labelledby="nav-dellBattery-tab">
                                            <div class="row" style="justify-content: center;">
                                                <div class="row btryLbl my-2" style="width: 70%;">Battery Health</div>
                                                <div class="row" style="width: 70%;">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6 btryLbl">
                                                                <input class="" type="radio" name="battery" id="excellent">100 -
                                                                80
                                                            </div>
                                                            <div class="col-6 btryLbl">
                                                                Excellent
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6 btryLbl">
                                                                <input class="" type="radio" name="battery" id="Good">80
                                                                - 55
                                                            </div>
                                                            <div class="col-6 btryLbl">Good</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6 btryLbl">
                                                                <input class="" type="radio" name="battery" id="weak">50
                                                                - 0
                                                            </div>
                                                            <div class="col-6 btryLbl">Weak</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row batterySec">
                                                <div class="mt-3">
                                                    Scan PN &nbsp;
                                                    <input type="text" id="btryPN">
                                                </div>
                                                <br>
                                                <div style="color: #BB0000; font-size:15px; font-weight:700">Remove Battery And
                                                    Confirm</div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade show " id="nav-lenovoBattery" role="tabpanel" aria-labelledby="nav-hpBattery-tab">
                                            <div class="row" style="justify-content: center;">
                                                lenovo
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show " id="nav-otherBattery" role="tabpanel" aria-labelledby="nav-hpBattery-tab">
                                            <div class="row" style="justify-content: center;">
                                                other
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row batterySec my-2">
                                        <div class="btn btnT">Confirm</div>
                                    </div>

                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <!--model end  -->






        </div>
    </div>
</div>
<?php
require_once('../includes/footer.php')

?>