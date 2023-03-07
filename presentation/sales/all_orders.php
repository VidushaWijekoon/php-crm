<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");


// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$created_by = $_SESSION['user_id'];

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
        <div class="card card-primary card-outline mt-3">

            <!-- <div class="card-header">
                <div class="card-title">
                    <h4>All Orders</h4>
                </div>
            </div> -->
            <div class="row pl-4 pt-2">
                <div class="card-title d-flex w-100 justify-content-between">
                    <div class="d-inline">
                        <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
                        <span>Custom Content Below</span>
                    </div>
                    <a href="./create_order.php" class="btnT mx-4">Create New Order</a>
                </div>
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
                                <?php
                                $i = 0;
                                $query = "SELECT sales_customer_infomations.customer_id, 
                                                sales_order_items.customer_id, 
                                                customer_fname,
                                                customer_lname,
                                                sales_order_id, 
                                                shipping_date,
                                                order_created_by, 
                                                reference,
                                                order_shipping_method,
                                                order_created_time
                                        FROM sales_order_items
                                        INNER JOIN sales_customer_infomations ON sales_customer_infomations.customer_id = sales_order_items.customer_id
                                        WHERE order_created_by = '$created_by' GROUP BY sales_order_id";
                                $run = mysqli_query($connection, $query);
                                while ($x = mysqli_fetch_assoc($run)) {
                                    $i++;
                                    $order_shipping_method = $x['order_shipping_method'];

                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $x['order_created_time'] ?></td>
                                        <td>
                                            <a href="./order_view.php?order_id= <?php echo $x['sales_order_id'] ?>">SO-<?php echo $x['sales_order_id'] ?></a>
                                        </td>
                                        <td><?php echo $x['reference'] ?></td>
                                        <td><?php echo $x['customer_fname'] . " " . $x['customer_lname'] ?></td>
                                        <td>
                                            <a href="../so_road_map/sales_order_road_map">Processing</a>
                                        </td>
                                        <td><?php echo $x['shipping_date'] ?></td>
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
                                        <td>
                                            <?php
                                            if ($order_shipping_method == 1) {
                                                echo "Local Pickup";
                                            }
                                            if ($order_shipping_method == 2) {
                                                echo "DHL";
                                            }
                                            if ($order_shipping_method == 3) {
                                                echo "Fedex";
                                            }
                                            if ($order_shipping_method == 4) {
                                                echo "UPS";
                                            }
                                            if ($order_shipping_method == 5) {
                                                echo "UPS";
                                            }
                                            ?>
                                        </td>
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
                                <?php
                                $i = 0;
                                $query = "SELECT sales_customer_infomations.customer_id, 
                                                sales_order_items.customer_id, 
                                                customer_fname,
                                                customer_lname,
                                                sales_order_id, 
                                                shipping_date,
                                                order_created_by, 
                                                reference,
                                                order_shipping_method,
                                                order_created_time
                                        FROM sales_order_items
                                        INNER JOIN sales_customer_infomations ON sales_customer_infomations.customer_id = sales_order_items.customer_id
                                        WHERE order_created_by = '$created_by' GROUP BY sales_order_id";
                                $run = mysqli_query($connection, $query);
                                while ($x = mysqli_fetch_assoc($run)) {
                                    $i++;
                                    $order_shipping_method = $x['order_shipping_method'];

                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $x['order_created_time'] ?></td>
                                        <td>
                                            <a href="./order_view.php?order_id<?php echo $x['sales_order_id'] ?>">SO-<?php echo $x['sales_order_id'] ?></a>
                                        </td>
                                        <td><?php echo $x['reference'] ?></td>
                                        <td><?php echo $x['customer_fname'] . " " . $x['customer_lname'] ?></td>
                                        <td>
                                            <a href="./sales_order_map.php">Processing</a>
                                        </td>
                                        <td><?php echo $x['shipping_date'] ?></td>
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
                                        <td>
                                            <?php
                                            if ($order_shipping_method == 1) {
                                                echo "Local Pickup";
                                            }
                                            if ($order_shipping_method == 2) {
                                                echo "DHL";
                                            }
                                            if ($order_shipping_method == 3) {
                                                echo "Fedex";
                                            }
                                            if ($order_shipping_method == 4) {
                                                echo "UPS";
                                            }
                                            if ($order_shipping_method == 5) {
                                                echo "UPS";
                                            }
                                            ?>
                                        </td>
                                        <td>5 Days 25Minutes</td>
                                        <td>
                                            <a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a>
                                        </td>
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
                                <?php
                                $i = 0;
                                $query = "SELECT sales_customer_infomations.customer_id, 
                                                sales_order_items.customer_id, 
                                                customer_fname,
                                                customer_lname,
                                                sales_order_id, 
                                                shipping_date,
                                                order_created_by, 
                                                reference,
                                                order_shipping_method,
                                                order_created_time
                                        FROM sales_order_items
                                        INNER JOIN sales_customer_infomations ON sales_customer_infomations.customer_id = sales_order_items.customer_id
                                        WHERE order_created_by = '$created_by' GROUP BY sales_order_id";
                                $run = mysqli_query($connection, $query);
                                while ($x = mysqli_fetch_assoc($run)) {
                                    $i++;
                                    $order_shipping_method = $x['order_shipping_method'];

                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $x['order_created_time'] ?></td>
                                        <td><a href="./order_view.php">SO-<?php echo $x['sales_order_id'] ?></a></td>
                                        <td><?php echo $x['reference'] ?></td>
                                        <td><?php echo $x['customer_fname'] . " " . $x['customer_lname'] ?></td>
                                        <td><a href="./sales_order_map.php">Processing</a></td>
                                        <td><?php echo $x['shipping_date'] ?></td>
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
                                        <td>
                                            <?php
                                            if ($order_shipping_method == 1) {
                                                echo "Local Pickup";
                                            }
                                            if ($order_shipping_method == 2) {
                                                echo "DHL";
                                            }
                                            if ($order_shipping_method == 3) {
                                                echo "Fedex";
                                            }
                                            if ($order_shipping_method == 4) {
                                                echo "UPS";
                                            }
                                            if ($order_shipping_method == 5) {
                                                echo "UPS";
                                            }
                                            ?>
                                        </td>
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
                                <?php
                                $i = 0;
                                $query = "SELECT sales_customer_infomations.customer_id, 
                                                sales_order_items.customer_id, 
                                                customer_fname,
                                                customer_lname,
                                                sales_order_id, 
                                                shipping_date,
                                                order_created_by, 
                                                reference,
                                                order_shipping_method,
                                                order_created_time
                                        FROM sales_order_items
                                        INNER JOIN sales_customer_infomations ON sales_customer_infomations.customer_id = sales_order_items.customer_id
                                        WHERE order_created_by = '$created_by' GROUP BY sales_order_id";
                                $run = mysqli_query($connection, $query);
                                while ($x = mysqli_fetch_assoc($run)) {
                                    $i++;
                                    $order_shipping_method = $x['order_shipping_method'];

                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $x['order_created_time'] ?></td>
                                        <td><a href="./order_view.php">SO-<?php echo $x['sales_order_id'] ?></a></td>
                                        <td><?php echo $x['reference'] ?></td>
                                        <td><?php echo $x['customer_fname'] . " " . $x['customer_lname'] ?></td>
                                        <td><a href="./sales_order_map.php">Processing</a></td>
                                        <td><?php echo $x['shipping_date'] ?></td>
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
                                        <td>
                                            <?php
                                            if ($order_shipping_method == 1) {
                                                echo "Local Pickup";
                                            }
                                            if ($order_shipping_method == 2) {
                                                echo "DHL";
                                            }
                                            if ($order_shipping_method == 3) {
                                                echo "Fedex";
                                            }
                                            if ($order_shipping_method == 4) {
                                                echo "UPS";
                                            }
                                            if ($order_shipping_method == 5) {
                                                echo "UPS";
                                            }
                                            ?>
                                        </td>
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
                                <?php
                                $i = 0;
                                $query = "SELECT sales_customer_infomations.customer_id, 
                                                sales_order_items.customer_id, 
                                                customer_fname,
                                                customer_lname,
                                                sales_order_id, 
                                                shipping_date,
                                                order_created_by, 
                                                reference,
                                                order_shipping_method,
                                                order_created_time
                                        FROM sales_order_items
                                        INNER JOIN sales_customer_infomations ON sales_customer_infomations.customer_id = sales_order_items.customer_id
                                        WHERE order_created_by = '$created_by' GROUP BY sales_order_id";
                                $run = mysqli_query($connection, $query);
                                while ($x = mysqli_fetch_assoc($run)) {
                                    $i++;
                                    $order_shipping_method = $x['order_shipping_method'];

                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $x['order_created_time'] ?></td>
                                        <td><a href="../order_view">SO-<?php echo $x['sales_order_id'] ?></a></td>
                                        <td><?php echo $x['reference'] ?></td>
                                        <td><?php echo $x['customer_fname'] . " " . $x['customer_lname'] ?></td>
                                        <td><a href="./sales_order_map.php">Processing</a></td>
                                        <td><?php echo $x['shipping_date'] ?></td>
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
                                        <td>
                                            <?php
                                            if ($order_shipping_method == 1) {
                                                echo "Local Pickup";
                                            }
                                            if ($order_shipping_method == 2) {
                                                echo "DHL";
                                            }
                                            if ($order_shipping_method == 3) {
                                                echo "Fedex";
                                            }
                                            if ($order_shipping_method == 4) {
                                                echo "UPS";
                                            }
                                            if ($order_shipping_method == 5) {
                                                echo "UPS";
                                            }
                                            ?>
                                        </td>
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