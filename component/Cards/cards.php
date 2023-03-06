<?php
require_once("../../presentation/includes/header.php")
?>

<style>
    /* btn card Styles */
    .btnCard {
        width: 152px;
        height: 48px;
        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        display: flex;
        color: #000000;
        justify-content: center;
        align-items: center;
        gap: 15px;

    }

    .btnCardLable {
        font-weight: 600;
        font-size: 16px;
    }


    /* Card 1 --Count showing Styles */
    .dashCard {
        width: 220px;
        height: 110px;
        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        color: black;
        padding: 10px 15px;
    }

    .dashCardTop {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .cardIcon {
        width: 20%;
        /* padding: 5px 15px; */
    }

    .cardTitle {
        width: 80%;
        /* padding: 8px 15px; */
        margin-left: 5px;
        margin-top: 2px;
        font-weight: 500;
        font-size: 22px;
        color: #000000;
    }

    .cardValue {
        font-weight: 600;
        font-size: 28px;
        color: #000000;
        margin-top: 10px;
        margin-left: 8px;

    }

    /* //////////////////////// */

    /* Sales Person Card Styles */

    .salesPersonCard {
        width: 320px;
        height: 180px;
        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        padding: 5px 10px;
        color: #000000;
    }

    .salesCardTop {
        width: 100%;
        display: flex;
    }

    .salesCardTopLeft {
        padding: 10px 0px 0px 10px;
    }

    .salesCardTopRight {
        padding: 20px 0px 0px 20px;
    }

    .SalesPersonName {
        font-weight: 600;
        font-size: 24px;
        color: #000000;
    }

    .SalesPersonPlatform {
        font-weight: 600;
        font-size: 14px;
        color: #000000;
    }

    .SalesPersonStatus {
        color: #6AA057;
        font-weight: 600;
        font-size: 10px;
    }

    .salesCardBody {
        display: flex;
        justify-content: center;
    }

    .salesCardValue {
        font-weight: 600;
        font-size: 20px;
    }

    /* //////////////////////////////////////////////// */

    /* Listing Count Card */

    .listingCountCard {
        width: 180px;
        height: 90px;
        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
    }

    .ListingCardLeft {
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ListingCardRight {
        padding: 10px 0px;
        width: 60%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .platformnName {
        font-weight: 600;
        font-size: 18px;
    }

    .listingCount {
        font-weight: 700;
        font-size: 30px;
        color: #168EB4;
    }

    .listingDetails {
        font-weight: 500;
        font-size: 12px;
    }

    /* //////////////// */

    /* OrderDetails Card Styles */

    .orderDetailsCard {

        background: #FFFFFF;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        padding: 10px 10px;
    }

    .orderDetailsHead {
        display: flex;
        justify-content: center;
        font-weight: 500;
        font-size: 20px;
    }

    .directPlatformCount {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10%
    }

    .dirAmazon,
    .dirNoon,
    .dirCartlow {
        font-weight: 500;
        font-size: 14px;

        text-align: center;
    }

    .orderDetailsCount {
        display: flex;
        justify-content: center;
        font-weight: 700;
        font-size: 48px;
        color: #168EB4;

    }

    /* ///////////////// */
</style>

<div class="row">
    <!-- Btn Card -->
    <div class="btnCard m-3">
        <div class="btnCardIcon">
            <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
        </div>
        <div class="btnCardLable"> Add Item</div>
    </div>
    <!-- ////////////// -->
</div>

<div class="row">
    <!-- Card 1 -->
    <div class="dashCard m-3">
        <div class="dashCardTop">
            <div class="cardIcon"><i class="fa-solid fa-scale-balanced" style="color: #168EB4;font-size: 25px;"></i>
            </div>
            <div class="cardTitle">Total Users</div>
        </div>
        <div class="dashCardBody">
            <div class="cardValue">50/ <span style="font-size: 23px;">100</span> </div>
        </div>

    </div>
    <!-- ////////////// -->

</div>

<br>

<div class="row">
    <!-- card 2 -sales Person -->
    <div class="salesPersonCard m-3">
        <div class="salesCardTop">
            <div class="salesCardTopLeft">
                <i class="fa-solid fa-laptop-mobile" style="color: #168EB4;font-size: 75px;"></i>
            </div>
            <div class="salesCardTopRight">
                <div class="SalesPersonName">Sales Person</div>
                <div class="SalesPersonPlatform">Amazon</div>
                <div class="SalesPersonStatus">Online</div>
            </div>
        </div>
        <div class="salesCardBody">
            <div class="salesCardValue">Today Listing Count &nbsp;<span style="font-size: 23px; color: #168EB4;">
                    100</span> </div>
        </div>

    </div>
    <!-- /////////////// -->


</div>

<div class="row">
    <!-- Listing Count Card -->
    <div class="listingCountCard m-3">
        <div class="ListingCardLeft">
            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
        </div>
        <div class="ListingCardRight">
            <div class="platformnName">Amazon</div>
            <div class="listingCount">100</div>
            <div class="listingDetails">USA Listings</div>
        </div>

    </div>
    <!-- //////////// -->
</div>



<div class="row">
    <!-- Order Details Card -->
    <div class="orderDetailsCard m-3">
        <div class="orderDetailsHead">
            <span style="color: #168EB4;">Today</span> &nbsp;Orders
        </div>
        <div class="orderDetailsCount">
            50
        </div>

        <div class="directPlatformCount">
            <div class="dirAmazon">Direct Amazon <span><br> 50</span></div>
            <div class="dirNoon">Direct Noon <span><br>50</span></div>
            <div class="dirCartlow">Direct Cartlow <span><br>50</span></div>
        </div>


    </div>
    <!-- //////////// -->
    <!-- Order Details Card -->
    <div class="orderDetailsCard m-3">
        <div class="orderDetailsHead">
            <span style="color: #168EB4;">Today</span> &nbsp;Orders
        </div>
        <div class="orderDetailsCount">
            50
        </div>




    </div>
    <!-- //////////// -->
</div>


<?php
require_once("../../presentation/includes/footer.php")
?>