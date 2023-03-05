<?php

include_once('../../functions/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $first_name = $_POST['first_name'];
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $check = mysqli_real_escape_string($connection, $_POST['check']);


    // insert
    $query = "INSERT INTO `test`(`first_name`, `last_name`, `gender`, `location`, `email`, `password`, `check`)
 VALUES ('$first_name','$last_name','$gender','$location','$email','$password','$check')";

    // echo $query;
    $a = mysqli_query($connection, $query);

    if ($a) {
        header("Location: ./test?id=1");
    } else {
    }
    // if (isset($_POST[''])) {
    // }
}