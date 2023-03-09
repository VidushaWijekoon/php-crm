<?php
$connection = mysqli_connect("localhost", "root", "", "main_project");

if (isset($_GET['device'])) {

    $device = mysqli_real_escape_string($connection, $_GET['device']);
    $query         = "SELECT DISTINCT brand FROM main_inventory_informations WHERE device = '{$device}'";
    $result_set = mysqli_query($connection, $query);

    $brand_list = "<option selected>--Select Brand--</option>";
    while ($result = mysqli_fetch_assoc($result_set)) {
        $brand_list .= "<option value=\"{$result['brand']}\" class='info_select'>{$result['brand']}</option>";
    }
    echo $brand_list;
}

if (isset($_GET['brand'])) {

    $brand = mysqli_real_escape_string($connection, $_GET['brand']);
    $query         = "SELECT DISTINCT model FROM main_inventory_informations WHERE brand = '{$brand}'";
    $result_set = mysqli_query($connection, $query);

    $model_list = "<option selected>--Select Model--</option>";
    while ($result = mysqli_fetch_assoc($result_set)) {
        $model_list .= "<option value=\"{$result['model']}\" class='info_select'>{$result['model']}</option>";
    }
    echo $model_list;
}

if (isset($_GET['model'])) {

    $model = mysqli_real_escape_string($connection, $_GET['model']);
    $query         = "SELECT DISTINCT processor FROM main_inventory_informations WHERE model = '{$model}'";
    $result_set = mysqli_query($connection, $query);

    $processor_list = "<option selected>--Select Processor--</option>";
    while ($result = mysqli_fetch_assoc($result_set)) {
        $processor_list .= "<option value=\"{$result['processor']}\" class='info_select'>{$result['processor']}</option>";
    }
    echo $processor_list;
}

mysqli_close($connection);
