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

#btryPNSec {
    display: none;
}

.modal-content {
    border: none;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-check-to-slot"></i>
    <h6 class="pageName">Final Audit</h6>
</div>

<div class="row laptopAuditBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Scan Laptop
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row justify-content-center w-100 mt-4">
            <div class="">
                Scan Alsakb Number
                <input class="ml-2" type="text" id="qr_id">
                <button class="btnT d-none" id="myBtn1" onclick="getSortingData()" data-toggle="modal"
                    data-target="#exampleModal1">Scan</button>
                <!-- <button class="btnT2" data-toggle="modal" data-target="#myModal"> scan</button> -->
            </div>
        </div>
    </div>
</div>

<div class='modal-dialog modal-lg' role='document'>
    <div class='modal-content'>
        <form method='POST' action='insert/send_issues_save.php'>
            <div id="txtHint"></div>

        </form>
    </div>
</div>
<?php
require_once('../includes/footer.php')

?>
<script>
var input = document.getElementById("qr_id");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn1").click();
    }
});

const getSortingData = () => {
    var name = 0;
    qr_id = $('#qr_id').val();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "retrive/audit_model?qr_id=" + qr_id, true);
    xmlhttp.send();

    var getValue = 0;
    getValue = document.getElementById("qr_id");
    if (getValue.value != "") {
        getValue.value = "";
    }

}
let searchbar = document.querySelector('input[id="qr_id"]');
searchbar.focus();
search.value = '';
</script>