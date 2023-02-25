<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
    input[type="text"] {
        width: 340px;
        padding: 0 5px;
    }
</style>

<div class="row">
    <div class="col-md-5">
        <a href="./admin_dashboard.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form action="./addNew/create_user.php" method="POST">
                <fieldset class="mx-3 mb-3 mt-2">
                    <legend>Create New User</legend>
                    <div class="card-body">
                        <!-- ============================================================== -->
                        <!-- Emp ID  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Employee ID <span style="color: red">*</span></p>
                            </div>
                            <div class="col-md-9">
                                <select name="emp_id" id="emp_id" class="w-75">
                                    <option selected>--Select Employee ID--</option>
                                    <?php
                                    $query = "SELECT users.emp_id, employees.emp_id, first_name, last_name
                                                FROM employees LEFT JOIN users  ON users.emp_id = employees.emp_id WHERE users.emp_id IS NULL;";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $row["emp_id"]; ?>">
                                            <?php echo strtoupper($row["emp_id"]); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- First Name  -->
                        <!-- ============================================================== -->
                        <!-- <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">First Name</p>
                            </div>
                            <div class="col-md-9">
                                <select name="first_name" id="first_name" class="w-75"> </select>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- Last Name  -->
                        <!-- ============================================================== -->
                        <!-- <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Last Name</p>
                            </div>
                            <div class="col-md-9">
                                <select name="last_name" id="last_name" class="w-75"></select> -->

                        <!-- <input type="text" class="w-75" placeholder="Last Name" id="last_name" name="last_name"> -->
                        <!-- </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- Department  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Department <span style="color: red">*</span></p>
                            </div>
                            <div class="col-md-9">
                                <select name="department" class="w-75" required style="border-radius: 5px;">
                                    <option selected>--Select Department--</option>
                                    <?php
                                    $query = "SELECT * FROM departments ORDER BY department_name ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($x = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $x["department_id"]; ?>">
                                            <?php echo strtoupper($x["department_name"]); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Role  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Role <span style="color: red">*</span></p>
                            </div>
                            <div class="col-md-9">
                                <select name="role" class="w-75" required style="border-radius: 5px;">
                                    <option selected>--Select Role--</option>
                                    <?php
                                    $query = "SELECT * FROM user_roles ORDER BY role_name ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $row["role_id"]; ?>">
                                            <?php echo strtoupper($row["role_name"]); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Username  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Username <span style="color: red">*</span></p>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="w-75" placeholder="Username" name="username">
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Password  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Password <span style="color: red">*</span></p>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="password" class="w-75" placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <input type="checkbox" onclick="showPassword()" style="width:20px;height:20px">
                                    <p class="mt-1 mx-2">Show Password</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-xs btn-success mx-auto mb-3">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>