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

.tableSec table {
    width: 100%;
    font-size: 10px;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
    font-size: 10px;
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
    <i class="pageNameIcon fa-solid fa-user-group"></i>
    <h6 class="pageName pt-1">Team Members</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    INV202
                </span>
                Scanned Details
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="row">
            <div class="teamDetailsSec px-5" style="width: 100%;">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Description</th>
                                <th>AlSakb QR</th>
                                <th>MFG</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Core</th>
                                <th>Processor</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                                <th>Opticle</th>
                                <th>Scanned Date</th>
                                <th>Scanned Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>alsakb12312</td>
                                <td>12312313</td>
                                <td>Dell</td>
                                <td>Latitude e2560</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>2023-01-02</td>
                                <td>00:00:00</td>
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