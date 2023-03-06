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
.cardContainer {
    /* width: 99%; */
    background-color: #ffffff;
    padding: 10px 5px;
}

.headingSec {
    display: flex;
    justify-content: space-between;
}

.tableSec table {
    width: 100%;
    font-size: 10px;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
    font-size: 10px;
}

.lable {
    font-size: 12px;
    font-weight: 500;
}

.navSec {
    display: flex;
    justify-content: space-between;
}
</style>

<div class="allSalesOrderBody">
    <div class="cardContainer">
        <div class="row pt-3">
            <div class="col-lg-3 border">a</div>
            <div class="col-lg-9 border">
                <div class="OrderDetails">

                    <div class="navSec">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./accounts_sales_order_new.php">Sales
                                    Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_packing.php">Packing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_invoice.php">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_shipping.php">Shipping</a>
                            </li>

                        </ul>

                        <div class="">
                            <a href="./accounts_create_invoice.php" class="btnT">Convert to Invoice</a>
                            <button class="btnT"><i class="fa-sharp fa-solid fa-print"></i></button>
                        </div>

                    </div>

                    <div>
                        <!-- Sales Order Sec eka -->
                        <div class="soBodySec px-2 py-3 mb-4">
                            <div class="headingSec">
                                <div class="lSide">
                                    <p class="lable">Order Date</p>
                                    <p class="lable">Expected Shipment Date</p>
                                    <p class="lable">Reference No</p>
                                </div>
                                <div class="rSide">
                                    <p class="lable">Billing Address</p>
                                    <p>no123,</p>
                                    <p>abc City,</p>
                                    <p>Uae</p>

                                </div>
                            </div>
                        </div>

                        <!-- Table Sec Eka -->

                        <div class="tableSec d-flex justify-content-center">
                            <table class="table w-75 px-3 table-hover border text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item Description</th>
                                        <th>Ordered Qty</th>
                                        <th>Status</th>
                                        <th>Rate</th>
                                        <th>Discount</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Laptop
                                        </td>
                                        <td>334</td>
                                        <td>
                                            <div class="status">
                                                <div>
                                                    Packed <span>334</span>
                                                </div>
                                                <div>
                                                    Invoiced <span>334</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1000 AED</td>
                                        <td>0 AED</td>
                                        <td>123456 AED</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="totSec row justify-content-center w-100 pb-4">
                            <div class="row w-75 justify-content-end">
                                <span style="font-weight: 600;">
                                    Sub Total : 123456
                                </span>
                            </div>

                        </div>
                        <!--  -->
                        <!-- Yata Sec eka -->
                        <div class="soBodySec p-2 mb-4">
                            <div class="headingSec">
                                <div class="lSide">
                                    <p class="lable">Condition : <span>Grade A Full Refurbished</span></p>
                                    <p class="lable">Packing : <span>Vietnam Boxes</span></p>
                                    <p class="lable">Shipment : <span>Local</span></p>
                                    <p class="lable">Delivery Date : <span>2023-01-23</span></p>
                                </div>
                                <div class="rSide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../includes/footer.php'); ?>