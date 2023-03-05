<?php
function Login($role_id, $department_id)
{
    //<!-- ============================================================== -->//
    //<!--- Super Admin -> Software Development --->
    //<!-- ============================================================== -->//
    if ($role_id == 1 && $department_id == 1) {
        header('Location: presentation/includes/main');
    }
    //<!-- ============================================================== -->//
    //<!--- Sales --->
    //<!-- ============================================================== -->//
    if ($role_id == 4 && $department_id == 4) {
        header('Location: presentation/sales/sales_dashboard');
    }
}
