<?php

ob_start();
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
// $brand = $_GET['brand'];
// $model = $_GET['model'];
$search_value = 'pakaya';
if (!empty($_GET['search_value'])) {
    $search_value = $_GET['search_value'];
}
if ($search_value == 'pakaya') {
?>
<div class="row page-titles justify-content-between">
    <div class="">
        <div class="mt-2 ml-2">
            <a href="./e_com_laptop_inventory.php">
                <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
            </a>
        </div>
    </div>
    <div class="">
        <div class="mt-2 mr-2">
            <a href="../ecommerce_inventory/virtual_inv_ecommerce.php">
                <button class="btnTB">Virtual Inventory</button>
            </a>
        </div>
    </div>
</div>
<?php } ?>
<div class="row mt-5">
    <div class="col col-sm-11 col-lg-11 justify-content-center mx-auto mt-1">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <!-- <div class="mt-2">ALL ASIN Details</div> -->
                    <a href="./e_com_laptop_inventory.php">
                        <div class="py-1 px-3 border">Stock Report-Model</div>
                    </a>
                    <div class="py-1 px-3 border">Stock Report-ASIN</div>

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
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Dispatch</th>

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

                            $total_pages_sql = "SELECT asin_sku FROM e_com_inventory GROUP BY asin_sku";
                            $result = mysqli_query($conn, $total_pages_sql);
                            $total_rows = mysqli_num_rows($result);
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                            // $sql = "SELECT generation,core, COUNT(id) as in_total FROM e_com_inventory WHERE brand='$brand' AND model='$model' GROUP BY core LIMIT $offset, $no_of_records_per_page";
                            $sql = "SELECT
                                        e_com_inventory.asin_sku,
                                        COUNT(e_com_inventory.id) AS in_total,
                                        main_inventory_informations.brand,
                                        main_inventory_informations.model,
                                        main_inventory_informations.core
                                    FROM
                                        e_com_inventory
                                    LEFT JOIN main_inventory_informations ON e_com_inventory.mfg = main_inventory_informations.mfg
                                    GROUP BY asin_sku ORDER BY in_total DESC
                                    LIMIT $offset, $no_of_records_per_page";
                            $result = mysqli_query($connection, $sql);
                            // echo $sql;
                            $i = 0;
                            $from = "asinPage";
                            foreach ($result as $data) {
                                $asin = $data['asin_sku'];
                                $in_total = $data['in_total'];
                                $brand = $data['brand'];
                                $core = $data['core'];
                                $model = $data['model'];
                                $i++;
                                $stock = 0;
                                $dispatch = 0;
                                $sql_1 = "SELECT COUNT(id) as in_stock FROM e_com_inventory WHERE asin_sku='$asin' AND dispatch='0'";
                                $result_1 = mysqli_query($connection, $sql_1);
                                foreach ($result_1 as $a) {
                                    $stock = $a['in_stock'];
                                }
                                $sql_1 = "SELECT COUNT(id) as dispatch FROM e_com_inventory WHERE asin_sku='$asin' AND dispatch='1'";
                                $result_1 = mysqli_query($connection, $sql_1);
                                foreach ($result_1 as $c) {
                                    $dispatch = $c['dispatch'];
                                }


                                echo "
                                    <tr class='cell-1' data-toggle='collapse'>
                                    <td>$i</td>
                                    <td><a href='./e_com_model_spec_view.php?asin=$asin&model=$model&from=$from&brand=$brand&search_value=$search_value'>$asin</a></td>
                                    <td>$brand</td>
                                    <td>$model</td>
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
                    <ul class="pagination">
                        <li><a href="?pageno=1" class="btnTB mx-1">First</a></li>
                        <li class="<?php if ($pageno <= 1) {
                                        echo 'disabled';
                                    } ?>">
                            <a href="<?php if ($pageno <= 1) {
                                            echo '#';
                                        } else {
                                            echo "?pageno=" . ($pageno - 1);
                                        } ?>" class="btnTB mx-1">Prev</a>
                        </li>
                        <li class="<?php if ($pageno >= $total_pages) {
                                        echo 'disabled';
                                    } ?>">
                            <a href="<?php if ($pageno >= $total_pages) {
                                            echo '#';
                                        } else {
                                            echo "?pageno=" . ($pageno + 1);
                                        } ?>" class="btnTB mx-1">Next</a>
                        </li>
                        <li><a href="?pageno=<?php echo $total_pages; ?>" class="btnTB mx-1">Last</a></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>