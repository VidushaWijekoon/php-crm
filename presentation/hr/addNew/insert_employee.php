<?php

session_start();
require_once("../../../functions/db_connection.php");

$username = $_SESSION['username'];

// Check Existed Employee


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
    $old_passport = mysqli_real_escape_string($connection, $_POST['old_passport']);
    $current_passport = mysqli_real_escape_string($connection, $_POST['current_passport']);
    $passport_expiring_date = mysqli_real_escape_string($connection, $_POST['passport_expiring_date']);
    $visa_type = mysqli_real_escape_string($connection, $_POST['visa_type']);
    $visa_expiring_date = mysqli_real_escape_string($connection, $_POST['visa_expiring_date']);
    $contact_number = mysqli_real_escape_string($connection, $_POST['contact_number']);
    $current_address = mysqli_real_escape_string($connection, $_POST['current_address']);
    $permanent_address = mysqli_real_escape_string($connection, $_POST['permanent_address']);
    $resident_country = mysqli_real_escape_string($connection, $_POST['resident_country']);
    $emergency_contact = mysqli_real_escape_string($connection, $_POST['emergency_contact']);
    $profile_photo = mysqli_real_escape_string($connection, $_POST['profile_photo']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);
    $join_date = mysqli_real_escape_string($connection, $_POST['join_date']);
    $note = mysqli_real_escape_string($connection, $_POST['note']);



    $query = "INSERT INTO employees(
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
        department_id,
        role_id,
        join_date,
        note,
        created_by,
        created_time
    )
    VALUES(
        '$first_name',
        '$last_name',
        '$full_name',
        '$email',
        '$gender',
        '$birthday',
        '$old_passport',
        '$current_passport',
        '$passport_expiring_date',
        '$visa_type',
        '$visa_expiring_date',
        '$contact_number',
        '$current_address',
        '$permanent_address',
        '$resident_country',
        '$emergency_contact',
        '$profile_photo',
        '$department',
        '$role',
        '$join_date',
        '$note',
        '$username',
        now()
    )";
    $query_run = mysqli_query($connection, $query);
    header("Location: ../employees.php");
}
