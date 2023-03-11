<?php
    session_start();
$q = $_GET['q'];

$con = mysqli_connect("localhost", "root", "", "main_project");
if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
}
date_default_timezone_set('Asia/dubai');
$timestamp = time();
$date_time = date("Y-m-d H:i:s", $timestamp);

mysqli_select_db($con,"main_project");
$sql="SELECT * FROM machine_from_supplier WHERE serial_no = '".$q."' OR mfg = '".$q."' ";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $supplier_name=0;
    $supplier_name=$row['supplier_name'];
    $core=$row['core'];
    $gen=$row['generation'];
    $brand=$row['brand'];
    $model=$row['model'];
    $screen_type=$row['touch_or_non_touch'];
    $battery=$row['battery'];
    $note=$row['notes'];
    $graphic_brand=$row['graphic_brand'];
    $graphic_capacity=$row['graphic_capacity'];
    $os=$row['os'];
    $mfg=$row['mfg'];
    $customer=$row['customer'];
    if($supplier_name !=0){
        $user_id=$_SESSION['user_id'];
         $department=$_SESSION['department_id'];
        $sql="INSERT INTO `performance_records`(
    `user_id`,
    `department_id`,
    `qr_number`,
    `mfg_code`,
    `model`,
    `job_description`,
    `start_time`,
    `end_time`,
    `status`
)
VALUES(
    '$user_id',
    '$department',
    '$supplier_name',
    '$mfg',
    '$model',
    'pc sorting',
    '$date_time',
    '$date_time',
    '1'
)";
$query_run = mysqli_query($con,$sql);
    }
}
if(empty($model)){ ?>
<div class="modal-content">
    <div class="p-3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="cusName"> <?php echo "Invalid ID"; ?></div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
    </div>
</div>
<?php
}else{
?>
<div class="modal-content">
    <div class="p-3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="cusName" id="customerName"> <?php echo $customer ?></div>


        </div>
        <div class="row justify-content-center">

            <div class="modelName" id="modelName"> <?php echo $model ?></div>

        </div>
        <div class="row justify-content-center">

            <div class="modelGen" id="modelGen"> <?php echo  "Gen ".$gen ?></div>

        </div>
        <br>
        <hr class="sectionUnderline">
        <br>
        <!-- <div class="row">

                        <div class="col-8 text-bold" id="supplierName">
                            Supplier Name
                            <input class="ml-2 w-75" type="text" id="supName">
                        </div>

                    </div> -->
        <div class="formSec">
            <div class="row my-2 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold" id="supplierName">
                                Supplier Name
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="supName" value=" <?php echo $supplier_name ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Core
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="core" value=" <?php echo $core ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Graphic Brand
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="graphicBrand" value=" <?php echo $graphic_brand ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Touch
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="touch" value="<?php echo $screen_type ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Graphic Capacity
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="graphicCapacity"
                                value=" <?php echo $graphic_capacity ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Battery
                            </div>
                        </div>
                        <div class="col-6">
                            <input class="w-100" type="text" id="battery" value=" <?php echo $battery ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                OS
                            </div>
                        </div>
                        <div class="col-6">

                            <input class="w-100" type="text" id="os" value=" <?php echo $os ?>">
                            <!-- <textarea id="remarks"> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2 justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-center text-bold">
                                Remarks
                            </div>
                        </div>
                        <div class="col-6">
                            <textarea class="form-control" name="" id="remarks" cols="40" rows="3"
                                value=" <?php echo $note ?>"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
    </div>
</div>
<?php
}

mysqli_close($con);
?>