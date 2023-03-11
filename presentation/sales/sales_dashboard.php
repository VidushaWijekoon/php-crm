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
    /* Card 1 --Count showing Styles */
    .dashCard {
        /* width: 180px;
    height: 80px; */
        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        color: black;
        padding: 10px 12px;
    }

    .dashCardTop {
        /* width: 100%; */
        display: flex;
        justify-content: space-between;
    }

    /* 
.cardIcon {
    width: 20%;
    padding: 5px 15px;
} */

    .cardTitle {
        width: 100%;
        /* padding: 8px 15px; */
        margin-left: 10px;
        margin-top: 2px;
        font-weight: 500;
        font-size: 12px;
        color: #000000;
    }

    .cardValue {
        font-weight: 550;
        font-size: 15px;
        color: #000000;
        margin-top: 2px;
        margin-left: 5px;

    }

    /* //////////////////////// */

    /* //////////////////////// */
</style>
<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-receipt m-2"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;"> Sales Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-1">
        <a class="btn btn-xs mr-2 text-black dahsboard_btn px-2 py-1" href="./daily_create_customer.php">
            <i class="fa fa-plus"></i><span class="mx-1">Daily Task</span>
        </a>
        <a class="btn btn-xs mr-2  text-text-black dahsboard_btn px-2 py-1" href="./create_customer">
            <i class="fa-solid fa-bars"></i><span class="mx-1">Create Customer</span>
        </a>
        <a class="btn btn-xs mr-2  text-text-black dahsboard_btn px-2 py-1" href="./create_order">
            <i class="fa-solid fa-bars"></i><span class="mx-1">Create Order</span>
        </a>
    </div>
</div>

<div class="row">

    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Customers</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue"><span style="font-size: 23px;">100</span> </div>
        </div>
    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Orders</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue"><span style="font-size: 23px;">100</span> </div>
        </div>
    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Processing</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue"><span style="font-size: 23px;">100</span> </div>
        </div>
    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Daily Posted</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue"><span style="font-size: 23px;">100</span> </div>
        </div>
    </div>
    <!-- ////////////// -->
    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Daily Created Customers</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue"><span style="font-size: 23px;">100</span> </div>
        </div>
    </div>
    <!-- ////////////// -->
</div>


<?php include_once('../includes/footer.php');  ?>