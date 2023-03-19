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
$inventory_id=$_GET['inventory_id'];
$performance_id=$_GET['performance_id'];
////////////////////////////////////////////////////////////////////////////////
         echo "<script>
         $(window).load(function() {
            $('#exampleModal2').modal('show');
                            });
                            </script>";
//////////////////////////////////////////////////////////////////////////////////
$sql="SELECT mfg,brand,model,processor,core,generation,speed,lcd_size,screen_resolution,graphic_brand,graphic_capacity,touch_or_none_touch FROM main_inventory_informations WHERE inventory_id='$inventory_id'";
$sql_run=mysqli_query($connection,$sql);
$mfg='';
$brand='';
$model='';
$processor='';
$core='';
$gen='';
$speed='';
$screen_size='';
$screen_resolution='';
$graphic_brand='';
$graphic_capacity='';
$touch_or_none_touch='';


foreach($sql_run as $data){
$mfg=$data['mfg'];
$brand=$data['brand'];
$model=$data['model'];
$processor=$data['processor'];
$core=$data['core'];
$gen=$data['generation'];
$speed=$data['speed'];
$screen_size=$data['lcd_size'];
$screen_resolution=$data['screen_resolution'];
$graphic_brand=$data['graphic_brand'];
$graphic_capacity=$data['graphic_capacity'];
$touch_or_none_touch=$data['touch_or_none_touch'];
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

            <div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Specification</h5>

                        </div>
                        <div class="modal-body">
                            <form method="POST" action="insert/model2_save.php">
                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                ASIN/SKU
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="asin">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                ASIN Serial
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="asin_serial">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                MFG
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="mfg" value="<?php echo $mfg ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Brand
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="brand" value="<?php echo $brand ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Model
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="model" value="<?php echo $model ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Processor
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="processor" value="<?php echo $processor ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Core
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="core" value="<?php echo $core ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Generation
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="generation" value="<?php echo $gen ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Speed
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="speed" value="<?php echo $speed ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Screen Size
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="screen_size" value="<?php echo $screen_size ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Screen Resolution
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="resolution"
                                                    value="<?php echo $screen_resolution ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Graphic Brand
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="graphic_brand"
                                                    value="<?php echo $graphic_brand ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Graphic Capacity
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="graphic_capacity"
                                                    value="<?php echo $graphic_brand ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Screen Resolution Type
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="resolution_type"
                                                    value="<?php echo $graphic_brand ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Touch
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="touch" value="<?php echo $graphic_brand ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Backlight Keyboard
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="kbbacklight"
                                                    value="<?php echo $graphic_brand ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                Operation System
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="os" required>
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

                                                        <input class="form-check-input" type="radio" name="ram" id=""
                                                            value="2" required>
                                                        <label class="form-check-label radioLbl" for="">
                                                            2 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="ram" id=""
                                                            value="4">
                                                        <label class="form-check-label radioLbl" for="">
                                                            4 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="ram" id=""
                                                            value="8">
                                                        <label class="form-check-label radioLbl" for="">
                                                            8 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="ram" id=""
                                                            value="16">
                                                        <label class="form-check-label radioLbl" for="">
                                                            16 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="ram" id=""
                                                            value="32">
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
                                                            id="" value="hdd" required>
                                                        <label class="form-check-label radioLbl" for="">
                                                            HDD
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio" name="hddtype"
                                                            id="" value="ssd">
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
                                                            id="" value="120" required>
                                                        <label class="form-check-label radioLbl" for="">
                                                            120 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="250">
                                                        <label class="form-check-label radioLbl" for="">
                                                            250 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="320">
                                                        <label class="form-check-label radioLbl" for="">
                                                            320 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="500">
                                                        <label class="form-check-label radioLbl" for="">
                                                            500 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="128">
                                                        <label class="form-check-label radioLbl" for="">
                                                            128 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="256">
                                                        <label class="form-check-label radioLbl" for="">
                                                            256 GB
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="radio" name="hddsize"
                                                            id="" value="512">
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
                                                            id="" value="blue pin" required>
                                                        <label class="form-check-label radioLbl" for="">
                                                            Blue Pin
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio" name="chrgrPin"
                                                            id="" value="yellow pin">
                                                        <label class="form-check-label radioLbl" for="">
                                                            Yellow Pin
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio" name="chrgrPin"
                                                            id="" value="white pin">
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
                                                            name="chrgrCapacity" id="" value="45" required>
                                                        <label class="form-check-label radioLbl" for="">
                                                            45W
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio"
                                                            name="chrgrCapacity" id="" value="65">
                                                        <label class="form-check-label radioLbl" for="">
                                                            65W
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio"
                                                            name="chrgrCapacity" id="" value="90">
                                                        <label class="form-check-label radioLbl" for="">
                                                            90W
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio"
                                                            name="chrgrCapacity" id="" value="135">
                                                        <label class="form-check-label radioLbl" for="">
                                                            135W
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio"
                                                            name="chrgrCapacity" id="" value="180">
                                                        <label class="form-check-label radioLbl" for="">
                                                            180W
                                                        </label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input class="form-check-input" type="radio"
                                                            name="chrgrCapacity" id="" value="none">
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
                        <input type="hidden" name="performance_id" value="<?php echo $performance_id?>">
                        <input type="hidden" name="inventory_id" value="<?php echo $inventory_id?>">
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="submit" class="btnTC btn-next float-right">
                                Confirm
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--  -->
            <?php
require_once('../includes/footer.php')

?>