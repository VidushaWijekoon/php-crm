<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
$department_id = $_SESSION['department_id'];
 $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
 $sql="SELECT full_name,employees.emp_id FROM employees LEFT JOIN users ON users.emp_id=employees.emp_id WHERE user_id='$user_id' ";
 $sql_run_name=mysqli_query($connection,$sql);
 $name=0;
 $emp_id=0;
 foreach($sql_run_name as $data){
    $name=$data['full_name'];
    $emp_id=$data['emp_id'];
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
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="../inventory/inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
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
                            <span><?php echo $department_id ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Performance Details -->

        <div class="empDetails mb-3 mx-3 mt-3">

            <!-- Detail Sec -->
            <form method="POST" action="insert/performance_save.php">
                <div class="col-12">
                    <div class="row mx-4  justify-content-between">

                        <div class="row col-lg-6">
                            <div class="userName col-4">
                                Job Description
                            </div>
                            <div class="userinput col-7">
                                <?php
                                $sql="SELECT targets.job_description,targets.target_id FROM targets LEFT JOIN performance_records ON performance_records.job_description = targets.target_id WHERE user_id='$user_id' ORDER BY performance_id DESC LIMIT 1";
                                $sql_run=mysqli_query($connection,$sql);
                                $job="please select";
                                if(!empty($sql_run)){
                                foreach($sql_run as $data){
                                    $job=$data['job_description'];
                                     $job_id=$data['target_id'];
                                    }
                                }
                                ?>
                                <select class="DropDown" name="job">
                                    <option selected value="<?php echo $job_id ?>"><?php echo $job ?></option>
                                    <?php 
                                if ($department_id == 1 || $department_id == 13 || $department_id == 23 || $department_id == 22){ ?>
                                    <option value="2">Clean </option>
                                    <option value="3">Packing </option>
                                    <option value="4">Full Painting Packing</option>
                                    <option value="5">High Gen
                                        Bodywork+Sanding+Taping
                                    </option>
                                    <option value="6">Low Gen
                                        bodywork+sanding+taping
                                    </option>
                                    <option value="7">Bodywork+Sanding
                                    </option>
                                    <option value="8">Designing + Pasting </option>
                                    <option value="Pasting">Pasting </option>
                                    <?php if ($user_id == 280) {
                                                    ?>
                                    <option value="10">Low Generation</option>
                                    <option value="11">Full Painting A+C+D</option>
                                    <option value="12">Keyboard Lacker</option>
                                    <option value="13">A Panel Paint</option>
                                    <?php
                                }
                                }elseif($department_id == 8){
                                    ?>
                                    <option value="10">Low Generation Painting</option>
                                    <option value="11">Full Painting A+C+D</option>
                                    <option value="12">Keyboard Lacker</option>
                                    <option value="13">A Panel Paint</option>
                                    <?php
                                }elseif($department_id == 14){
                                    ?>
                                    <option value="14">Unlock </option>
                                    <option value="15">Chargin </option>
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
                                $sql="SELECT SUM(target) as points FROM performance_records WHERE user_id='$user_id' AND end_time BETWEEN '$day_start' AND '$day_end'"; 
                                $sql_run=mysqli_query($connection,$sql);
                                $points=0;
                                $remaining_points=0;
                                $extra_points=0;
                                foreach($sql_run as $data){
                                    $points=$data['points'];
                                }
                                if($points <=100){
                                    $remaining_points=100-$points;
                                }else{
                                     $extra_points=$points-100;
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
                                        <!-- ///////////////////////////////////////////////////////////// -->
                                        <div class="timeline-article timeline-article-bottom">
                                            <?php 
                                            $day_start = date("Y-m-d 09:00:00");
                                            $day_end = date("Y-m-d 09:05:00");
                                            $sql="SELECT start_time FROM performance_records WHERE ";
                                            ?>
                                            <div class="content-date" style="left: 0 !important;">
                                                <div class="lateTime">2 min</div>
                                            </div>
                                            <div class="meta-date timeSec" id="time1">
                                                <div class="time">
                                                    9.00
                                                </div>
                                            </div>
                                            <div class="meta-date timeSec" id="time2">
                                                <div class="time">
                                                    9.00
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ////////////////////////////////////////////////////// -->
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
                                <th>Status</th>
                                <th>Target</th>
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
                            $sql="SELECT qr_number,start_time,end_time,status,performance_records.target,main_inventory_informations.brand,main_inventory_informations.model,main_inventory_informations.generation,targets.job_description FROM performance_records
                            LEFT JOIN main_inventory_informations ON main_inventory_informations.inventory_id =performance_records.qr_number
                            LEFT JOIN targets ON targets.target_id=performance_records.job_description ORDER BY performance_id DESC LIMIT $offset, $no_of_records_per_page";
                            $sql_run=mysqli_query($connection,$sql);
                            
                            foreach($sql_run as $data){
                                ?>
                            <tr>
                                <td><?php echo $data['job_description'] ?></td>
                                <td><?php echo $data['qr_number'] ?></td>
                                <td><?php echo $data['brand'] ?></td>
                                <td><?php echo $data['model'] ?></td>
                                <td><?php echo $data['generation'] ?></td>
                                <td><?php echo $data['start_time'] ?></td>
                                <td><?php echo $data['end_time'] ?></td>
                                <td><?php echo $data['status'] ?></td>
                                <td><?php echo $data['target'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li><a href="?pageno=1" class="btnTB mx-1">First</a></li>
                        <li class="<?php if ($pageno <= 1) {echo 'disabled';}?>">
                            <a href="<?php if ($pageno <= 1) {echo '#';} else {echo "?pageno=" . ($pageno - 1);}?>"
                                class="btnTB mx-1">Prev</a>
                        </li>
                        <li class="<?php if ($pageno >= $total_pages) {echo 'disabled';}?>">
                            <a href="<?php if ($pageno >= $total_pages) {echo '#';} else {echo "?pageno=" . ($pageno + 1);}?>"
                                class="btnTB mx-1">Next</a>
                        </li>
                        <li><a href="?pageno=<?php echo $total_pages; ?>" class="btnTB mx-1">Last</a></li>
                    </ul>
                </div>

            </div>

        </div>



    </div>
</div>
<script>
let searchbar = document.querySelector('input[name="scan_qr"]');
searchbar.focus();
search.value = '';
</script>
<?php
require_once('../includes/footer.php')

?>