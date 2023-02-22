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

    .sectionUnderlineModel {
        margin-top: 0px;
    }

    /* model styles */
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

    .DropDown {
        height: 30px;
        width: 100%;
        border-radius: 5px;
        border: 1px solid #D1CDCD;
        /* padding: 0px 10px; */
    }

    /*  */
    /*  */
</style>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Final Audit</h6>
</div>

<div class="row laptopAuditBodySec">
    <div class="cardContainer">
        <div class="">
            <div class="createListingHeading">
                <span>
                    Scan Laptop
                </span>


            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row justify-content-center">
            <div class="col-4">
                Scan Alsakb Number
                <input type="text">
            </div>
            <button data-toggle="modal" data-target="#myModal"> scan</button>
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


                            <!-- Scaned laptop Details -->


                            <div class="text-center mb-1 mt-3">
                                <div class="createListingHeading text-info">
                                    Scanned Laptop Details
                                </div>
                            </div>
                            <hr class="sectionUnderlineModel">

                            <!-- <div class="row d-flex justify-content-center mb-2" style="width: 100%;">
                                <div class="col-2 modelLable">Scan Alsakb No</div>
                                <div class="col-4 modelInput">
                                    <input type="text">
                                </div>
                            </div> -->


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
                                            <select name="" id="brand" class="DropDown">
                                                <option selected value="dell">Dell</option>
                                                <option value="lenovo">Lenovo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Model</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="model" class="DropDown">
                                                <option selected value="latitude e5420">Latitude e5420</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Processor</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="processor" class="DropDown">
                                                <option selected value="intel">intel</option>
                                                <option value="amd">AMD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Core</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="core" class="DropDown">
                                                <option selected value="">i5-5200U</option>
                                                <option value="">AMD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Gen</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="gen" class="DropDown">
                                                <option selected value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Speed</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="speed" class="DropDown">
                                                <option selected value="2">2.00Ghz</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Screen Size</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="screen" class="DropDown">
                                                <option selected value="14">14</option>
                                                <option value="15.6">15.6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Resolution</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="res" class="DropDown">
                                                <option selected value="1366 x 768">1366 x 768</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="row">
                                        <div class="col-4 modelLable">Touch</div>
                                        <div class="col-7 modelInput">
                                            <select name="" id="touch" class="DropDown">
                                                <option selected value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
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
                                        <div class="nav-item nav-link" id="nav-dell-tab" data-toggle="tab" href="#nav-dell" role="tab" aria-controls="nav-dell" aria-selected="false">
                                            Dell</div>
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

                                <div class="row batterySec">
                                    <div class="mt-3">
                                        Scan PN &nbsp;
                                        <input type="text" id="btryPN">
                                    </div>
                                    <br>
                                    <div style="color: #BB0000; font-size:15px; font-weight:700">Remove Battery And
                                        Confirm</div>
                                </div>

                                <div class="row batterySec my-2">
                                    <div class="btn btn-tig">Confirm</div>
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

<?php
require_once('../includes/footer.php')

?>