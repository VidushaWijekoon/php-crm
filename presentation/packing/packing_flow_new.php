<?php
ob_start();
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$user_id=$_SESSION['user_id'];
?>


<style>
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.ecomPackingStartBodySec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;

}

.scanPackingSec {

    /* align-items: center; */

}

.scanPackingSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 26px;
    width: 60%;
}

.orderviewTableSec {
    display: flex;
    /* justify-content: center; */
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 26px;
}

.scanDetails {
    width: 80%;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.chargingContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingStartContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingHeader {
    font-weight: 700;
    font-size: 15px;
    color: #A1A3A8;
}

.btnNextSec {
    margin-left: 10%;
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
}

.packedQty {
    background-color: #168eb4;
    padding: 3px 10px;
    border-radius: 50%;
    color: #fff;
}

.lable1 {
    font-size: 10px;
}

.packingSubSec {
    display: flex;
    justify-content: center;
}


.Lside {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 50%;
    /* background-color: #168EB4; */
}

.box1 {
    height: 200px;
    width: 200px;
}

.Rside {
    display: flex;
    /* justify-content: center; */
    align-items: center;
    flex-direction: column;
    width: 50%;
}

.box3 {
    padding: 10px;
    width: 250px;
    height: 300px;
}

.stikerHead {
    font-weight: 600;
    /* text-align: center; */
    font-size: 14px;
    margin-bottom: 5px;
}

.stikerDetails {
    font-size: 10px;
    font-weight: 500;
}

.tblName {
    font-weight: 600;

}

.packedItem {
    display: flex;
    justify-content: center;
    /* width: 100%; */
}

.nu {
    padding: 5px 10px;
}

.packItemDetails {
    padding: 5px 10px;
    display: flex;

}
</style>
<?php
$search_value=0;
$asin='';
$brand='';
$mfg='';
$model='';
$processor='';
$core='';
$generation='';
$speed='';
$touch='';
$lcd_size='';
$resolution='';
$ram='';
$hdd_type='';
$hdd_capacity='';
$os='';
$backlite_keyboard='';
$graphic_brand='';
$graphic_capacity='';
$charger_type='';
$charger_watt='';
$charger_pin_color='';
$inventory_id=0;
$asin_serial=0;
if(empty($_GET['search_value'])){}else{
    $search_value=$_GET['search_value'];
}

if(isset($_POST['search'])){
    $id= $_POST['inventory_id'];
    $mfg= $_POST['mfg'];
    if($id !=''){
        $search_value=$id;
    }elseif($mfg !=''){
        $search_value=$mfg;
    }
        header("Location: packing_flow_new.php?search_value=$search_value");
  

    
    
}
    if($search_value != 0){
        $sql="SELECT
    main_inventory_informations.brand,
    main_inventory_informations.model,
    main_inventory_informations.mfg,
    main_inventory_informations.core,
    main_inventory_informations.processor,
    main_inventory_informations.core,
    main_inventory_informations.generation,
    main_inventory_informations.speed,
    main_inventory_informations.touch_or_none_touch,
    main_inventory_informations.lcd_size,
    main_inventory_informations.screen_resolution,
    main_inventory_informations.ram,
    main_inventory_informations.hdd_capacity,
    main_inventory_informations.hdd_type,
    main_inventory_informations.keyboard_backlight,
    main_inventory_informations.os,
    main_inventory_informations.graphic_brand,
    main_inventory_informations.graphic_capacity,
    main_inventory_informations.charger_type,
    main_inventory_informations.charger_watt,
    main_inventory_informations.charger_pin_color,
    main_inventory_informations.inventory_id,
    main_inventory_informations.asin_serial,
    main_inventory_informations.asin_sku
FROM
    main_inventory_informations
WHERE
    (inventory_id = '$search_value' OR mfg = '$search_value') AND send_to_production='1' AND dispatch='0';";
        $sql_run=mysqli_query($connection,$sql);
        if(empty($sql_run)){}else{
        foreach($sql_run as $data){
        $asin=$data['asin_sku'];
         $mfg=$data['mfg'];
        $brand=$data['brand'];
        $model=$data['model'];
        $processor=$data['processor'];
        $core=$data['core'];
        $generation=$data['generation'];
        $speed=$data['speed'];
        $touch=$data['touch_or_none_touch'];
        $lcd_size=$data['lcd_size'];
        $resolution=$data['screen_resolution'];
        $ram=$data['ram'];
        $hdd_type=$data['hdd_type'];
        $hdd_capacity=$data['hdd_capacity'];
        $os=$data['os'];
        $backlite_keyboard=$data['keyboard_backlight'];
        $graphic_brand=$data['graphic_brand'];
        $graphic_capacity=$data['graphic_capacity'];
        $charger_type=$data['charger_type'];
        $charger_watt=$data['charger_watt'];
        $charger_pin_color=$data['charger_pin_color'];
        $inventory_id=$data['inventory_id'];
        $asin_serial=$data['asin_serial'];
        }
    }

    $sql="SELECT sales_type FROM packing_mfg WHERE packing_by='$user_id' ORDER BY mfg_id DESC LIMIT 1";
    $sql_run=mysqli_query($connection,$sql);
    foreach($sql_run as $tt){
        $sales_type=$tt['sales_type'];
    }
}
                $start_print=0;
                if(isset($_POST['submit'])){
                    $mfg =$_POST['mfg'];
                    $sales_type=$_POST['sales_type'];
                    $petti_anke =$_POST['petti_anke'];
                    if($sales_type==1){
                        $start_print=1;
                        $petti_anke=0;
                    }elseif($sales_type==2){
                        $start_print=0;
                        $petti_anke=$_POST['petti_anke'];
                    }
                    $sql="INSERT INTO packing_mfg (mfg,packing_by,sales_type)
                    values('$mfg','$sales_type','$sales_type')";
                    $sql_run=mysqli_query($connection,$sql);
                    $sql="UPDATE main_inventory_informations SET dispatch='1' WHERE mfg='$mfg' ";
                    $sql_run=mysqli_query($connection,$sql);
                    
                }
   
?>
<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;E-commerce packing</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Order Packing</h6>
</div>

<div class="row ecomPackingStartBodySec">
    <div class="cardContainer">
        <div class="">
            <div class="createListingHeading">
                Scan Laptop
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="scanPackingSec">
            <form method="POST">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                        <div class="row" style="width: 80%;">
                            <label class="col-5 pt-2 lable1"> Scan Alsakb Number</label>
                            <input class="col-7" type="text" name="inventory_id">

                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-12 text-center">
                        <label class="pt-2">
                            <span style="font-size: larger;">
                                OR
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                        <div class="row" style="width: 80%;">
                            <label class="col-5 pt-2 lable1"> Scan MFG Number</label>
                            <input class="col-7" type="text" name="mfg">
                        </div>
                    </div>
                    <button type="submit" name="search" class="d-none"></button>
                </div>
            </form>
            <br>

        </div>

        <br>
        <br>


        <div class="scanDetailsSec">

            <div class="tblName mb-2">Scanned Laptop Details</div>
            <div class="scanDetails">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">ASIN</label>
                            <input class="col-7" type="text" name="asin_sku" value="<?php echo $asin ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">MFG</label>
                            <input class="col-7" type="text" name="mfg" value="<?php echo $mfg ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Brand</label>
                            <input class="col-7" type="text" name="brand" value="<?php echo $brand ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Model</label>
                            <input class="col-7" type="text" name="model" value="<?php echo $model; ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Processor</label>
                            <input class="col-7" type="text" name="processor" value="<?php echo $processor; ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Core</label>
                            <input class="col-7" type="text" name="core" value="<?php echo $core; ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Generation</label>
                            <input class="col-7" type="text" name="generation" value="<?php echo $generation ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Speed</label>
                            <input class="col-7" type="text" name="speed" value="<?php echo $speed ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Touch</label>
                            <input class="col-7" type="text" name="touch" value="<?php echo $touch ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Screen
                                Size</label>
                            <input class="col-7" type="text" name="lcd_size" value="<?php echo $lcd_size ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Resolution</label>
                            <input class="col-7" type="text" name="resolution" value="<?php echo $resolution ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">RAM</label>
                            <input class="col-7" type="text" name="ram" value="<?php echo $ram ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">HDD Type</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">HDD Capacity</label>
                            <input class="col-7" type="text" name="hdd_capacity" value="<?php echo $hdd_capacity ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">OS</label>
                            <input class="col-7" type="text" value="<?php echo $os ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Backlight Keyboard</label>
                            <input class="col-7" type="text" value="<?php echo $backlite_keyboard ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Graphic Brand</label>
                            <input class="col-7" type="text" value="<?php echo $graphic_brand ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Graphic Capacity</label>
                            <input class="col-7" type="text" value="<?php echo $graphic_capacity ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <label class="col-5  lable1">Condition</label> -->
                            <label class="col-5  lable1">Charger type</label>
                            <input class="col-7" type="text" value="<?php echo $charger_type ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Charger Watt</label>
                            <input class="col-7" type="text" value="<?php echo $charger_watt ?>">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Charger Pin Colour</label>
                            <input class="col-7" type="text" value="<?php echo $charger_pin_color ?>">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <form method="POST">
                            <div class="row mt-1">
                                <!-- <div class="col-3"></div> -->

                                <label class="col-5  lable1">Sales type</label>
                                <select class="col-7" id='sales_type' name='sales_type'>
                                    <?php if($sales_type ==1){ ?>
                                    <option selected value="1">E-Commerce</option>
                                    <option select value="2">Bulk</option>
                                    <?php }else{ ?>
                                    <option select value="1">E-Commerce</option>
                                    <option selected value="2">Bulk</option>
                                    <?php } ?>

                                </select>
                            </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Box Number</label>
                            <input class="col-7" type="text" name='petti_anke'>
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <!-- <label class="col-5  lable1">Shipping Method</label>
                            <input class="col-7" type="text"> -->
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <label class="col-5  lable1">QTY</label>
                            <input class="col-7" type="text"> -->
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <!-- <div class="row">
                        
                        <label class="col-5 ">Shipping Method</label>
                        <input class="col-7" type="text">
                    </div> -->
                    </div>
                </div>
                <br>
                <br>





            </div>
        </div>
        <!-- Charger -->


        <!-- Box -->

        <!-- <div class="packingStartContentSec mt-3">
            <div class="PackingSec" style="width: 80%;">

                <hr class="sectionUnderline">

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <p class="mr-2">Box Number</p>
                            <input type="text">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <p class="mr-2">Bubble Wrapping User ID</p>
                            <input type="text">
                        </div>
                    </div>
                </div>


            </div> -->





        <div class="printingSec mt-4">
            <div class="">
                <div class="createListingHeading">
                    Printing Packing Details
                </div>
            </div>
            <hr class="sectionUnderline">

            <div class="packingSubSec">
                <!-- <div class="Lside">

                    <h6>Final Product </h6>

                    <div class="box1 border">

                    </div>
                  


                </div> -->
                <!-- <div class="Rside"> -->
                <!-- <h6>Printing Product </h6> -->
                <?php 
                
                if($start_print==1) { 
                    ?>
                <div class="box3 border" id="printableArea">
                    <?php } else{ ?>
                    <div class="box3 border">
                        <?php } ?>

                        <p class="stikerHead" style="font-weight:600">Microsoft Authorized Refurbisher</p>
                        <p class="stikerDetails"><?php echo $brand." ".$model."Laptop"?></p>
                        <p class="stikerDetails"><?php echo $processor." ".$core." ".$speed."Processor"?></p>
                        <p class="stikerDetails"><?php echo $lcd_size." inch Diagonal LCD Display "?></p>
                        <p class="stikerDetails"><?php echo $hdd_capacity." ".$hdd_type." Disk "?></p>
                        <p class="stikerDetails"><?php echo $ram." RAM "?></p>
                        <p class="stikerDetails"><?php echo $charger_watt." AC Adaptor "?></p>
                        <p class="stikerDetails"><?php echo $os ?></p>
                        <p class="stikerDetails">MFG - <?php echo $mfg ?></p>
                        <p class="stikerDetails">ASIN - <?php echo $asin ?> &nbsp;&nbsp;
                            <span>#<?php echo $asin_serial ?></span>
                        </p>
                        <p class="stikerDetails"> <img src="../inventory/printing/temp/<?php echo $inventory_id ?>.png">
                        </p>


                    </div>
                    <!-- </div> -->

                </div>


                <div class="row w-100 mt-4 justify-content-end">

                    <input type="hidden" name='mfg' value="<?php echo $mfg ?>">
                    <button class="btnTB" type="submit" name="submit">
                        Print & Complete
                    </button>
                </div>

                </form>
            </div>
            <div class="scanedLaptopList mt-4">
                <div class="">
                    <div class="createListingHeading">
                        <!-- Printed Laptop Details -->
                    </div>
                </div>
                <!-- <hr class="sectionUnderline">

                <div class="scannedLaptopSub">
                    <div class="packedItem mb-1">
                        <div class="nu">1</div>
                        <div class="packItemDetails border">
                            <p>Dell</p> &nbsp;&nbsp;
                            <p>Latitude e5480</p> &nbsp;&nbsp;
                            <p>Intel</p> &nbsp;
                            <p>i5-5200U</p> &nbsp;
                            <p>8GB RAM</p> &nbsp;&nbsp;
                            <p>256GB SSD</p>
                        </div>
                    </div>
                    <div class="packedItem mb-1">
                        <div class="nu">2</div>
                        <div class="packItemDetails border">
                            <p>Dell</p> &nbsp;&nbsp;
                            <p>Latitude e5480</p> &nbsp;&nbsp;
                            <p>Intel</p> &nbsp;
                            <p>i5-5200U</p> &nbsp;
                            <p>8GB RAM</p> &nbsp;&nbsp;
                            <p>256GB SSD</p>
                        </div>
                    </div> -->
            </div>

            <!-- <div class="d-flex justify-content-center mt-2">
                    <button class="btnT mx-2">Confirm</button>
                    <button class="btnT mx-2">Print</button>
                </div> -->




        </div>
    </div>


    <br>
    <br>
    <!-- Next Btn Sectiom -->

    <!-- <div class="row btnNextSec">
            <a href="./e_com_packing_next.php">
                <div class="btnTB" style="width: 200px;">
                    Next
                </div>
            </a>
        </div> -->

    <!-- Printing Sec -->






</div>
</div>


<script>
var int = setInterval('check()', 300);

function check() {
    if (chobj('div') == true) {
        printDiv('printableArea')
        // window.alert('true');
        int = window.clearInterval(int);
    } else {
        // document.write('<p>false</p>');
    }
}

function chobj(printableArea) {
    return (document.getElementById('printableArea')) ? true : false;
}
document.getElementById("printableArea").innerHTML = x;

function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    window.location.href = './packing_flow_new.php';
}
</script>

<?php
require_once('../includes/footer.php')
?>