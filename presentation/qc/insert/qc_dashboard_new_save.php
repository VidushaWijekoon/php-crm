<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "main_project");
$inventory_id=$_POST['scan_qr'];
$job=$_POST['job'];
$user_id=$_SESSION['user_id'];
$department_id=$_SESSION['department_id'];
//check this pc already send to production or not 
$sql="SELECT inventory_id FROM main_inventory_informations WHERE inventory_id='$inventory_id' AND  send_to_production='1' ";
$sql_run=mysqli_query($connection,$sql);
$exist=0;
$exist=mysqli_num_rows($sql_run);

if($exist ==0){

     echo '<script type="text/javascript">';
        echo 'alert("This QR Code not Scan From Inventory please return this pc to inventory");';
        echo 'window.location.href = "../qc_dashboard_new.php";';
        echo '</script>';

}else{

$sql="SELECT performance_id,end_time,start_time FROM performance_records WHERE qr_number='$inventory_id' AND  job_description='$job' ";
$sql_run=mysqli_query($connection,$sql);
$rows=mysqli_num_rows($sql_run);
date_default_timezone_set('Asia/dubai');
    $timestamp = time();
    $current_date_time = date("Y-m-d H:i:s");
if($rows==1){
    $end_time=null;
    foreach($sql_run as $data){
        $end_time=$data['end_time'];
        $start_time=$data['start_time'];
        $performance_id=$data['performance_id'];
    }
    if($end_time != '0000-00-00 00:00:00'){
//Already scann msg alert
        echo '<script type="text/javascript">';
        echo 'alert("Already Scaned Under This Job Description");';
        echo 'window.location.href = "../qc_dashboard_new.php";';
        echo '</script>';
    }elseif($end_time =='0000-00-00 00:00:00'){
        //task complete query here
       
        if($job == '27' OR $job =='28'){
             
            $sql="UPDATE performance_records SET end_time='$current_date_time',status='1' WHERE qr_number='$inventory_id' ";
        $query_run = mysqli_query($connection,$sql);
        header("Location: ../qc_dashboard_new.php");
        }else{
            header("Location: ../model_1.php?performance_id=$performance_id&inventory_id=$inventory_id");
        }
        
    }

}elseif($rows==0){
    $query="SELECT point FROM targets WHERE target_id =$job";
    $query_run=mysqli_query($connection,$query);
    $points=0;
    
    foreach($query_run as $data){
        $points=$data['point'];
    }
    $sql="INSERT INTO `performance_records`(
    `user_id`,
    `department_id`,
    `qr_number`,
    `job_description`,
    start_time,
     target
)
VALUES(
    '$user_id',
    '$department_id',
    '$inventory_id',
    '$job',
    '$current_date_time',
    '$points'
)";
$query_run = mysqli_query($connection,$sql);
header("Location: ../qc_dashboard_new.php");
}
}
?>