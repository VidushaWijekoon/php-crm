<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "wms");
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
<?php 
$add_to_wis = 2;
if(isset($_POST['submit'])){
    $name=0;
    $name=$_POST['name'];
    $scanned_mfg=$_POST['mfg'];
    if($name !=0){
        $scanned_mfg =$name;
    }
    $sql="SELECT * FROM machine_from_supplier WHERE (serial_no = '".$scanned_mfg."' OR mfg = '".$scanned_mfg."')";

$result = mysqli_query($connection,$sql);
if(empty($result)){
    $add_to_wis = 2;
}else{
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
    $add_to_wis=$row['add_to_wis'];
    }
}
    }
?>
<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>



<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Add Item</h6>
</div>

<div class="row ecomOrderFormSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Add inventory Details
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">
        <form method='POST'>
            <!-- scan Section -->
            <div class="row scanSec mt-4">
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-5">Scan Supplier Barcode</div>
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
        <?php 
        if($add_to_wis == 1){
            // echo " This Laptop Already Printed";
            ?>
        <div class="row detailsSec">

            <div class="col-6">
                <div class="row mb-1">
                    <div class="col-12 addLable text-center text-info">This Laptop Already Printed</div>

                </div>
            </div>
        </div>
        <?php
        }elseif($add_to_wis == 0){ ?>
        <form method='POST' action='printing/pimage.php'>
            <div class="row detailsSec">

                <div class="col-6">
                    <div class="row mb-1">
                        <div class="col-4 addLable">MFG Number</div>
                        <div class="col-8">
                            <input type="text" placeholder="For Manual Enter" name="mfg" style="width: 100%;"
                                value="<?php echo "$mfg"; ?>" required>
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
                                <option selected value="<?php echo "$device"; ?>"><?php echo "$device"; ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Brand</div>
                        <div class="col-8">
                            <select name="brand" id="brand" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$brand"; ?>"><?php echo "$brand"; ?>
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Series</div>
                        <div class="col-8">
                            <select name="series" id="series" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$series"; ?>"><?php echo "$series"; ?>
                                </option>

                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Model</div>
                        <div class="col-8">
                            <select name="model" id="model" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$model"; ?>"><?php echo "$model"; ?>
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Processor</div>
                        <div class="col-8">
                            <select name="processor" id="processor" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$processor"; ?>"><?php echo "$processor"; ?>
                                </option>
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
                                <option selected value="<?php echo "$speed"; ?>"><?php echo "$speed"; ?>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-4 addLable">LCD Size</div>
                        <div class="col-8">
                            <select name="lcd_size" id="lcdsize" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$lcd_size"; ?>"><?php echo "$lcd_size"; ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Resolution</div>
                        <div class="col-8">
                            <select name="resolution" id="resolution" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$resolution"; ?>">
                                    <?php echo "$resolution"; ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Battery</div>
                        <div class="col-8">
                            <select name="battery" id="battery" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$battery"; ?>"><?php echo "$battery"; ?>
                                </option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Touch</div>
                        <div class="col-8">
                            <select name="screen_type" id="touch" class="DropDown select2" style="width: 100%;">
                                <option selected value="<?php echo "$screen_type"; ?>">
                                    <?php echo "$screen_type"; ?>
                                </option>
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
                    <div class="row mb-1">
                        <div class="col-4 addLable">Keyboard Backlight</div>
                        <div class="col-8">
                            <select name="keyboard_backlight" id="keyboard_backlight" class="DropDown select2"
                                style="width: 100%;">
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 mb-5">
                        <div class="">
                            <button class="btnT" type="submit"><i class="fa-solid fa-qrcode mr-1"
                                    style="color:#168EB4"></i>
                                Save & Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php } elseif($add_to_wis == 2){?>
        <div class="row detailsSec">

            <div class="col-6">
                <div class="row mb-1">
                    <div class="col-12 addLable text-center text-info">This Laptop Not in the database you need to
                        manual add</div>

                </div>
            </div>
        </div>
        <form method='POST' action='printing/pimage.php'>
            <div class="row detailsSec">

                <div class="col-6">
                    <div class="row mb-1">
                        <div class="col-4 addLable">MFG Number</div>
                        <div class="col-8">
                            <input type="text" placeholder="For Manual Enter" name="mfg" style="width: 100%;">
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
                            <?php 
                            $query = "SELECT device FROM warehouse_information_sheet GROUP BY device ASC";
                                                            $result = mysqli_query($connection, $query);
                            ?>
                            <select name="device" id="device" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                                <?php
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                        ?>
                                <option value="<?php echo $row["device"]; ?>">
                                    <?php echo strtoupper($row["device"]); ?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Brand</div>
                        <div class="col-8">
                            <select name="brand" id="brand" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Series</div>
                        <div class="col-8">
                            <select name="series" id="series" class="DropDown select2" style="width: 100%;">
                                <option selected></option>

                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Model</div>
                        <div class="col-8">
                            <select name="model" id="model" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Processor</div>
                        <div class="col-8">
                            <select name="processor" id="processor" class="DropDown select2" style="width: 100%;">
                                <option selected>
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Core</div>
                        <div class="col-8">
                            <select name="core" id="core" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Gen</div>
                        <div class="col-8">
                            <select name="gen" id="generation" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Speed</div>
                        <div class="col-8">
                            <select name="speed" id="speed" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-4 addLable">LCD Size</div>
                        <div class="col-8">
                            <select name="lcd_size" id="lcd_size" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Resolution</div>
                        <div class="col-8">
                            <select name="resolution" id="resolution" class="DropDown select2" style="width: 100%;">
                                <option selected>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Battery</div>
                        <div class="col-8">
                            <select name="battery" id="battery" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Touch</div>
                        <div class="col-8">
                            <select name="screen_type" id="touch" class="DropDown select2" style="width: 100%;">
                                <option selected>
                                </option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Opticle</div>
                        <div class="col-8">
                            <select name="dvd" id="opticle" class="DropDown select2" style="width: 100%;">
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Keyboard Backlight</div>
                        <div class="col-8">
                            <select name="keyboard_backlight" id="keyboard_backlight" class="DropDown select2"
                                style="width: 100%;">
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 mb-5">
                        <div class="">
                            <button class="btnT" type="submit"><i class="fa-solid fa-qrcode mr-1"
                                    style="color:#168EB4"></i>
                                Save & Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>

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
<script>
var input1 = document.getElementById("name");
input1.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn1").click();
    }
});
var input = document.getElementById("mfg");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn1").click();
    }
});

