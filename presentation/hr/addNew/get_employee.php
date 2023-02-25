<?php

$first_name = '';
$last_name = '';
$full_name = '';
$email = '';
$gender = '';
$birthday = '';
$old_passport = '';
$current_passport = '';
$passport_expiring_date = '';
$visa_expiring_date = '';
$contact_number = '';
$current_address = '';
$permanent_address = '';
$visa_type = '';
$country_name = '';
$emergency_contact = '';
$profile_photo = '';
$department = '';
$role = '';
$join_date = '';
$note = '';

$username = $_SESSION['user_name'];
$emp_id = mysqli_real_escape_string($connection, $_GET['emp_id']);

$query = "SELECT 
    emp_id, 
    first_name,
    last_name,
    full_name,
    email,
    gender,
    birthday,
    old_passport,
    current_passport,
    passport_expiring_date,
    visa_type,
    visa_expiring_date,
    contact_number,
    current_address,
    permanent_address,
    resident_country,
    emergency_contact,
    profile_photo,
    join_date,
    note,
    departments.department_id,
    department_name,
    user_roles.role_id,
    role_name
FROM
    employees
LEFT JOIN departments ON employees.department_id = departments.department_id
LEFT JOIN user_roles ON employees.role_id = user_roles.role_id WHERE emp_id = '$emp_id'";
$run = mysqli_query($connection, $query);
while ($x = mysqli_fetch_array($run)) {
    $emp_id = $x['emp_id'];
    $first_name = $x['first_name'];
    $last_name = $x['last_name'];
    $full_name = $x['full_name'];
    $email = $x['email'];
    $gender = $x['gender'];
    $birthday = $x['birthday'];
    $old_passport = $x['old_passport'];
    $current_passport = $x['current_passport'];
    $passport_expiring_date = $x['passport_expiring_date'];
    $visa_type = $x['visa_type'];
    $visa_expiring_date = $x['visa_expiring_date'];
    $contact_number = $x['contact_number'];
    $current_address = $x['current_address'];
    $permanent_address = $x['permanent_address'];
    $resident_country = $x['resident_country'];
    $emergency_contact = $x['emergency_contact'];
    $profile_photo = $x['profile_photo'];
    $department = $x['department_id'];
    $role = $x['role_id'];
    $join_date = $x['join_date'];
    $note = $x['note'];
}
