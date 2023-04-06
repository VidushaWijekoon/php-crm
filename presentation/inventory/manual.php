<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$username=$_SESSION['username'];
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
                <span>
                    <?php $sql="SELECT inventory_id FROM main_inventory_informations WHERE create_by_inventory_id ='$username' ORDER BY inventory_id DESC LIMIT 1 ";
                    $sql_aa=mysqli_query($connection,$sql);
                    foreach($sql_aa AS $data){ 
                        echo "</br> Last Insert Record QR Number : ";
                        echo $data['inventory_id'];
                    }
                ?>
                </span>
            </div>
        </div>
        <!-- ADD Details Section -->
        <hr class="sectionUnderline mt-4" style="width: 80%;">
        <form method='POST' action="utils/save_new.php">
            <div class="row detailsSec">

                <div class="col-6">
                    <div class="row mb-1">
                        <div class="col-4 addLable">MFG Number</div>
                        <div class="col-8">
                            <input type="text" placeholder="For Manual Enter" name="mfg" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Device</div>
                        <div class="col-8">
                            <?php 
                            $query = "SELECT device FROM main_inventory_informations GROUP BY device ASC";
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
                            <select name="brand" id="brand" class="DropDown select2" style="width: 100%;" required>
                                <option value="Lenovo"> Lenovo </option>
                                <option value="Hp"> HP </option>
                                <option value="Dell"> Dell </option>
                                <option value="Samsung"> Samsung </option>
                                <option value="Acer"> Acer </option>
                                <option value="Asus"> Asus </option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Model</div>
                        <div class="col-8">
                            <input type="text" name="model">

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Processor</div>
                        <div class="col-8">
                            <input type="text" name="processor">

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Core</div>
                        <div class="col-8">
                            <input type="text" name="core">

                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Generation</div>
                        <div class="col-8">
                            <select name="generation" id="generation1" class="DropDown select2" style="width: 100%;"
                                required>
                                <option selected value="No"> No </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Speed</div>
                        <div class="col-8">
                            <input type="text" name="speed">
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-4 addLable">LCD Size</div>
                        <div class="col-8">
                            <select name="lcd_size" id="lcd_size" class="DropDown select2" style="width: 100%;"
                                required>
                                <option value="11"> 11 </option>
                                <option value="14"> 14 </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Resolution</div>
                        <div class="col-8">
                            <select name="resolution" id="resolution" class="DropDown select2" style="width: 100%;"
                                required>
                                <option value="1366x768"> 1366x768 </option>
                                <option value="1080x1066"> 1080x1066 </option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Battery</div>
                        <div class="col-8">
                            <select name="battery" id="battery" class="DropDown select2" style="width: 100%;" required>
                                <option selected></option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4 addLable">Touch</div>
                        <div class="col-8">
                            <select name="touch" id="touch" class="DropDown select2" style="width: 100%;" required>
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
                            <select name="dvd" id="dvd" class="DropDown select2" style="width: 100%;" required>
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
                                style="width: 100%;" required>
                                <option selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 mb-5">
                        <div class="">
                            <button class="btnT" type="submit" name="submit"><i class="fa-solid fa-qrcode mr-1"
                                    style="color:#168EB4"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
let searchbar = document.querySelector('input[name="name"]');
searchbar.focus();
// text.value = '';
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

// $(document).ready(function() {
//     $("#device").on("change", function() {
//         var device = $("#device").val();
//         console.log(device);
//         var getURL = "retrive/ajax.php?device=" + device;
//         $.get(getURL, function(data, status) {
//             $("#brand").html(data);
//         });
//     });
// });
// $(document).ready(function() {
//     $("#brand").on("change", function() {
//         brand = $("#brand").val();
//         var getURL = "retrive/ajax.php?brand=" + brand;
//         $.get(getURL, function(data, status) {
//             $("#series").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#series").on("change", function() {
//         series = $("#series").val();
//         var getURL = "retrive/ajax.php?brand1=" + brand + "&series=" + series;
//         $.get(getURL, function(data, status) {
//             $("#model").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#model").on("change", function() {
//         model = $("#model").val();
//         var getURL = "retrive/ajax.php?model=" + model + "&brand1=" + brand + "&series1=" +
//             series;
//         $.get(getURL, function(data, status) {
//             $("#processor").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#processor").on("change", function() {
//         processor = $("#processor").val();
//         var getURL = "retrive/ajax.php?processor=" + processor + "&model1=" + model +
//             "&brand1=" +
//             brand + "&series1=" + series;
//         $.get(getURL, function(data, status) {
//             $("#core").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#core").on("change", function() {
//         core = $("#core").val();
//         var getURL = "retrive/ajax.php?core=" + core + "&processor1=" + processor + "&model1=" +
//             model +
//             "&brand1=" + brand + "&series1=" + series;
//         $.get(getURL, function(data, status) {
//             $("#generation").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#generation").on("change", function() {
//         generation = $("#generation").val();
//         console.log(generation);
//         var getURL = "retrive/ajax.php?generation=" + generation + "&core1=" + core +
//             "&processor1=" +
//             processor + "&model1=" + model + "&brand1=" + brand + "&series1=" + series;
//         console.log(getURL);
//         $.get(getURL, function(data, status) {
//             $("#speed").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#speed").on("change", function() {
//         var speed = $("#speed").val();
//         var getURL = "retrive/ajax.php?speed=" + speed + "&model1=" + model + "&brand1=" +
//             brand +
//             "&series1=" + series;
//         $.get(getURL, function(data, status) {
//             $("#lcd_size").html(data);
//         });
//     });
// });

// $(document).ready(function() {
//     $("#lcd_size").on("change", function() {
//         var lcd_size = $("#lcd_size").val();
//         var getURL = "retrive/ajax.php?lcd_size=" + lcd_size + "&model1=" + model + "&brand1=" +
//             brand +
//             '&generation1=' + generation +
//             "&series1=" + series;
//         $.get(getURL, function(data, status) {
//             $("#resolution").html(data);
//         });
//     });
// });
</script>