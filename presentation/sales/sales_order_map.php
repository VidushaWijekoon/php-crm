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
        <i class="fa-solid fa-receipt m-2"></i>
        <h6 style="margin-top: auto; font-weight: bold;">Road Map</h6>
    </div>
</div>

<div class="row">

</div>


<?php include_once('../includes/footer.php');  ?>