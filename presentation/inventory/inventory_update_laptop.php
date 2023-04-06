<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
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

.ecomOrderFormSec {
    display: flex;
    align-items: center;
    justify-content: center;

}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.scanSec {
    display: flex;
    justify-content: center;
    align-items: center;
}

.sectionUnderlineModel {
    margin-top: 0px;
}

.detailsSec {
    justify-content: center;

}

input[type=text] {
    background: #FFFFFF;
    border: 1px solid #D1CDCD;
    border-radius: 5px;
    height: 24px;
    width: 100%;
    padding: 0 10px;
}

.DropDown {
    /* height: 24px; */
    width: 100%;
    border-radius: 5px;
    border: 1px solid #D1CDCD;
    padding: 0px 10px;
}

.btnT {
    background: #FFFFFF;
    border: 1px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.select2-selection__rendered {
    line-height: 17px !important;
    padding-left: 0px !important;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
    window.onload = function() {
        console.log("im here");
        brand = $("#brand").val();
        model = $("#model").val();
        core = $("#core").val();
        speed = $("#speed").val();
        screen_type = $("#touch_or_non_touch").val();
        console.log(brand);
        var getURL = "utils/get_asin.php?brand=" + brand + "&model=" + model + "&core=" + core;
        console.log(getURL);
        $.get(getURL, function(data, status) {
            $("#asin").html(data);
        });

        asin.onchange = function() {
            asin = $("#asin").val();
            var strArray = asin.split("-");
            asin = strArray[1];
            var getURL = "utils/get_asin.php?asin=" + asin;
            console.log(getURL);
            $.get(getURL, function(data, status) {
                $("#note").html(data);
            });
        }
    }
    </script>

</head>
<?php 
$query = "SELECT DISTINCT brand,series,model,processor,core,generation,speed,lcd_size,screen_resolution FROM main_inventory_informations ";
$result_set = mysqli_query($connection, $query);
    $core='';
    $gen='';
    $brand='';
    $model='';
    $screen_type='';
    $battery='';
    $mfg='';
    $device='';
    $series='';
    $processor='';
    $speed='';
    $lcd_size='';
    $resolution='';
    $optical='';
if(isset($_POST['submit'])){
    $scanned_mfg='';
    $inventory_id=$_POST['name'];
    $scanned_mfg=$_POST['mfg'];
    if($scanned_mfg !=''){
        $inventory_id =$scanned_mfg;
    }
    $sql="SELECT * FROM main_inventory_informations WHERE (inventory_id = '".$inventory_id."' OR mfg = '".$inventory_id."')";
$result = mysqli_query($connection,$sql);
if(empty($result)){
    $add_to_wis = 2;
}else{
while($row = mysqli_fetch_array($result)) {
    $core=$row['core'];
    $gen=$row['generation'];
    $brand=$row['brand'];
    $model=$row['model'];
    $screen_type=$row['touch_or_none_touch'];
    $battery=$row['battery'];
    $mfg=$row['mfg'];
    $device=$row['device'];
    $series=$row['series'];
    $processor=$row['processor'];
    $speed=$row['speed'];
    $lcd_size=$row['lcd_size'];
    $resolution=$row['screen_resolution'];
    $optical=$row['optical'];
    $inventory_id=$row['inventory_id'];
    }
}
    }
?>
<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>



<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-calendar-pen"></i>
    <h6 class="pageName pt-1">Update Item</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Update & Re-Print Item Details
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- scan Section -->
        <form method='POST'>
            <div class="row scanSec mt-4">
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-5">Scan Alsakb Barcode</div>
                        <div class="col-7">
                            <input type="text" name="name">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-5">Scan MFG Barcode</div>
                        <div class="col-7">
                            <input type="text" name="mfg">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btnT d-none" id="myBtn1" name='submit' type='submit'>Scan</button>
        </form>

        <!-- ADD Details Section -->
        <hr class="sectionUnderline mt-4" style="width: 80%;">
        <form method='POST' action='printing/pimage.php'>
            <div class="row detailsSec">
                <div class="col-6">
                    <div class="row mb-1">
                        <div class="col-4 addLable">MFG</div>
                        <div class="col-8">
                            <input type="text" placeholder="" style="width: 100%;" name="mfg" value="<?php echo $mfg ?>"
                                required>
                            <input type="text" placeholder="For Manual Enter" name="inventory_id" style="width: 100%;"
                                class="d-none" value="<?php echo "$inventory_id"; ?>">
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-4 addLable">Device</div>
                        <div class="col-8">
                            <select name="device" id="device" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="laptop" value="<?php echo $device ?>"><?php echo $device ?>
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Brand</div>
                        <div class="col-8">
                            <select name="brand" id="brand" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$brand"; ?>"><?php echo "$brand"; ?>
                                </option>
                                <?php
                                $query = "SELECT brand FROM main_inventory_informations GROUP BY brand";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["brand"]; ?>">
                                    <?php echo strtoupper($row["brand"]); ?>
                                </option>
                                <?php }?>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Series</div>
                        <div class="col-8">
                            <select name="series" id="series" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$series"; ?>"><?php echo "$series"; ?>
                                </option>
                                <?php
                                $query = "SELECT series FROM main_inventory_informations GROUP BY series ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["series"]; ?>">
                                    <?php echo strtoupper($row["series"]); ?>
                                </option>
                                <?php }?>

                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Model</div>
                        <div class="col-8">
                            <select name="model" id="model" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$model"; ?>"><?php echo "$model"; ?>
                                </option>
                                <?php
                                $query = "SELECT  model FROM main_inventory_informations GROUP BY model ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["model"]; ?>">
                                    <?php echo strtoupper($row["model"]); ?>
                                </option>
                                <?php }?>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Processor</div>
                        <div class="col-8">
                            <select name="processor" id="processor" class="DropDown select2" style="width: 100%;"
                                required>
                                <option selected value="<?php echo "$processor"; ?>"><?php echo "$processor"; ?>
                                </option>
                                <?php
                                $query = "SELECT  processor FROM main_inventory_informations GROUP BY processor";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["processor"]; ?>">
                                    <?php echo strtoupper($row["processor"]); ?>
                                </option>
                                <?php }?>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Core</div>
                        <div class="col-8">
                            <select name="core" id="core" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$core"; ?>"><?php echo "$core"; ?></option>
                                <?php
                                $query = "SELECT  core FROM main_inventory_informations GROUP BY core ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["core"]; ?>">
                                    <?php echo strtoupper($row["core"]); ?>
                                </option>
                                <?php }?>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Gen</div>
                        <div class="col-8">
                            <select name="gen" id="gen" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$gen"; ?>"><?php echo "$gen"; ?></option>
                                <?php
                                $query = "SELECT  generation FROM main_inventory_informations GROUP BY generation ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["generation"]; ?>">
                                    <?php echo strtoupper($row["generation"]); ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Speed</div>
                        <div class="col-8">
                            <select name="speed" id="speed" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$speed"; ?>"><?php echo "$speed"; ?>
                                </option>
                                <?php
                                $query = "SELECT  speed FROM main_inventory_informations GROUP BY speed ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["speed"]; ?>">
                                    <?php echo strtoupper($row["speed"]); ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-4 addLable">LCD Size</div>
                        <div class="col-8">
                            <select name="lcd_size" id="lcd_size" class="DropDown select2" style="width: 100%;"
                                required>
                                <option selected value="<?php echo "$lcd_size"; ?>"><?php echo "$lcd_size"; ?>
                                </option>
                                <?php
                                $query = "SELECT  lcd_size FROM main_inventory_informations GROUP BY lcd_size";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["lcd_size"]; ?>">
                                    <?php echo strtoupper($row["lcd_size"]); ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Resolution</div>
                        <div class="col-8">
                            <select name="resolution" id="resolution" class="DropDown select2" style="width: 100%;"
                                required>
                                <option selected value="<?php echo "$resolution"; ?>">
                                    <?php echo "$resolution"; ?>
                                </option>
                                <?php
                                $query = "SELECT  screen_resolution FROM main_inventory_informations GROUP BY screen_resolution ";
                                $result_set = mysqli_query($connection, $query);
                                foreach($result_set as $row){
                                                        ?>
                                <option value="<?php echo $row["screen_resolution"]; ?>">
                                    <?php echo strtoupper($row["screen_resolution"]); ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Battery</div>
                        <div class="col-8">
                            <select name="battery" id="battery" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$battery"; ?>"><?php echo "$battery"; ?>
                                </option>
                                <?php if($battery == 'yes'){
                                    echo "<option  value='no'>No</option>";
                                }elseif($battery == 'no'){
                                    echo "<option  value='yes'>Yes</option>";
                                }else{
                                    echo "<option  value='yes'>Yes</option>";
                                    echo "<option  value='no'>No</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Touch</div>
                        <div class="col-8">
                            <select name="screen_type" id="touch" class="DropDown select2" style="width: 100%;"
                                required>
                                <option selected value="<?php echo "$screen_type"; ?>">
                                    <?php echo "$screen_type"; ?>
                                </option>
                                <?php if($screen_type == 'yes'){
                                    echo "<option  value='no'>No</option>";
                                }elseif($screen_type == 'no'){
                                    echo "<option  value='yes'>Yes</option>";
                                }else{
                                    echo "<option  value='yes'>Yes</option>";
                                    echo "<option  value='no'>No</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Opticle</div>
                        <div class="col-8">
                            <select name="dvd" id="opticle" class="DropDown select2" style="width: 100%;" required>
                                <option selected value="<?php echo "$optical"; ?>"><?php echo "$optical"; ?></option>
                                <?php if($optical == 'yes'){
                                    echo "<option  value='no'>No</option>";
                                }elseif($optical == 'no'){
                                    echo "<option  value='yes'>Yes</option>";
                                }else{
                                    echo "<option  value='yes'>Yes</option>";
                                    echo "<option  value='no'>No</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Keyboard Backlight</div>
                        <div class="col-8">
                            <select name="keyboard_backlight" id="keyboard_backlight" class="DropDown select2"
                                style="width: 100%;" required>
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">ASIN</div>
                        <div class="col-8">
                            <select class="w-100" name="asin" id="asin" style="border-radius: 5px;">
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">ASIN Description</div>
                        <div class="col-8">
                            <p id="note"></p>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 mb-5">
                        <div class="">
                            <button class="btnT" type="submit"><i class="fa-solid fa-qrcode mr-1"
                                    style="color:#168EB4"></i>
                                Update
                                & Print QR</button>
                        </div>
                    </div>
        </form>


    </div>
</div>

<!-- <script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script> -->
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
require_once('../includes/footer.php')

?>