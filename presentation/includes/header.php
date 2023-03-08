 <?php
    $username = $_SESSION['username'];
    $department_id = $_SESSION['department_id'];
    $role_id = $_SESSION['role_id'];
    $user_id = $_SESSION['user_id'];
    $log_time_id = $_SESSION['log_time_id'];
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>Alsakb Computer | ERP</title>
     <link rel="icon" type="image/x-icon" href="./../../dist/img/alsakb logo.png">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="../../plugins/fontawesome/css/all.min.css" />
     <!-- Theme style -->
     <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
     <link rel="stylesheet" href="../../static/css/style.css">
     <!-- Select 2 -->
     <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
 </head>

 <style>
     .fas,
     .fa,
     .brands {
         font-size: 10px !important;
     }
 </style>

 <body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                         <i class="fas fa-bars"></i>
                     </a>
                 </li>
             </ul>


             <!-- Right navbar links -->
             <ul class="navbar-nav ml-auto">
                 <span class="mt-auto">Welcome <?php echo $username; ?>! <a href="../../logout.php?<?php echo "user_id='$user_id'&log_time_id='$log_time_id'"  ?>">Logout</a>
                 </span>
             </ul>
         </nav>
         <!-- /.navbar -->
         <?php require_once('navbar.php');
