<?php
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

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

<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Battery Inventory Stock</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2 d-flex justify-content-between">
            <div class="createListingHeading">
                <span>
                    <p>Search</p>
                </span>
            </div>

            <div>
                <a href="./virtual_inv_battery.php">
                    <button>virtual</button>
                </a>
            </div>
        </div>
        <hr class="sectionUnderline">

        <?php
        // search eka ghanna oneee 

        ?>


        <div class="row">
            <form action="" method="post">
                <input type="text">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="row justify-content-center">
            <div class="tableSec">
                <table class="table mx-3 table-hover text-center">
                    <thead>
                        <tr>
                            <th>Box Number</th>
                            <th>Item Device</th>
                            <th>Item Brand</th>
                            <th>Item Model</th>
                            <th>Capacity</th>
                            <th>Item Type</th>
                            <th>Item Status</th>
                            <th>Available Qty</th>
                            <th>Rack No</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query = "SELECT * FROM battery_inventory WHERE  removed_inv = '0'";
                        $run = mysqli_query($connection, $query);

                        while ($data = mysqli_fetch_assoc($run)) {


                        ?>
                        <tr>
                            <td><?php echo $data['box_nu'] ?></td>
                            <td><?php echo $data['device'] ?></td>
                            <td><?php echo $data['brand'] ?></td>
                            <td><?php echo $data['model'] ?></td>
                            <td><?php echo $data['capacity'] ?></td>
                            <td><?php echo $data['battery_type'] ?></td>
                            <td><?php echo $data['battery_status'] ?></td>
                            <td><?php echo $data['qty'] ?></td>
                            <td><?php echo $data['rack_no'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>



<?php require_once('../includes/footer.php'); ?>