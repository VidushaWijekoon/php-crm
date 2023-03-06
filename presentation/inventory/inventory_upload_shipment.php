<?php

session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
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

.ecomOrderFormSec {
    display: flex;
    align-items: center;
    justify-content: center;

}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.btnT {
    background: #FFFFFF;
    border: 1px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.tableSecSupSheet table {
    height: 75vh;
}

.tableSecSupSheet table th {
    color: #168EB4;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}
</style>

<?php 
 $i=0;
if (isset($_POST['submit'])) {
    if ($_FILES['file']['name']) {
        $filename = explode('.', $_FILES['file']['name']);
        if ($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], 'r');
         
            while ($data = fgetcsv($handle)) {
                //handling csv file
                $i++;
                $date = $data[0];
                $supplier_name = $data[1];
                $cci_number = $data[2];
                $alsakb_qr = $data[3];
                $supplier_barcode = $data[4];
                $mfg = $data[5];
                $device = $data[6];
                $brand = $data[7];
                $model = $data[8];
                $series = $data[9];
                $processor = $data[10];
                $core = $data[11];
                $generation = $data[12];
                $speed = $data[13];
                $lcd_size = $data[14];
                $screen_resolution = $data[15];
                $dvd = $data[16];
                $battery = $data[17];
                $notes = $data[18];
                $touch_or_non_touch = $data[19];
                $location = $data[20];
                $finger_print =$data[21];
                $bluetooth = $data[22];
                $camera = $data[23];
                $bios_lock = $data[24];
                $ram = $data[25];
                $hdd_capacity = $data[26];
                $hdd_type = $data[27];
                $graphic_brand = $data[28];
                $graphic_capacity =$data[29];
                $os = $data[30];
                strtolower($device) ;
                strtolower($brand) ;
                strtolower($model);
                strtolower($series);
                strtolower($processor);
                strtolower($core) ;
                strtolower($generation);
                strtolower($speed);
                strtolower($dvd);
                strtolower($battery);
                strtolower($touch_or_non_touch);
                strtolower($finger_print);
                strtolower($bluetooth);
                strtolower($camera);
                strtoupper($bios_lock );
                strtolower($ram);
                strtolower($hdd_capacity);
                strtolower($hdd_type);
                strtolower($graphic_brand);
                strtolower($graphic_capacity);
                strtolower($os);
                $supplier_name = rtrim($supplier_name);
                $cci_number =  rtrim($cci_number);
                $alsakb_qr =  rtrim($alsakb_qr);
                $supplier_barcode = rtrim($supplier_barcode);
                $mfg =  rtrim($mfg);
                $device =  rtrim($device);
                $brand =  rtrim($brand);
                $model =  rtrim($model);
                $series =  rtrim($series);
                $processor =  rtrim($processor);
                $core =  rtrim($core);
                $generation =  rtrim($generation);
                $speed =  rtrim($speed);
                $lcd_size =  rtrim($lcd_size);
                $screen_resolution = rtrim($screen_resolution);
                $dvd =  rtrim($dvd);
                $battery =  rtrim($battery);
                $notes =  rtrim($notes);
                $touch_or_non_touch =  rtrim($touch_or_non_touch);
                $location = rtrim($location);
                $finger_print =  rtrim($finger_print);
                $bluetooth = rtrim($bluetooth);
                $camera =  rtrim($camera);
                $bios_lock =  rtrim($bios_lock);
                $ram =  rtrim($ram);
                $hdd_capacity =  rtrim($hdd_capacity);
                $hdd_type =  rtrim($hdd_type);
                $graphic_brand =  rtrim($graphic_brand);
                $graphic_capacity =  rtrim($graphic_capacity);
                $os = rtrim($os);
              $_POST['submit']='';
if($i != 1){
     $sql = strtolower("INSERT INTO machine_from_suppliers(`supplier_name`,
     `cci_number`,
     `alsakb_qr_number`,
     `serial_number`,
     `mfg`,
     `device`,
     `brand`,
     `model`,
     `series`,
     `processor`,
     `core`,
     `generation`,
     `speed`,
     `lcd_size`,
     `resolution`,
     `optical`,
     `battery`,
     `notes`,
     `touch_none_touch`,
     `location`,
     `fingerprint`,
     `bluetooth`,
     `camera`,
     `bios_lock`,
     `ram`,
     `hdd_capacity`,
     `hard_disk_type`,
     `graphic_brand`,
     `graphic_capacity`,
     `os`) 
     VALUES('$supplier_name',
                '$cci_number',
                '$alsakb_qr',
                '$supplier_barcode',
                '$mfg',
                '$device',
                '$brand',
                '$model',
                '$series',
                '$processor',
                '$core',
                '$generation',
                '$speed',
                '$lcd_size',
                '$screen_resolution',
                '$dvd',
                '$battery',
                '$notes',
                '$touch_or_non_touch',
                '$location',
                '$finger_print',
                '$bluetooth',
                '$camera',
                '$bios_lock',
                '$ram',
                '$hdd_capacity',
                '$hdd_type',
                '$graphic_brand',
                '$graphic_capacity',
                '$os')");
     
                mysqli_query($connection, $sql);
}
            }
            fclose($handle);
            // echo '<script>alert("File Sucessfully imported")</script>';
            
        }
    }
} ?>


