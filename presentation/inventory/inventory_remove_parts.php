<?php

session_start();

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

.DropDown {
    height: 26px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    padding: 0px 10px;
}

.tableSec {
    height: 45vh;
    overflow-y: auto;
    overflow-x: hidden;
}

.tableSec table {
    width: 100%;

}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
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
    <i class="pageNameIcon fa-solid fa-wrench"></i>
    <h6 class="pageName">Remove Parts</h6>
</div>

<div class="row removeItemsBodySec">
    <div class="cardContainer col-12">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Update Supplier Sheet
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row justify-content-center mt-4">
            <div class="row w-50">
                <div class="col-4">Select Removed Part</div>
                <div class="col-8">
                    <select class="w-100 DropDown" name="removedPart" id="removedPart">
                        <option value="ram">RAM</option>
                        <option value="hdd">HDD</option>
                        <option value="ram_hdd">RAM + HDD</option>
                    </select>
                </div>
                <hr class="col-12">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="row w-50">
                <div class="col-4">Scan MFG / Supplier Barcode</div>
                <div class="col-8">
                    <input type="text" class="w-100">
                </div>

            </div>
        </div>
        <div class="row mt-4">
            <div class="teamDetailsSec px-5" style="width: 100%;">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MFG/Suppler Barcode</th>
                                <th>Removed Part</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>SDD342342</td>
                                <td>HDD</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
<?php
require_once('../includes/footer.php')

?>