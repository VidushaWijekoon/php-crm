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
$role_id = $_SESSION['role_id'];
$department = $_SESSION['department_id'];
$search_value = 0;
if (isset($_POST['submit'])) {
    $search_value = $_POST['search_value'];
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

$total_pages_sql = "SELECT COUNT(id) as inventory FROM e_com_inventory  WHERE brand = '$brand' GROUP BY  model ORDER BY id DESC";
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows / $no_of_records_per_page);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="e_com_laptop_inventory.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <a href="stock_for_excel.php?brand=<?php echo $brand ?>" class="btn btn-xs btn-primary">Download Excel File</a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>Brand : <span><?php echo $brand ?></span>
                        <div class="mt-2">TOTAL NUMBER OF MODEL : <span><?php echo $total_rows ?></span></div>
                    </div>
                    <div class="">
                        <form method='POST'>
                            <input type="text" class="mx-2" name="search_value" placeholder="Search By Model">
                            <button type="submit" name="submit" id="submit" class="btn btn-default  mx-1 "
                                style="border-radius: 60%;">
                                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <!-- <th>Processing</th> -->
                                <th>Dispatch</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php
                            if ($search_value == 0) {
                                $query = "SELECT model,core,COUNT(id) as in_total FROM `e_com_inventory` WHERE brand = '$brand' GROUP BY  model ORDER BY in_total DESC LIMIT $offset, $no_of_records_per_page";
                                $result = mysqli_query($connection, $query);
                            } else {
                                $query = "SELECT model,core,COUNT(id) as in_total FROM `e_com_inventory` WHERE brand = '$brand' AND model like'%$search_value%' GROUP BY  model ORDER BY in_total DESC";
                                $result = mysqli_query($connection, $query);
                            }
                            foreach ($result as $data) {
                                $model = strToUpper($data['model']);
                                $core = $data['core'];
                                $in_total = $data['in_total'];
                                $i++;
                                $query = "SELECT COUNT(id)as in_stock FROM `e_com_inventory` WHERE brand = '$brand' AND model='$model'AND dispatch='0'";
                                $result = mysqli_query($connection, $query);
                                foreach ($result as $data) {
                                    $in_stock = $data['in_stock'];
                                }
                                $query = "SELECT COUNT(id)as dispatch FROM `e_com_inventory` WHERE brand = '$brand' AND model='$model'AND dispatch='1'";
                                $result = mysqli_query($connection, $query);
                                foreach ($result as $data) {
                                    $dispatch = $data['dispatch'];
                                }

                                // $query = "SELECT COUNT(inventory_id) as processing FROM `main_inventory_informations` WHERE brand = '$brand'AND model='$model' AND send_to_production = '1'";
                                // $result = mysqli_query($connection, $query);
                                // foreach ($result as $data) {
                                //     $processing = $data['processing'];
                                // }
                                // $processing = $processing - $dispatch;
                                echo "<tr class='cell-1' data-toggle='collapse'   >
                                     <td>$i</td>
                                    <td>$brand</td>
                                    <td> <a href='e_com_model_view.php?model=$model&brand=$brand'>
                                                $model</a></td>
                                    <td>$in_total</td>";
                                echo "<td>";
                                echo $in_stock;
                                echo "</td>
                                        <td>";
                                // echo $processing;
                                // echo "</td>
                                //                                         <td>";

                                echo $dispatch;
                                echo "
                                    </td>
                                        </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php if ($search_value == 0) { ?>
                    <ul class="pagination">
                        <li><a href="?brand=<?php echo $brand; ?>&pageno=1" class="btnTB mx-1">First</a></li>
                        <li class="<?php if ($pageno <= 1) {
                                            echo 'disabled';
                                        } ?>">
                            <a href="<?php if ($pageno <= 1) {
                                                echo '#';
                                            } else {
                                                echo "?brand=$brand&pageno=" . ($pageno - 1);
                                            } ?>" class="btnTB mx-1">Prev</a>
                        </li>
                        <li class="<?php if ($pageno >= $total_pages) {
                                            echo 'disabled';
                                        } ?>">
                            <a href="<?php if ($pageno >= $total_pages) {
                                                echo '#';
                                            } else {
                                                echo "?brand=$brand&pageno=" . ($pageno + 1);
                                            } ?>" class="btnTB mx-1">Next</a>
                        </li>
                        <li><a href="?brand=<?php echo $brand; ?>&pageno=<?php echo $total_pages; ?>"
                                class="btnTB mx-1">Last</a></li>
                    </ul>
                    <?php } else { ?>
                    <ul class="pagination">
                        <li><a href="?brand=<?php echo $brand; ?>&pageno=1" class="btnTB mx-1">Back</a></li>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>