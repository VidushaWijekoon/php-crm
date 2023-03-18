<?php
ob_start();
session_start();
require_once('../includes/header.php');

require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$stock = 0;
$query = "SELECT COUNT(id) as all_stock from e_com_inventory WHERE dispatch=0";
$data_set = mysqli_query($connection, $query);

while ($data = mysqli_fetch_assoc($data_set)) {
    $stock = $data['all_stock'];
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

.virtualInvSec {
    display: flex;
    align-items: center;
    justify-content: center;

}


.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}


.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

/* Rack eke Styles */

.rackSturcture {
    display: flex;
    flex-direction: column;
    /* height: 150px; */
    width: 250px;
}



.rackLayer {
    display: flex;
    height: 25%;
    border-left: 1px solid #dee2e6;
    border-right: 1px solid #dee2e6;
    border-bottom: 1px solid #dee2e6;
}


.box {
    position: relative;
    padding: 5px;
    height: 100%;
    width: 100%;
}



.box button {
    width: 100%;
    height: 100%;
}


/* ///// */

/* patte lable section eka */

.lableLeftSec {
    display: flex;
    flex-direction: column;
    height: 200px;
    width: 15px;
    font-weight: 600;
}

.lableLayer {
    font-size: 10px;
    display: flex;
    height: 25%;
    align-items: center;
}

/* Yata Lable Sec Eke  */

.lableBoxLayer {
    display: flex;
    width: 100%;
}

.colNu {
    width: 25%;
    text-align: center;
    font-size: 10px;

}

.rack {
    display: flex;
    justify-content: center;
}

.rackDwn {
    display: flex;
    justify-content: center;
}

/* Box button eke styles */

.btnBox {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff !important;
}

.btnBox:hover+.hide {
    /* background-color: #dee2e6; */
    display: block;
}

/* hover Btn Sec */
.hide {
    display: none;
    position: absolute;
    /* width: 300px; */
    padding: 5px 10px;
    /* height: 500px; */
    /* top: -125px; */
    left: 20px;
    z-index: 3;
}

/*  */

.insideDetails {
    background-color: black;
    opacity: 0.8;
    color: #ffffff;
    border-radius: 10px;
}

.tableModel {
    width: 100%;

}

/* Rack Name */
.rackLbl {
    display: flex;
    width: 93%;
    justify-content: space-between;
    /* text-align: center; */
    font-weight: 600;

}

.virtualInvSec {
    margin-bottom: 250px;
}
</style>

<?php
$asin=0;
       $mfg=0;
       $model=0;
$search_value ='0';
    if(empty($_GET['search_value'])){}else{
    $asin =$_GET['asin'];
    $mfg=$_GET['mfg'];
    $model=$_GET['model'];
    $search_value=$_GET['search_value'];
    }
    if(isset($_POST['search'])){
        
       $asin=$_POST['asin'];
       $mfg=$_POST['mfg'];
       $model=$_POST['model'];
       
        if(!empty($asin)){
             $mfg=0;
            $model=0;
        }elseif(!empty($mfg)){
            $model=0;
            $asin=0;
        }elseif(!empty($model)){
            $asin=0;
             $mfg=0;
        }
        header("Location: virtual_inv_ecommerce.php?asin=$asin&model=$model&mfg=$mfg&search_value=1");
    }
?>



<!-- <div class="row pageNavigation pt-2 pl-2">
    <a href="./virtual_inv_ecommerce.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div> -->



<div class="row mb-4 ml-1 pt-2 justify-content-between">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <div class="row">
        <a href="virtual_inv_ecommerce.php">
            <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
            <h6 class="pageName pt-1"> E-commerce inventory</h6>
        </a>
    </div>
    <div>
        <a href="../ecommerce_stock_inventory_new/e_com_laptop_inventory.php" class="btnTB mr-2">Stock Report</a>
    </div>

