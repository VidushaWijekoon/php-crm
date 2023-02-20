<?php
    require_once("../../presentation/includes/header.php")
?>

<style>
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
    width: 30%;
}

.tableSpec .rightSec {
    /* padding-top: 5px; */
    width: 70%;
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
</style>

<div class="row">
    <div class="sampleTable">
        <div class="titleHeader">
            Table Header
        </div>

        <div class="containerCard">
            <div class="tableSec mx-3 row">

                <div class="tableName col-12">
                    Table Name
                </div>
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
                                <i class="fa-solid fa-magnifying-glass ml-2" style="color: #168EB4; font-size:20px"></i>

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


                <table class="table mx-3 table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

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









<?php
    require_once("../../presentation/includes/footer.php")
?>