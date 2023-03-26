<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-users"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;"> HR
            Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-1">
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="./create_employee">
            <i class="fa fa-plus"></i><span class="mx-1">Create New Employee</span>
        </a>
        <a class="btn btn-xs mr-2 text-text-black dahsboard_btn px-2 py-1" href="./employees">
            <i class="fa-solid fa-bars"></i><span class="mx-1">All Employees</span>
        </a>
        <a class="btn btn-xs mr-2 text-text-black dahsboard_btn px-2 py-1" href="#">
            <i class="fa-solid fa-bars"></i><span class="mx-1">HR Assistant</span>
        </a>
        <a class="btn btn-xs mr-2 text-text-black dahsboard_btn px-2 py-1" href="report">
            <i class="fa-solid fa-bars"></i><span class="mx-1">All Employee Records</span>
        </a>
    </div>
</div>
<?php require_once('../includes/footer.php') ?>