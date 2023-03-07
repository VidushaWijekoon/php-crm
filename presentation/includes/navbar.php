         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <?php
                if ($department_id == 1 && $role_id == 1) { ?>
                 <a href="../includes/main" class="brand-link text-center mx-auto d-flex justify-content-center">
                     <img src="../../dist/img/alsakb logo1.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
                 </a>
             <?php }
                if ($department_id == 4 && $role_id == 4) {  ?>
                 <a href="../sales/sales_dashboard" class="brand-link text-center mx-auto d-flex justify-content-center">
                     <img src="../../dist/img/alsakb logo1.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
                 </a>
             <?php }
                if ($department_id == 18 && $role_id == 12) {  ?>
                 <a href="../management/manager_dashboard" class="brand-link text-center mx-auto d-flex justify-content-center">
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
                         <!-- ============================================================== -->
                         <!-- Home Pages  -->
                         <!-- ============================================================== -->
                         <?php
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item menu-open">
                                 <a href="../includes/main" class="nav-link active">
                                     <i class="nav-icon fas fa-home"></i>
                                     <p> Home Page </p>
                                 </a>
                             </li>
                         <?php }
                            if ($department_id == 4 && $role_id == 4) { ?>
                             <li class="nav-item menu-open">
                                 <a href="../sales/sales_dashboard" class="nav-link active">
                                     <i class="nav-icon fas fa-home"></i>
                                     <p> Home Page </p>
                                 </a>
                             </li>
                         <?php }
                            if ($department_id == 18 && $role_id == 12) { ?>
                             <li class="nav-item menu-open">
                                 <a href="../management/manager_dashboard" class="nav-link active">
                                     <i class="nav-icon fas fa-home"></i>
                                     <p> Home Page </p>
                                 </a>
                             </li>
                         <?php } ?>
                         <!-- ============================================================== -->
                         <!-- Admin & User Department  -->
                         <!-- ============================================================== -->
                         <?php if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-lock"></i>
                                     <p> Users <i class="right fas fa-angle-left"></i> </p>
                                 </a>

                                 <ul class="nav nav-treeview">
                                     <li class="nav-item">
                                         <a href="../users/admin_dashboard" class="nav-link">
                                             <i class="fa fa-user-circle nav-icon" style="font-size: 12px;"></i>
                                             <p> Admin </p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                             <!-- ============================================================== -->
                             <!-- HR Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>

                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-users"></i>
                                     <p> HR <i class="right fas fa-angle-left"></i> </p>
                                 </a>

                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../hr/hr_dashboard" class="nav-link">
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
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 4 && $role_id == 4)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-receipt"></i>
                                     <p> Sales <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">
                                     <li class="nav-item">
                                         <a href="../sales/all_orders" class="nav-link">
                                             <i class="fa-solid fa-files nav-icon" style="font-size: 12px;"></i>
                                             <p>Orders</p>
                                         </a>
                                     </li>

                                     <li class="nav-item">
                                         <a href="../sales/all_customers" class="nav-link">
                                             <i class="fa-solid fa-people nav-icon" style="font-size: 12px;"></i>
                                             <p>Customers</p>
                                         </a>
                                     </li>

                                     <li class="nav-item">
                                         <a href="../sales/daily_create_customer" class="nav-link">
                                             <i class="fa-solid fa-list nav-icon" style="font-size: 12px;"></i>
                                             <p>Daily Task</p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="../sales/sales_dashboard" class="nav-link">
                                             <i class="fa-solid fa-universal-access nav-icon" style="font-size: 12px;"></i>
                                             <p>Sales Dashboard</p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- E-Commerce Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa-brands brands fa-amazon"></i>
                                     <p> E-Commerce <i class="right fas fa-angle-left"></i> </p>
                                 </a>

                                 <ul class="nav nav-treeview">
                                     <li class="nav-item">
                                         <a href="../e-commerce/e_com_dashboard" class="nav-link">
                                             <i class="fa-brands brands fa-amazon nav-icon" style="font-size: 12px;"></i>
                                             <p> E-Commerce </p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>

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
                                         <a href="../accounts/accounts_dashboard" class="nav-link">
                                             <i class="fa fa-coins nav-icon" style="font-size: 12px;"></i>
                                             <p> Accounts </p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Inventory Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-warehouse"></i>
                                     <p> Inventory <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../inventory/inventory_team_leader_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p>Team Leader</p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="../inventory/inventory_member_dashboard" class="nav-link">
                                             <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                             <p>Team Member </p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Production Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa-solid fa-screwdriver"></i>
                                     <p> Production <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../production/prodution_team_leader_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p> Team Leader </p>
                                         </a>
                                     </li>

                                     <li class="nav-item">
                                         <a href="../production/production_technician_dashboard" class="nav-link">
                                             <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                             <p> Technician </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Part Inventory Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-screwdriver-wrench"></i>
                                     <p> Part Warehouse <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../part/part_inventory_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p>Leader Dashboard</p>
                                         </a>
                                     </li>

                                     <!-- Part -->
                                     <li class="nav-item">
                                         <a href="../part/part_stock" class="nav-link">
                                             <i class="fa fa-cubes nav-icon" style="font-size: 12px;"></i>
                                             <p>Part Stock Report</p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Motherboard Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-keyboard"></i>
                                     <p> Motherboard <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../motherboard/motherboard_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p>Motherboard</p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>
                             <!-- ============================================================== -->
                             <!-- LCD Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-tv"></i>
                                     <p> LCD <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../bodywork/bodywork_team_leader_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p> Team Leader </p>
                                         </a>
                                     </li>

                                     <li class="nav-item">
                                         <a href="../bodywork/bodywork_member_dashboard" class="nav-link">
                                             <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                             <p> Member </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>
                             <!-- ============================================================== -->
                             <!-- Bodywork Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-laptop"></i>
                                     <p> Bodywork <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../bodywork/bodywork_team_leader_dashboard" class="nav-link">
                                             <i class="fa-solid fa-user-pen nav-icon" style="font-size: 12px;"></i>
                                             <p> Team Leader </p>
                                         </a>
                                     </li>

                                     <li class="nav-item">
                                         <a href="../bodywork/bodywork_member_dashboard" class="nav-link">
                                             <i class="fa fa-chalkboard-user nav-icon" style="font-size: 12px;"></i>
                                             <p> Member </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Battery Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-battery"></i>
                                     <p> Battery <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../battery/battery_dashboard" class="nav-link">
                                             <i class="fa fa-battery nav-icon" style="font-size: 12px;"></i>
                                             <p> Battery </p>
                                         </a>

                                     </li>
                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Painting Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-spray-can"></i>
                                     <p> Painting <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../paint/paint_dashboard" class="nav-link">
                                             <i class="fa fa-spray-can nav-icon" style="font-size: 12px;"></i>
                                             <p> Painting </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- QC Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-stethoscope"></i>
                                     <p> QC <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../qc/qc_dashboard" class="nav-link">
                                             <i class="fa fa-stethoscope nav-icon" style="font-size: 12px;"></i>
                                             <p> QC </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>

                             <!-- ============================================================== -->
                             <!-- Packing Department  -->
                             <!-- ============================================================== -->
                         <?php }
                            if ($department_id == 1 && $role_id == 1) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fas fa-boxes"></i>
                                     <p> Packing <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../packing/packing_dashboard" class="nav-link">
                                             <i class="fa fa-boxes nav-icon" style="font-size: 12px;"></i>
                                             <p> Packing </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>
                             <!-- ============================================================== -->
                             <!-- Management  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="nav-icon fa fa-right-to-bracket"></i>
                                     <p> Management <i class="right fas fa-angle-left"></i> </p>
                                 </a>
                                 <ul class="nav nav-treeview">

                                     <li class="nav-item">
                                         <a href="../management/manager_dashboard" class="nav-link">
                                             <i class="fa-solid fa-right-to-bracket nav-icon" style="font-size: 12px;"></i>
                                             <p> Manager </p>
                                         </a>
                                     </li>

                                 </ul>
                             </li>
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 4 && $role_id == 4)) { ?>
                             <li class="nav-item">
                                 <a href="../performance/performance_inventory" class="nav-link">
                                     <i class="fa fa-clock nav-icon" style="font-size: 12px;"></i>
                                     <p>Performance</p>
                                 </a>
                             </li>
                         <?php } ?>
                         <li class="nav-header text-uppercase">Other</li>
                         <!-- ============================================================== -->
                         <!-- Laptop Inventory & Laptop Stock Count  -->
                         <!-- ============================================================== -->
                         <?php
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 4 && $role_id == 4) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="../laptop_inventory/laptop_inventory" class="nav-link">
                                     <i class="fas fa-laptop nav-icon" style="font-size: 12px;"></i>
                                     <p> Laptop Stock Report </p>
                                 </a>
                             </li>

                             <!-- ============================================================== -->
                             <!-- E-Commerce Inventory  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 4 && $role_id == 4)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa-brands fa-amazon nav-icon" style="font-size: 12px;"></i>
                                     <p> E-Commerce Inventory </p>
                                 </a>
                             </li>
                             <!-- ============================================================== -->
                             <!-- Part Stock Report  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa fa-cubes nav-icon" style="font-size: 12px;"></i>
                                     <p>Part Stock Report</p>
                                 </a>
                             </li>
                             <!-- ============================================================== -->
                             <!-- Battery  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa fa-battery-bolt nav-icon" style="font-size: 12px;"></i>
                                     <p>Battery Inventory</p>
                                 </a>
                             </li>
                             <!-- ============================================================== -->
                             <!-- LCD  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa fa-tv nav-icon" style="font-size: 12px;"></i>
                                     <p>LCD Inventory</p>
                                 </a>
                             </li>
                             <!-- ============================================================== -->
                             <!-- Charger  -->
                             <!-- ============================================================== -->
                         <?php }
                            if (($department_id == 1 && $role_id == 1) || ($department_id == 18 && $role_id == 12)) { ?>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa fa-plug nav-icon" style="font-size: 12px;"></i>
                                     <p>Charger Inventory</p>
                                 </a>
                             </li>
                         <?php } ?>
                     </ul>
                 </nav>
             </div>
         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <div class="content-header">
                 <div class="container-fluid">