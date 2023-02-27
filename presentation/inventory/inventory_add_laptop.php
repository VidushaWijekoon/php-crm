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
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Add Item</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Add inventory Details
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- scan Section -->
        <div class="row scanSec mt-4">
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-5">Scan Supplier Barcode</div>
                    <div class="col-7">
                        <input type="text" id="name">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-5">Scan MFG Barcode</div>
                    <div class="col-7">
                        <input type="text" id="mfg">
                    </div>
                </div>
            </div>
        </div>
        <button class="btnT d-none" id="myBtn1" onclick="getSortingData()" data-toggle="modal"
            data-target="#exampleModal1">Scan</button>
        <!-- ADD Details Section -->
        <hr class="sectionUnderline mt-4" style="width: 80%;">

        <div id="txtHint"></div>
    </div>
</div>

<!-- 
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script> -->

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
var input1 = document.getElementById("name");
input1.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn1").click();
    }
});
var input = document.getElementById("mfg");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn1").click();
    }
});

const getSortingData = () => {
    var name = 0;
    var mfg = 0;
    name = $('#name').val();
    mfg = $('#mfg').val();
    if (name != 0) {
        mfg = name;
    }
    console.log(mfg);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "add_item_view.php?q=" + mfg, true);
    xmlhttp.send();
    var getValue = 0;
    var getValue2 = 0;
    getValue = document.getElementById("name");
    getValue2 = document.getElementById("mfg");
    if (getValue2 != 0) {
        getValue2.value = "";
    }
    if (getValue.value != "") {
        getValue.value = "";
    }

}
let searchbar = document.querySelector('input[name="supplier"]');
searchbar.focus();
search.value = '';
</script>
<?php
require_once('../includes/footer.php')

?>