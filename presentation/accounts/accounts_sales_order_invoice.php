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
                            btn
                        </div>
                    </div>
                    <div>
                        <!-- invoice Sec eka -->
                        invoice
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../includes/footer.php'); ?>