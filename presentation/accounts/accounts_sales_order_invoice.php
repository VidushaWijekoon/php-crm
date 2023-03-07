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

.salesOrders,
.OrderDetails {
    height: 80vh;
    overflow-y: auto;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>

<div class="allSalesOrderBody">
    <div class="cardContainer">
        <div class="row pageNavigation pt-1 pl-2">
            <a href="./accounts_dashboard"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
                Dashboard</a>
        </div>
        <div class="row pl-2 pt-2">
            <i class="pageNameIcon fa-solid fa-square-dollar"></i>
            <h6 class="pageName">Sales Order : 12345</h6>
        </div>
        <div class="row pt-3">
            <div class="col-lg-3 border">
                <div class="salesOrders">
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 border">
                <div class="OrderDetails">

                    <div class="navSec mt-1">
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
                            <div class="">

                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- invoice Sec eka -->
                        <div class="createdInvices border p-2">
                            <p style="font-weight: 700;">Created Invoices</p>
                            <br>
                            <p>Invoice 1 <span>&nbsp;&nbsp;&nbsp;2023-12-01</span> </p>
                            <p>Invoice 2 <span>&nbsp;&nbsp;&nbsp;2023-12-01</span> </p>

                        </div>

                        <div class="invSec border mt-3 p-3">
                            <div class="row justify-content-between">
                                <h6 style="font-weight: 700;">Invoice(1) </h6>
                                <div><button class="btnT"><i class="fa-sharp fa-solid fa-print"></i></button></div>
                            </div>

                            <!-- <div class="row"> -->
                            <div>
                                <!-- Sales Order Sec eka -->
                                <div class="soBodySec px-2 py-3 mb-4">
                                    <div class="headingSec">
                                        <div class="lSide">
                                            <p class="lable">Bill To</p>
                                            <p class="">jgdfsfjgsjdfg,bfshbdjff
                                                <br>xghcgxjh
                                            </p>
                                            <br>
                                            <p class="lable">Ship To</p>
                                            <p class="">jgdfsfjgsjdfg,bfshbdjff
                                                <br>xghcgxjh
                                        </div>
                                        <div class="rSide">
                                            <p class="lable">Invoice No :<span>16382673</span></p>
                                            <p class="lable">Invoice Date : <span>2023-02-12</span></p>
                                            <p class="lable">S/O : <span>12323</span></p>
                                            <p class="lable">Sales Person : <span>sales person 1</span></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Table Sec Eka -->

                                <div class="tableSec d-flex justify-content-center">
                                    <table class="table w-75 px-3 table-hover border text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item</th>
                                                <th>Item Description</th>
                                                <th>Qty</th>
                                                <th>Rate</th>
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

                                                <td>1000 AED</td>
                                                <td>0 AED</td>
                                                <td>123456 AED</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="totSec row justify-content-center w-100 pb-4">
                                    <div class="row w-75 justify-content-between">

                                        <span style="font-weight: 600;">
                                            Total Items : 1
                                        </span>
                                        <span style="font-weight: 600;">
                                            Sub Total : 123456
                                        </span>
                                    </div>

                                </div>
                                <!--  -->
                                <!-- Yata Sec eka -->

                            </div>

                            <!-- </div> -->


                        </div>
                        <div class="invSec border mt-3 p-3">
                            <div class="row justify-content-between">
                                <h6 style="font-weight: 700;">Invoice(2) </h6>
                                <div><button class="btnT"><i class="fa-sharp fa-solid fa-print"></i></button></div>
                            </div>

                            <!-- <div class="row"> -->
                            <div>
                                <!-- Sales Order Sec eka -->
                                <div class="soBodySec px-2 py-3 mb-4">
                                    <div class="headingSec">
                                        <div class="lSide">
                                            <p class="lable">Bill To</p>
                                            <p class="">jgdfsfjgsjdfg,bfshbdjff
                                                <br>xghcgxjh
                                            </p>
                                            <br>
                                            <p class="lable">Ship To</p>
                                            <p class="">jgdfsfjgsjdfg,bfshbdjff
                                                <br>xghcgxjh
                                        </div>
                                        <div class="rSide">
                                            <p class="lable">Invoice No :<span>16382673</span></p>
                                            <p class="lable">Invoice Date : <span>2023-02-12</span></p>
                                            <p class="lable">S/O : <span>12323</span></p>
                                            <p class="lable">Sales Person : <span>sales person 1</span></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Table Sec Eka -->

                                <div class="tableSec d-flex justify-content-center">
                                    <table class="table w-75 px-3 table-hover border text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item</th>
                                                <th>Item Description</th>
                                                <th>Qty</th>
                                                <th>Rate</th>
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

                                                <td>1000 AED</td>
                                                <td>0 AED</td>
                                                <td>123456 AED</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="totSec row justify-content-center w-100 pb-4">
                                    <div class="row w-75 justify-content-between">

                                        <span style="font-weight: 600;">
                                            Total Items : 1
                                        </span>
                                        <span style="font-weight: 600;">
                                            Sub Total : 123456
                                        </span>
                                    </div>

                                </div>
                                <!--  -->
                                <!-- Yata Sec eka -->

                            </div>

                            <!-- </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../includes/footer.php'); ?>