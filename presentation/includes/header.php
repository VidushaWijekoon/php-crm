 <?php
    require_once("footer.php");
    require_once('../../functions/db_connection.php');
    $username = $_SESSION['username'];
    $department_id = $_SESSION['department_id'];
    $role_id = $_SESSION['role_id'];
    $log_in_id = $_SESSION['log_time_id'];
    $user_id = $_SESSION['user_id'];

    $query = "UPDATE users_logged_in_time SET log_out_time = NOW() WHERE user_id = '$user_id' AND id = '$log_in_id' LIMIT 1";
    $run = mysqli_query($connection, $query);

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
                 <span class="mt-auto">Welcome <?php echo $username; ?>! <a href="../../logout.php">Logout</a>
                 </span>
         </nav>
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <?php if ($department_id == 1 && $role_id == 1) { ?>
                 <a href="../includes/main.php" class="brand-link text-center mx-auto d-flex justify-content-center">
                     <img src="../../dist/img/alsakb logo1.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
                 </a>
             <?php } ?>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>

                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <?php if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item menu-open">
                                 <a href="../includes/main.php" class="nav-link active">
                                     <i class="nav-icon fas fa-home"></i>
                                     <p> Home Page </p>
                                 </a>
                             </li>
                         <?php } ?>
                         <!-- ============================================================== -->
                         <!-- Admin & User Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-lock"></i>
                                 <p> Users <i class="right fas fa-angle-left"></i> </p>
                             </a>

                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="../users/admin_dashboard.php" class="nav-link">
                                         <i class="fa fa-user-circle nav-icon" style="font-size: 12px;"></i>
                                         <p> Admin </p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <!-- ============================================================== -->
                         <!-- HR Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-users"></i>
                                 <p> HR <i class="right fas fa-angle-left"></i> </p>
                             </a>

                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../hr/hr_dashboard.php" class="nav-link">
                                         <i class="fa fa-user nav-icon" style="font-size: 12px;"></i>
                                         <p> HR </i>
                                         </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>
                         <!-- ============================================================== -->
                         <!-- Sales Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-receipt"></i>
                                 <p> Sales <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="fa fa-landmark nav-icon" style="font-size: 12px;"></i>
                                         <p>
                                             Sales
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../sales/all_orders.php" class="nav-link">
                                                 <i class="fa-solid fa-files nav-icon" style="font-size: 12px;"></i>
                                                 <p>Orders</p>
                                             </a>
                                         </li>

                                         <li class="nav-item">
                                             <a href="../sales/all_customers.php" class="nav-link">
                                                 <i class="fa-solid fa-people nav-icon" style="font-size: 12px;"></i>
                                                 <p>Customers</p>
                                             </a>
                                         </li>

                                         <li class="nav-item">
                                             <a href="../sales/sales_assistant_daily_task.php" class="nav-link">
                                                 <i class="fa-solid fa-list nav-icon" style="font-size: 12px;"></i>
                                                 <p>Daily Task</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../sales/sales_dashboard.php" class="nav-link">
                                                 <i class="fa-solid fa-universal-access nav-icon" style="font-size: 12px;"></i>
                                                 <p>Sales Dashboard</p>
                                             </a>
                                         </li>

                                     </ul>
                                 </li>

                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- E-Commerce Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-brands brands fa-amazon"></i>
                                 <p> E-Commerce <i class="right fas fa-angle-left"></i> </p>
                             </a>

                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="../e-commerce/e_com_dashboard.php" class="nav-link">
                                         <i class="fa-brands brands fa-amazon nav-icon" style="font-size: 12px;"></i>
                                         <p> E-Commerce </p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Accounts Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-coins"></i>
                                 <p> Finance <i class="right fas fa-angle-left"></i> </p>
                             </a>

                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="../accounts/accounts_dashboard.php" class="nav-link">
                                         <i class="fa fa-coins nav-icon" style="font-size: 12px;"></i>
                                         <p> Accounts </p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Inventory Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-warehouse"></i>
                                 <p> Inventory <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../inventory/inventory_team_leader_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p>Team Leader</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../inventory/inventory_member_dashboard.php" class="nav-link">
                                         <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                         <p>Team Member </p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Production Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-screwdriver"></i>
                                 <p> Production <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../production/prodution_team_leader_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p> Team Leader </p>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="../production/production_technician_dashboard.php" class="nav-link">
                                         <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                         <p> Technician </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Part Inventory Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-screwdriver-wrench"></i>
                                 <p> Part Warehouse <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../part/part_inventory_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p>Leader Dashboard</p>
                                     </a>
                                 </li>

                                 <!-- Part -->
                                 <li class="nav-item">
                                     <a href="../part/part_stock.php" class="nav-link">
                                         <i class="fa fa-cubes nav-icon" style="font-size: 12px;"></i>
                                         <p>Part Stock Report</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Motherboard Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-keyboard"></i>
                                 <p> Motherboard <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../motherboard/motherboard_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p>Motherboard</p>
                                     </a>
                                 </li>

                             </ul>
                         </li>
                         <!-- ============================================================== -->
                         <!-- LCD Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-tv"></i>
                                 <p> LCD <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../bodywork/bodywork_team_leader_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p> Team Leader </p>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="../bodywork/bodywork_member_dashboard.php" class="nav-link">
                                         <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                         <p> Member </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>
                         <!-- ============================================================== -->
                         <!-- Bodywork Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-laptop"></i>
                                 <p> Bodywork <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../bodywork/bodywork_team_leader_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                         <p> Team Leader </p>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="../bodywork/bodywork_member_dashboard.php" class="nav-link">
                                         <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                         <p> Member </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Battery Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-battery"></i>
                                 <p> Battery <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../battery/battery_dashboard.php" class="nav-link">
                                         <i class="fa fa-battery nav-icon" style="font-size: 12px;"></i>
                                         <p> Battery </p>
                                     </a>

                                 </li>
                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Painting Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-spray-can"></i>
                                 <p> Painting <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../paint/paint_dashboard.php" class="nav-link">
                                         <i class="fa fa-spray-can nav-icon" style="font-size: 12px;"></i>
                                         <p> Painting </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- QC Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-stethoscope"></i>
                                 <p> QC <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../qc/qc_dashboard.php" class="nav-link">
                                         <i class="fa fa-stethoscope nav-icon" style="font-size: 12px;"></i>
                                         <p> QC </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                         <!-- ============================================================== -->
                         <!-- Packing Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-boxes"></i>
                                 <p> Packing <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../packing/packing_dashboard.php" class="nav-link">
                                         <i class="fa fa-boxes nav-icon" style="font-size: 12px;"></i>
                                         <p> Packing </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>
                         <!-- ============================================================== -->
                         <!-- Management  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa fa-right-to-bracket"></i>
                                 <p> Management <i class="right fas fa-angle-left"></i> </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="../management/manager_dashboard.php" class="nav-link">
                                         <i class="fa-solid fa-right-to-bracket nav-icon" style="font-size: 12px;"></i>
                                         <p> Manager </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                         <li class="nav-header text-uppercase">Other</li>
                         <!-- ============================================================== -->
                         <!-- Laptop Inventory & Laptop Stock Count  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="../laptop_inventory/laptop_inventory.php" class="nav-link">
                                 <i class="fas fa-laptop nav-icon" style="font-size: 12px;"></i>
                                 <p> Laptop Inventory </p>
                             </a>
                         </li>
                         <!-- ============================================================== -->
                         <!-- Ready Stock Department  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fa-solid fa-signal-bars nav-icon" style="font-size: 12px;"></i>
                                 <p> Ready Stock Inventory </p>
                             </a>
                         </li>
                         <!-- ============================================================== -->
                         <!-- E-Commerce Inventory  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fa-brands fa-amazon nav-icon" style="font-size: 12px;"></i>
                                 <p> E-Commerce Inventory </p>
                             </a>
                         </li>
                         <!-- ============================================================== -->
                         <!-- Part Stock Report  -->
                         <!-- ============================================================== -->
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fa fa-cubes nav-icon" style="font-size: 12px;"></i>
                                 <p>Part Stock Report</p>
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <div class="content-header">
                 <div class="container-fluid">