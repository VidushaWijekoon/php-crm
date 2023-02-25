<?php
function Login($role_id, $department_id)
{
    // Super Admin -> Software Development
    if ($role_id == 1 && $department_id == 1) {
        header('Location: presentation/includes/main.php');
    }
}
