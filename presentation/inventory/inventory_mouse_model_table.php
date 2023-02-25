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

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>
<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_other_inventory.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Inventory</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-filter-list"></i>
    <h6 class="pageName">Inventory</h6>
</div>

<div class="row otherInventoryBodySec">
    <div class="cardContainer col-12">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Mouse
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="row">
            <div class="tableSec mt-3">
                <div class="createListingHeading ml-5">
                    <span>
                        Pallet No :
                        <span>1</span>
                    </span>
                </div>
                <table class="table mx-5 table-hover text-center">
                    <thead>
                        <tr>
                            <th style="width: 33%;">Pallet No</th>
                            <th style="width: 33%;">Brand</th>
                            <th style="width: 33%;">Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Asus</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Asus</td>
                            <td>10</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>


<?php
require_once('../includes/footer.php')

?>