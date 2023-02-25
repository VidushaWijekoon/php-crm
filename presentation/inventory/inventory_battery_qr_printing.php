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

.btryLbl {
    font-weight: 600;
    font-size: 12px;
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
    <i class="pageNameIcon fa-solid fa-battery-bolt"></i>
    <h6 class="pageName">Battery Sticker Printing</h6>
</div>

<div class="row addItemPalletBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Generate QR
                </span>


            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="row ml-4 mt-4 align-items-center">
            <div class="btryLbl">
                Click here to generate QR
            </div>
            <button class="ml-4 btnTB"> Generate</button>
        </div>

        <div class="row qrSec ml-4 mt-4">
            <div class=" col-12 qr">
                <i class="fa-solid fa-qrcode border px-2" style="font-size:200px;" ;></i>


            </div>
            <button class="ml-2 mt-2 btnTB px-5"> Print QR</button>
        </div>

    </div>
</div>

<?php
require_once('../includes/footer.php')
?>