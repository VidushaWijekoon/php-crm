<?php
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
.circle1,
.circle2 {
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px;
    border: 0px;
}

.boxx {
    display: flex;
}
</style>

<div class="boxx w-25 bg-black">
    <button class="circle1 bg-success rounded-circle">Start</button>
    <button class="circle2 bg-info rounded-circle">End</button>
</div>



<?php
require_once('../includes/footer.php')

?>