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
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
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

.ecomPackingStartBodySec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;

}

.scanPackingSec {

    /* align-items: center; */

}

.scanPackingSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
    width: 60%;
}

.orderviewTableSec {
    display: flex;
    /* justify-content: center; */
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 30px;
}

.scanDetails {
    width: 80%;
}

.createListingHeading {
    font-weight: 600;
    font-size: 20px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.chargingContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingStartContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingHeader {
    font-weight: 700;
    font-size: 20px;
    color: #A1A3A8;
}

.btnNextSec {
    margin-left: 10%;
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
}

.packedQty {
    background-color: #168eb4;
    padding: 3px 10px;
    border-radius: 50%;
    color: #fff;
}
</style>

<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;E-commerce packing</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">E-Commerce Order Packing</h6>
</div>

<div class="row ecomPackingStartBodySec">
    <div class="cardContainer">
        <div class="">
            <div class="createListingHeading">
                Scan Laptop
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="scanPackingSec">
            <div class="row">
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2"> Scan Alsakb Number</label>
                        <input class="col-7" type="text">

                    </div>
                </div>

                <div class="col-lg-2 col-sm-12 text-center">
                    <label class="pt-2">
                        <span style="font-size: larger;">
                            OR
                        </span>
                    </label>
                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2"> Scan MFG Number</label>
                        <input class="col-7" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2">Sales Order Number</label>
                        <input class="col-7" type="text">

                    </div>
                </div>

                <div class="col-lg-2 col-sm-12 text-center">

                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">

                </div>
            </div>

        </div>

        <br>
        <br>

        <div class="orderviewTableSec table-responsive">
            <table class=" table table-hover text-center" style="width: 80%;">
                <thead style="background-color: #fff;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">S/O NO. </th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Order Type</th>
                        <th scope="col">Order Details</th>
                        <!-- <th scope="col">Inventory Type</th>                        -->
                        <th scope="col">Qty</th>
                        <th scope="col">Packed Qty</th>
                        <th scope="col">Created By</th>

                        <!-- <th scope="col">Price</th> -->
                        <!-- <th scope="col">Status</th> -->
                        <th scope="col">Created Date</th>
                        <th scope="col">DeadLine Date</th>
                        <th scope="col">Remaining Time</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="color:black">1</th>
                        <td><a href="./ecom_packing_orderdetail_list.php" style="color:black;">ALSk1234</a></td>
                        <td>S51231sD</td>
                        <td>Noon</td>
                        <td>FBN</td>
                        <td>Thinkpad T460 </td>
                        <!-- <td>E-Commerce</td>                            -->
                        <td>10</td>
                        <td>
                            <span class="packedQty"> 5</span>
                        </td>
                        <td>Sales Person 1</td>
                        <td>2022-10-02</td>
                        <td>2022-10-31</td>
                        <td>10 : 31 : 25</td>
                    </tr>



                </tbody>
            </table>

        </div>

        <div class="scanDetailsSec">
            <div class="scanDetails">

                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Brand</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Model</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Processor</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Core</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Generation</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Speed</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Touch</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Screen Size</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Resolution</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">RAM</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">HDD Type</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">HDD Capacity</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">OS</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Inventory Location</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Graphic Brand</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Graphic Capacity</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Condition</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Charger Watt</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Charger Pin Colour</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Charger type</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">Packing Type</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5 pt-2">Shipping Method</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row">
                            <label class="col-5 pt-2">QTY</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <!-- <div class="row">
                        
                        <label class="col-5 pt-2">Shipping Method</label>
                        <input class="col-7" type="text">
                    </div> -->
                    </div>
                </div>

                <br>



                <br>





            </div>
        </div>
        <!-- Charger -->

        <div class="chargingContentSec mt-3">
            <div class="" style="width: 80%;">
                <div class="">
                    <div class="createListingHeading">
                        Packing Charger
                    </div>
                </div>
                <hr class="sectionUnderline">

                <div class="row">
                    <div class="packingHeader col-12 text-center">
                        <p>65w Blue Pin Dell US Charger</p>

                    </div>

                </div>

                <div class="row mb-4">
                    <div class="col-3">
                        <ul class="nav nav-tabs d-flex flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <div class="nav-link active text-danger" id="home-tab" data-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">
                                    <span style="color: #AFAFAF; font-weight: 700;">Charger Type</span>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <div class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <span style="color: #AFAFAF; font-weight: 700">Bulk Box</span>
                                </div>
                            </li>                        -->
                        </ul>
                    </div>

                    <div class="tab-content tableSec1 col-9" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- single box -->
                            <div class="row text-center">
                                <div class="col-4 border">
                                    <!-- <div class="row"> -->
                                    <h5>Charger UK</h5>
                                    <!-- </div> -->
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/ukcharger.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>

                                </div>
                                <div class="col-4 border">
                                    <h5>Charger US</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/US charger2.jpeg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-4 border">
                                    <h5>Charger EU</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/EU charger2.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>
        <!-- Box -->

        <div class="packingStartContentSec mt-3">
            <div class="PackingSec" style="width: 80%;">
                <div class="">
                    <div class="createListingHeading">
                        Packing Laptop
                    </div>
                </div>
                <hr class="sectionUnderline">

                <div class="row">
                    <div class="packingHeader col-12 text-center">
                        <p>Bulk Box Packing</p>

                    </div>

                </div>


                <div class="row">
                    <div class="col-3">
                        <ul class="nav nav-tabs d-flex flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <div class="nav-link active" id="amazon-tab" data-toggle="tab" href="#amazon" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    <span style="color: #AFAFAF; font-weight: 700;">Single Box-Amazon</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link" id="cartlow-tab" data-toggle="tab" href="#cartlow" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    <span style="color: #AFAFAF; font-weight: 700;">Single Box-Cartlow</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link" id="noon-tab" data-toggle="tab" href="#noon" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    <span style="color: #AFAFAF; font-weight: 700;">Single Box-Noon</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link" id="bulk-tab" data-toggle="tab" href="#bulk" role="tab"
                                    aria-controls="profile" aria-selected="false">
                                    <span style="color: #AFAFAF; font-weight: 700">Bulk Box</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content tableSec1 col-9" id="myTabContent">
                        <!-- Amazon -->
                        <div class="tab-pane fade show active" id="amazon" role="tabpanel" aria-labelledby="amazon-tab">
                            <!-- single box -->
                            <div class="row d-flex flex-wrap text-center">
                                <div class="col-3 border p-2">
                                    <h5>Cloth</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/clothkeybord.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>

                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bag</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/bag.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bubble</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/buble.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Mouse Pad with Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/mousepad.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Bubble Wrap with Charger and Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/charger.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cartlow -->
                        <div class="tab-pane fade show" id="cartlow" role="tabpanel" aria-labelledby="cartlow-tab">
                            <!-- single box -->
                            <div class="row d-flex flex-wrap text-center">
                                <div class="col-3 border p-2">
                                    <h5>Cloth</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/clothkeybord.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>

                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bag</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/bag.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bubble</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/buble.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Mouse Pad with Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/mousepad.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Bubble Wrap with Charger and Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/charger.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Noon -->
                        <div class="tab-pane fade show" id="noon" role="tabpanel" aria-labelledby="noon-tab">
                            <!-- single box -->
                            <div class="row d-flex flex-wrap text-center">
                                <div class="col-3 border p-2">
                                    <h5>Cloth</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/clothkeybord.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>

                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bag</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/bag.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bubble</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/buble.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Mouse Pad with Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/mousepad.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Bubble Wrap with Charger and Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/charger.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bulk Box -->
                        <div class="tab-pane fade show" id="bulk" role="tabpanel" aria-labelledby="bulk-tab">
                            <!-- single box -->
                            <div class="row d-flex flex-wrap text-center">
                                <div class="col-3 border p-2">
                                    <h5>Cloth</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/clothkeybord.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>

                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bag</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/bag.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2">
                                    <h5>Bubble</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/buble.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Mouse Pad with Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/mousepad.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                                <div class="col-1 m-3 d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right" style="font-size:50px;"></i>
                                </div>
                                <div class="col-3 border p-2 mt-2">
                                    <h5>Bubble Wrap with Charger and Box</h5>
                                    <div class="row d-flex justify-content-center">
                                        <img class="img-fluid" src="./images/charger.jpg" alt="" srcset=""
                                            style="height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- /// -->
                    </div>
                </div>


            </div>
        </div>


        <br>
        <br>
        <!-- Next Btn Sectiom -->



        <div class="row btnNextSec">
            <a href="./e_com_packing_next.php">
                <div class="btn btn-success" style="width: 200px;">
                    Next
                </div>
            </a>
        </div>




    </div>
</div>




<?php
require_once('../includes/footer.php')
?>