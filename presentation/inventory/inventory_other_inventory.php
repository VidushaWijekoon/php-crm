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
    <i class="pageNameIcon fa-sharp fa-solid fa-warehouse-full"></i>
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
                    <div class="nav-item nav-link" id="nav-monitor-tab" data-toggle="tab" href="#nav-monitor" role="tab"
                        aria-controls="nav-monitor" aria-selected="false" onClick="showUser('monitor')" value='monitor'>
                        <span class="tabLable">
                            Monitor
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="nav-desktop-tab" data-toggle="tab" href="#nav-desktop" role="tab"
                        aria-controls="nav-desktop" aria-selected="false" onClick="showUser('desktop')" value='desktop'>
                        <span class="tabLable">
                            Desktop
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="keyboard" data-toggle="tab" href="#nav-keyboard" role="tab"
                        aria-controls="nav-keyboard" aria-selected="false" onClick="showUser('keyboard')">
                        <span class="tabLable">
                            Keyboard
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="nav-mouse-tab" data-toggle="tab" href="#nav-mouse" role="tab"
                        aria-controls="nav-mouse" aria-selected="false" onClick="showUser('mouse')" value='mouse'>
                        <span class="tabLable">
                            Mouse
                        </span>
                    </div>
                    <div class="nav-item nav-link" id="charger" data-toggle="tab" href="#nav-charger" role="tab"
                        aria-controls="nav-charger" aria-selected="false" onClick="showUser('charger')">
                        <span class="tabLable">
                            Charger
                        </span>
                    </div>
                </div>
            </nav>
            <div class="tab-content w-100 mt-2" id="nav-tabContent">
                <!-- <div class="card-body "> -->
                <div id="txtHint"><b></b></div>
            </div>
        </div>

    </div>
</div>
<?php
require_once('../includes/footer.php')

?>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "retrive/view_pallet_summery.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>