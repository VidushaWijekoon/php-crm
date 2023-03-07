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
                            <button class="btnT"><i class="fa-solid fa-file-pdf"></i></button>
                            <button class="btnT"><i class="fa-sharp fa-solid fa-print"></i></button>
                        </div>
                    </div>
                    <div class=" tab-pane fade show" id="custom-content-below-approve" role="tabpanel"
                        aria-labelledby="custom-content-below-approve-tab">

                        <!-- PAcking Sec eka -->
                        <div class="soBodySec px-2 py-3 mb-4">
                            <div class="headingSec">
                                <div class="lSide">
                                    <h6>Packing List</h6>
                                    <p class="lable">Sales Order</p>
                                    <p class="lable">Order Date</p>
                                    <p class="lable">Expected Shipment Date</p>
                                    <p class="lable">Reference</p>
                                </div>
                                <div class="rSide">

                                </div>
                            </div>
                        </div>



                        <div class="tblSec">
                            <div class="tableSec d-flex justify-content-center">
                                <table class="table w-75 px-3 table-hover border text-center">
                                    <thead>
                                        <tr>
                                            <th>Box Nu</th>
                                            <th>Item Description</th>
                                            <th>Ordered Qty</th>
                                            <th>Packed Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <p>Dell Latitude e2480 Intel i5-6300U 6th gen 2.50Ghz 14 inch FHD
                                                    Non touch 8GB RAM 512GB SSD NVidia 4GB Graphic
                                                    Laptop </p>
                                            </td>
                                            <td>334</td>
                                            <td>300</td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>

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