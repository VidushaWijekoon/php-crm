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

$mfg = "";
$alsakbqr = "";
$asin = "";
$device = "";
$brand = "";
$model = "";
$qty = "";


if (isset($_POST['scanMfg'])) {
    $mfg = $_POST['mfg'];

    $query = "SELECT mfg,device,brand,model,asin FROM packing_mfg WHERE mfg = '$mfg'";
    echo $query;
    $query_run = mysqli_query($connection, $query);

    while ($x = mysqli_fetch_assoc($query_run)) {
        $mfg = $x['mfg'];
        $device = $x['device'];
        $brand = $x['brand'];
        $model = $x['model'];
        $asin = $x['asin'];
    }
}



if (isset($_POST['addNewItem'])) {

    // $alsakbQR = mysqli_real_escape_string($connection, $_POST['alsakbQR']);
    $mfg = mysqli_real_escape_string($connection, $_POST['mfg']);
    $asinSku = mysqli_real_escape_string($connection, $_POST['asinSku']);
    $deviceType = mysqli_real_escape_string($connection, $_POST['deviceType']);
    $brand = mysqli_real_escape_string($connection, $_POST['brand']);
    $model = mysqli_real_escape_string($connection, $_POST['model']);
    $qty = mysqli_real_escape_string($connection, $_POST['qty']);

    echo $mfg;
    if ($mfg == "") {
        echo "<script>
    alert('Please Scan/Enter MFG Number First');
    </script>";
    } else {

        $queryS = "SELECT * FROM e_com_inventory WHERE mfg ='$mfg' ";
        echo $queryS;
        $rows = 0;
        $query_run = mysqli_query($connection, $queryS);
        $rows = mysqli_num_rows($query_run);
        // print_r($query_run);


        if ($rows == 0) {


            $query = "INSERT INTO e_com_inventory(mfg,asin_sku,device,brand,model,qty,rack)
        VALUES('$mfg','$asinSku','$deviceType','$brand','$model','$qty','$rack')";
            $data = mysqli_query($connection, $query);

            echo "insert waduna";
            if (empty($data)) {

                echo "<script>alert('data not added');</script>";
            } else {
                echo "<script>alert('data added');</script>";
            }
        } else {
            $query = "UPDATE e_com_inventory SET dispatch ='0', rack = '$rack' WHERE mfg ='$mfg'";

            $data = mysqli_query($connection, $query);

            echo "update waduna";

            if (empty($data)) {

                echo "<script>alert('data not added');</script>";
            } else {
                echo "<script>alert('laptop Added Again');</script>";
            }
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
</style>




<div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv_ecom_add_remove.php?rack=<?php echo $rack ?>"><i class="fa-solid fa-backward"></i>&nbsp;
        &nbsp;Back to
        Rack</a>
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

        <div class="mt-4">
            <div class="">
                <form action="" method="POST">
                    <div class="addFields ">
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable">Scan MFG</div>
                            <div class="col-lg-4 formInput">
                                <input name="mfg" class="w-100" type="text" value="<?php echo $mfg; ?>">
                            </div>
                            <button type="submit" name="scanMfg" class="d-none"></button>

                        </div>
                    </div>
                </form>
                <hr class="sectionUnderline w-75 mt-3">

                <form action="" method="POST">

                    <input name="mfg" type="hidden" value="<?php echo $mfg ?>" required>

                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> ASIN/SKU</div>
                        <div class="col-lg-4 formInput">
                            <input name="asinSku" class="w-100" type="text" value="<?php echo $asin ?>">
                        </div>
                    </div>
                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> Device Type</div>
                        <div class="col-lg-4 formInput">
                            <select name="deviceType" id="deviceType" class="w-100" required>

                                <option>Select Device</option>
                                <option value="<?php echo $device ?>">Laptop</option>

                            </select>
                            <!-- <input name="deviceType" class="w-100" type="text"> -->
                        </div>
                    </div>

                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> Brand</div>
                        <div class="col-lg-4 formInput">
                            <!-- <select name="brand" id="brand" class="w-100">
                                <option value="dell">Dell</option>
                            </select> -->
                            <input name="brand" value="<?php echo $brand ?>" class="w-100" type="text" required>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> Model</div>
                        <div class="col-lg-4 formInput">
                            <!-- <select name="model" id="model" class="w-100">
                                <option value="model">model</option>
                            </select> -->
                            <input name="model" class="w-100" type="text" value="<?php echo $model ?>" required>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> Qty</div>
                        <div class="col-lg-4 formInput">
                            <input name="qty" class="w-100" type="text" value="1" required>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-1">
                        <div class="col-lg-2 formLable"> Rack</div>
                        <div class="col-lg-4 formInput">
                            <input name="rackName" class="w-100" type="text" value="<?php echo $rack; ?>" disabled>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" name="addNewItem" class="btnTB mr-2 px-4">Add</button>
                    </div>
                </form>
            </div>

        </div>

    </div>



</div>



<?php
require_once('../includes/footer.php')

?>