<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");


require_once('../../functions/db_connection.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 18px;
    margin-top: 5px;
    font-weight: bold;
}

.ecomViewOrdersBodySec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;

}

.tableSec table {
    width: 100%;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
}

.tableSpec {
    display: flex;
    justify-content: space-between;
    height: 40px;
    /* width: 100%; */
}

.tableSpec .leftSec {
    display: flex;
}

.tableSpec .rightSec {
    /* padding-top: 5px; */

    display: flex;
    justify-content: flex-end;

}

.searchSec {
    display: flex;
    align-items: center;
    margin-right: 10px;
}

.searchSec input {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
    width: 200px;

}


.searchSec i:hover {
    cursor: pointer;
}

.dateSec {
    display: flex;
    align-items: center;
    margin-right: 5px;

}

.dateSec input[type="date"] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
}

.dateSec i:hover {
    cursor: pointer;
}

.tablePagination {
    width: 100%;
    display: flex;
    justify-content: flex-end;

}

.page-item.active .page-link {
    background-color: #168EB4;
    border-color: #168EB4;
}

@media screen and (max-width:1024px) {
    .dropdownFilter {
        display: none;
    }

    .tableSpec .leftSec {
        width: 40%;
        order: 1;
    }

    .tableSpec .rightSec {
        width: 60%;
        order: 2;
    }

    .searchSec input {
        width: 100px;
    }



}

@media screen and (max-width:426px) {
    .tableSpec {
        flex-direction: column;
        height: 110px;
    }

    .tableSpec .leftSec {
        order: 2;
        display: flex;
        flex-direction: row;
        width: 100%;

    }

    .tableSpec .rightSec {
        order: 1;
        margin-bottom: 5px;
        width: 100%;

    }

    .searchSec {
        margin-bottom: 5px;
    }

    .searchSec input {
        width: 200px;
    }

}

.tableSec1 {
    height: 500px;
    overflow-y: auto;
    overflow-x: auto;
    width: 100%;
}

.dropdownFilter {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
}
</style>

<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Sales Person 1</h6>
</div>

<div class="ecomViewOrdersBodySec">
    <div class="cardContainer">

        <div class="tableSec mx-3 row">

            <!-- ////////////////////Table from Here///////////////////// -->
            <table class="table table-hover text-center">
                <thead style="background-color: #fff;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Listing NO.</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Processor</th>
                        <th scope="col">Core</th>
                        <th scope="col">Gen</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Listed Qty</th>
                        <th scope="col">Created Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>LI12345</td>
                        <td>Amazon</td>
                        <td>Dell</td>
                        <td>Latitude e5480</td>
                        <td>intel</td>
                        <td>i5-8530U</td>
                        <!-- <td>E-Commerce</td>                            -->
                        <td>8</td>
                        <td>2.80Ghz</td>
                        <td>4</td>
                        <td>2022-10-02</td>


                    </tr>



                </tbody>
            </table>





            <!--  -->



            <div class="tablePagination">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="visually-hidden"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>



    </div>
</div>




<?php
require_once('../includes/footer.php')
?>