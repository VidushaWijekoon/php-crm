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

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.palletAddSec {
    display: flex;
    justify-content: center;
    /* width: 100%; */
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>
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
        <div class="form">
            <div class="row justify-content-center mt-4">
                <div class="row w-50">
                    <div class="col-4">Select Items</div>
                    <div class="col-8">
                        <select name="" id="item" class="w-100 DropDown" onchange="displayMonitor()">
                            <option>Select Item</option>
                            <option value="monitor">Monitor</option>
                            <option value="mouse">Mouse</option>
                            <option value="keyboard">Keyboard</option>
                            <option value="desktop">Desktop</option>
                            <option value="charger">Charger</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="palletNoSec">
                <div class="row w-50">
                    <div class="col-4">Pallet QR No</div>
                    <div class="col-8">
                        <input type="text" class="w-100" id="palletNo">
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="brandSec">
                <div class="row w-50">
                    <div class="col-4">Brand</div>
                    <div class="col-8">
                        <select name="" id="brand" class="w-100 DropDown select2">
                            <option value="dell">Dell</option>

                        </select>
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="seriesSec">
                <div class="row w-50">
                    <div class="col-4">Series</div>
                    <div class="col-8">
                        <select name="" id="series" class="w-100 DropDown select2">
                            <option value="latitude">Latitude</option>

                        </select>
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="modelSec">
                <div class="row w-50">
                    <div class="col-4">Model</div>
                    <div class="col-8">
                        <select name="" id="model" class="w-100 DropDown select2">
                            <option value="e5480">e5480</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="genSec">
                <div class="row w-50">
                    <div class="col-4">Generation</div>
                    <div class="col-8">
                        <select name="" id="gen" class="w-100 DropDown select2">
                            <option value="5">5</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="screenSizeSec">
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
            <div class="row palletAddSec mt-2" id="serialNoSec">
                <div class="row w-50">
                    <div class="col-4">Serial No</div>
                    <div class="col-8">
                        <input type="text" class="w-100 id=" serialNo">
                    </div>

                </div>

            </div>
            <div class="row palletAddSec mt-2" id="itemQtySec">
                <div class="row w-50">
                    <div class="col-4">Item Qty</div>
                    <div class="col-8">
                        <input type="text" class="w-100" id="itemQty">
                    </div>

                </div>

            </div>

            <div class="row justify-content-center mt-4">
                <button class="btnT" type="submit">Confirm</button>

            </div>
        </div>
    </div>

    <!-- <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="../../plugins/jquery/jquery.min.js"></script> -->

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

    <script>
    const displayMonitor = () => {
        var selectedVal = $('#item').val();
        var series = document.getElementById("seriesSec");
        var model = document.getElementById("modelSec");
        var gen = document.getElementById("genSec");
        var pallet = document.getElementById("palletNoSec");
        var brand = document.getElementById("brandSec");
        var screen = document.getElementById("screenSizeSec");
        var serial = document.getElementById("serialNoSec");
        var item = document.getElementById("itemQtySec");
        console.log(selectedVal);
        if (selectedVal == "monitor") {
            series.style.display = "none";
            model.style.display = "none";
            gen.style.display = "none";
            pallet.style.display = "block";
            pallet.style.display = "flex";
            // pallet.style.justifyContent = "center";
            brand.style.display = "block";
            brand.style.display = "flex";
            // brand.style.justifyContent = "center";
            screen.style.display = "block";
            screen.style.display = "flex";
            // screen.style.justifyContent = "center";
            serial.style.display = "block";
            serial.style.display = "flex";
            item.style.display = "block";
            item.style.display = "flex";
            // item.style.justifyContent = "center";

        } else if (selectedVal == "desktop") {
            series.style.display = "block";
            series.style.display = "flex";
            model.style.display = "block";
            model.style.display = "flex";
            gen.style.display = "block";
            gen.style.display = "flex";
            pallet.style.display = "block";
            pallet.style.display = "flex";
            brand.style.display = "block";
            brand.style.display = "flex";
            screen.style.display = "block";
            screen.style.display = "flex";
            serial.style.display = "block";
            serial.style.display = "flex";
            item.style.display = "block";
            item.style.display = "flex";
        } else if ((selectedVal == "mouse") || (selectedVal == "keyboard") || (selectedVal == "charger")) {
            pallet.style.display = "block";
            pallet.style.display = "flex";
            brand.style.display = "block";
            brand.style.display = "flex";
            item.style.display = "block";
            item.style.display = "flex";
            series.style.display = "none";
            model.style.display = "none";
            gen.style.display = "none";
            screen.style.display = "none";
            serial.style.display = "none";
        }
    }
    </script>

    <?php
    require_once('../includes/footer.php')

    ?>