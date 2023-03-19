<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "main_project");
$performance_id=$_POST['performance_id'];
$inventory_id=$_POST['inventory_id'];
$name=$_POST['submit'];
 $bios_lock_hp = 'null';
                $bios_lock_dell = 'null';
                $bios_lock_lenovo = 'null';
                $bios_lock_other = 'null';
                $computrace_hp = 'null';
                $computrace_dell = 'null';
                $computrace_lenovo = 'null';
                $computrace_other = 'null';
                $me_region_lock_hp = 'null';
                $tpm_lock_dell = 'null';
                $other_error_lenovo = 'null';
                $other_error_other_brand = 'null';
                $a_top = 'null';
                $b_bazel = 'null';
                $c_palmrest = 'null';
                $d_back_cover = 'null';
                $keyboard = 'null';
                $lcd = 'null';
                $webcam = 'null';
                $mousepad_button = 'null';
                $mic = 'null';
                $speaker = 'null';
                $wi_fi_connection = 'null';
                $ram = 'null';
                $hdd_boot = 'null';
                $usb = 'null';
                $battery = 'null';
                $hinges_cover = 'null';
                $inventory_id = $_POST['inventory_id'];
                $job_description = 0;

                $bios_lock_hp = $_POST['bios_lock_hp'];
                $bios_lock_dell = $_POST['bios_lock_dell'];
                $bios_lock_lenovo = $_POST['bios_lock_lenovo'];
                $bios_lock_other = $_POST['bios_lock_other'];

                $computrace_hp = $_POST['computrace_hp'];
                $computrace_dell = $_POST['computrace_lock_dell'];
                $computrace_lenovo = $_POST['computrace_lock_lenovo'];
                $computrace_other = $_POST['computrace_lock_other'];

                $me_region_lock_hp = $_POST['me_region_lock_hp'];
                $tpm_lock_dell = $_POST['tpm_lock_dell'];
                $other_error_lenovo = $_POST['other_error_lenovo'];
                $other_error_other_brand = $_POST['other_error_other_brand'];

                $no_power = $_POST['no_power'];
                $no_display = $_POST['no_display'];
                $other_issue = $_POST['other_issue'];
                $bodywork = $_POST['bodywork'];
                $sanding = $_POST['sanding'];

                $a_top = $_POST['a_top'];
                $b_bazel = $_POST['b_bazel'];
                $c_palmrest = $_POST['c_palmrest'];
                $d_back_cover = $_POST['d_back_cover'];
                $keyboard = $_POST['keyboard'];
                $lcd = $_POST['lcd'];
                $webcam = $_POST['webcam'];
                $mousepad_button = $_POST['mousepad_button'];
                $mic = $_POST['mic'];
                $speaker = $_POST['speaker'];
                $wi_fi_connection = $_POST['wi_fi_connection'];
                $ram = $_POST['ram'];
                $hdd_boot = $_POST['hdd_boot'];
                $usb = $_POST['usb'];
                $battery = $_POST['battery'];
                $hinges_cover = $_POST['hinges_cover'];
                $keyboardbl=$_POST['keyboardbl'];
                $status = 0;
                $working_time_in_seconds;
                $start_time = 0000 - 00 - 00;
                
                //  header('Location: qc_performance_record.php');
                $reject_person = 'null';
                $rejection_department = '';
                $query = "SELECT job_description FROM performance_records WHERE performance_id='$performance_id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $data) {
                        $job_description = $data['job_description'];
                    }
                if ($lcd == 'reject') {
                    $query = "SELECT user_id FROM performance_records WHERE qr_number='$inventory_id' AND department_id='10' AND job_description='Remove LCD'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $data) {
                        $reject_person = $data['user_id'];
                        $rejection_department = 10;
                    }
                    if ($reject_person == 'null') {
                        $query = "SELECT user_id FROM performance_records WHERE qr_number='$inventory_id' AND department_id='1' AND job_description='Put RAM + Hard Disk + Test' AND job_description='Combine+ Test'";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $data) {
                            $reject_person = $data['user_id'];
                            $rejection_department = 1;
                        }
                    }
                }
                if (
                    $bios_lock_hp != 'ok' || $bios_lock_dell != 'ok' || $bios_lock_lenovo != 'ok' || $bios_lock_other != 'ok' || $computrace_hp != 'inactive' ||
                    $computrace_dell != 'deactivate' || $computrace_lenovo != 'ok' || $computrace_other != 'ok' || $me_region_lock_hp != 'ok' || $tpm_lock_dell != 'ok' ||
                    $other_error_lenovo != 'no_have' || $other_error_other_brand != 'no_have'
                ) {
                    $query = "SELECT user_id FROM performance_records WHERE qr_number='$inventory_id' AND department_id='9' ORDER BY performance_id DESC LIMIT 1";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $data) {
                        $reject_person = $data['user_id'];
                        $rejection_department = 9;
                    }
                    if ($reject_person == 'null') {
                        $query = "SELECT user_id FROM performance_records WHERE qr_number='$inventory_id' AND department_id='1'AND job_description='Put RAM + Hard Disk + Test' AND job_description='Combine+ Test'";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $data) {
                            $reject_person = $data['user_id'];
                            $rejection_department = 1;
                        }
                    }
                }
                if (
                    $bios_lock_hp != 'ok' || $bios_lock_dell != 'ok' || $bios_lock_lenovo != 'ok' || $bios_lock_other != 'ok' || $computrace_hp != 'inactive' ||
                    $computrace_dell != 'deactivate' || $computrace_lenovo != 'ok' || $computrace_other != 'ok' || $me_region_lock_hp != 'ok' || $tpm_lock_dell != 'ok' ||
                    $other_error_lenovo != 'no_have' || $other_error_other_brand != 'no_have' || $a_top != 'ok' || $lcd != 'ok' || $b_bazel != 'ok' || $no_power != 'ok' || $no_display != 'ok' || $other_issue != 'no_have' || $c_palmrest != 'ok' || $d_back_cover != 'ok' ||
                    $keyboard != 'ok' || $webcam != 'ok' || $mousepad_button != 'ok' || $mic != 'ok' || $speaker != 'ok' || $wi_fi_connection != 'ok' ||
                    $usb != 'ok' || $battery == 'bad' || $ram != 'match' || $hdd_boot != 'ok' || $hinges_cover != 'ok' || $bodywork != 'ok' || $sanding != 'ok'||$keyboardbl!='ok'
                ) {

                    $query = "SELECT user_id FROM performance_records WHERE qr_number='$inventory_id' AND department_id='1' AND job_description='Put RAM + Hard Disk + Test' AND job_description='Combine+ Test'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $data) {
                        $reject_person = $data['user_id'];
                        $rejection_department = 1;
                    }
                    $status = 1;
                }
                $user_id = $_SESSION['user_id'];
                $department_id = $_SESSION['department_id'];
                if($status==0){
                    header("Location:../model_2.php?performance_id=$performance_id&inventory_id=$inventory_id");
                }else{
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
                /////////////////////////////////////////////////////////////////////////////////////////
                $query = "INSERT INTO `qc_forms`(
                qr_number,
                `bios_lock_hp`,
                `bios_lock_dell`,
                `bios_lock_lenovo`,
                `bios_lock_other`,
                `computrace_hp`,
                `computrace_dell`,
                `computrace_lenovo`,
                `computrace_other`,
                `me_region_lock_hp`,
                `tpm_lock_dell`,
                `other_error_lenovo`,
                `other_error_other_brand`,
                `a_top`,
                `b_bazel`,
                `c_palmrest`,
                `d_back_cover`,
                `keyboard`,
                `lcd`,
                `webcam`,
                `mousepad_button`,
                `mic`,
                `speaker`,
                `wi_fi_connection`,
                `usb`,
                `battery`,
                `hinges_cover`,
                user_id,
                user_department,
                reject_person,
                rejection_department,
                status,
                performance_id,
                power,
                mb_display,
                mb_other_issue,
                bodywork,
                sanding,
                ram,
                hard_disk_boot,
                keyboard_backlight
            )
            VALUES(
                '$inventory_id',
                '$bios_lock_hp',
                '$bios_lock_dell',
                '$bios_lock_lenovo',
                '$bios_lock_other',
                '$computrace_hp',
                '$computrace_dell',
                '$computrace_lenovo',
                '$computrace_other',
                '$me_region_lock_hp',
                '$tpm_lock_dell',
                '$other_error_lenovo',
                '$other_error_other_brand',
                '$a_top',
                '$b_bazel',
                '$c_palmrest',
                '$d_back_cover',
                '$keyboard',
                '$lcd',
                '$webcam',
                '$mousepad_button',
                '$mic',
                '$speaker',
                '$wi_fi_connection',
                '$usb',
                '$battery',
                '$hinges_cover',
                '$user_id',
                '$department_id',
                '$reject_person',
                '$rejection_department',
                '$status',
                '$performance_id',
                '$no_power',
                '$no_display',
                '$other_issue',
                '$bodywork',
                '$sanding',
                '$ram',
                '$hdd_boot',
                '$keyboardbl'
            )";
                $query_run = mysqli_query($connection, $query);
               header("Location: ../qc_dashboard_new.php");
            }
           
            ?>