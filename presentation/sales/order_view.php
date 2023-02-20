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
    <div class="col" style="background: white">
        <div class="col-md-3">
            <h6 class="p-1">All Orders</h6>
        </div>
    </div>
</div>
<style>
td {
    font-size: 10px;
}
</style>

<?php require_once('../includes/footer.php'); ?>