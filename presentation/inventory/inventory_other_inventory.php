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
    /* height: 75vh; */
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

.tabLable {
    font-weight: 700;
}

.tableSec {
    height: 45vh;
    overflow-y: auto;
    overflow-x: hidden;
    width: 100%;
    margin-right: 30px;
}


.tableSec table th {
    color: #168EB4;
    font-weight: 700;
}

.nav-tabs .nav-link.active {
    color: #168EB4;
}
</style>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-filter-list"></i>
    <h6 class="pageName">Inventory</h6>
</div>

<div class="row otherInventoryBodySec">
    <div class="cardContainer col-12">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Other Inventory
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="inventorySec row ml-2 mt-3">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <div class="nav-item nav-link active" id="nav-monitor-tab" data-toggle="tab" href="#nav-monitor"
                        role="tab" aria-controls="nav-monitor" aria-selected="true">
                        <span class="tabLable">
                            Monitor
                        </span>

                    </div>
                    <div class="nav-item nav-link" id="nav-desktop-tab" data-toggle="tab" href="#nav-desktop" role="tab"
                        aria-controls="nav-desktop" aria-selected="false">
                        <span class="tabLable">
                            Desktop
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="nav-keyboard-tab" data-toggle="tab" href="#nav-keyboard"
                        role="tab" aria-controls="nav-keyboard" aria-selected="false">
                        <span class="tabLable">
                            Keyboard
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="nav-mouse-tab" data-toggle="tab" href="#nav-mouse" role="tab"
                        aria-controls="nav-mouse" aria-selected="false">
                        <span class="tabLable">
                            Mouse
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="nav-charger-tab" data-toggle="tab" href="#nav-charger" role="tab"
                        aria-controls="nav-charger" aria-selected="false">
                        <span class="tabLable">
                            Charger
                        </span>
                    </div>
                </div>
            </nav>

            <div class="tab-content w-100 mt-2" id="nav-tabContent">
                <!-- Monitor -->
                <div class="tab-pane fade show active " id="nav-monitor" role="tabpanel"
                    aria-labelledby="nav-monitor-tab">
                    <div class="row" style="justify-content: flex-end;">
                        <div>
                            <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                                Excel</button>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="tableSec">
                                    <table class="table ml-3 table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">Pallet No</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="./inventory_monitor_model_table.php">
                                                        1
                                                    </a>
                                                </td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Desktop -->
                <div class="tab-pane fade show" id="nav-desktop" role="tabpanel" aria-labelledby="nav-desktop-tab">
                    <div class="row" style="justify-content: flex-end;">
                        <div>
                            <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                                Excel</button>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="tableSec">
                                    <table class="table mx-3 table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">Pallet No</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="./inventory_desktop_model_table.php">
                                                        1
                                                    </a>
                                                </td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Keyboard -->
                <div class="tab-pane fade show " id="nav-keyboard" role="tabpanel" aria-labelledby="nav-keyboard-tab">
                    <div class="row" style="justify-content: flex-end;">
                        <div>
                            <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                                Excel</button>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="tableSec">
                                    <table class="table mx-3 table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">Pallet No</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="./inventory_keyboard_model_table.php">
                                                        1

                                                    </a>


                                                </td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mouse -->
                <div class="tab-pane fade show " id="nav-mouse" role="tabpanel" aria-labelledby="nav-mouse-tab">
                    <div class="row" style="justify-content: flex-end;">
                        <div>
                            <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                                Excel</button>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="tableSec">
                                    <table class="table mx-3 table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">Pallet No</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="./inventory_mouse_model_table.php">

                                                        1
                                                    </a>
                                                </td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Charger -->
                <div class="tab-pane fade show " id="nav-charger" role="tabpanel" aria-labelledby="nav-charger-tab">
                    <div class="row" style="justify-content: flex-end;">
                        <div>
                            <button type="submit" class="btnT mr-4 mb-2"><i class="fa-solid fa-download"></i> Download
                                Excel</button>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="tableSec">
                                    <table class="table mx-3 table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">Pallet No</th>
                                                <th>Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="./inventory_charger_model_table.php">
                                                        1
                                                    </a>
                                                </td>
                                                <td>10</td>
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
<?php
require_once('../includes/footer.php')

?>