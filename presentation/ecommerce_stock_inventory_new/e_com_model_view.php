<?php

ob_start();
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$brand = $_GET['brand'];
$model = $_GET['model'];
$search_value = 'pakaya';
if (!empty($_GET['search_value'])) {
    $search_value = $_GET['search_value'];
}
if ($search_value == 'pakaya') {
?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="e_com_model_summery.php?brand=<?php echo $brand ?>">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<?php } ?>
<div class="row">
    <div class="col col-sm-11 col-lg-11 justify-content-center mx-auto mt-1">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2"><?php echo $brand . "  " . $model ?></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>ASIN</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Generation</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <!-- <th>Processing</th> -->
                                <th>Dispatch</th>
                                <!-- <th>Touch Screen Count</th>
                                <th>Non Touch Count</th> -->
                                <!-- <th>Touch Wholesale Price</th> -->
                                <!-- <th>Non Touch Wholesale Price</th> -->
                                <!-- <th>No Battery Count</th> -->
                                <!-- <th>&nbsp;</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                                $i = 50 * ($pageno - 1);
                            } else {
                                $pageno = 1;
                                $i = 0;
                            }
                            $no_of_records_per_page = 20;
                            $offset = ($pageno - 1) * $no_of_records_per_page;
                            $conn = $connection;
                            // Check connection
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                die();
                            }

                            $total_pages_sql = "SELECT COUNT(inventory_id) as inventory FROM main_inventory_informations  WHERE ecom='1' AND brand='$brand' AND model='$model' GROUP BY asin_sku";
                            $result = mysqli_query($conn, $total_pages_sql);
                            $total_rows = mysqli_num_rows($result);
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                            // $sql = "SELECT generation,core, COUNT(id) as in_total FROM e_com_inventory WHERE brand='$brand' AND model='$model' GROUP BY core LIMIT $offset, $no_of_records_per_page";
                            $sql = "SELECT asin_sku,generation,core, COUNT(inventory_id) as in_total FROM main_inventory_informations WHERE ecom=1 AND brand='$brand' AND model='$model' GROUP BY asin_sku LIMIT $offset, $no_of_records_per_page";
                            $result = mysqli_query($connection, $sql);
                            // echo $sql;
                            $i = 0;
                            foreach ($result as $data) {

                                $asin = $data['asin_sku'];
                                $in_total = $data['in_total'];
                                $core = $data['core'];
                                $generation = $data['generation'];
                                $i++;
                                $stock = 0;
                                $processing = 0;
                                $dispatch = 0;
                                $non_touch_wholesale_price = 0;
                                $none_touch_count = 0;
                                $battery = 0;
                                $touch_wholesale_price = 0;
                                $sql_1 = "SELECT COUNT(inventory_id) as in_stock FROM main_inventory_informations WHERE ecom=1 AND asin_sku='$asin' AND model='$model' AND dispatch='1'";
                                $result_1 = mysqli_query($connection, $sql_1);
                                foreach ($result_1 as $a) {
                                    $stock = $a['in_stock'];
                                }
                                // $sql_1="SELECT COUNT(inventory_id) as processing FROM main_inventory_informations WHERE brand='$brand' AND model='$model' AND core='$core' AND send_to_production='1' AND dispatch='0'";
                                // $result_1 = mysqli_query($connection, $sql_1);
                                // foreach($result_1 as $b){
                                //     $processing=$b['processing'];
                                // }
                                $sql_1 = "SELECT COUNT(inventory_id) as dispatch FROM main_inventory_informations WHERE ecom=2 AND brand='$brand' AND model='$model' AND core='$core' AND dispatch='1'";
                                $result_1 = mysqli_query($connection, $sql_1);
                                foreach ($result_1 as $c) {
                                    $dispatch = $c['dispatch'];
                                }
                                // $sql_2 = "SELECT COUNT(touch_or_none_touch)as touch_or_none_touch FROM e_com_inventory WHERE brand='$brand' AND model='$model' AND core='$core' AND dispatch='0' AND touch_or_none_touch='no'";
                                // $result_1 = mysqli_query($connection, $sql_2);
                                // foreach ($result_1 as $d) {
                                //     $none_touch_count = $d['touch_or_none_touch'];
                                // }
                                // $sql_2 = "SELECT  COUNT(battery)as battery FROM e_com_inventory WHERE brand='$brand' AND model='$model' AND core='$core' AND dispatch='0' AND battery='no'";
                                // $result_1 = mysqli_query($connection, $sql_2);
                                // foreach ($result_1 as $d) {
                                //     $battery = $d['battery'];
                                // }
                                // $sql_2 = "SELECT touch_wholesale_price,non_touch_wholesale_price  FROM e_com_inventory WHERE brand='$brand' AND model='$model' AND core='$core' AND dispatch='0'";
                                // $result_1 = mysqli_query($connection, $sql_2);
                                // foreach ($result_1 as $d) {
                                //     $non_touch_wholesale_price = $d['non_touch_wholesale_price'];
                                //     $touch_wholesale_price = $d['touch_wholesale_price'];
                                // }
                                $touch_count = $stock - $none_touch_count;
                                echo "
                                    <tr class='cell-1' data-toggle='collapse'>
                                    <td>$i</td>
                                    <td>$asin</td>
                                    <td>$brand</td>
                                    <td><a href='./e_com_model_spec_view.php?brand=$brand&model=$model&asin=$asin&search_value=$search_value'>$model</a></td>
                                    <td>$generation</td>
                                    <td>$in_total</td>
                                    <td>$stock</td>
                                    <td>$dispatch</td>
                                    ";
                                echo "
                                </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                    <?php if ($search_value == 'pakaya') { ?>
                    <ul class="pagination">
                        <li><a href="?brand=<?php echo $brand; ?>&model=<?php echo $model ?>&pageno=1"
                                class="btnTB mx-1">First</a></li>
                        <li class="<?php if ($pageno <= 1) {
                                            echo 'disabled';
                                        } ?>">
                            <a href="<?php if ($pageno <= 1) {
                                                echo '#';
                                            } else {
                                                echo "?brand=$brand&model=<?php echo $model ?>&pageno=" . ($pageno -
                                1); } ?>" class="btnTB mx-1">Prev</a>
                        </li>
                        <li class="<?php if ($pageno >= $total_pages) {
                                            echo 'disabled';
                                        } ?>">
                            <a href="<?php if ($pageno >= $total_pages) {
                                                echo '#';
                                            } else {
                                                echo "?brand=$brand&model=<?php echo $model ?>&pageno=" . ($pageno +
                                1); } ?>" class="btnTB mx-1">Next</a>
                        </li>
                        <li><a href="?brand=<?php echo $brand; ?>&model=<?php echo $model ?>&pageno=<?php echo $total_pages; ?>"
                                class="btnTB mx-1">Last</a></li>
                    </ul>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>