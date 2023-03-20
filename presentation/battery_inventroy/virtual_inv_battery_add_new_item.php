<?php
ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack = $_GET['rack'];

if (isset($_POST['add_new_item'])) {
    $device = mysqli_real_escape_string($connection, $_POST['device']);
    $brand = mysqli_real_escape_string($connection, $_POST['brand']);
    $model = mysqli_real_escape_string($connection, $_POST['model']);
    $add_qty = mysqli_real_escape_string($connection, $_POST['add_qty']);
    $capacity = mysqli_real_escape_string($connection, $_POST['capacity']);
    $box_nu = mysqli_real_escape_string($connection, $_POST['box_nu']);


    $query = "SELECT * from battery_inventory where box_nu='$box_nu'";
    $run = mysqli_query($connection, $query);
    $rows = mysqli_fetch_row($run);

    if ($rows) {
        $query = "UPDATE battery_inventory SET device=' $device',brand = '$brand', model ='$model', rack_no='$rack',qty='$add_qty',capacity ='$capacity',removed_inv='0' WHERE box_nu = '$box_nu' ";
        $run = mysqli_query($connection, $query);
        if ($run) {
            header("Location: ./virtual_inv_battery");
        }
    } else {

        $query = "INSERT INTO battery_inventory(device, brand, model, rack_no, qty, capacity,box_nu) 
            VALUES ('$device', '$brand', '$model', '$rack', '$add_qty', '$capacity','$box_nu')";
        $run = mysqli_query($connection, $query);
        if ($run) {
            header("Location: ./virtual_inv_battery");
        }
    }
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

.virtualInvSec {
    display: flex;
    align-items: center;
    justify-content: center;

}


.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}


.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.select2-selection__rendered {
    line-height: 17px !important;
    padding-left: 0px !important;
}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv_battery"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Inventory</a>
</div>

<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Add New Items</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading d-flex w-100 justify-content-between">
                <div>
                    <p>Add Items to Rack <?php echo strtoupper($rack) ?></p>
                </div>

                <div>
                    <a href="./virtual_view_items.php">
                        <button class="btnT mr-3">View Slot Items</button>
                    </a>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">
        <form action="" method="POST">
            <div class="mt-4">
                <div class="">
                    <div class="addFields ">
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> device</div>
                            <div class="col-lg-4 formInput">
                                <select name="device" id="device" class="DropDown select2"
                                    style="border-radius: 5px; width: 100%">
                                    <option selected value="battery">Battery</option>
                                    <!-- <?php
                                            $query = "SELECT device FROM main_inventory_informations GROUP BY device ASC";
                                            $result = mysqli_query($connection, $query);

                                            while ($xd = mysqli_fetch_array($result)) :;
                                            ?>
                                    <option value="<?php echo $xd["device"]; ?>">
                                        <?php echo strtoupper($xd["device"]); ?>
                                    </option>
                                    <?php endwhile; ?> -->
                                </select>
                            </div>
                        </div>



                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Brand</div>
                            <div class="col-lg-4 formInput">

                                <select name="brand" id="brand" class="DropDown select2"
                                    style="border-radius: 5px; width: 100%" required>
                                    <?php
                                    $query = "SELECT brand FROM main_inventory_informations GROUP BY brand ASC";
                                    $result = mysqli_query($connection, $query);
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $data["brand"]; ?>">
                                        <?php echo strtoupper($data["brand"]); ?>
                                    </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>

                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Model</div>
                            <div class="col-lg-4 formInput">
                                <select name="model" id="model" class="DropDown select2"
                                    style="border-radius: 5px; width: 100%" required>
                                </select>
                            </div>
                        </div>

                        <?php
                        $next_box_id = '';
                        $box_id = '';
                        $query =  "SELECT box_nu as lastID from battery_inventory ORDER BY box_nu DESC LIMIT 1";
                        $sql = mysqli_query($connection, $query);

                        while ($data = mysqli_fetch_assoc($sql)) {
                            $box_id = $data['lastID'];
                        }
                        $next_box_id = ++$box_id;



                        ?>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Box Number</div>
                            <div class="col-lg-4 formInput">
                                <!-- <input class="w-100" type="number" min="1" name="box_nu" required> -->
                                <select name="box_nu" id="box_nu" class="DropDown select2 w-100">
                                    <option value="<?php echo $next_box_id; ?>"> <?php echo $next_box_id ?></option>
                                    <?php
                                    $query1 = "SELECT box_nu FROM battery_inventory WHERE qty = '0'";
                                    $sql1 = mysqli_query($connection, $query1);
                                    while ($data1 = mysqli_fetch_assoc($sql1)) {
                                        $availablebox = $data1['box_nu'];
                                        echo $availablebox;
                                    ?>
                                    <option value="<?php echo $availablebox; ?>"> <?php echo $availablebox; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Qty</div>
                            <div class="col-lg-4 formInput">
                                <input class="w-100" type="number" min="1" name="add_qty" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Capacity</div>
                            <div class="col-lg-4 formInput">
                                <input class="w-100" type="text" name="capacity" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Rack</div>
                            <div class="col-lg-4 formInput">
                                <input class="w-100" type="text" name="rack_number" disabled
                                    value="<?php echo $rack ?>">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center mt-4">
                    <button name="add_new_item" type="submit" class="btnTB mr-2 px-4">Add</button>
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


$(document).ready(function() {
    $("#device").on("change", function() {
        var device = $("#device").val();
        var getURL = "./addNew/get_laptop_details.php?device=" + device;
        $.get(getURL, function(data, status) {
            $("#brand").html(data);
        });
    });
});

$(document).ready(function() {
    $("#brand").on("change", function() {
        var brand = $("#brand").val();
        var getURL = "./addNew/get_laptop_details.php?brand=" + brand;
        $.get(getURL, function(data, status) {
            $("#model").html(data);
        });
    });
});
</script>


<?php require_once('../includes/footer.php');  ?>