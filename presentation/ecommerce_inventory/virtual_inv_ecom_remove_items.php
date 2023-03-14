<?php
session_start();
require_once('../includes/header.php');

require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack = $_GET['rack'];
// $qr = $_GET['qr'];
// echo $qr;


$asin = "";
$device = "";
$brand = "";
$model = "";
$qty = "";
$rackdb = "";
$mfg = '';

if (isset($_POST['scanMfg'])) {
    $mfg = $_POST['mfg'];
    $query = "SELECT * FROM e_com_inventory WHERE mfg = '$mfg' AND status ='0' AND rack = '$rack'";
    echo $query;

    $quary_run = mysqli_query($connection, $query);
    print_r($quary_run);

    while ($x = mysqli_fetch_assoc($quary_run)) {
        $mfg = $x['mfg'];
        $asin = $x['asin_sku'];
        $device = $x['device'];
        $brand = $x['brand'];
        $model = $x['model'];
        $qty = $x['qty'];
    }
}

if (isset($_POST['removeItem'])) {
    $mfg = $_POST['mfg'];
    $query = "UPDATE `e_com_inventory` SET `status`='1' WHERE mfg ='$mfg'";
    $query_run = mysqli_query($connection, $query);
    if (empty($query_run)) {
        echo "<script>alert('Removed From Inventory');</script>";
    }
}


// $query = "SELECT * FROM e_com_inventory WHERE alsakb_qr = '$qr' AND status ='0' AND rack = '$rack'";
// echo $query;
// $rows = 0;
// $query_run = mysqli_query($connection, $query);
// $rows = mysqli_num_rows($query_run);
// if ($rows == 0) {
//     echo "<script>alert('This Item Not in this Rack Add New');";
//     echo "window.location.href='virtual_inv_ecom_add_remove";
//     echo " </script>";


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
    <a href="./virtual_inv_ecommerce.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Inventory</a>
</div>




<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Remove Items</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading d-flex w-100 justify-content-between">
                <div>
                    <p>Remove Items from Rack</p>
                </div>

                <div>
                    <a href="./virtual_view_items.php">
                        <button class="btnT mr-3">View Slot Items</button>
                    </a>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="mt-4">
            <div class="">
                <div class="addFields ">
                    <form action="" method="POST">
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable">Scan MFG</div>
                            <div class="col-lg-4 formInput">
                                <input name="mfg" class="w-100" type="text" value="<?php echo $mfg; ?>">
                            </div>
                        </div>

                        <button type="submit" name="scanMfg" class="d-none"></button>
                    </form>
                    <form action="" method="POST">


                        <input name="mfg" type="hidden" value="<?php echo $mfg ?>">

                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> ASIN/SKU</div>
                            <div class="col-lg-4 formInput">
                                <input name="asinSku" class="w-100" type="text" value="<?php echo $asin ?>">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Device Type</div>
                            <div class="col-lg-4 formInput">
                                <select name="deviceType" id="deviceType" class="w-100">
                                    <option value="<?php echo $device ?>"><?php echo $device ?></option>

                                </select>
                                <!-- <input name="deviceType" class="w-100" type="text"> -->
                            </div>
                        </div>

                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Brand</div>
                            <div class="col-lg-4 formInput">
                                <select name="brand" id="brand" class="w-100">
                                    <option value="<?php echo $brand ?>"><?php echo $brand ?></option>
                                </select>
                                <!-- <input name="brand" class="w-100" type="text"> -->
                            </div>
                        </div>
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Model</div>
                            <div class="col-lg-4 formInput">
                                <select name="model" id="model" class="w-100">
                                    <option value="<?php echo $model ?>"><?php echo $model ?></option>
                                </select>
                                <!-- <input name="model" class="w-100" type="text"> -->
                            </div>
                        </div>

                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Qty</div>
                            <div class="col-lg-4 formInput">
                                <input name="qty" class="w-100" type="text" value="<?php echo $qty ?>">
                            </div>
                        </div>

                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable"> Rack</div>
                            <div class="col-lg-4 formInput">
                                <input name="rack" class="w-100" type="text" value="<?php echo $rack; ?>" disabled>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <button type="submit" name="removeItem" class="btnTC mr-2 px-4">Remove</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>


    </div>
</div>



<?php
require_once('../includes/footer.php')

?>