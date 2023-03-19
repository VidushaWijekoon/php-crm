<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
?>
<script src="../../static/plugins/jquery.min.js"></script>
<script src="../../static/plugins/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../static/plugins/bootstrap-3.3.5-dist/css/bootstrap.min.css">
<?php
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

    $performance_id =0;
    $inventory_id=0;
    $brand=0;
    $model=0;
    if(empty($_GET['performance_id'])){}else{
    $performance_id =$_GET['performance_id'];
    $inventory_id =$_GET['inventory_id'];
    }
    if($performance_id !=0){
         echo "<script>
         $(window).load(function() {
            $('#exampleModal').modal('show');
                            });
                            </script>";
    }
    $sql="SELECT brand,model FROM main_inventory_informations WHERE inventory_id='$inventory_id'";
    $sql_run=mysqli_query($connection,$sql);
    foreach($sql_run as $data){
        $brand=$data['brand'];
        $model=$data['model'];
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

.label_values {
    margin-left: 5px;
    margin-right: 10px;
}

.radioLbl {
    font-size: 10px;
    padding-top: 6px;
}
</style>

<div class="row performanceBodySec my-5">
    <div class="cardContainer">

        <!-- Performance Details -->
        <div class="empDetails mb-3 mx-3 mt-3">

            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header col-lg-12 ">
                            <h5>QC Final Result</h5>
                        </div>
                        <form method="POST" action="insert/model1_save.php">
                            <div class="modal-body row ">
                                <div class="col-lg-10 grid-margin justify-content-center mx-auto mt-2">

                                    <div class="row col-12 w-100">
                                        <ul class="nav nav-tabs">
                                            <li><a data-toggle="tab" href="#hp" name="brand">HP</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#dell">DELL</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#lenovo">LENOVO</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#other">OTHER
                                                    BRAND</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content w-100">
                                            <div id="hp" class="tab-pane fade active">
                                                <h6>HP</h6>
                                                <div class="row col-sm-12">
                                                    <p class="col-sm-6 ">BIOS Lock </p>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_hp"
                                                        name="bios_lock_hp" value="lock" class="mt-1 mx-2">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_hp"
                                                        name="bios_lock_hp" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-6 ">Computrace / Absolute Software Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_hp"
                                                        name="computrace_hp" value="active">
                                                    <label class="label_values my-1" for="xeon">Activated
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_hp"
                                                        name="computrace_hp" value="inactive" checked>
                                                    <label class="label_values my-1">Inactive </label>
                                                </div>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-6 ">Me Region Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="me_region_lock_hp"
                                                        name="me_region_lock_hp" value="lock">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="me_region_lock_hp"
                                                        name="me_region_lock_hp" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                            </div>
                                            <div id="dell" class="tab-pane fade">
                                                <h6>DELL</h6>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-5">BIOS Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_dell"
                                                        name="bios_lock_dell" value="lock">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_dell"
                                                        name="bios_lock_dell" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-5">Computrace Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_dell"
                                                        name="computrace_lock_dell" value="active">
                                                    <label class="label_values my-1" for="xeon">Active
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_dell"
                                                        name="computrace_lock_dell" value="disable">
                                                    <label class="label_values my-1">Disable </label>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_dell"
                                                        name="computrace_lock_dell" value="deactivate" checked>
                                                    <label class="label_values my-1">Deactivate </label>
                                                </div>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-5">TPM Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="tpm_lock_dell"
                                                        name="tpm_lock_dell" value="not ok">
                                                    <label class="label_values my-1" for="xeon">Not OK
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="tpm_lock_dell"
                                                        name="tpm_lock_dell" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                            </div>
                                            <div id="lenovo" class="tab-pane fade">
                                                <h6>LENOVO</h6>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-6">BIOS Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_lenovo"
                                                        name="bios_lock_lenovo" value="lock">
                                                    <label class="label_values my-1">Lock </label>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_lenovo"
                                                        name="bios_lock_lenovo" value="ok" checked>
                                                    <label class="label_values my-1" for="xeon">OK
                                                    </label>
                                                </div>
                                                <div class="row col-sm-12 ">
                                                    <p class="col-sm-6">Computrace Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_lenovo"
                                                        name="computrace_lock_lenovo" value="lock">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_lenovo"
                                                        name="computrace_lock_lenovo" value="ok" checked>
                                                    <label class="label_values my-1">Ok </label>
                                                </div>
                                                <div class="row col-sm-12">
                                                    <p class="col-sm-6">Any Other Error</p>
                                                    <input class="mt-1 mx-2" type="radio" id="other_error_lenovo"
                                                        name="other_error_lenovo" value="have">
                                                    <label class="label_values my-1" for="xeon">Have
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="other_error_lenovo"
                                                        name="other_error_lenovo" value="no_have" checked>
                                                    <label class="label_values my-1">No Have </label>
                                                </div>
                                            </div>
                                            <div id="other" class="tab-pane fade">
                                                <h6>OTHER BRAND</h6>
                                                <div class="row col-sm-12">
                                                    <p class="col-sm-6">BIOS Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_other"
                                                        name="bios_lock_other" value="lock">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="bios_lock_other"
                                                        name="bios_lock_other" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                                <div class="row col-sm-12">
                                                    <p class="col-sm-6">Computrace Lock</p>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_other"
                                                        name="computrace_lock_other" value="lock">
                                                    <label class="label_values my-1" for="xeon">Lock
                                                    </label>
                                                    <input class="mt-1 mx-2" type="radio" id="computrace_lock_other"
                                                        name="computrace_lock_other" value="ok" checked>
                                                    <label class="label_values my-1">OK </label>
                                                </div>
                                                <div class="row col-sm-12">
                                                    <p class="col-sm-6">Any Other Error</p>
                                                    <input class="mt-1 mx-2" type="radio" id="other_error_other_brand"
                                                        name="other_error_other_brand" value="no_have" checked>
                                                    <label class="label_values my-1">No Have </label>
                                                    <input class="mt-1 mx-2" type="radio" id="other_error_other_brand"
                                                        name="other_error_other_brand" value="have">
                                                    <label class="label_values my-1" for="xeon">Have
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <label class="col-sm-8 col-form-label"> Power(Motherboard Issue)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2 ">
                                                <input class="" type="radio" id="no_power" name="no_power" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK
                                                </label>
                                                <input type="radio" id="no_power" name="no_power" value="reject">
                                                <label class="label_values">No </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Motherboard Display </label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="no_display" name="no_display" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK
                                                </label>
                                                <input type="radio" id="no_display" name="no_display" value="reject">
                                                <label class="label_values">No </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Motherboard Other Issue</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="other_issue" name="other_issue" value="no_have"
                                                    checked>
                                                <label class="label_values">No Have </label>
                                                <input type="radio" id="other_issue" name="other_issue" value="have">
                                                <label class="label_values" for="xeon">Have
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">A/Top
                                            Cover(Scratch/Broken/Dent)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="a_top" name="a_top" value="ok" checked>
                                                <label class="label_values" for="xeon">OK
                                                </label>
                                                <input type="radio" id="a_top" name="a_top" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label
                                            class="col-sm-8 col-form-label">B/bazel(Scratch/Brocken/Logo/Color)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="b_bazel" name="b_bazel" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="b_bazel" name="b_bazel" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">C/Palmrest
                                            (Scratch/Broken/Dent)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="c_palmrest" name="c_palmrest" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="c_palmrest" name="c_palmrest" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">D/Back Cover
                                            (Scratch/Broken/Dent)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="d_back_cover" name="d_back_cover" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="d_back_cover" name="d_back_cover"
                                                    value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Keyboard(Function/ Key missing /
                                            Color)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="keyboard" name="keyboard" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="keyboard" name="keyboard" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">LCD
                                            (Whitespot/Scratch/Broken/Line/Yellow
                                            shadow)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="lcd" name="lcd" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="lcd" name="lcd" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Webcam</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="webcam" name="webcam" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="webcam" name="webcam" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Mousepad & Button</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="mousepad_button" name="mousepad_button"
                                                    value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="mousepad_button" name="mousepad_button"
                                                    value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Microphone (MIC)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="mic" name="mic" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="mic" name="mic" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Speaker / Sound</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="speaker" name="speaker" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="speaker" name="speaker" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Wi-Fi Connection</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="wi_fi_connection" name="wi_fi_connection"
                                                    value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="wi_fi_connection" name="wi_fi_connection"
                                                    value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">USB Port</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="usb" name="usb" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="usb" name="usb" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Battery Health</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="battery" name="battery" value="excellent"
                                                    checked>
                                                <label class="label_values" for="xeon">Excellent </label>
                                                <input type="radio" id="battery" name="battery" value="good">
                                                <label class="label_values">Good </label>
                                                <input type="radio" id="battery" name="battery" value="bad">
                                                <label class="label_values">Bad </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Hinges Cover</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="hinges_cover" name="hinges_cover" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="hinges_cover" name="hinges_cover"
                                                    value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">HDD Boot</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="hdd_boot" name="hdd_boot" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="hdd_boot" name="hdd_boot" value="not ok">
                                                <label class="label_values">Not Ok </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">RAM</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="ram" name="ram" value="match" checked>
                                                <label class="label_values" for="xeon">Match</label>
                                                <input type="radio" id="ram" name="ram" value="not match">
                                                <label class="label_values">Not Match </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Bodywork</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="bodywork" name="bodywork" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="bodywork" name="bodywork" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Sanding</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="sanding" name="sanding" value="ok" checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="sanding" name="sanding" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-8 col-form-label">Keyboard Backlight (According to Sales
                                            Order)</label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <input type="radio" id="keyboardbl" name="keyboardbl" value="ok"
                                                    checked>
                                                <label class="label_values" for="xeon">OK</label>
                                                <input type="radio" id="keyboardbl" name="keyboardbl" value="reject">
                                                <label class="label_values">Reject </label>
                                            </div>
                                        </div>
                                    </div>


                                    <input type="hidden" name="performance_id" value="<?php echo $performance_id?>">
                                    <input type="hidden" name="inventory_id" value="<?php echo $inventory_id?>">
                                    <button type="submit" name="submit" id="submit" value="pass"
                                        class="btnTB btn-next float-right">
                                        Pass
                                    </button>
                                    <button type="submit" name="submit" id="submit" value="reject"
                                        class="btnTC btn-next float-right">
                                        Reject
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


            <!--  -->
            <?php
require_once('../includes/footer.php')

?>