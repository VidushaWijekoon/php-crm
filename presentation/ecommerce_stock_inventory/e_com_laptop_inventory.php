<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$connection = mysqli_connect("localhost", "root", "", "main_project");
?>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-5">
        <a class="btn btn-xs btn-primary" href="all_stock_report_excel.php">Download Excel File</a>
        <a class="btn btn-xs btn-primary" href="unit_by_unit.php">Download All Unit Excel File</a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Laptop Stock Report</div>
                    <div class=""><input type="text" class="mx-2" placeholder="Search By Model"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <!-- <th>Processing</th> -->
                                <th>Dispatch</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = "SELECT brand,COUNT(id)as in_total FROM e_com_inventory GROUP BY brand";
                            $sql_run = mysqli_query($connection, $sql);
                            $i = 0;
                            foreach ($sql_run as $data) {
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td> <?php echo $data['brand'] ?></td>
                                <td> <?php echo $data['in_total'] ?></td>
                                <td>
                                    <?php $sql = "SELECT COUNT(id)as in_stock FROM e_com_inventory WHERE dispatch ='0' AND brand='{$data['brand']}'";
                                        $sql_run = mysqli_query($connection, $sql);
                                        foreach ($sql_run as $stock) {
                                            echo $stock['in_stock'];
                                        }
                                        ?>
                                </td>

                                <td>
                                    <?php $sql = "SELECT COUNT(id)as dispatch FROM e_com_inventory WHERE dispatch ='1' AND brand='{$data['brand']}'";
                                        $sql_run = mysqli_query($connection, $sql);
                                        foreach ($sql_run as $stock) {
                                            echo $stock['dispatch'];
                                        }
                                        ?>
                                </td>
                                <td class="text-center">
                                    <a class="" href="e_com_model_summery.php?brand=<?php echo $data['brand'] ?>"><i
                                            class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require_once('../includes/footer.php'); ?>