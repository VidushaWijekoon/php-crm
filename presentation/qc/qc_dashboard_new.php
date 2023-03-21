<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
?>
<?php
$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
$department_id = $_SESSION['department_id'];
 $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
$sql="SELECT full_name,employees.emp_id,department_name FROM employees 
 LEFT JOIN users ON users.emp_id=employees.emp_id 
 LEFT JOIN departments ON departments.department_id=employees.department_id
 WHERE user_id='$user_id' ";
 $sql_run_name=mysqli_query($connection,$sql);
 $name=0;
 $emp_id=0;
 $department_name=0;
 foreach($sql_run_name as $data){
    $name=$data['full_name'];
    $emp_id=$data['emp_id'];
    $department_name=$data['department_name'];
 }
 $sql="SELECT schedule_time,schedule_id FROM `day_schedules`";
 $sql_run2=mysqli_query($connection,$sql);
 $morning=0; 
 $beforelunch =0;
 $afterlunch=0;
 $beforetea=0;
 $after_tea=0;
 $dayend=0;
 foreach($sql_run2 as $data){
    if($data['schedule_id'] ==1){
    $morning=$data['schedule_time'];
    }else if($data['schedule_id'] ==2){
    $beforelunch =$data['schedule_time'];
     }else if($data['schedule_id'] ==3){
    $afterlunch=$data['schedule_time'];
     }else if($data['schedule_id'] ==4){
    $beforetea=$data['schedule_time'];
     }else if($data['schedule_id'] ==5){
    $after_tea=$data['schedule_time'];
     }else if($data['schedule_id'] ==6){
    $dayend=$data['schedule_time'];
     }
 }
    date_default_timezone_set('Asia/dubai');
    $timestamp = time();
    $day_start = date("Y-m-d 00:00:00");
    $day_end = date("Y-m-d 23:59:00");

   
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

.label_values {
    margin-left: 5px;
    margin-right: 10px;
}

