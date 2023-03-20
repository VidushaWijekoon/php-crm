<?php
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$rack = $_GET['rack'];

if (isset($_POST['add_items'])) {
    $qty = null;
    $item_id = mysqli_real_escape_string($connection, $_POST['item_id']);
    $rack_no = mysqli_real_escape_string($connection, $_GET['rack']);
    $add_remove = mysqli_real_escape_string($connection, $_POST['add_remove']);

    $query = "SELECT qty FROM battery_inventory WHERE id = '$item_id'";
    $result = mysqli_query($connection, $query);
    while ($xd = mysqli_fetch_assoc($result)) {
        $qty = $xd['qty'];
    }
    $add =  $qty + $add_remove;

    $add_q = "UPDATE battery_inventory SET qty = '$add'  WHERE id = '$item_id'";
    $add_r = mysqli_query($connection, $add_q);
    if ($add_r) {
        echo "<script>
            alert('Successfully Add Items to $rack');
            
        </script>";
    }
}

if (isset($_POST['remove_items'])) {
    $qty = null;

    $item_id = mysqli_real_escape_string($connection, $_POST['item_id']);
    $rack_no = mysqli_real_escape_string($connection, $_GET['rack']);
    $add_remove = mysqli_real_escape_string($connection, $_POST['add_remove']);

    $query = "SELECT qty FROM battery_inventory WHERE id = '$item_id'";
    $result = mysqli_query($connection, $query);
    while ($xd = mysqli_fetch_assoc($result)) {
        $qty = $xd['qty'];
    }
    $sub =  $qty - $add_remove;

    if ($sub < 0) {

        echo "<script>
            alert('You cannot update qty less than 0 in this $rack');
            window.location.href='./virtual_inv_battery';
        </script>";
    }


    if ($sub == 0) {
        $add_s = "UPDATE battery_inventory SET removed_inv = '1', qty = '$sub' WHERE id = '$item_id'";
        $add_sub = mysqli_query($connection, $add_s);

        echo "<script>
            alert('all items removed from this $rack');
            window.location.href='./virtual_inv_battery';
        </script>";
    }

    if ($sub > 0) {
        $add_s = "UPDATE battery_inventory SET qty = '$sub'  WHERE id = '$item_id'";
        $add_sub = mysqli_query($connection, $add_s);
        echo "<script>
            alert('Removed $add_remove Items $rack');            
        </script>";
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

.roundBoxNu {
    border-radius: 50%;
    background-color: #168EB4;
    padding: 4px 8px;
    color: #ffffff;


}
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv_battery"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
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
                    <p>Add/Remove Items On Rack <?php echo strtoupper($rack); ?> </p>
                </div>
                <div>
                    <a href="./virtual_inv_battery_view_items">
                        <button class="btnT mr-3">View Slot Items</button>
                    </a>
                </div>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="addItemsSec mt-4">
            <div class="row justify-content-center">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>Box Number</th>
                                <th>Item Device</th>
                                <th>Item Brand</th>
                                <th>Item Model</th>
                                <th>Available Qty</th>
                                <th>Rack No</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM battery_inventory WHERE rack_no = '$rack' AND removed_inv = 0";
                            $result = mysqli_query($connection, $query);
                            while ($xd = mysqli_fetch_assoc($result)) {
                                $id = $xd['id'];
                            ?>

                            <tr>
                                <form action="" method="POST">
                                    <td class="d-none"><input type="text" name="item_id" value="<?php echo $id ?>"></td>
                                    <td><b class="roundBoxNu"><?php echo $xd['box_nu'] ?></b></td>
                                    <td class="text-capitalize"><?php echo $xd['device'] ?></td>
                                    <td><?php echo ucfirst($xd['brand']) ?></td>
                                    <td style="text-transform: capitalize;"><?php echo $xd['model'] ?></td>
                                    <td><?php echo $xd['qty'] ?></td>
                                    <td><?php echo $xd['rack_no'] ?></td>
                                    <td>
                                        <input class="w-100" type="number" min="1" name="add_remove">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="submit" name="add_items"
                                                style="background: transparent; border:none;">
                                                <i class="fa-solid fa-circle-plus fa-2x text-info"></i>
                                            </button>
                                            <button type="submit" name="remove_items"
                                                style="background: transparent; border:none;">
                                                <i class="fa-solid fa-circle-minus fa-2x text-danger"></i>
                                            </button>
                                        </div>
                                    </td>

                                </form>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="./virtual_inv_battery_add_new_item?rack=<?php echo $rack; ?>" name="remove_items" type="submit"
                    class="btnT mr-2">Add New Item</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>