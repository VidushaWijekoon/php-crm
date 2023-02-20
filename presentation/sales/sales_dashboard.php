<?php 
session_start();
require_once("../../dataAccess/db_authentication.php");
 include_once('../includes/header.php');

// checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

 

?>

<div class="row">
    <div class="col-12 mt-3">
        <a class="btn btn-xs bg-gradient-info mx-2 text-white" type="button"
            href="./sales_assistant_daily_task.php"><span class="mx-1">Daily
                Task</span></a>
        <a class="btn btn-xs bg-gradient-primary mx-2 text-white" type="button" href="./create_customer.php"><span
                class="mx-1">Create Customer</span></a>
        <a class="btn btn-xs bg-gradient-success mx-2 text-white" type="button" href="./create_order.php"><span
                class="mx-1">Create Order</span></a>
    </div>
</div>


<?php include_once('../includes/footer.php');  ?>