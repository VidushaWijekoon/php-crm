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
$asinSku = "";
$device = "";
$brand = "";
$model = "";
$qty = "";
$core = "";
$gen = "";
$asinSerial = "";

$isDataADD = 0;
if (isset($_POST['scanMfg'])) {
    $mfg = $_POST['mfg'];
    if ($mfg == "") {
        echo "<script>
    alert('Please Scan/Enter MFG Number First');
    </script>";
    } else {

        $query = "SELECT packing_mfg.asin_sku,main_inventory_informations.asin_serial,packing_mfg.mfg,
        device,brand,model,core,generation,main_inventory_informations.inventory_id
         FROM packing_mfg LEFT JOIN main_inventory_informations ON main_inventory_informations.mfg = packing_mfg.mfg
           WHERE packing_mfg.mfg = '$mfg'";

        $query_run = mysqli_query($connection, $query);
        $rowsPac = mysqli_num_rows($query_run);
        // packing Mfg data tynwnm,
        if ($rowsPac > 0) {
            $inventory_id=0;
            while ($x = mysqli_fetch_assoc($query_run)) {
                $mfg = $x['mfg'];
                $device = $x['device'];
                $brand = $x['brand'];
                $model = $x['model'];
                $core = $x['core'];
                $gen = $x['generation'];
                $asinSku = $x['asin_sku'];
                $asinSerial = $x['asin_serial'];
                $qty = '1';
                $inventory_id = $x['inventory_id'];
            }
            $queryS = "SELECT * FROM e_com_inventory WHERE mfg ='$mfg' ";

            $rows = 0;
            $query_run = mysqli_query($connection, $queryS);
            $rows = mysqli_num_rows($query_run);

            // ecommerce_inventory eke data natnm,
            if ($rows == 0) {
                echo "ecommerce_inventory eke data natnm";
                $query = "INSERT INTO e_com_inventory(
                                mfg,
                                asin_sku,
                                qty,
                                rack,
                                asin_serial
                            )
                            VALUES(
                                '$mfg',
                                '$asinSku',
                                '$qty',
                                '$rack',
                                '$asinSerial'
                            )";
                $data = mysqli_query($connection, $query);
              
                $sql="UPDATE main_inventory_informations SET ecom = 1 WHERE inventory_id='$inventory_id'";
                $sql_run=mysqli_query($connection,$sql);

                // add una kiyla yatin pennnanna
                $isDataADD = 1;



                // header("Location: virtual_inv_ecom_add_items?mfg=$mfg&rack=$rack");
            } else {
                // ecommrce eke data tynwnm
                echo "ecommerce_inventory eke data tynwa";

                $query = "UPDATE e_com_inventory SET dispatch ='0', rack = '$rack' WHERE mfg ='$mfg'";
                $data = mysqli_query($connection, $query);

                echo "<script>alert('laptop Added Again');</script>";
                $isDataADD = 1;
            }
        } else {
            // packing mfg data natnm,

            echo "<script>alert('this laptop not in database');</script>";

            // header("Location: virtual_inv_ecom_add_items?rack=$rack");
        }
    }
    $_POST['scanMfg'] = '';
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
                    <!-- <a href="./virtual_view_items.php">
                        <button class="btnT mr-3">View Slot Items</button>
                    </a> -->
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="mt-4">
            <div class="">
                <form method="POST">

                    <div class="addFields ">
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 formLable">Scan MFG / Alsakb No</div>
                            <div class="col-lg-4 formInput">
                                <input name="mfg" class="w-100" type="text">
                            </div>
                            <button type="submit" name="scanMfg" class="d-none"></button>

                        </div>
                    </div>
                </form>
                <hr class="sectionUnderline w-75 mt-3">

                <div class="row justify-content-center mb-1">
                    <div class="col-lg-2 formLable"> ASIN/SKU</div>
                    <div class="col-lg-4 formInput">
                        <input name="asinSku" class="w-100" type="text" value="<?php echo $asinSku ?>">
                    </div>
                </div>
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-2 formLable"> ASIN/Serial</div>
                    <div class="col-lg-4 formInput">
                        <input name="asinSerial" class="w-100" type="text" value="<?php echo $asinSerial ?>">
                    </div>
                </div>
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-2 formLable"> Device Type</div>
                    <div class="col-lg-4 formInput">
                        <select name="deviceType" id="deviceType" class="w-100" required>
                            <option value="<?php echo $device ?>" selected>Laptop</option>

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
                <div class="row justify-content-center mb-1 mt-2">
                    <!-- <button>Succecss</button> -->

                    <?php
                    if ($isDataADD == 1) {
                        echo "<h6 class = 'text-info' > $mfg Added Success!!</h6>";
                    } else {
                    }

                    ?>
                </div>




            </div>

        </div>

    </div>



</div>

<script>
let mfgbar = document.querySelector('input[name="mfg"]');
mfgbar.focus();
// text.value = '';
</script>



<?php
require_once('../includes/footer.php')

?>