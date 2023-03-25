<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$connection = mysqli_connect("localhost", "root", "", "main_project");
$search_value='0';
if(!empty($_GET['search_value'])){
    $search_value=$_GET['search_value'];
    $sql="SELECT * FROM main_inventory_informations WHERE model like '%$search_value%'GROUP BY model,core";
    $sql_run_search=mysqli_query($connection,$sql);

}
if(isset($_POST['search'])){
    $search_value=$_POST['search_value'];
     header("Location: laptop_inventory?search_value=$search_value");
}
?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="laptop_inventory.php">
            <i class="fa-regular fa-home fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-5">
        <a class="btn btn-xs btn-primary" href="all_stock_report_excel.php">Download Excel File</a>
        <a class="btn btn-xs btn-primary" href="unit_by_unit.php">Download All Unit Excel File</a>
    </div>
</div>
<?php 
if($search_value =='0'){
?>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Laptop Stock Report</div>
                    <div class="">
                        <form method="POST">
                            <input type="text" name="search_value" class="mx-2" placeholder="Search By Model">
                            <button class="d-none" type="submit" name="search"></button>
                        </form>
                    </div>
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
                                <th>Processing</th>
                                <th>Dispatch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql="SELECT brand,COUNT(inventory_id)as in_total FROM main_inventory_informations GROUP BY brand ORDER BY in_total DESC";
                            $sql_run=mysqli_query($connection,$sql);
                            $i=0;
                            foreach($sql_run as $data){
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td> <a class="" href="model_summery.php?brand=<?php echo $data['brand'] ?>">
                                        <?php echo strToUpper($data['brand']) ?> </a> </td>
                                <td> <?php echo $data['in_total'] ?></td>
                                <td>
                                    <?php $sql="SELECT COUNT(inventory_id)as in_stock FROM main_inventory_informations WHERE send_to_production ='0' AND brand='{$data['brand']}'";
                                $sql_run=mysqli_query($connection,$sql);
                                foreach($sql_run as $stock){
                                 echo $stock['in_stock'];   
                                }
                                ?>
                                </td>
                                <td>
                                    <?php $sql="SELECT COUNT(inventory_id)as in_stock FROM main_inventory_informations WHERE send_to_production ='1' AND dispatch='0' AND brand='{$data['brand']}'";
                                $sql_run=mysqli_query($connection,$sql);
                                foreach($sql_run as $stock){
                                 echo $stock['in_stock'];   
                                }
                                ?>
                                </td>
                                <td>
                                    <?php $sql="SELECT COUNT(inventory_id)as dispatch FROM main_inventory_informations WHERE send_to_production ='1' AND dispatch='1' AND brand='{$data['brand']}'";
                                $sql_run=mysqli_query($connection,$sql);
                                foreach($sql_run as $stock){
                                 echo $stock['dispatch'];   
                                }
                                ?>
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
<?php }else{ ?>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Search model <?php echo $search_value; ?></div>
                    <div class="">
                        <form method="POST">
                            <input type="text" name="search_value" class="mx-2" placeholder="Search By Model">
                            <button class="d-none" type="submit" name="search"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Processing</th>
                                <th>Dispatch</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php
                                $query = "SELECT brand, model,core,COUNT(inventory_id) as in_total FROM `main_inventory_informations` WHERE model like'%$search_value%' GROUP BY  model ORDER BY in_total DESC";
                                $result = mysqli_query($connection, $query);
                                foreach ($result as $data) {
                                $brand = strToUpper($data['brand']);
                                $model = strToUpper($data['model']);
                                $core = $data['core'];
                                $in_total = $data['in_total'];
                                $query = "SELECT COUNT(inventory_id)as in_stock FROM `main_inventory_informations` WHERE brand = '$brand' AND model='$model'AND send_to_production='0'";
                                        $result = mysqli_query($connection, $query);
                                        foreach ($result as $data) {
                                            $in_stock = $data['in_stock'];

                                        }
                                        $query = "SELECT COUNT(inventory_id)as dispatch FROM `main_inventory_informations` WHERE brand = '$brand' AND model='$model'AND dispatch='1'";
                                        $result = mysqli_query($connection, $query);
                                        foreach ($result as $data) {
                                            $dispatch = $data['dispatch'];
                                        }
                                    
                                        $query = "SELECT COUNT(inventory_id) as processing FROM `main_inventory_informations` WHERE brand = '$brand'AND model='$model' AND send_to_production = '1'";
                                        $result = mysqli_query($connection, $query);
                                        foreach ($result as $data) {
                                            $processing = $data['processing'];

                                        }
                                        $processing = $processing - $dispatch;
                                echo "<tr class='cell-1' data-toggle='collapse'>
                                    <td>$brand</td>
                                    <td> <a href='model_view.php?model=$model&brand=$brand&search_value=$search_value'>
                                                $model</a></td>
                                    <td>$in_total</td>";
                                     echo "<td>";
                                        echo $in_stock;
                                        echo "</td>
                                        <td>";
                                        echo $processing;
                                        echo "</td>
                                                                        <td>";

                                        echo $dispatch;
                                        echo "
                                    </td>
                                        </tr>";
                            }
 } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>