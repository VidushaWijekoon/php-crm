<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-bars-progress m-2"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;">Maneger Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-1">
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="./manager_sales.php">
            <i class="fa-solid fa-coins"></i><span class="mx-1">Sales</span>
        </a>
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="#">
            <i class="fa-brands fa-amazon"></i><span class="mx-1">E-Commerce</span>
        </a>
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="#">
            <i class="fa-brands fa-amazon"></i><span class="mx-1">Accounts</span>
        </a>
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="#">
            <i class="fa-solid fa-warehouse"></i><span class="mx-1">Inventory</span>
        </a>

    </div>
</div>

<?php require_once('../includes/footer.php'); ?>