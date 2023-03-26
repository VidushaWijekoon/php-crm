<?php
ob_start();
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");


// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack = $_GET['rack'];
/* Rack Qty */
$qty = 0;
$query = "SELECT e_com_inventory.asin_sku,e_com_inventory.qty,e_com_inventory.rack,e_com_inventory.asin_serial, e_com_inventory.mfg,device,brand ,model FROM e_com_inventory LEFT JOIN main_inventory_informations
                                                                ON main_inventory_informations.mfg = e_com_inventory.mfg  WHERE rack = '$rack' AND ecom ='1'";

$data_array = mysqli_query($connection, $query);
$rows = mysqli_num_rows($data_array);
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
    <h6 class="pageName pt-1">Add / Remove Items</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading d-flex w-100 justify-content-between">
                <div>
                    <p>Laptop List Items On Rack <span><?php echo $rack; ?></span> </p>
                </div>
                <div>
                    Qty : <?php echo $rows; ?>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">
        <!-- Ekama Page Eke Submit karala Data show karana cn eka-->
        <!-- <form action="" method="POST"> -->
        <div class="scanSec mt-4">
            <div class="row justify-content-end">
                <!-- <div class="mr-2 pt-1">Scan</div> -->
                <!-- <input name="scanNu" class="mr-2" type="text"> -->
                <a href="./virtual_inv_ecom_add_items.php?rack=<?php echo $rack; ?>" name="add_items"
                    class="btnT mr-2">Add
                    New
                    Item</a>
                <a href="./virtual_inv_ecom_remove_items.php?rack=<?php echo $rack; ?>" name="remove_items"
                    class="btnTC mr-2">Remove
                    Item</a>
                <!-- <button class="btnTC mr-2">Remove</button> -->
                <!-- <button type="submit" name="scanData" class="d-none"></button> -->
            </div>
        </div>
        <!-- </form> -->
        <!-- Ekama Page Eke Submit karala Data yawana cn eka-->
        <?php
        // if (isset($_POST['scanData'])) {
        //     $qr = $_POST['scanNu'];
        //     echo $qr;
        //     header("Location: virtual_inv_ecom_add_items?rack=$rack&qr=$qr");
        // }
        ?>


        <div class="addItemsSec mt-4">
            <div class="row justify-content-center">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MFG</th>
                                <th>ASIN Serial</th>
                                <th>ASIN/SKU</th>
                                <th>Device</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Available Qty</th>
                                <th>Rack No</th>
                                <!-- <th>Qty</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($x = mysqli_fetch_assoc($data_array)) {
                            ?>

                            <tr>
                                <!-- <form action="" method="POST"> -->
                                <td class="d-none"><input type="text" name="item_id" value="<?php echo $x['id'] ?>">
                                </td>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $x['mfg'] ?></td>
                                <td><?php echo $x['asin_serial'] ?></td>
                                <td><?php echo $x['asin_sku'] ?></td>
                                <td><?php echo $x['device'] ?></td>
                                <td><?php echo $x['brand'] ?></td>
                                <td><?php echo $x['model'] ?></td>
                                <td><?php echo $x['qty'] ?></td>
                                <td><?php echo $x['rack'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <a href="./virtual_inv_ecom_add_items.php?rack=<?php echo $rack; ?>" name="remove_items" type="submit"
                    class="btnT mr-2">Add
                    New
                    Item</a>
            </div> -->
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>