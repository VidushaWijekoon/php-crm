<?php
function Login($role_id, $department_id)
{
    //<!-- ============================================================== -->//
    //<!--- Super Admin -> Software Development --->
    //<!-- ============================================================== -->//
    if ($role_id == 1 && $department_id == 11) {
        header('Location: presentation/includes/main');
    }
    //<!-- ============================================================== -->//
    //<!--- Sales --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 4) {
        header('Location: presentation/sales/sales_dashboard');
    }

    //<!-- ============================================================== -->//
    //<!--- Manager --->
    //<!-- ============================================================== -->//
    if ($role_id == 12 && $department_id == 18) {
        header('Location: presentation/management/manager_dashboard');
    }
    //<!-- ============================================================== -->//
    //<!--- Production --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 1) {
        header('Location: presentation/performance/performance');
    }
    //<!-- ============================================================== -->//
    //<!--- Motherboard --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 9) {
        header('Location: presentation/performance/performance');
    }

    //<!-- ============================================================== -->//
    //<!--- bodywork --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 7) {
        header('Location: presentation/performance/performance');
    }
    //<!-- ============================================================== -->//
    //<!--- Inventory --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 2) {
        header('Location: presentation/inventory/inventory_team_leader_dashboard');
    }
    //<!-- ============================================================== -->//
    //<!--- Painting --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 8) {
        header('Location: presentation/performance/performance');
    }
    //<!-- ============================================================== -->//
    //<!--- battery --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 14) {
        header('Location: presentation/battery/performance_battery');
    }
    //<!-- ============================================================== -->//
    //<!--- Sticker --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 22) {
        header('Location: presentation/performance/performance');
    }
    //<!-- ============================================================== -->//
    //<!--- cleaning --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 23) {
        header('Location: presentation/performance/performance');
    }
    //<!-- ============================================================== -->//
    //<!--- Packing --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 13) {
        header('Location: presentation/packing/packing_flow_new');
    }
    //<!-- ============================================================== -->//
    //<!--- QC --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 19) {
        header('Location: presentation/qc/qc_dashboard_new');
    }
     //<!-- ============================================================== -->//
    //<!--- QC --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 19) {
       header('Location: presentation/qc/qc_dashboard_new');
    }
}