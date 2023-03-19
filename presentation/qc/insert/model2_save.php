<?php
session_start();
require_once("../../inventory/printing/phpqrcode/qrlib.php");
$connection = mysqli_connect("localhost", "root", "", "main_project");
$performance_id=$_POST['performance_id'];
$inventory_id=$_POST['inventory_id'];

$asin_sku=$_POST['asin'];
$asin_serial=$_POST['asin_serial'];
$mfg=$_POST['mfg'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$processor=$_POST['processor'];
$core=$_POST['core'];
$generation=$_POST['generation'];
$speed=$_POST['speed'];
$screen_size=$_POST['screen_size'];
$screen_resolution=$_POST['resolution'];
$graphic_brand=$_POST['graphic_brand'];
$graphic_capacity=$_POST['graphic_capacity'];
$resolution_type=$_POST['resolution_type'];
$touch=$_POST['touch'];
$kbbacklight=$_POST['kbbacklight'];
$ram=$_POST['ram'];
$hddtype=$_POST['hddtype'];
$hddsize=$_POST['hddsize'];
$chrgr_pin=$_POST['chrgrPin'];
$chrgr_watt=$_POST['chrgrCapacity'];
$os=$_POST['os'];

$sql="UPDATE main_inventory_informations 
SET
    `brand` = '$brand',
    `model` = '$model',
    `processor` = '$processor',
    `core` = '$core',
    `generation` = '$generation',
    `mfg` = '$mfg',
    `speed` = '$speed',
    `lcd_size` = '$screen_size',
    `touch_or_none_touch` = '$touch',
    `screen_resolution` = '$screen_resolution',
    `ram` = '$ram',
    `hdd_capacity` = '$hddsize',
    `keyboard_backlight` = '$kbbacklight',
    `hdd_type` = '$hddtype',
    `graphic_brand` = '$graphic_brand',
    `graphic_capacity` = '$graphic_capacity',
    `charger_watt` = '$chrgr_watt',
    `charger_pin_color` = '$chrgr_pin',
    `os` = '$os',
    `asin_sku` = '$asin_sku',
    `asin_serial` = '$asin_serial' WHERE inventory_id='$inventory_id'";
    $sql_run = mysqli_query($connection, $sql);
    //////////////////////////////////////////////////////////////////////////////////////
    $query = "SELECT start_time FROM performance_records WHERE performance_id ='$performance_id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $data) {
                    $start_time = $data['start_time'];
                }
                $date1 = new DateTime('now', new DateTimeZone('Asia/Dubai'));
                $date = $date1->format('Y-m-d H:i:s');
                $working_time_in_seconds = strtotime($date) - strtotime($start_time);
                $duration = round($working_time_in_seconds / 60) * 100;
                $query_performance = "UPDATE
                 `performance_records`
                 SET
                 `end_time` = '$date',
                 `spend_time` = '$duration',
                 `status`=1
             WHERE performance_id = $performance_id";
             $query_run = mysqli_query($connection, $query_performance);
            $tempDir = 'tempmfg/';
            $filename = $mfg;
            $codeContents = $mfg;

            QRcode::png($codeContents, $tempDir . '' . $filename . '.png', QR_ECLEVEL_L, 5, 1);
        //    header("Location: print_mfg.php?mfg=$mfg");

                    ?>
<div class="box3 border" style="display: flex; justify-content: center; align-items: center;" id="printableArea">

    <div class="stikerHead" style="font-weight:600; text-align:center;  margin-top: 0.7cm;">MFG</div>

    <div class="stikerDetails" style="margin-left: 0.4cm; margin-top: 0.2cm; margin-bottom: 0.2cm;"> <img
            style="width: 1.3cm;height: 1.3cm;" src="tempmfg/<?php echo $mfg ?>.png">
    </div>
    <div class="stikerDetails" style="text-align:center;"><?php echo $mfg ?>
    </div>


</div>
<!-- </div> -->

</div>
<?php 
// header("Location: ../qc_dashboard_new.php");

?>
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

    window.location.href = '../qc_dashboard_new.php';
}
</script>