</div>
<div class="row virtualInvSec">
    <div class="cardContainer">
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    <p>Search</p>
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Search Sec -->
        <form method="POST">
            <div class="SearchSec mb-4">
                <div class="row text-center">
                    <!-- <div class="col-2"></div> -->

                    <div class="col-2">ASIN</div>
                    <div class="col-2">MFG</div>
                    <div class="col-2">Model</div>
                </div>
                <div class="row">
                    <!-- <div class="col-2">Search</div> -->

                    <div class="col-2">
                        <input class="w-100" type="text" name="asin">
                    </div>
                    <div class="col-2">
                        <input class="w-100" type="text" name="mfg">
                    </div>
                    <div class="col-3">
                        <input class="w-100" type="text" name="model">
                    </div>
                    <div class="col-1">
                        <button type='submit' name='search'>
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </button>
                    </div>

                </div>
            </div>
        </form>
        <!-- end Search -->
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <?php if($search_value !='0'){ 
           ?>
        <div class="addItemsSec mt-4">
            <div class="row justify-content-center">
                <div class="tableSec">
                    <table class="table mx-3 table-hover text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MFG</th>
                                <th>ASIN Serial</th>
                                <th>ASIN/SKU</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Available Qty</th>
                                <th>Rack No</th>
                            </tr>
                        </thead>
                        <tbody>

<<<<<<< HEAD
                            <?php
                            $query = "SELECT * FROM e_com_inventory WHERE (mfg = '$mfg' OR model = '$model' OR asin_sku = '$asin') AND dispatch ='0'";
                            $query_run = mysqli_query($connection, $query);
                            $i = 0;
                            while ($data = mysqli_fetch_assoc($query_run)) {
                                $i++;
                            ?>
=======
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    <p>Rack</p>
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row justify-content-end">
            <div class="createListingHeading pr-4">
                <span>
                    <p>Total Laptops : <?php echo $stock; ?> </p>
                </span>
            </div>
        </div>
>>>>>>> a11b9fed73d2cb276c63719c28da1c3dd7bfa3f2

                            <tr>
                                <!-- <form action="" method="POST"> -->
                                <td class="d-none"><input type="text" name="item_id" value="<?php echo $data['id'] ?>">
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['mfg'] ?></td>
                                <td><?php echo $data['asin_serial'] ?></td>
                                <td><?php echo $data['asin_sku'] ?></td>
                                <td><?php echo $data['device'] ?></td>
                                <td><?php echo $data['brand'] ?></td>
                                <td><?php echo $data['model'] ?></td>
                                <td><?php echo $data['qty'] ?></td>
                                <td><a
                                        href="virtual_inv_ecom_remove_items.php?rack=<?php echo $data['rack']?>&mfg=<?php echo $data['mfg'] ?>&model=<?php echo $model ?>&asin=<?php echo $asin ?>&search=1"><?php echo $data['rack'] ?></a>
                                </td>
                            </tr>
                            <?php
                            }
                                ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php }else{ ?>
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="ml-2">
                <div class="createListingHeading">
                    <span>
                        <p>Rack</p>
                    </span>
                </div>
            </div>
            <hr class="sectionUnderline">

            <!-- Rack Design Sec -->

            <div class="row w-100">

                <!-- Full Rack eka Front -->
                <div class="rackSec w-100 m-3 text-center">
                    <p style="font-size: 15px; font-weight: 600;">Front-Side</p>
                    <br>
                    <!-- Rack Eke Lable  -->
                    <div class="d-flex justify-content-center">
                        <div class="rackLbl">
                            <div class="w-100">A</div>
                            <div class="w-100">B</div>
                            <div class="w-100">C</div>
                            <div class="w-100">D</div>
                            <div class="w-100">E</div>
                            <div class="w-100">F</div>
                            <div class="w-100">G</div>
                        </div>
                    </div>

                    <div class="rack">
                        <!-- Patte Lable tika -->
                        <div class="lableLeftSec">
                            <div class="lableLayer">
                                T
                            </div>

                            <div class="lableLayer">
                                6
                            </div>
                            <div class="lableLayer">
                                5
                            </div>
                            <div class="lableLayer">
                                4
                            </div>
                        </div>

                        <!-- Rck eke Sturucter eka -->


                        <div class=" rackSturcture">

                            <!-- <div class="rackfull"> -->
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">

                            </div>
                            <!-- Rack Layer C -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">
                                        <!-- <span>A-1</span> -->
                                    </div>

                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>
                                </div>
                                <!-- /// -->

                            </div>
                            <!-- Rack Layer A -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">

                                    </div>


                                </div>
                                <!-- /// -->


                            </div>


                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">
                            </div>
                            <!-- Rack Layer B-6 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-6">
                                        <div class="btnTB btnBox">
                                            <span>B-6</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-6' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B-5 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-5">
                                        <div class="btnTB btnBox">
                                            <span>B-5</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-5' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B-4 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-4">
                                        <div class="btnTB btnBox">
                                            <span>B-4</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-4' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">
                            </div>
                            <!-- Rack Layer C-6 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-6">
                                        <div class="btnTB btnBox">
                                            <span>C-6</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'C-6' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer c-5 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-5">
                                        <div class="btnTB btnBox">
                                            <span>C-5</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'C-5' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer C-4 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-4">
                                        <div class="btnTB btnBox">
                                            <span>C-4</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'C-4' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->


                            </div>
                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">

                            </div>
                            <!-- Rack Layer C -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer A -->
                            <div class="rackLayer">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->


                            </div>


                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">

                            </div>
                            <!-- Rack Layer C -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer A -->
                            <div class="rackLayer">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->


                            </div>


                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">

                            </div>
                            <!-- Rack Layer C -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer A -->
                            <div class="rackLayer">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->


                            </div>


                        </div>
                        <div class=" rackSturcture">
                            <!-- Rack Layers T -->
                            <div class="rackLayer ">

                            </div>
                            <!-- Rack Layer C -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->

                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer A -->
                            <div class="rackLayer">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <div class="btnTBD btnBox">

                                    </div>

                                </div>
                                <!-- /// -->


                            </div>


                        </div>

                    </div>
                    <div class="rackDwn">
                        <!-- Patte Lable tika -->
                        <div class="lableLeftSec">

                            <div class="lableLayer">
                                3
                            </div>
                            <div class="lableLayer">
                                2
                            </div>
                            <div class="lableLayer">
                                1
                            </div>
                        </div>

                        <!-- Rck eke Sturucter eka -->


                        <div class=" rackSturcture">




                        </div>
                        <div class=" rackSturcture">

                            <!-- Rack Layer B-3 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-3">
                                        <div class="btnTB btnBox">
                                            <span>B-3</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-3' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B-2 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-2">
                                        <div class="btnTB btnBox">
                                            <span>B-2</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-2' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer B-1 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=B-1">
                                        <div class="btnTB btnBox">
                                            <span>B-1</span>
                                        </div>
                                        <!-- hover details  Sec eka -->


                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'B-1' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->


                                    </a>
                                </div>
                                <!-- /// -->


                            </div>
                        </div>
                        <div class=" rackSturcture">

                            <!-- Rack Layer C-3 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-3">
                                        <div class="btnTB btnBox">
                                            <span>C-3</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'C-3' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer C-2 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-2">
                                        <div class="btnTB btnBox">
                                            <span>C-2</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'c-2' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->
                            </div>
                            <!-- Rack Layer C-1 -->
                            <div class="rackLayer ">
                                <!-- Box sec 1 -->
                                <div class="box border">
                                    <!-- Box BTn  -->
                                    <a href="./virtual_inv_ecom_add_remove?rack=C-1">
                                        <div class="btnTB btnBox">
                                            <span>C-1</span>
                                        </div>
                                        <!-- hover details  Sec eka -->
                                        <div class="hide insideDetails">
                                            <div class="tableModel">
                                                <table>
                                                    <tr>
                                                        <th>
                                                            <div style="width:100px;">
                                                                Models
                                                            </div>
                                                        </th>
                                                        <th>Qty</th>
                                                    </tr>
                                                    <?php
                                                $query = "SELECT COUNT(id) as tot_count ,model FROM e_com_inventory WHERE rack = 'C-1' AND dispatch = '0' GROUP BY model";
                                                $query_run = mysqli_query($connection, $query);

                                                while ($data = mysqli_fetch_assoc($query_run)) {
                                                    $tot = $data['tot_count'];
                                                    $model = $data['model'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $model ?></td>
                                                        <td><?php echo $tot ?></td>
                                                        <?php
                                                }
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- iwrai hover eka -->
                                    </a>
                                </div>
                                <!-- /// -->


                            </div>
                        </div>
                        <div class=" rackSturcture">
                        </div>
                        <div class=" rackSturcture">
                        </div>
                        <div class=" rackSturcture">
                        </div>
                        <div class=" rackSturcture">
                        </div>

                    </div>
                </div>

                <!-- /// -->

                <!-- Full Rack eka Back -->



                <!-- /// -->


            </div>
            <?php } ?>





        </div>
    </div>



    <?php
require_once('../includes/footer.php')

?>