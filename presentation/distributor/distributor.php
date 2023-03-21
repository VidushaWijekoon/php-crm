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

.empDetailsHeading {
    font-weight: 600;
    font-size: 17px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
}

.sectionUnderlineModel {
    margin-top: 0px;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.DropDown {
    height: 24px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    /* padding: 0px 10px; */
}

input[type=text] {
    background: #FFFFFF;
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 24px;
    width: 100%;
}

@media screen and (max-width:768px) {
    .tableSec {
        overflow-x: auto;

    }


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

/* //// */

/* timeline styles start */
.main-timeline-section {
    position: relative;
    width: 100%;
    margin: auto;
    height: 100px;
}

.main-timeline-section .timeline-start,
.main-timeline-section .timeline-end {
    position: absolute;
    background: #168eb4;
    border-radius: 100px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
}

.main-timeline-section .timeline-end {
    right: 0;
}

.main-timeline-section .conference-center-line {
    position: absolute;
    width: 100%;
    height: 5px;
    top: 50%;
    transform: translateY(-50%);
    background: #168eb4;
}

.timeline-article {
    width: 14%;
    position: relative;
    min-height: 100px;
    float: left;
    left: 10%;
}

.timeline-article .content-date {
    position: absolute;
    top: 10%;
    /* left: -30px; */
    font-size: 18px;
}

.timeline-article .meta-date {
    position: absolute;
    top: 50%;
    left: 0px;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    border-radius: 100%;
    background: #fff;
    border: 1px solid #168eb4;
}

.timeline-article-top .content-box:before {
    content: " ";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: -20px;
    border: 10px solid transparent;
    border-bottom-color: #168eb4;
}

.timeline-article-bottom .content-date {
    top: 75%;
}

.timeline-article-bottom .content-box {
    top: 0%;
}

.timeline-article-bottom .content-box:before {
    content: " ";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -20px;
    border: 10px solid transparent;
    border-top-color: #168eb4;
}



@media screen and (max-width: 1366px) {
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        padding: 0 20px;
    }
}

@media (min-width: 1920px) and (max-width: 2560px) {
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
        padding: 0 30px;
    }
}

.timeSec {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
}

.lateTime {
    font-size: 10px;
    font-weight: 600;
    margin-left: 5px;
}

#time1 {
    background: #BB0000 !important;
    color: #fff;
}

#time2 {
    background: green !important;
    color: #fff;
}

/* // */

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

/* //////////////////////// */
.btnCard {
    /* width: 112px; */
    padding: 0px 5px;
    height: 28px;
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    display: flex;
    color: #000000;
    justify-content: center;
    align-items: center;
    gap: 10px;

}

.btnCardLable {
    font-weight: 600;
    font-size: 10px;
}

/* //////// */
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="#"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>


<div class="row mb-4 ml-1 pt-2 w-100 justify-content-between">
    <div>
        <div class="row">
            <i class="pageNameIcon fa-solid fa-check-to-slot"></i>
            <h6 class="pageName">Distributor</h6>
        </div>
    </div>
    <div>
        <!-- Btn Card -->
        <a href="../performance/performance_inventory_history.php">
            <div class="btnCard mr-3 mt-2 mb-1">
                <div class="btnCardIcon">
                    <i class="fa-solid fa-timer" style="color: #168EB4;font-size: 15px;"></i>
                </div>
                <div class="btnCardLable"> History</div>
            </div>
        </a>
        <!-- ////////////// -->

    </div>
</div>



<div class="row performanceBodySec my-5">
    <div class="cardContainer">
        <div class="">
            <!-- Emp Heading -->
            <div class="empDetailsHeading mb-3">
                <div class="col-12">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Name :
                            <span>John Doe</span>
                        </div>
                        <div class="empNo">Emp No :
                            <span> Inv 202</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-1">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Department :
                            <span>Production</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Card Sec -->

        <div class="row mx-2">
            <!-- Card 1 -->
            <div class=" dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        Body Work Issue</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">10
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class=" dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        LCD Issue</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">10
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class=" dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        BodyWork Rack Qty</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">10
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->
            <!-- Card 1 -->
            <div class=" dashCard mt-2 mb-1 mr-3">
                <div class="dashCardTop">
                    <div class="cardIcon"><i class="fa-solid fa-scale-balanced"
                            style="color: #168EB4;font-size: 16px;"></i>
                    </div>
                    <div class="cardTitle">
                        LCD Rack Qty</div>
                </div>
                <div class="dashCardBody">
                    <div class="cardValue">10
                        <!-- <span style="font-size: 18px;">100</span> -->
                    </div>
                </div>

            </div>
            <!-- ////////////// -->


        </div>

        <!-- Performance Details -->

        <div class="empDetails mb-3 mx-3 mt-3">

            <!-- Detail Sec -->
            <div class="col-12">
                <div class="row mx-4  justify-content-between">

                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Scan QR
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text" placeholder="Scan QR">
                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Target
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <div class="row mx-4  justify-content-between">
                    <div class="row col-lg-6">
                        <div class="userName col-4">

                        </div>
                        <div class="userinput col-7">

                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Today Completed Qty
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="row mx-4  justify-content-between">
                    <div class="row col-lg-6">
                        <div class="userName col-4">

                        </div>
                        <div class="userinput col-7">

                        </div>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Remaining Qty
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>


                </div>
            </div>
            <!-- ///////////////// -->

            <!-- TIME SEC -->

            <!-- <a href="./timeline.php">
                <button>time</button>
            </a> -->
            <div class="perfoTimeSec">
                <div class="row">
                    <div class="col-lg-6">


                    </div>
                    <div class="col-lg-6">
                        <div class="row my-4">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <section class="main-timeline-section">
                                    <div class="timeline-start"></div>
                                    <div class="conference-center-line"></div>
                                    <div class="conference-timeline-content">

                                        <div class="timeline-article timeline-article-bottom">
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime">2 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    9.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-article timeline-article-top">
                                            <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    2.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-article timeline-article-bottom">
                                            <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    3.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-article timeline-article-top">
                                            <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    6.15
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-article timeline-article-bottom">
                                            <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    6.45
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-article timeline-article-top">
                                            <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    9.00
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="timeline-end"></div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- ////////// -->

            <div class="row">
                <div class="col-4">
                    <div class="tableSec">
                        <table class="table mx-3 table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>LCD Completed</th>
                                    <th>Bodywork Completed</th>
                                    <th>Remaning qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-12-12</td>
                                    <td>
                                        62136jhbh
                                    </td>
                                    <td>4</td>
                                    <td>3</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-8">
                    <!-- Table Sec -->
                    <div class="performDetailTableSec mt-4">
                        <div class="tableSec">
                            <table class="table mx-3 table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Completed From Production</th>
                                        <th>LCD Rack</th>
                                        <th>Body Work Rack</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2023-12-12</td>
                                        <td>
                                            62136jhbh
                                        </td>
                                        <td>4</td>
                                        <td>3</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>




        </div>



    </div>
</div>

<?php
require_once('../includes/footer.php')

?>