const getSortingData = () => {
    var name = 0;
    var mfg = 0;
    name = $('#name').val();
    mfg = $('#mfg').val();
    if (name != 0) {
        mfg = name;
    }
    console.log(mfg);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "add_item_view.php?q=" + mfg, true);
    xmlhttp.send();
    var getValue = 0;
    var getValue2 = 0;
    getValue = document.getElementById("name");
    getValue2 = document.getElementById("mfg");
    if (getValue2 != 0) {
        getValue2.value = "";
    }
    if (getValue.value != "") {
        getValue.value = "";
    }

}
let searchbar = document.querySelector('input[name="supplier"]');
searchbar.focus();
search.value = '';
</script>
<?php
require_once('../includes/footer.php')

?>

<script>
var brand = 0;
var series = 0;
var model = 0;
var processor = 0;
var core = 0;
var generation = 0;

$(document).ready(function() {
    $("#device").on("change", function() {
        var device = $("#device").val();
        console.log(device);
        var getURL = "retrive/ajax.php?device=" + device;
        $.get(getURL, function(data, status) {
            $("#brand").html(data);
        });
    });
});
$(document).ready(function() {
    $("#brand").on("change", function() {
        brand = $("#brand").val();
        var getURL = "retrive/ajax.php?brand=" + brand;
        $.get(getURL, function(data, status) {
            $("#series").html(data);
        });
    });
});

$(document).ready(function() {
    $("#series").on("change", function() {
        series = $("#series").val();
        var getURL = "retrive/ajax.php?brand1=" + brand + "&series=" + series;
        $.get(getURL, function(data, status) {
            $("#model").html(data);
        });
    });
});

$(document).ready(function() {
    $("#model").on("change", function() {
        model = $("#model").val();
        var getURL = "retrive/ajax.php?model=" + model + "&brand1=" + brand + "&series1=" +
            series;
        $.get(getURL, function(data, status) {
            $("#processor").html(data);
        });
    });
});

$(document).ready(function() {
    $("#processor").on("change", function() {
        processor = $("#processor").val();
        var getURL = "retrive/ajax.php?processor=" + processor + "&model1=" + model +
            "&brand1=" +
            brand + "&series1=" + series;
        $.get(getURL, function(data, status) {
            $("#core").html(data);
        });
    });
});

$(document).ready(function() {
    $("#core").on("change", function() {
        core = $("#core").val();
        var getURL = "retrive/ajax.php?core=" + core + "&processor1=" + processor + "&model1=" +
            model +
            "&brand1=" + brand + "&series1=" + series;
        $.get(getURL, function(data, status) {
            $("#generation").html(data);
        });
    });
});

$(document).ready(function() {
    $("#generation").on("change", function() {
        generation = $("#generation").val();
        console.log(generation);
        var getURL = "retrive/ajax.php?generation=" + generation + "&core1=" + core +
            "&processor1=" +
            processor + "&model1=" + model + "&brand1=" + brand + "&series1=" + series;
        console.log(getURL);
        $.get(getURL, function(data, status) {
            $("#speed").html(data);
        });
    });
});

$(document).ready(function() {
    $("#speed").on("change", function() {
        var speed = $("#speed").val();
        var getURL = "retrive/ajax.php?speed=" + speed + "&model1=" + model + "&brand1=" +
            brand +
            "&series1=" + series;
        $.get(getURL, function(data, status) {
            $("#lcd_size").html(data);
        });
    });
});

$(document).ready(function() {
    $("#lcd_size").on("change", function() {
        var lcd_size = $("#lcd_size").val();
        var getURL = "retrive/ajax.php?lcd_size=" + lcd_size + "&model1=" + model + "&brand1=" +
            brand +
            '&generation1=' + generation +
            "&series1=" + series;
        $.get(getURL, function(data, status) {
            $("#resolution").html(data);
        });
    });
});
</script>