<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");


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
</style>


<div class="row">
    <div class="col">
        <div class="card card-primary card-outline">

            <!-- <div class="card-header">
                <div class="card-title">
                    <h4>All Orders</h4>
                </div>
            </div> -->
            <div class="row pl-4 pt-2">
                <!-- <i class="pageNameIcon fa-solid fa-store"></i> -->
                <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
                <h6 class="pageName">All Orders</h6>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <div class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill" href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all" aria-selected="true">
                            <span class="tblLable">
                                All
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-packing-tab" data-toggle="pill" href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing" aria-selected="false"><span class="tblLable">
                                Packing
                            </span></div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-invoiced-tab" data-toggle="pill" href="#custom-content-below-invoiced" role="tab" aria-controls="custom-content-below-invoiced" aria-selected="false"><span class="tblLable">
                                Invoiced
                            </span></div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-shipping-tab" data-toggle="pill" href="#custom-content-below-shipping" role="tab" aria-controls="custom-content-below-shipping" aria-selected="false"><span class="tblLable">
                                Shipping
                            </span></div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="custom-content-below-shipped-tab" data-toggle="pill" href="#custom-content-below-shipped" role="tab" aria-controls="custom-content-below-shipped" aria-selected="false"><span class="tblLable">
                                Shipped
                            </span></div>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active tblRes" id="custom-content-below-all" role="tabpanel" aria-labelledby="custom-content-below-all-tab">
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
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>02/18/2023</td>
                                        <td><a href="./order_view.php">SO-12345</a></td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td><a href="./sales_order_map.php">Processing</a></td>
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
                                        <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade tblRes" id="custom-content-below-packing" role="tabpanel" aria-labelledby="custom-content-below-packing-tab">
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
                                <?php for ($j = 1; $j <= 5; $j++) { ?>
                                    <tr>
                                        <td><?php echo $j ?></td>
                                        <td>02/18/2023</td>
                                        <td><a href="./order_view.php">SO-12345</a></td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td><a href="./sales_order_map.php">Processing</a></td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                        <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade tblRes" id="custom-content-below-invoiced" role="tabpanel" aria-labelledby="custom-content-below-invoiced-tab">
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
                                <?php for ($k = 1; $k <= 5; $k++) { ?>
                                    <tr>
                                        <td><?php echo $k ?></td>
                                        <td>02/18/2023</td>
                                        <td><a href="./order_view.php">SO-12345</a></td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td><a href="./sales_order_map.php">Shipped</a></td>
                                        <td>02/25/2023</td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                        <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade tblRes" id="custom-content-below-shipping" role="tabpanel" aria-labelledby="custom-content-below-shipping-tab">
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
                                <?php for ($l = 1; $l <= 5; $l++) { ?>
                                    <tr>
                                        <td><?php echo $l ?></td>
                                        <td>02/18/2023</td>
                                        <td><a href="./order_view.php">SO-12345</a></td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td><a href="./sales_order_map.php">Shipped</a></td>
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
                                            <i class="fa-solid fa-circle" style="color: #a1a3a8;"></i>
                                        </td>
                                        <td>Local Pickup</td>
                                        <td>5 Days 25Minutes</td>
                                        <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade tblRes" id="custom-content-below-shipped" role="tabpanel" aria-labelledby="custom-content-below-shipped-tab">
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
                                <?php for ($m = 1; $m <= 5; $m++) { ?>
                                    <tr>
                                        <td><?php echo $l ?></td>
                                        <td>02/18/2023</td>
                                        <td><a href="./order_view.php">SO-12345</a></td>
                                        <td>WH1-12334</td>
                                        <td>John Doe</td>
                                        <td><a href="./sales_order_map.php">Shipped</a></td>
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
                                        <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    td {
        font-size: 10px;
    }
</style>

<?php require_once('../includes/footer.php'); ?>