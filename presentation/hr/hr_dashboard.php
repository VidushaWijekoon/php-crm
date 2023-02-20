<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>

<style>
.fas,
.fa {
    font-size: 14px !important;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 5px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
}
</style>

<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-users"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;"> HR
            Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <a class="btn dashboard-btn btn-xs" href="./create_employee.php"><span class="mx-1">Create New
                Employee</span></a>
        <a class="btn dashboard-btn mx-2 btn-xs" href="./employees.php"><span class="mx-1">All
                Employees</span></a>
        <a class="btn dashboard-btn mx-2 btn-xs" href="./employees.php"><span class="mx-1">HR
                Assistant</span></a>
    </div>
</div>
<?php require_once('../includes/footer.php') ?>