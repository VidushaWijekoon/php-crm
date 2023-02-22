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

    .scanSec {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sectionUnderlineModel {
        margin-top: 0px;
    }

    .detailsSec {
        justify-content: center;

    }

    input[type=text] {
        background: #FFFFFF;
        border: 1px solid #D1CDCD;
        border-radius: 5px;
        height: 24px;
        width: 100%;
        padding: 0 10px;
    }

    .DropDown {
        /* height: 24px; */
        width: 100%;
        border-radius: 5px;
        border: 1px solid #D1CDCD;
        padding: 0px 10px;
    }

    .btnT {
        background: #FFFFFF;
        border: 1px solid #168EB4;
        border-radius: 5px;
        font-weight: 600;
        font-size: 10px;
        padding: 5px 10px;
    }

    .select2-selection__rendered {
        line-height: 17px !important;
        padding-left: 0px !important;
    }
</style>



<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName pt-1">Update Item</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="">
            <div class="createListingHeading">
                <span>
                    Update & Re-Print Item Details
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- scan Section -->
        <div class="row scanSec mt-4">
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-5">Scan Alsakb QRCode</div>
                    <div class="col-7">
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-5">Scan MFG Barcode</div>
                    <div class="col-7">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>

        <!-- ADD Details Section -->
        <hr class="sectionUnderline mt-4" style="width: 80%;">
        <div class="row detailsSec">
            <div class="col-6">

                <div class="row mb-1">
                    <div class="col-4 addLable">ASIN</div>
                    <div class="col-8">
                        <input type="text" placeholder="" style="width: 100%;">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Device</div>
                    <div class="col-8">
                        <select name="" id="device" class="DropDown select2" style="width: 100%;">
                            <option selected value="laptop">laptop</option>
                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Brand</div>
                    <div class="col-8">
                        <select name="" id="brand" class="DropDown select2" style="width: 100%;">
                            <option selected value="dell">Dell</option>
                            <option value="lenovo">Lenovo</option>
                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Series</div>
                    <div class="col-8">
                        <select name="" id="series" class="DropDown select2" style="width: 100%;">
                            <option selected value="latitude">Latitude</option>

                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Model</div>
                    <div class="col-8">
                        <select name="" id="model" class="DropDown select2" style="width: 100%;">
                            <option selected value="latitude e5420">Latitude e5420</option>

                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Processor</div>
                    <div class="col-8">
                        <select name="" id="processor" class="DropDown select2" style="width: 100%;">
                            <option selected value="intel">intel</option>
                            <option value="amd">AMD</option>
                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Core</div>
                    <div class="col-8">
                        <select name="" id="core" class="DropDown select2" style="width: 100%;">
                            <option selected value="">i5-5200U</option>
                            <option value="">AMD</option>
                        </select>

                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Gen</div>
                    <div class="col-8">
                        <select name="" id="gen" class="DropDown select2" style="width: 100%;">
                            <option selected value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Speed</div>
                    <div class="col-8">
                        <select name="" id="speed" class="DropDown select2" style="width: 100%;">
                            <option selected value="2">2.00Ghz</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-4 addLable">LCD Size</div>
                    <div class="col-8">
                        <select name="" id="lcdsize" class="DropDown select2" style="width: 100%;">
                            <option selected value="14">14</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Resolution</div>
                    <div class="col-8">
                        <select name="" id="resolution" class="DropDown select2" style="width: 100%;">
                            <option selected value="1366 x 768">1366 x 768</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Battery</div>
                    <div class="col-8">
                        <select name="" id="battery" class="DropDown select2" style="width: 100%;">
                            <option selected value="yes">Yes</option>
                            <option selected value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Touch</div>
                    <div class="col-8">
                        <select name="" id="touch" class="DropDown select2" style="width: 100%;">
                            <option selected value="yes">Yes</option>
                            <option selected value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-4 addLable">Opticle</div>
                    <div class="col-8">
                        <select name="" id="opticle" class="DropDown select2" style="width: 100%;">
                            <option selected value="yes">Yes</option>
                            <option selected value="no">No</option>
                        </select>
                    </div>
                </div>


            </div>
        </div>
        <div class="row justify-content-center mt-3 mb-5">
            <div class="">
                <button class="btnT" type="submit"><i class="fa-solid fa-qrcode mr-1" style="color:#168EB4"></i> Update
                    & Print QR</button>
            </div>
        </div>


    </div>
</div>

<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

    })
</script>

<?php
require_once('../includes/footer.php')

?>