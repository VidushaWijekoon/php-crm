<?php
session_start();

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$q = $_GET['q'];
// $q='23816522';

$con = mysqli_connect("localhost", "root", "", "wms");
if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
}
date_default_timezone_set('Asia/dubai');
$timestamp = time();
$date_time = date("Y-m-d H:i:s", $timestamp);

mysqli_select_db($con,"wms");
$sql="SELECT * FROM machine_from_supplier WHERE serial_no = '".$q."' OR mfg = '".$q."' ";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $core=$row['core'];
    $gen=$row['generation'];
    $brand=$row['brand'];
    $model=$row['model'];
    $screen_type=$row['touch_or_non_touch'];
    $battery=$row['battery'];
    $mfg=$row['mfg'];
    $device=$row['device'];
    $series=$row['series'];
    $processor=$row['processor'];
    $speed=$row['speed'];
    $lcd_size=$row['lcd_size'];
    $resolution=$row['resolution'];
    $dvd=$row['dvd'];
    $machine_id=$row['machine_id'];
} ?>
<form method='POST' action='printing/pimage.php'>
    <div class="row detailsSec">

        <div class="col-6">
            <div class="row mb-1">
                <div class="col-4 addLable">MFG Number</div>
                <div class="col-8">
                    <input type="text" placeholder="For Manual Enter" name="mfg" style="width: 100%;"
                        value="<?php echo "$mfg"; ?>">
                    <input type="text" placeholder="For Manual Enter" name="machine_id" style="width: 100%;"
                        class="d-none" value="<?php echo "$machine_id"; ?>">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">ASIN</div>
                <div class="col-8">
                    <input type="text" placeholder="" style="width: 100%;" name=""
                        value="<?php echo "still not complete"; ?>">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Device</div>
                <div class="col-8">
                    <select name="device" id="device" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$device"; ?>"><?php echo "$device"; ?></option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Brand</div>
                <div class="col-8">
                    <select name="brand" id="brand" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$brand"; ?>"><?php echo "$brand"; ?></option>
                    </select>

                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Series</div>
                <div class="col-8">
                    <select name="series" id="series" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$series"; ?>"><?php echo "$series"; ?></option>

                    </select>

                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Model</div>
                <div class="col-8">
                    <select name="model" id="model" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$model"; ?>"><?php echo "$model"; ?></option>
                    </select>

                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Processor</div>
                <div class="col-8">
                    <select name="processor" id="processor" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$processor"; ?>"><?php echo "$processor"; ?></option>
                    </select>

                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Core</div>
                <div class="col-8">
                    <select name="core" id="core" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$core"; ?>"><?php echo "$core"; ?></option>
                    </select>

                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Gen</div>
                <div class="col-8">
                    <select name="gen" id="gen" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$gen"; ?>"><?php echo "$gen"; ?></option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Speed</div>
                <div class="col-8">
                    <select name="speed" id="speed" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$speed"; ?>"><?php echo "$speed"; ?></option>
                    </select>
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-4 addLable">LCD Size</div>
                <div class="col-8">
                    <select name="lcd_size" id="lcdsize" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$lcd_size"; ?>"><?php echo "$lcd_size"; ?></option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Resolution</div>
                <div class="col-8">
                    <select name="resolution" id="resolution" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$resolution"; ?>"><?php echo "$resolution"; ?></option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Battery</div>
                <div class="col-8">
                    <select name="battery" id="battery" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$battery"; ?>"><?php echo "$battery"; ?></option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Touch</div>
                <div class="col-8">
                    <select name="screen_type" id="touch" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$screen_type"; ?>"><?php echo "$screen_type"; ?></option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-4 addLable">Opticle</div>
                <div class="col-8">
                    <select name="dvd" id="opticle" class="DropDown select2" style="width: 100%;">
                        <option selected value="<?php echo "$dvd"; ?>"><?php echo "$dvd"; ?></option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center mt-3 mb-5">
                <div class="">
                    <button class="btnT" type="submit"><i class="fa-solid fa-qrcode mr-1" style="color:#168EB4"></i>
                        Save
                        QR</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

})
</script>
<?php
mysqli_close($con);
require_once('../includes/footer.php')
?>