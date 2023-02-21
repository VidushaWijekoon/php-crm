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
        <i class="fa-solid fa-users fa-2x"></i>
        <h6 class="text-themecolor mx-2" style="margin-top: auto; font-weight: bold;"> All Users</h6>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-1">
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="./create_user.php">
            <i class="fa fa-plus"></i><span class="mx-1">Add Users</span>
        </a>
        <a class="btn btn-xs mr-2 text-text-black dahsboard_btn px-2 py-1" href="./users.php">
            <i class="fa-solid fa-bars"></i><span class="mx-1">Disciplinary List</span>
        </a>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>