.radioLbl {
    font-size: 10px;
    padding-top: 6px;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="../inventory/inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back
        to
        Dashboard</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-check-to-slot"></i>
    <h6 class="pageName">Performance Page</h6>
</div>

<div class="row performanceBodySec my-5">
    <div class="cardContainer">
        <div class="">
            <!-- Emp Heading -->
            <div class="empDetailsHeading mb-3">
                <div class="col-12">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Name :
                            <span><?php echo $name ?></span>
                        </div>
                        <div class="empNo">Emp No :
                            <span><?php echo $emp_id ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-1">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Department :
                            <span><?php echo $department_name ?></span>
                        </div>
                        <div class="empNo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Performance Details -->

        <div class="empDetails mb-3 mx-3 mt-3">
            <form method="POST" action="insert/qc_dashboard_new_save.php">
                <div class="col-12">
                    <div class="row mx-4  justify-content-between">

                        <div class="row col-lg-6">
                            <div class="userName col-4">
                                Job Description
                            </div>
                            <div class="userinput col-7">
                                <?php
                                $sql = "SELECT targets.job_description,targets.target_id FROM targets LEFT JOIN performance_records ON performance_records.job_description = targets.target_id WHERE user_id='$user_id' ORDER BY performance_id DESC LIMIT 1";
                                $sql_run = mysqli_query($connection, $sql);
                                $job = "please select";
                                if (!empty($sql_run)) {
                                    foreach ($sql_run as $data) {
                                        $job = $data['job_description'];
                                        $job_id = $data['target_id'];
                                    }
                                }
                                ?>
                                <select class="DropDown" name="job">
                                    <option selected value="<?php echo $job_id ?>"><?php echo $job ?></option>
                                    <?php
                                    if ($department_id == 19) { ?>
                                    <?php 
                                if ($department_id == 19){ ?>
                                    <option value="24">High Gen Functional Test + MFG </option>
                                    <option value="25">High Gen Functional Test </option>
                                    <option value="26">Low Gen Functional Test</option>
                                    <option value="27">Windows Instalation
                                    </option>
                                    <option value="28">Combine
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row col-lg-6">
                            <div class="userName col-4">
                                Target points
                            </div>
                            <div class="userinput col-7">
                                <input class="w-100 pl-2" type="text" placeholder="100" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <div class="row mx-4  justify-content-between">
                        <div class="row col-lg-6">
                            <div class="userName col-4">
                                Scan QR
                            </div>
                            <div class="userinput col-7">
                                <input class="w-100 pl-2" type="text" name="scan_qr" placeholder="Scan QR">
                            </div>

                        </div>
                        <div class="row col-lg-6">
                            <div class="userName col-4">
                                Today Achived Points
                            </div>
                            <div class="userinput col-7">
                                <?php
                                $sql = "SELECT SUM(target) as points FROM performance_records WHERE user_id='$user_id' AND end_time BETWEEN '$day_start' AND '$day_end'";
                                $sql_run = mysqli_query($connection, $sql);
                                $points = 0;
                                $remaining_points = 0;
                                $extra_points = 0;
                                foreach ($sql_run as $data) {
                                    $points = $data['points'];
                                }
                                if ($points <= 100) {
                                    $remaining_points = 100 - $points;
                                } else {
                                    $extra_points = $points - 100;
                                }
                                ?>
                                <input class="w-100 pl-2" type="text" placeholder='<?php echo $points ?>' readonly>
                            </div>
                        </div>


                    </div>
                </div>
                <button type="submit" class="d-none"></button>
            </form>
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
                            Remaining Points
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text" placeholder='<?php echo $remaining_points ?>'
                                readonly>
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
                            Extra Points
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text" placeholder='<?php echo $extra_points ?>' readonly>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <!-- ///////////////////////////////////////////////////////////// -->
                                        <div class="timeline-article timeline-article-bottom">
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 09:00:00");
                                            $session1_end = $date1->format("Y-m-d 13:55:00");
                                            $session1_cutof = $date1->format("Y-m-d 09:05:00");
                                            $scan_time = 0;
                                            $sql = "SELECT start_time FROM performance_records WHERE user_id = '$user_id' AND start_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY start_time ASC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = -1;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['start_time'];
                                                }
                                                $session1_start = new DateTime($session1_cutof);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $sec = $diff->format('%s');
                                                $time = ($hours * 60) + $minutes;
                                                $delay = "$hours:$minutes:$sec";
                                                // $hours1   = $scan_time->format('h'); 
                                                // $minutes1 = $scan_time->format('i');
                                                // echo $hours1 . ":" . $minutes1;
                                            }
                                            $status = 0;
                                            ?>

                                            <?php
                                            if ($time <= 5 && $time > 0) {
                                                $status = 0;
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $morning ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time > 5) {
                                                $status = 1;
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    <?php echo $morning ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $morning ?>
                                                </div>
                                            </div>
                                            <?php }
                                            if ($time >= 0) {
                                                $session1_start = $date1->format("Y-m-d 09:00:00");
                                                $session1_end = $date1->format("Y-m-d 13:55:00");
                                                $query = "SELECT time FROM time_trakings WHERE user_id='$user_id' AND session_id='1'AND work_date BETWEEN '$session1_start' AND '$session1_end' ";
                                                $query_run = mysqli_query($connection, $query);
                                                $rows = 0;
                                                $rows = mysqli_num_rows($query_run);
                                                if ($rows == 0) {
                                                    $squry = "INSERT INTO `time_trakings`(
                                                                    `user_id`,
                                                                    `session_id`,
                                                                    `time`,
                                                                    `status`
                                                                )
                                                                VALUES(
                                                                    '$user_id',
                                                                    '1',
                                                                    '$delay',
                                                                    '$status'
                                                                )";
                                                    $query_run = mysqli_query($connection, $squry);
                                                }
                                            }
                                            ?>
                                        </div>
                                        <!-- ////////////////////////////////////////////////////// -->
                                        <div class="timeline-article timeline-article-top">
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 13:30:00");
                                            $session1_end = $date1->format("Y-m-d 14:30:00");
                                            $session1_cutof = $date1->format("Y-m-d 13:55:00");
                                            $scan_time = 0;
                                            $sql = "SELECT end_time FROM performance_records WHERE user_id = '$user_id' AND end_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY end_time DESC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = -100;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['end_time'];
                                                }
                                                $session1_start = new DateTime($session1_cutof);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $time = ($hours * 60) + $minutes;
                                            }
                                            ?>

                                            <?php
                                            if ($time >= 0) { ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $beforelunch ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time < 0 && $time > -100) {
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    <?php echo $beforelunch ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $beforelunch ?>
                                                </div>
                                            </div>
                                            <?php }

                                            ?>
                                        </div>
                                        <div class="timeline-article timeline-article-bottom">
                                            <!-- <div class="content-date">
                                                <div class="lateTime">1 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    3.05
                                                </div>
                                            </div> -->
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 15:00:00");
                                            $session1_end = $date1->format("Y-m-d 18:45:00");
                                            $scan_time = 0;
                                            $sql = "SELECT start_time FROM performance_records WHERE user_id='$user_id' AND start_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY start_time ASC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = -1;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['start_time'];
                                                }
                                                $session1_start = new DateTime($session1_start);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $sec = $diff->format('%s');
                                                $time = ($hours * 60) + $minutes;
                                                $delay = "$hours:$minutes:$sec";
                                            }
                                            ?>
                                            <?php
                                            if ($time <= 5 && $time >= 0) {
                                                $status = 0;
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $afterlunch ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time > 5) {
                                                $status = 1;
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    <?php echo $afterlunch ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $afterlunch ?>
                                                </div>
                                            </div>
                                            <?php }
                                            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            if ($time >= 0) {
                                                $session1_start = $date1->format("Y-m-d 03:00:00");
                                                $session1_end = $date1->format("Y-m-d 06:45:00");
                                                $query = "SELECT time FROM time_trakings WHERE user_id='$user_id' AND session_id='2'AND work_date BETWEEN '$session1_start' AND '$session1_end' ";
                                                $query_run = mysqli_query($connection, $query);
                                                $rows = 0;
                                                $rows = mysqli_num_rows($query_run);
                                                if ($rows == 0) {
                                                    $squry = "INSERT INTO `time_trakings`(
                                                                    `user_id`,
                                                                    `session_id`,
                                                                    `time`,
                                                                    `status`
                                                                )
                                                                VALUES(
                                                                    '$user_id',
                                                                    '3',
                                                                    '$delay',
                                                                    '$status'
                                                                )";
                                                    $query_run = mysqli_query($connection, $squry);
                                                }
                                            }
                                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            ?>
                                        </div>
                                        <div class="timeline-article timeline-article-top">
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 18:00:00");
                                            $session1_end = $date1->format("Y-m-d 19:15:00");
                                            $session1_cutof = $date1->format("Y-m-d 18:45:00");
                                            $scan_time = 0;
                                            $sql = "SELECT end_time FROM performance_records WHERE user_id = '$user_id' AND end_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY end_time DESC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = 250;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['end_time'];
                                                }
                                                $session1_start = new DateTime($session1_cutof);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $time = ($hours * 60) + $minutes;
                                            }
                                            ?>

                                            <?php
                                            if ($time >= 0 && $time < 240) {
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $beforetea ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time < 0) {
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $beforetea ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $beforetea ?>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="timeline-article timeline-article-bottom">
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 19:15:00");
                                            $session1_end = $date1->format("Y-m-d 19:45:00");
                                            $scan_time = 0;
                                            $sql = "SELECT start_time FROM performance_records WHERE user_id = '$user_id' AND start_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY start_time ASC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = -1;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['start_time'];
                                                }
                                                $session1_start = new DateTime($session1_start);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $sec = $diff->format('%s');
                                                $time = ($hours * 60) + $minutes;
                                                $delay = "$hours:$minutes:$sec";
                                            }
                                            ?>

                                            <?php
                                            if ($time <= 5 && $time >= 0) {
                                                $status = 0; ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    <?php echo $after_tea ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time > 5) {
                                                $status = 1;
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $after_tea ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $after_tea ?>
                                                </div>
                                            </div>
                                            <?php }
                                            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                            if ($time >= 0) {
                                                $session1_start = $date1->format("Y-m-d 19:15:00");
                                                $session1_end = $date1->format("Y-m-d 20:00:00");
                                                $query = "SELECT time FROM time_trakings WHERE user_id='$user_id' AND session_id='2'AND work_date BETWEEN '$session1_start' AND '$session1_end' ";
                                                $query_run = mysqli_query($connection, $query);
                                                $rows = 0;
                                                $rows = mysqli_num_rows($query_run);
                                                if ($rows == 0) {
                                                    $squry = "INSERT INTO `time_trakings`(
                                                                    `user_id`,
                                                                    `session_id`,
                                                                    `time`,
                                                                    `status`
                                                                )
                                                                VALUES(
                                                                    '$user_id',
                                                                    '5',
                                                                    '$delay',
                                                                    '$status'
                                                                )";
                                                    $query_run = mysqli_query($connection, $squry);
                                                }
                                            }
                                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                            ?>
                                        </div>
                                        <div class="timeline-article timeline-article-top">
                                            <?php
                                            $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                            $session1_start = $date1->format("Y-m-d 20:00:00");
                                            $session1_end = $date1->format("Y-m-d 21:15:00");
                                            $session1_cutof = $date1->format("Y-m-d 20:55:00");
                                            $scan_time = 0;
                                            $sql = "SELECT end_time FROM performance_records WHERE user_id = '$user_id' AND end_time BETWEEN '$session1_start'AND'$session1_end' ORDER BY end_time DESC LIMIT 1";
                                            $sql_run = mysqli_query($connection, $sql);
                                            $rows = mysqli_num_rows($sql_run);
                                            if ($rows == 0) {
                                                $hours = '00';
                                                $minutes = '00';
                                                $time = 150;
                                            } else {
                                                foreach ($sql_run as $data) {
                                                    $scan_time = $data['end_time'];
                                                }
                                                $session1_start = new DateTime($session1_cutof);
                                                $scan_time = new DateTime($scan_time);
                                                $diff = $session1_start->diff($scan_time);
                                                $hours   = $diff->format('%h');
                                                $minutes = $diff->format('%i');
                                                $time = ($hours * 60) + $minutes;
                                            }
                                            ?>
                                            <?php
                                            if ($time >= 0 && $time != 150) {
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    <?php echo $dayend ?>
                                                </div>
                                            </div>
                                            <?php
                                            } elseif ($time < 0) {

                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime"><?php echo $hours . ":" . $minutes . "HH:MM"; ?>
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    <?php echo $dayend ?>
                                                </div>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <div class="meta-date timeSec" id="">
                                                <div class="time">
                                                    <?php echo $dayend ?>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="timeline-end"></div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ////////// -->


                <!-- Table Sec -->
                <div class="performDetailTableSec mt-4">
                    <div class="tableSec">
                        <table class="table mx-3 table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Job Description</th>
                                    <th>Scanned QR</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Generation</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Task Status</th>
                                    <th>Target</th>
                                    <th>Reject Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                if (isset($_GET['pageno'])) {
                                    $pageno = $_GET['pageno'];
                                    $i = 50 * ($pageno - 1);
                                } else {
                                    $pageno = 1;
                                    $i = 0;
                                }
                                $no_of_records_per_page = 20;
                                $offset = ($pageno - 1) * $no_of_records_per_page;
                                $conn = $connection;
                                // Check connection
                                if (mysqli_connect_errno()) {
                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                    die();
                                }

                                $total_pages_sql = "SELECT performance_id FROM performance_records  WHERE user_id = '$user_id' AND start_time BETWEEN '$day_start' AND '$day_end'  ORDER BY performance_id DESC";
                                $result = mysqli_query($conn, $total_pages_sql);
                                $total_rows = mysqli_num_rows($result);
                                $total_pages = ceil($total_rows / $no_of_records_per_page);
                                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                $sql = "SELECT
                                        performance_records.qr_number as performance_qr,
                                        performance_records.start_time,
                                        performance_records.end_time,
                                        performance_records.status as task_status,
                                        performance_records.target,
                                        main_inventory_informations.brand,
                                        main_inventory_informations.model,
                                        main_inventory_informations.keyboard_backlight,
                                        main_inventory_informations.generation,
                                        main_inventory_informations.keyboard_backlight,
                                        targets.job_description,
                                        qc_forms.*,
                                        qc_forms.qc_form_id
                                    FROM
                                        performance_records
                                    LEFT JOIN main_inventory_informations ON main_inventory_informations.inventory_id = performance_records.qr_number
                                    LEFT JOIN targets ON targets.target_id = performance_records.job_description
                                    LEFT JOIN qc_forms ON qc_forms.performance_id = performance_records.performance_id
                                    WHERE
                                        performance_records.user_id = '$user_id' AND start_time BETWEEN '$day_start' AND '$day_end'
                                    ORDER BY
                                        performance_records.performance_id
                                    DESC LIMIT $offset, $no_of_records_per_page";
                            $sql_run=mysqli_query($connection,$sql);
                            foreach($sql_run as $data){
                                $bios_lock_hp = $data['bios_lock_hp'];
                                            $bios_lock_dell = $data['bios_lock_dell'];
                                            $bios_lock_lenovo = $data['bios_lock_lenovo'];
                                            $bios_lock_other = $data['bios_lock_other'];

                                    $computrace_hp = $data['computrace_hp'];
                                    $computrace_dell = $data['computrace_dell'];
                                    $computrace_lenovo = $data['computrace_lenovo'];
                                    $computrace_other = $data['computrace_other'];

                                    $me_region_lock_hp = $data['me_region_lock_hp'];
                                    $tpm_lock_dell = $data['tpm_lock_dell'];
                                    $other_error_lenovo = $data['other_error_lenovo'];
                                    $other_error_other_brand = $data['other_error_other_brand'];

                                    $no_power = $data['power'];
                                    $no_display = $data['mb_display'];
                                    $other_issue = $data['mb_other_issue'];
                                    $bodywork = $data['bodywork'];
                                    $sanding = $data['sanding'];

                                    $a_top = $data['a_top'];
                                    $b_bazel = $data['b_bazel'];
                                    $c_palmrest = $data['c_palmrest'];
                                    $d_back_cover = $data['d_back_cover'];
                                    $keyboard = $data['keyboard'];
                                    $lcd = $data['lcd'];
                                    $webcam = $data['webcam'];
                                    $mousepad_button = $data['mousepad_button'];
                                    $mic = $data['mic'];
                                    $speaker = $data['speaker'];
                                    $wi_fi_connection = $data['wi_fi_connection'];
                                    $usb = $data['usb'];
                                    $battery = $data['battery'];
                                    $hinges_cover = $data['hinges_cover'];
                                    $ram = $data['ram'];
                                    $hdd_boot = $data['hard_disk_boot'];
                                    $qc_form_id = $data['qc_form_id'];
                                    $keyboard_backlight = $data['keyboard_backlight'];
                                ?>
                                <tr>
                                    <td><?php echo $data['job_description'] ?></td>
                                    <td><?php echo $data['performance_qr'] ?></td>
                                    <td><?php echo $data['brand'] ?></td>
                                    <td><?php echo $data['model'] ?></td>
                                    <td><?php echo $data['generation'] ?></td>
                                    <td><?php echo $data['start_time'] ?></td>
                                    <td><?php echo $data['end_time'] ?></td>
                                    <td><?php if ($data['task_status'] == 1) {
                                                echo "completed";
                                            } else {
                                                echo "On Going";
                                            } ?></td>
                                    <td><?php echo $data['target'] ?></td>
                                    <td><?php
                                            if (!empty($qc_form_id)) {

                                                if ($bios_lock_hp == 'lock') {
                                                    echo "Bios Lock </br>";
                                                }
                                                if ($bios_lock_dell == 'lock') {
                                                    echo "Bios Lock </br>";
                                                }
                                                if ($bios_lock_lenovo == 'lock') {
                                                    echo "Bios Lock</br>";
                                                }
                                                if ($bios_lock_other == 'lock') {
                                                    echo "Bios Lock</br>";
                                                }
                                                if ($computrace_hp == 'active') {
                                                    echo "Computrace Lock</br>";
                                                }
                                                if ($computrace_dell == 'activated' || $computrace_dell == 'disable') {
                                                    echo "Computrace Lock</br>";
                                                }
                                                if ($computrace_lenovo == 'lock') {
                                                    echo "Computrace Lock</br>";
                                                }
                                                if ($computrace_other == 'lock') {
                                                    echo "Computrace Lock</br>";
                                                }
                                                if ($me_region_lock_hp == 'lock') {
                                                    echo "ME Region Lock</br>";
                                                }
                                                if ($tpm_lock_dell == 'not ok') {
                                                    echo "TPM Lock</br>";
                                                }
                                                if ($other_error_lenovo == 'have') {
                                                    echo "Other Error Lenovo</br>";
                                                }
                                                if ($other_error_other_brand == 'no') {
                                                    echo "Other Error</br>";
                                                }
                                                if ($no_power == 'reject') {
                                                    echo "No Power</br>";
                                                }
                                                if ($no_display == 'reject') {
                                                    echo "No Display Issue</br>";
                                                }
                                                if ($other_issue == 'have') {
                                                    echo "Motherboard other Error</br>";
                                                }
                                                if ($a_top == 'reject') {
                                                    echo "A/Top Cover(Scratch/Broken/Dent)</br>";
                                                }
                                                if ($b_bazel == 'b_bazel') {
                                                    echo "B/bazel(Scratch/Brocken/Logo/Color)</br>";
                                                }
                                                if ($c_palmrest == 'reject') {
                                                    echo "C/Palmrest (Scratch/Broken/Dent)</br>";
                                                }
                                                if ($d_back_cover == 'reject') {
                                                    echo "D/Back Cover (Scratch/Broken/Dent)</br>";
                                                }
                                                if ($keyboard == 'reject') {
                                                    echo "Keyboard(Function/ Key missing / Color)</br>";
                                                }
                                                if ($lcd == 'reject') {
                                                    echo "LCD (Whitespot/Scratch/Broken/Line/Yellow shadow)</br>";
                                                }
                                                if ($webcam == 'reject') {
                                                    echo "Webcam</br>";
                                                }
                                                if ($mousepad_button == 'reject') {
                                                    echo "Mousepad & Button</br>";
                                                }
                                                if ($mic == 'reject') {
                                                    echo "Microphone (MIC)</br>";
                                                }
                                                if ($speaker == 'reject') {
                                                    echo "Speaker / Sound</br>";
                                                }
                                                if ($wi_fi_connection == 'reject') {
                                                    echo "Wi-Fi Connection</br>";
                                                }
                                                if ($usb == 'reject') {
                                                    echo "USB Port</br>";
                                                }
                                                if ($battery == 'bad') {
                                                    echo "Battery Health</br>";
                                                }
                                                if ($hinges_cover == 'reject') {
                                                    echo "Hinges Cover</br>";
                                                }
                                                if ($bodywork == 'reject') {
                                                    echo "Bodywork</br>";
                                                }
                                                if ($sanding == 'reject') {
                                                    echo "Sanding</br>";
                                                }
                                                if ($ram == 'not match') {
                                                    echo "Ram missed match</br>";
                                                }
                                                if ($hdd_boot == 'not ok') {
                                                    echo "HDD is not booting</br>";
                                                }
                                                if ($keyboard_backlight == 'not ok') {
                                                    echo "Kyeboard Backlight not match with sales order</br>";
                                                }
                                            } else {
                                                echo "pass";
                                            }
                                            ?>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li><a href="?pageno=1" class="btnTB mx-1">First</a></li>
                            <li class="<?php if ($pageno <= 1) {
                                            echo 'disabled';
                                        } ?>">
                                <a href="<?php if ($pageno <= 1) {
                                                echo '#';
                                            } else {
                                                echo "?pageno=" . ($pageno - 1);
                                            } ?>" class="btnTB mx-1">Prev</a>
                            </li>
                            <li class="<?php if ($pageno >= $total_pages) {
                                            echo 'disabled';
                                        } ?>">
                                <a href="<?php if ($pageno >= $total_pages) {
                                                echo '#';
                                            } else {
                                                echo "?pageno=" . ($pageno + 1);
                                            } ?>" class="btnTB mx-1">Next</a>
                            </li>
                            <li><a href="?pageno=<?php
                                                    echo $total_pages; ?>" class="btnTB mx-1">Last</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<?php
require_once('../includes/footer.php');
?>
<script>
let searchbar = document.querySelector('input[name="scan_qr"]');
searchbar.focus();
search.value = '';
</script>