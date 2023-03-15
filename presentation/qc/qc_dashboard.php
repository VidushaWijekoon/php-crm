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
                            <span>John Doe</span>
                        </div>
                        <div class="empNo">Emp No :
                            <span> QCD 89</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-1">
                    <div class="row mx-4  justify-content-between">
                        <div class="userName">Department :
                            <span>Quality</span>
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
                <div class="row mx-4  justify-content-between">

                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Job Description
                        </div>
                        <div class="userinput col-7">
                            <select class="DropDown" name="" id="">
                                <option selected value="send to production">Send to Production</option>
                            </select>

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
                            Scan QR
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text" placeholder="Scan QR">
                        </div>
                        <button type="submit" class="" data-toggle="modal" data-target="#exampleModal"> scan</button>
                        <button type="submit" class="" data-toggle="modal" data-target="#exampleModal2"> scan2</button>

                    </div>
                    <div class="row col-lg-6">
                        <div class="userName col-4">
                            Today Completed Qty
                        </div>
                        <div class="userinput col-7">
                            <input class="w-100 pl-2" type="text">
                        </div>
                    </div>


                    <!-- Modal QC -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content ">
                                <div class="modal-header col-lg-12 ">
                                    <h5>QC Final Result</h5>
                                </div>
                                <form action="#" method="POST">
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
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_dell" name="computrace_lock_dell"
                                                                value="active">
                                                            <label class="label_values my-1" for="xeon">Active
                                                            </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_dell" name="computrace_lock_dell"
                                                                value="disable">
                                                            <label class="label_values my-1">Disable </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_dell" name="computrace_lock_dell"
                                                                value="deactivate" checked>
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
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_lenovo"
                                                                name="computrace_lock_lenovo" value="lock">
                                                            <label class="label_values my-1" for="xeon">Lock
                                                            </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_lenovo"
                                                                name="computrace_lock_lenovo" value="ok" checked>
                                                            <label class="label_values my-1">Ok </label>
                                                        </div>
                                                        <div class="row col-sm-12">
                                                            <p class="col-sm-6">Any Other Error</p>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="other_error_lenovo" name="other_error_lenovo"
                                                                value="have">
                                                            <label class="label_values my-1" for="xeon">Have
                                                            </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="other_error_lenovo" name="other_error_lenovo"
                                                                value="no_have" checked>
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
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_other" name="computrace_lock_other"
                                                                value="lock">
                                                            <label class="label_values my-1" for="xeon">Lock
                                                            </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="computrace_lock_other" name="computrace_lock_other"
                                                                value="ok" checked>
                                                            <label class="label_values my-1">OK </label>
                                                        </div>
                                                        <div class="row col-sm-12">
                                                            <p class="col-sm-6">Any Other Error</p>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="other_error_other_brand"
                                                                name="other_error_other_brand" value="no_have" checked>
                                                            <label class="label_values my-1">No Have </label>
                                                            <input class="mt-1 mx-2" type="radio"
                                                                id="other_error_other_brand"
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
                                                        <input class="" type="radio" id="no_power" name="no_power"
                                                            value="ok" checked>
                                                        <label class="label_values" for="xeon">OK
                                                        </label>
                                                        <input type="radio" id="no_power" name="no_power"
                                                            value="reject">
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
                                                        <input type="radio" id="no_display" name="no_display"
                                                            value="reject">
                                                        <label class="label_values">No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-8 col-form-label">Motherboard Other Issue</label>
                                                <div class="col-sm-4">
                                                    <div class="row mt-2">
                                                        <input type="radio" id="other_issue" name="other_issue"
                                                            value="no_have" checked>
                                                        <label class="label_values">No Have </label>
                                                        <input type="radio" id="other_issue" name="other_issue"
                                                            value="have">
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
                                                        <input type="radio" id="b_bazel" name="b_bazel" value="ok"
                                                            checked>
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
                                                        <input type="radio" id="c_palmrest" name="c_palmrest"
                                                            value="reject">
                                                        <label class="label_values">Reject </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-8 col-form-label">D/Back Cover
                                                    (Scratch/Broken/Dent)</label>
                                                <div class="col-sm-4">
                                                    <div class="row mt-2">
                                                        <input type="radio" id="d_back_cover" name="d_back_cover"
                                                            value="ok" checked>
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
                                                        <input type="radio" id="keyboard" name="keyboard" value="ok"
                                                            checked>
                                                        <label class="label_values" for="xeon">OK</label>
                                                        <input type="radio" id="keyboard" name="keyboard"
                                                            value="reject">
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
                                                        <input type="radio" id="webcam" name="webcam" value="ok"
                                                            checked>
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
                                                        <input type="radio" id="speaker" name="speaker" value="ok"
                                                            checked>
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
                                                        <input type="radio" id="wi_fi_connection"
                                                            name="wi_fi_connection" value="ok" checked>
                                                        <label class="label_values" for="xeon">OK</label>
                                                        <input type="radio" id="wi_fi_connection"
                                                            name="wi_fi_connection" value="reject">
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
                                                        <input type="radio" id="battery" name="battery"
                                                            value="excellent" checked>
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
                                                        <input type="radio" id="hinges_cover" name="hinges_cover"
                                                            value="ok" checked>
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
                                                        <input type="radio" id="hdd_boot" name="hdd_boot" value="ok"
                                                            checked>
                                                        <label class="label_values" for="xeon">OK</label>
                                                        <input type="radio" id="hdd_boot" name="hdd_boot"
                                                            value="not ok">
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
                                                        <input type="radio" id="bodywork" name="bodywork" value="ok"
                                                            checked>
                                                        <label class="label_values" for="xeon">OK</label>
                                                        <input type="radio" id="bodywork" name="bodywork"
                                                            value="reject">
                                                        <label class="label_values">Reject </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-8 col-form-label">Sanding</label>
                                                <div class="col-sm-4">
                                                    <div class="row mt-2">
                                                        <input type="radio" id="sanding" name="sanding" value="ok"
                                                            checked>
                                                        <label class="label_values" for="xeon">OK</label>
                                                        <input type="radio" id="sanding" name="sanding" value="reject">
                                                        <label class="label_values">Reject </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <input type="hidden" name="job_description"
                                                value="<?php echo $job_description ?>">
                                            <input type="hidden" name="search_value"
                                                value="<?php echo $search_value ?>">
                                            <button type="submit" name="submit" id="submit"
                                                class="btnTB btn-next float-right">
                                                Confirm
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>


                    <!-- /// -->


                    <!-- Model Spec QC -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Specification</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Brand
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="brand">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Model
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="model">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Core
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="core">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Generation
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="gen">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Screen Size
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="screen_size">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Screen Resolution
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="res">
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-3">
                                                    Generation
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="gen">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-2"></div> -->
                                        <div class="col-10 mt-3">
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    Ram
                                                </div>
                                                <div class="col-9">
                                                    <div class="row justify-content-between">
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="ram"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                2 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="ram"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                4 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="ram"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                8 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="ram"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                16 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="ram"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                32 GB
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    HDD Type
                                                </div>
                                                <div class="col-9">
                                                    <div class="row ">
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio" name="hddtype"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                HDD
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio" name="hddtype"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                SSD
                                                            </label>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    Hard Disk Size
                                                </div>
                                                <div class="col-9">
                                                    <div class="row justify-content-between">
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                120 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                250 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                320 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                500 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                128 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                256 GB
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <input class="form-check-input" type="radio" name="hddsize"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                512 GB
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    Charger Type
                                                </div>
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio" name="chrgrPin"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                Blue Pin
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio" name="chrgrPin"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                Yellow Pin
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio" name="chrgrPin"
                                                                id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                White Pin
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    Charger Capacity
                                                </div>
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                45W
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                65W
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                90W
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                135W
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                180W
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-check-input" type="radio"
                                                                name="chrgrCapacity" id="" value="" checked>
                                                            <label class="form-check-label radioLbl" for="">
                                                                None
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btnTC" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btnTB">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->


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


            <!-- Table Sec -->
            <div class="performDetailTableSec mt-4">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>Job Description</th>
                                <th>Scanned QR</th>
                                <th>Model</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Completed Qty</th>
                                <th>Target</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PC SCANNED</td>
                                <td>
                                    62136jhbh
                                </td>
                                <td>Latitude T460</td>
                                <td>00:00:00</td>
                                <td>00:00:00</td>
                                <td>1</td>
                                <td>100</td>
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