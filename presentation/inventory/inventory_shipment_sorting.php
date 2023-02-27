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

.scanSec {
    justify-content: center;
}

.btnT {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.modelID {
    width: 800px;
}

.cusName {
    font-weight: 700;
    font-size: 5rem;
    color: #168EB4;
}

.modelName {
    font-weight: 700;
    font-size: 3rem;
    color: #071a34;
}

.modelGen {
    font-weight: 700;
    font-size: 2rem;
    color: #071a34;
}

input[type='text'] {
    height: 26px;

}

.formSec {
    margin-right: 50px;
    /* display: flex; */
    /* flex-direction: column; */
    /* justify-content: center; */
    /* align-items: center; */
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
    <i class="pageNameIcon fa-solid fa-filter-list"></i>
    <h6 class="pageName">Shipment Sorting</h6>
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
        <div class="row scanSec mt-4">
            <div class="col-2">Scan Supplier Barcode</div>
            <div class="col-4">
                <input class="w-100" type="text" id="name" name="supplier">
            </div>
        </div>

        <div class="row scanSec my-2">

            OR

        </div>
        <div class="row scanSec">
            <div class="col-2">Scan MFG</div>
            <div class="col-4">
                <input class="w-100" type="text" id="mfg">
            </div>
        </div>
        <div class="row scanSec my-2">

            <button class="btnT d-none" id="myBtn1" onclick="getSortingData()" data-toggle="modal"
                data-target="#exampleModal1">Scan</button>

        </div>




    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div id="txtHint"></div>
        </div>
    </div>


    <?php
    require_once('../includes/footer.php')

    ?>

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
        xmlhttp.open("GET", "sorting_model.php?q=" + mfg, true);
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