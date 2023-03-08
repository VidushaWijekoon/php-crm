<?php
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack = mysqli_real_escape_string($connection, $_GET['rack']);
$id = mysqli_real_escape_string($connection, $_GET['id']);

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

    .virtualInvSec {
        display: flex;
        align-items: center;
        justify-content: center;

    }


    .cardContainer {
        width: 99%;
        background-color: #ffffff;
        padding: 10px 5px;
    }


    .pageNavigation a {
        color: #168EB4;
        font-weight: 600;
    }

    .createListingHeading {
        font-weight: 600;
        font-size: 15px;
    }

    .sectionUnderline {
        border-top: 2px solid #DBDBDB;
        margin-top: 0px;
    }
</style>




<div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Inventory</a>
</div>



<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">View Items</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading d-flex w-100 justify-content-between">
                <div>
                    <p>View Items in Rack</p>
                </div>
                <div>
                    <!-- <button class="btnT mr-3">View Slot Items</button> -->
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="rackSearch ml-2">
            <div class="row mb-1">
                <div class="col-lg-3">
                    <p>
                        Rack Name
                    </p>
                </div>
                <div class="col-lg-4">
                    <input class="w-100" type="text">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-lg-3">
                    <p>
                        Layer Name
                    </p>
                </div>
                <div class="col-lg-4">
                    <input class="w-100" type="text">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-lg-3">
                    <p>
                        Slot Name
                    </p>
                </div>
                <div class="col-lg-4">
                    <input class="w-100" type="text">
                </div>
                <div class="col-lg-1">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>

        <div class="ml-2 mt-3">
            <div class="createListingHeading d-flex w-100 justify-content-between">
                <div>
                    <p>Items Details</p>
                </div>
                <div class="mr-4">
                    <div>Total Item QTY : <span>10</span> </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="itemList">
            <div class="itemView border w-50 mb-1">
                <div class="item p-2 ">
                    Dell Latitude e5480 11 inch 30 pin Display
                </div>
            </div>
            <div class="itemView border w-50 mb-1">
                <div class="item p-2 ">
                    Dell Latitude e5480 11 inch 30 pin Display
                </div>
            </div>
            <div class="itemView border w-50 mb-1">
                <div class="item p-2 ">
                    Dell Latitude e5480 11 inch 30 pin Display
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require_once('../includes/footer.php')

?>