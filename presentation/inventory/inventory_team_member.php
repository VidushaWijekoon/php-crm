<?php

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
    }

    .tableSec table th {
        color: #168EB4;
        font-weight: 700;
    }
</style>



<div class="row mb-4 ml-1 pt-2">

    <i class="pageNameIcon fa-regular fa-users-medical"></i>
    <h6 class="pageName pt-1">Team Members</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Team Member Details
                </span>
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
                                <th>Team Member</th>
                                <th>Target</th>
                                <th>Completed Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>50</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>John</td>
                                <td>50</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Doe</td>
                                <td>50</td>
                                <td>23</td>
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