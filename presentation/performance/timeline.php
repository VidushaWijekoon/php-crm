<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
.main-timeline-section {
    position: relative;
    width: 100%;
    margin: auto;
    height: 300px;
}

.main-timeline-section .timeline-start,
.main-timeline-section .timeline-end {
    position: absolute;
    background: #168eb4;
    border-radius: 100px;
    top: 50%;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
}

.main-timeline-section .timeline-end {
    right: 32%;
}

.main-timeline-section .conference-center-line {
    position: absolute;
    width: 68%;
    height: 5px;
    top: 50%;
    transform: translateY(-50%);
    background: #168eb4;
}

.timeline-article {
    width: 9%;
    position: relative;
    min-height: 300px;
    float: left;
    left: 67px;
}

.timeline-article .content-date {
    position: absolute;
    top: 35%;
    /* left: -30px; */
    font-size: 18px;
}

.timeline-article .meta-date {
    position: absolute;
    top: 50%;
    left: 0px;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
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
    top: 59%;
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
    font-size: 15px;
    font-weight: 600;
}

#time1 {
    background: red !important;
    color: #fff;
}

#time2 {
    background: green !important;
    color: #fff;
}
</style>



<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-receipt m-2"></i>
        <h6 style="margin-top: auto; font-weight: bold;">Road Map</h6>
    </div>
</div>

<div class="row" style="background-color: #fff;">
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


<?php include_once('../includes/footer.php');
?>