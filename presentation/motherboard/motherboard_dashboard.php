<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
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
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}


/* card1 */

/* Card 1 --Count showing Styles */
.dashCard {
    /* width: 180px;
    height: 80px; */
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    color: black;
    padding: 10px 12px;
}

.dashCardTop {
    /* width: 100%; */
    display: flex;
    justify-content: space-between;
}

/* 
.cardIcon {
    width: 20%;
    padding: 5px 15px;
} */

.cardTitle {
    width: 100%;
    /* padding: 8px 15px; */
    margin-left: 10px;
    margin-top: 2px;
    font-weight: 500;
    font-size: 12px;
    color: #000000;
}

.cardValue {
    font-weight: 550;
    font-size: 15px;
    color: #000000;
    margin-top: 2px;
    margin-left: 5px;

}


/* table styles */
.sampleTable {
    color: black;
    width: 100%;
}

.titleHeader {
    color: #168EB4;
    font-weight: 600;
    font-size: 24px;
}

.containerCard {
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
    border-radius: 5px;
}

.tableName {
    font-weight: 600;
    font-size: 24px;
    color: #000000;

}

.tableDataSec {
    overflow-x: scroll;
    -webkit-overflow-scrolling: scroll;
    width: 100%;
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

/* .tableSpec .leftSec {
    width: 30%;
} */

.tableSpec .rightSec {
    /* padding-top: 5px; */
    /* width: 70%; */
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
    height: 24px;
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
    .tableSpec .leftSec {
        width: 20%;
        order: 1;
    }

    .tableSpec .rightSec {
        width: 80%;
        order: 2;
    }



}

@media screen and (max-width:426px) {
    .tableSpec {
        flex-direction: column;
        height: 110px;
    }

    .tableSpec .leftSec {
        order: 2;

    }



    .tableSpec .rightSec {
        order: 1;
        margin-bottom: 5px;

    }

    .searchSec {
        margin-bottom: 5px;
    }

}


/* /// */

/*  */
</style>
<div class="row mb-4 ml-1 pt-2 justify-content-between">
    <div class="row">
        <i class="pageNameIcon fa-solid fa-store"></i>
        <h6 class="pageName">Motheboard Dashboard</h6>
    </div>
    <div>
        <a href="./performance_motherboard"> <button class="btnT">Performance Page</button></a>
    </div>
</div>

<div class="row invTeamLeaderBodySec">
    <div class="cardContainer">

        <!-- Card -->
        <div class="row px-4">
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Received from Inventory</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">5
                        <!-- <span style="font-size: 12px;">100</span> -->
                    </div>
                </div>

            </div>
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Send to Inventory</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">2/
                        <span style="font-size: 12px;">5</span>
                    </div>
                </div>

            </div>
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Received From QC</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">10
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <div class="dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">Send to QC</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">5/
                        <span style="font-size: 12px;">10</span>
                    </div>
                </div>

            </div>
        </div>
        <!-- Card end -->



        <!-- table Sec -->

        <div class="row mt-5">
            <div class="sampleTable">

                <div class="ml-2">
                    <div class="createListingHeading pl-2">
                        <span>
                            Task Details
                        </span>
                    </div>
                </div>


                <hr class="sectionUnderline">

                <div class="containerCard mt-2">
                    <div class="tableSec mx-3 row">


                        <!-- Table Tab and Search Bar Section  -->
                        <div class="tableSpec px-3 col-12">

                            <div class="leftSec">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">ALL</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="rightSec">
                                <div class="row">
                                    <!-- Search section -->
                                    <div class="searchSec">
                                        <input type="text">
                                        <i class="fa-solid fa-magnifying-glass ml-2"
                                            style="color: #168EB4; font-size:20px"></i>

                                    </div>
                                    <!-- Filter Section -->
                                    <div class="dateSec">
                                        <input type="date" name="" id="">
                                        <input type="date" name="" id="">
                                        <i class="fa-solid fa-calendar ml-2" style="color: #168EB4; font-size:20px"></i>
                                        <!-- <div><i class="fa-solid fa-calender  ml-2" style="color: #168EB4; font-size:20px"></i> -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- ////////////////////Table from Here///////////////////// -->

                        <div class="tableDataSec">
                            <table class="table mx-3 table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Alsakb No</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Issue</th>
                                        <th>Task Status</th>
                                        <th>Received From</th>
                                        <th>Received date</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>alsakb12345</td>
                                        <td>Dell</td>
                                        <td>Latitude e5480</td>
                                        <td>Bios Lock</td>
                                        <td>not Complete</td>
                                        <td>
                                            inventory
                                        </td>
                                        <td>2022-10-15</td>


                                    </tr>
                                </tbody>
                            </table>

                        </div>





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
                    <br>
                    <br>

                </div>
            </div>

        </div>
        <!--  -->

    </div>
</div>







<?php
require_once('../includes/footer.php')

?>