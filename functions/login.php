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
}