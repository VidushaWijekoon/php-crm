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
.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}


.tblRes {
    overflow-x: auto;
}

.tblSec {
    overflow-x: auto;
}

table th {
    color: #168EB4;
}

.tblLable {
    font-weight: 700;
    /* color: #0c2e5b; */
}

.nav-tabs .nav-link.active {
    color: #919EAB !important;
}

#btnClose {
    display: none;
}

#btnOpen {
    display: block;
}
</style>


<!-- <div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-receipt m-2"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;">Orders</h6>
    </div>
</div> -->

<div class="row">
    <div class="col">
        <div class="card card-primary card-outline">
            <!-- <div class="card-header">
                <h3 class="card-title">
                    <h4>All Orders</h4>
                </h3>
            </div> -->

            <div class="row pl-4 pt-2">
                <!-- <i class="pageNameIcon fa-solid fa-store"></i> -->
                <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
                <h6 class="pageName">All Orders</h6>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <div class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill"
                            href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all"
                            aria-selected="true">
                            <span class="tblLable">
                                All
                            </span>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-approve-tab" data-toggle="pill"
                            href="#custom-content-below-approve" role="tab" aria-controls="custom-content-below-approve"
                            aria-selected="false">
                            <span class="tblLable">
                                Approved
                            </span>
                        </div>
                    </li> -->
                    <!-- <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-approve-tab" data-toggle="pill"
                            href="#custom-content-below-approve" role="tab" aria-controls="custom-content-below-approve"
                            aria-selected="false">
                            <span class="tblLable">
                                Opened
                            </span>

                        </div>
                    </li> -->
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-packing-tab" data-toggle="pill"
                            href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing"
                            aria-selected="false">
                            <span class="tblLable">
                                Packing
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-invoiced-tab" data-toggle="pill"
                            href="#custom-content-below-invoiced" role="tab"
                            aria-controls="custom-content-below-invoiced" aria-selected="false">
                            <span class="tblLable">
                                Invoiced
                            </span>

                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-shipping-tab" data-toggle="pill"
                            href="#custom-content-below-shipping" role="tab"
                            aria-controls="custom-content-below-shipping" aria-selected="false">
                            <span class="tblLable">
                                Shipping
                            </span>

                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-shipped-tab" data-toggle="pill"
                            href="#custom-content-below-shipped" role="tab" aria-controls="custom-content-below-shipped"
                            aria-selected="false">
                            <span class="tblLable">
                                Shipped
                            </span>
                        </div>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <!-- all -->
                    <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel"
                        aria-labelledby="custom-content-below-all-tab">
                        <div class="tblSec">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Sales Person</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Start Production</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="./accounts_sales_order_new.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>SalesPerson 1</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>
                                            <div id="btnOpen">
                                                <button class="btnTB" onclick="changeStatusOpen()">
                                                    Open
                                                </button>

                                            </div>
                                            <div id="btnClose">
                                                <button class="btnTC" onclick="changeStatusClose()">
                                                    Close
                                                </button>
                                            </div>
                                        </td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>SalesPerson 1</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>SalesPerson 1</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>SalesPerson 1</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>


                    </div>
                    <!-- approve -->
                    <div class="tab-pane fade show" id="custom-content-below-approve" role="tabpanel"
                        aria-labelledby="custom-content-below-approve-tab">
                        <div class="tblSec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- packing -->
                    <div class="tab-pane fade" id="custom-content-below-packing" role="tabpanel"
                        aria-labelledby="custom-content-below-packing-tab">
                        <div class="tblSec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Packed Qty</th>
                                        <th scope="col">Packed Date</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Sales Person</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Packing Status</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>12</td>
                                        <td>John Doe</td>
                                        <td>80</td>
                                        <td>02/25/2023</td>
                                        <td>02/25/2023</td>
                                        <td>Sal 123</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>Packed</td>
                                        <td>00:00:00</td>
                                    </tr>
                                    <!-- <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- invoiced -->
                    <div class="tab-pane fade" id="custom-content-below-invoiced" role="tabpanel"
                        aria-labelledby="custom-content-below-invoiced-tab">
                        <div class="tblSec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Invoice Number</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>inv1232</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- shipping -->
                    <div class="tab-pane fade" id="custom-content-below-shipping" role="tabpanel"
                        aria-labelledby="custom-content-below-shipping-tab">
                        <div class="tblSec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- shipped -->
                    <div class="tab-pane fade" id="custom-content-below-shipped" role="tabpanel"
                        aria-labelledby="custom-content-below-shipped-tab">
                        <div class="tblSec">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Sales Order</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Shipping Date</th>
                                        <th scope="col">Packed</th>
                                        <th scope="col">Invoiced</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Shipped</th>
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Remaining Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><a href="order_view.php">1</a></td>
                                        <td>02/18/2023</td>
                                        <td>OD-12345</td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td>Waiting for Approval</td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>

<script>
const changeStatusOpen = () => {
    var btnOpen = document.getElementById("btnOpen");
    var btnClose = document.getElementById("btnClose");
    var confirm1 = confirm('Are You Sure to Open this Sales Order to Process ?');
    if (confirm1 == true) {
        btnOpen.style.display = "none";
        btnClose.style.display = 'block';
    }


}
const changeStatusClose = () => {

    alert("You Can't Close Sales Order while it in Processing");
    // var btnOpen = document.getElementById("btnOpen");
    // var btnClose = document.getElementById("btnClose");
    // btnOpen.style.display = "block";
    // btnClose.style.display = 'none';

}
</script>