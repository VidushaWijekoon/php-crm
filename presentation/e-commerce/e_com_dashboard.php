<?php

require_once('../includes/header.php')

?>

<style>
.ecomBodySec a {
    color: black !important;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.ecomBodySec {
    display: flex;
    align-items: center;
    justify-content: center;

}

.createListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

/* Add Listing card styles */

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
    height: 185px;
    background: #FFFFFF;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    padding: 10px 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
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
    font-size: 22px;
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
</style>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">E-Commerce Dashboard</h6>
</div>

<div class="row ecomBodySec">
    <div class="cardContainer">

        <!-- /////////////Action Button Section//////////////////// -->

        <div class="createListingSec">
            <!-- <div class="">
                <div class="createListingHeading">
                    Create Order
                </div>
            </div>
            <hr class="sectionUnderline"> -->
            <!-- create listing button section -->
            <div class="createListingCardSec">
                <div class="row">
                    <!-- Create Order -->
                    <a href="./e_com_create_order.php">

                        <div class="btnCard m-3">
                            <div class="btnCardIcon">
                                <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                            </div>
                            <div class="btnCardLable">Create Order</div>
                        </div>
                    </a>
                    <!-- ////////////// -->
                    <!-- Noon -->
                    <a href="./e_com_packing.php">
                        <div class="btnCard m-3">
                            <div class="btnCardIcon">
                                <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                            </div>
                            <div class="btnCardLable">Packing</div>
                        </div>
                    </a>
                    <!-- ////////////// -->

                </div>
            </div>
        </div>



        <!-- /////////////Create Listing Section//////////////////// -->

        <div class="createListingSec">
            <div class="">
                <div class="createListingHeading">
                    Create Listings
                </div>
            </div>
            <hr class="sectionUnderline">
            <!-- create listing button section -->
            <div class="createListingCardSec">
                <div class="row">
                    <!-- Amazon -->
                    <div class="btnCard m-3">
                        <div class="btnCardIcon">
                            <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                        </div>
                        <div class="btnCardLable">Amazon</div>
                    </div>
                    <!-- ////////////// -->
                    <!-- Noon -->
                    <a href="./e_com_create_listing_noon.php">
                        <div class="btnCard m-3">
                            <div class="btnCardIcon">
                                <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                            </div>
                            <div class="btnCardLable">Noon</div>
                        </div>
                    </a>
                    <!-- ////////////// -->
                    <!-- Cartlow -->
                    <div class="btnCard m-3">
                        <div class="btnCardIcon">
                            <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                        </div>
                        <div class="btnCardLable">Cartlow</div>
                    </div>
                    <!-- ////////////// -->
                    <!-- Shopee -->
                    <div class="btnCard m-3">
                        <div class="btnCardIcon">
                            <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                        </div>
                        <div class="btnCardLable">Shopee</div>
                    </div>
                    <!-- ////////////// -->
                    <!-- Lazada -->
                    <div class="btnCard m-3">
                        <div class="btnCardIcon">
                            <i class="fa-solid fa-plus" style="color: #168EB4;font-size: 20px;"></i>
                        </div>
                        <div class="btnCardLable">Lazada</div>
                    </div>
                    <!-- ////////////// -->
                </div>
            </div>
        </div>

        <!-- End Create Listing Sec -->

        <br><br>
        <!-- /////////////View Listing Section//////////////////// -->

        <div class="viewListingSec mb-3">
            <div class="">
                <div class="createListingHeading">
                    Listing Count
                </div>
            </div>
            <hr class="sectionUnderline">
            <!-- View listing section -->
            <div class="viewListingCardSec">
                <div class="row">
                    <!-- Listing Count Card -->

                    <!-- amazon USA -->
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
                    <!-- ///// -->

                    <!-- amazon USA -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Amazon</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">UK Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- amazon USA -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Amazon</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">UAE Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Noon  -->
                    <a href="./e_com_noon_listing_view.php">

                        <div class="listingCountCard m-3">
                            <div class="ListingCardLeft">
                                <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                            </div>
                            <div class="ListingCardRight">
                                <div class="platformnName">Noon</div>
                                <div class="listingCount">100</div>
                                <div class="listingDetails">UAE Listings</div>
                            </div>
                        </div>
                    </a>
                    <!-- ///// -->

                    <!-- Cartlow -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Cartlow</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">UAE Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Shopee -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Shopee</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">VN Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Shopee-->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Shopee</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">MY Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Shopee -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Shopee</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">IN Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Lazada -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Lazada</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">VN Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Lazada -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Lazada</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">MY Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- Lazada -->
                    <div class="listingCountCard m-3">
                        <div class="ListingCardLeft">
                            <i class="fa-brands fa-amazon" style="color: #168EB4;font-size: 50px;"></i>
                        </div>
                        <div class="ListingCardRight">
                            <div class="platformnName">Lazada</div>
                            <div class="listingCount">100</div>
                            <div class="listingDetails">IN Listings</div>
                        </div>

                    </div>
                    <!-- ///// -->

                    <!-- //////////// -->

                </div>
            </div>
        </div>

        <!-- End view Listing Sec -->

        <!-- /////////////Order Details Section//////////////////// -->

        <div class="orderDetailsSec">
            <div class="">
                <div class="createListingHeading">
                    Order Details
                </div>
            </div>
            <hr class="sectionUnderline">

            <div class="viewOrderDetailCardSec">
                <div class="row">
                    <!--Today Order Details Card -->
                    <a href="./e_com_view_today_orders.php">
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
                    </a>
                    <!-- //////////// -->
                    <!--All Order Details Card -->
                    <a href="./e_com_view_all_orders.php">
                        <div class="orderDetailsCard m-3">
                            <div class="orderDetailsHead">
                                <span style="color: #168EB4;">All</span> &nbsp;Orders
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
                    </a>
                    <!-- //////////// -->
                    <!--FBN Order Details Card -->
                    <a href="./e_com_view_fbn_orders.php">
                        <div class="orderDetailsCard m-3">
                            <div class="orderDetailsHead">
                                <span style="color: #168EB4;">FBN</span> &nbsp;Orders
                            </div>
                            <div class="orderDetailsCount">
                                50
                            </div>
                        </div>
                    </a>
                    <!-- //////////// -->
                    <!--FBA Order Details Card -->
                    <a href="./e_com_view_fba_orders.php">
                        <div class="orderDetailsCard m-3">
                            <div class="orderDetailsHead">
                                <span style="color: #168EB4;">FBA</span> &nbsp;Orders
                            </div>
                            <div class="orderDetailsCount">
                                50
                            </div>

                        </div>
                    </a>
                    <!-- //////////// -->
                    <!--FBC Order Details Card -->
                    <a href="./e_com_view_fbc_orders.php">
                        <div class="orderDetailsCard m-3">
                            <div class="orderDetailsHead">
                                <span style="color: #168EB4;">FBC</span> &nbsp;Orders
                            </div>
                            <div class="orderDetailsCount">
                                50
                            </div>

                        </div>
                    </a>
                    <!-- //////////// -->

                </div>
            </div>

        </div>

        <!-- End Order Details Sec -->

        <div class="salesPersonSec">
            <div class="">
                <div class="createListingHeading">
                    Sales Persons
                </div>
            </div>
            <hr class="sectionUnderline">
            <div class="viewSalesPersonCardSec">

                <!-- card 2 -sales Person -->
                <div class="salesPersonCard m-3">
                    <div class="salesCardTop">
                        <div class="salesCardTopLeft">
                            <i class="fa-solid fa-laptop-mobile" style="color: #168EB4;font-size: 75px;"></i>
                        </div>
                        <div class="salesCardTopRight">
                            <div class="SalesPersonName">Sales Person 1</div>
                            <div class="SalesPersonPlatform">Amazon</div>
                            <div class="SalesPersonStatus">Online</div>
                        </div>
                    </div>
                    <div class="salesCardBody">
                        <div class="salesCardValue">Today Listing Count &nbsp;<span
                                style="font-size: 23px; color: #168EB4;">
                                100</span> </div>
                    </div>

                </div>
                <!-- /////////////// -->

            </div>

        </div>

    </div>

</div>


<?php
require_once('../includes/footer.php')

?>