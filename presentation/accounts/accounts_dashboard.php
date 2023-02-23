<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-receipt m-2"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;">Orders</h6>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <h4>All Orders</h4>
                </h3>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill"
                            href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all"
                            aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-approve-tab" data-toggle="pill"
                            href="#custom-content-below-approve" role="tab" aria-controls="custom-content-below-approve"
                            aria-selected="false">Approved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-approve-tab" data-toggle="pill"
                            href="#custom-content-below-approve" role="tab" aria-controls="custom-content-below-approve"
                            aria-selected="false">Opened</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-packing-tab" data-toggle="pill"
                            href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing"
                            aria-selected="false">Packing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-invoiced-tab" data-toggle="pill"
                            href="#custom-content-below-invoiced" role="tab"
                            aria-controls="custom-content-below-invoiced" aria-selected="false">Invoiced</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-shipping-tab" data-toggle="pill"
                            href="#custom-content-below-shipping" role="tab"
                            aria-controls="custom-content-below-shipping" aria-selected="false">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-shipped-tab" data-toggle="pill"
                            href="#custom-content-below-shipped" role="tab" aria-controls="custom-content-below-shipped"
                            aria-selected="false">Shipped</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel"
                        aria-labelledby="custom-content-below-all-tab">
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
                                    <th scope="col">Start Production</th>
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
                    <div class="tab-pane fade show" id="custom-content-below-approve" role="tabpanel"
                        aria-labelledby="custom-content-below-approve-tab">
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
                    <div class="tab-pane fade" id="custom-content-below-packing" role="tabpanel"
                        aria-labelledby="custom-content-below-packing-tab">
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
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-invoiced" role="tabpanel"
                        aria-labelledby="custom-content-below-invoiced-tab">
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
                    <div class="tab-pane fade" id="custom-content-below-shipping" role="tabpanel"
                        aria-labelledby="custom-content-below-shipping-tab">
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
                    <div class="tab-pane fade" id="custom-content-below-shipped" role="tabpanel"
                        aria-labelledby="custom-content-below-shipped-tab">
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

<?php require_once('../includes/footer.php'); ?>