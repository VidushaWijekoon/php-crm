<?php
session_start();
require_once('../includes/header.php');

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




<div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
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
                    <p>Add/Remove Items On Rack</p>
                </div>
                <div>
                    <a href="./virtual_view_items.php">
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
                                <th>Item Model</th>
                                <th>Item Size</th>
                                <th>Available Qty</th>
                                <th>Rack No</th>
                                <th>Slot No</th>
                                <th>Qty</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dell</td>
                                <td>
                                    12
                                </td>
                                <td>10</td>
                                <td>1</td>
                                <td>A-2</td>
                                <td><input class="w-50" type="text"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btnTB mr-2 px-4">Add</button>
                <button class="btnTC mr-2">Remove</button>
            </div>
        </div>


    </div>
</div>



<?php
require_once('../includes/footer.php')

?>