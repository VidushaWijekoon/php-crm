<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$brand = $_GET['brand'];
$model = $_GET['model'];
$core = $_GET['core'];
$connection = mysqli_connect("localhost", "root", "", "main_project");
?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="model_view.php?brand=<?php echo $brand ?>&model=<?php echo $model ?>&core=<?php echo $core ?>">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-12 col-lg-12 justify-content-center mx-auto mt-2">
        <button onclick="exportToExcel('tblexportData', 'Available-stock-details')"
            class=" btn btn-xs btn-primary">Download
            Excel File</button>
    </div>
</div>
<div class="row">
    <div class="col col-sm-12 col-lg-12 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <!-- <div>ASIN : <span>####</span></div> -->
                        <div class="mt-2 text-uppercase"><?php echo $brand . " / " . $model . " / " . $core ?></div>
                    </div>

                    <div class=""><input type="text" class="mx-2" placeholder="Search">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tblexportData" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Device</th>
                                <th>Brand</th>
                                <th>Series</th>
                                <th>Model</th>
                                <th>Processor</th>
                                <th>Core</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Touch</th>
                                <th>Optical</th>
                                <th>battery</th>
                                <!-- <th>RAM</th>
                                    <th>HDD</th> -->
                                <th>Location</th>
                                <th>Inventory ID</th>
                                <th>MFG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM `e_com_inventory` WHERE brand = '$brand' AND model='$model' AND core='$core' AND dispatch= '0'";
                            $result = mysqli_query($connection, $query);

                            $i = 0;
                            foreach ($result as $data) {
                                $device = $data['device'];
                                $model = $data['model'];
                                $cpu = $data['core'];
                                $generation = $data['generation'];
                                $speed = $data['speed'];
                                $screen_size = $data['lcd_size'];
                                $screen_type = $data['touch_or_none_touch'];
                                $location = $data['location'];
                                $series = $data['series'];
                                $optical = $data['optical'];
                                $processor = $data['processor'];
                                $location = $data['rack'];
                                $inventory_id = $data['alsakb_qr'];
                                $mfg = $data['mfg'];
                                $battery = $data['battery'];
                                $i++; ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $device ?></td>
                                <td><?php echo $brand ?></td>
                                <td><?php echo $series ?></td>
                                <td><?php echo $model ?></td>
                                <td><?php echo $processor ?></td>
                                <td><?php echo $cpu ?></td>
                                <td><?php echo $generation ?></td>
                                <td><?php echo $speed ?></td>
                                <td><?php echo $screen_size ?></td>
                                <td><?php echo $screen_type ?></td>
                                <td><?php echo $optical ?></td>
                                <td><?php echo $battery ?></td>
                                <!-- <td>8GB</td>
                                    <td>256GB</td> -->
                                <td><?php echo $location ?></td>
                                <td><?php echo "ALSAKB" . $inventory_id ?></td>
                                <td><?php echo $mfg ?></td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@media (max-width: 1370px) {
    .core {
        width: 65px;
    }
}
</style>
<script type="text/javascript">
function exportToExcel(tableID, filename = '') {
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'export_excel_data.xls';

    // Create download link element
    downloadurl = document.createElement("a");

    document.body.appendChild(downloadurl);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

        // Setting the file name
        downloadurl.download = filename;

        //triggering the function
        downloadurl.click();
    }
}


/////////////////////////////////////////////////////
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tblexportData");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
<?php require_once('../includes/footer.php'); ?>