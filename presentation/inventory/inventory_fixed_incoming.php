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

.sectionUnderlineModel {
    margin-top: 0px;
}

/* model styles */
.modelInput input[type=text] {
    background: #FFFFFF;
    border: 1px solid #D1CDCD;
    border-radius: 5px;
    height: 24px;
    width: 100%;
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
.btnT {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 15px;
    padding: 5px 10px;
}

.btnT2 {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.radioSec {
    display: flex;
    align-items: center;
    gap: 3px;
}

/*  */
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
    <i class="pageNameIcon fa-solid fa-check-to-slot"></i>
    <h6 class="pageName">Fixed Laptop Incoming</h6>
</div>

<div class="row laptopAuditBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Scan Fixed Laptop
                </span>


            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row justify-content-center w-100 mt-4">
            <div class="">
                Scan Alsakb Number
                <input class="ml-2" type="text">
                <button class="btnT2" data-toggle="modal" data-target="#myModal"> scan</button>
            </div>

        </div>
    </div>

    <!-- Model -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fixed Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <!--  -->
</div>


<?php
require_once('../includes/footer.php')

?>