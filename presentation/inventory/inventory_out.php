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
    <h6 class="pageName">Inventory Out Page</h6>
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
                            <span> <?php echo $emp_id ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-1">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Department :
                            <span><?php echo $department_name ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Performance Details -->

        <div class="empDetails mb-3 mx-3 mt-3">

            <!-- Detail Sec -->
            <div class="col-12">
                <div class="row mx-4  justify-content-center">
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Scan QR Code
                        </div>
                        <div class="userinput col-7">
                            <form method="POST">
                                <input class="w-100 pl-2" name="inventory_id" type="text">
                                <button class="d-none" type="submit" name="submit"></button>
                            </form>
                            <?php
                            if(isset($_POST['submit'])){
                                $inventory_id = $_POST['inventory_id'];
                                 $current_date_time = $date1->format('Y-m-d H:i:s');
                                $sql="UPDATE main_inventory_informations SET send_to_production='1',send_time_to_production= '$current_date_time',send_to_pro_user_name='$username' WHERE inventory_id='$inventory_id' AND send_to_production='0' ";
                                $sql_run=mysqli_query($connection , $sql);
                                $department_id = $_SESSION['department_id'];
                                $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                                $start_date = $date1->format('Y-m-d H:i:s');
                                $query = " INSERT INTO `performance_records`(
                                `user_id`,
                                `department_id`,
                                `qr_number`,
                                `job_description`,
                                `start_time`,
                                `end_time`,
                                status
                                )
                                VALUES(
                                '$user_id',
                                '$department_id',
                                '$inventory_id',
                                '21',
                                '$current_date_time',
                                '$current_date_time',
                                '1'
                                ) ";
                                $query_run = mysqli_query($connection, $query);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <!-- Table Sec -->
                <div class="performDetailTableSec mt-4">
                    <div class="tableSec">
                        <table class="table mx-3 table-hover text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Inventory ID</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>core</th>
                                    <th>Generation</th>
                                    <th>Screen Type</th>
                                    <th>MFG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                               
                                $start_date = $date1->format('Y-m-d 00:00:00');
                                $end_date = $date1->format('Y-m-d 23:59:00');
                                $query="SELECT brand,model,core,generation,touch_or_none_touch,mfg,inventory_id FROM main_inventory_informations WHERE send_time_to_production BETWEEN '$start_date' AND '$end_date' ORDER BY send_time_to_production DESC";
                                $query_run = mysqli_query($connection,$query);
                                $rows=mysqli_num_rows($query_run);
                                if(!empty($query_run)){
                                foreach( $query_run as $data){ 
                                    ?>
                                <tr>
                                    <td><?php echo $rows--; ?></td>
                                    <td><?php echo $data['inventory_id'] ?></td>
                                    <td><?php echo $data['brand'] ?></td>
                                    <td><?php echo $data['model'] ?></td>
                                    <td><?php echo $data['core'] ?></td>
                                    <td><?php echo $data['generation'] ?></td>
                                    <td><?php echo $data['touch_or_none_touch'] ?></td>
                                    <td><?php echo $data['mfg'] ?></td>
                                </tr>
                                <?php    
                                }
                            }
                                ?>


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>



        </div>
    </div>
    <script>
    let searchbar = document.querySelector('input[name="inventory_id"]');
    searchbar.focus();
    search.value = '';
    </script>

    <?php
require_once('../includes/footer.php')

?>