<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>


<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-cloud-arrow-up"></i>
    <h6 class="pageName pt-1">Upload Shipment</h6>
</div>

<div class="rowuploadShipmentBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Upload Supplier Sheet
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <div class="uploadSupBodySec">

            <div class="w-100 d-flex flex-row-reverse mr-2">
                <button class="btnT">
                    <i class="fa-solid fa-download"></i> Download Master
                </button>
            </div>

            <div class="row ml-4">
                Select CSV file to Upload Supplier Sheet
            </div>
            <div class="row ml-4 mt-2">
                <form method="post" enctype="multipart/form-data">
                    <label>Select CSV File:</label><br>
                    <input class="btnT mr-2" type="file" name="file">
                    <input class="btnT" type="submit" name="submit" value="Submit">
                </form>
            </div>

            <!-- uploaded details -->

            <div class="ml-2 mt-4">
                <div class="createListingHeading">
                    <span>
                        Uploaded Supplier Sheet Details
                    </span>
                </div>
            </div>
            <hr class="sectionUnderline">

            <div class="tableSecSupSheet">
                <div class="row">

                    <table class="table mx-3 table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Suppler Name</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Device</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Series</th>
                                <th scope="col">Model</th>
                                <th scope="col">Processor</th>
                                <th scope="col">Core</th>
                                <th scope="col">Gen</th>
                                <th scope="col">Speed</th>
                                <th scope="col">Touch</th>
                                <th scope="col">Screen Size</th>
                                <th scope="col">Resolution</th>
                                <th scope="col">HDD Type</th>
                                <th scope="col">HDD Capacity</th>
                                <th scope="col">Ram</th>
                                <th scope="col">OS</th>
                                <th scope="col">Graphic Brand</th>
                                <th scope="col">Graphic Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr> -->
                            <?php 
                              
                                // last insert id ganna
                                $last_id = $connection->insert_id;
                                $value = $last_id-($i-2);


                                $query = "SELECT * FROM machine_from_suppliers WHERE machine_id BETWEEN '$value' AND '$last_id'";
                                $result = mysqli_query($connection, $query);
                                if(empty($result)){}else{
                                foreach($result as $data){ 
                                    // var_dump($data);
                                    ?>
                            <tr>

                                <td><?php echo $data['serial_number'];?></td>
                                <td><?php echo $data['mfg'];?></td>
                                <td><?php echo $data['device'];?></td>
                                <td><?php echo $data['brand'];?></td>
                                <td><?php echo $data['series'];?></td>
                                <td><?php echo $data['model'];?></td>
                                <td><?php echo $data['processor'];?></td>
                                <td><?php echo $data['core'];?></td>
                                <td><?php echo $data['generation'];?></td>
                                <td><?php echo $data['speed'];?></td>
                                <td><?php echo $data['battery'];?></td>
                                <td><?php echo $data['touch_none_touch'];?></td>
                                <td><?php echo $data['lcd_size'];?></td>
                                <td><?php echo $data['bios_lock'];?></td>
                                <td><?php echo $data['optical'];?></td>
                                <td><?php echo $data['supplier_name'];?></td>
                            </tr>

                            <?php }
                            }
                                ?>

                            <!-- </tr> -->

                        </tbody>
                    </table>

                </div>



            </div>



            <!--  -->


        </div>




    </div>
</div>



<?php
require_once('../includes/footer.php');
mysqli_close($connection);
?>