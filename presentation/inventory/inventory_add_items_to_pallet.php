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
        height: 75vh;
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

    .DropDown {
        height: 26px;
        width: 100%;
        border-radius: 5px;
        border: 1px solid #D1CDCD;
        padding: 0px 10px;
    }

    input[type='text'] {
        height: 26px;

    }

    .select2-selection__rendered {
        line-height: 17px !important;
        padding-left: 0px !important;
    }

    .btnT {
        background: #FFFFFF;
        border: 1px solid #168EB4;
        border-radius: 5px;
        font-weight: 600;
        font-size: 12px;
        padding: 5px 10px;
    }
</style>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-filter-list"></i>
    <h6 class="pageName">Add Items to Pallet</h6>
</div>

<div class="row addItemPalletBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Add Item Details
                </span>


            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="row justify-content-center mt-4">
            <div class="row w-50">
                <div class="col-4">Select Items</div>
                <div class="col-8">
                    <select name="" id="item" class="w-100 DropDown">
                        <option value="monitor">Monitor</option>
                        <option value="mouse">Mouse</option>
                        <option value="keyboard">Keyboard</option>
                        <option value="desktop">Desktop</option>
                        <option value="charger">Charger</option>
                    </select>
                </div>

            </div>

        </div>
        <div class="row justify-content-center mt-2">
            <div class="row w-50">
                <div class="col-4">Pallet No</div>
                <div class="col-8">
                    <input type="text" class="w-100">
                </div>

            </div>

        </div>
        <div class="row justify-content-center mt-2">
            <div class="row w-50">
                <div class="col-4">Brand</div>
                <div class="col-8">
                    <select name="" id="brand" class="w-100 DropDown select2">
                        <option value="dell">Dell</option>

                    </select>
                </div>

            </div>

        </div>
        <div class="row justify-content-center mt-2">
            <div class="row w-50">
                <div class="col-4">Screen Size</div>
                <div class="col-8">
                    <select name="" id="screenSize" class="w-100 DropDown">
                        <option value="11">11</option>
                        <option value="12.5">12.5</option>
                        <option value="13.3">13.3</option>
                        <option value="14">14</option>
                        <option value="15.6">15.6</option>
                        <option value="17.3">17.3</option>
                    </select>
                </div>

            </div>

        </div>
        <div class="row justify-content-center mt-2">
            <div class="row w-50">
                <div class="col-4">Item Qty</div>
                <div class="col-8">
                    <input type="text" class="w-100">
                </div>

            </div>

        </div>

        <div class="row justify-content-center mt-4">
            <button class="btnT">Confirm</button>

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