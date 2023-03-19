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

    $query = "INSERT INTO battery_inventory(device, brand, model, rack_no, qty, capacity) 
            VALUES ('$device', '$brand', '$model', '$rack', '$add_qty', '$capacity')";
    $run = mysqli_query($connection, $query);
    if ($run) {
        header("Location: ./virtual_inv_battery");
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
                    <p>Add Items to Rack</p>
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
                                    <?php
                                    $query = "SELECT device FROM main_inventory_informations GROUP BY device ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($xd = mysqli_fetch_array($result)) :;
                                    ?>
                                    <option value="<?php echo $xd["device"]; ?>">
                                        <?php echo strtoupper($xd["device"]); ?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>



                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Brand</div>
                            <div class="col-lg-4 formInput">

                                <select name="brand" id="brand" class="DropDown select2"
                                    style="border-radius: 5px; width: 100%">
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
                                    style="border-radius: 5px; width: 100%">
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Qty</div>
                            <div class="col-lg-4 formInput">
                                <input class="w-100" type="number" min="1" name="add_qty">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Capacity</div>
                            <div class="col-lg-4 formInput">
                                <input class="w-100" type="text" name="capacity">
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

<script>
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