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
        <i class="pageNameIcon fa-solid fa-receipt m-2"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;"> Sales Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-1">
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="./sales_assistant_daily_task.php">
            <i class="fa fa-plus"></i><span class="mx-1">Daily Task</span>
        </a>
        <a class="btn btn-xs mr-2  text-text-black dahsboard_btn px-2 py-1" href="./create_customer.php">
            <i class="fa-solid fa-bars"></i><span class="mx-1">Create Customer</span>
        </a>
        <a class="btn btn-xs mr-2  text-text-black dahsboard_btn px-2 py-1" href="./create_order.php">
            <i class="fa-solid fa-bars"></i><span class="mx-1">Create Order</span>
        </a>
    </div>
</div>


<?php include_once('../includes/footer.php');  ?>