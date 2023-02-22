<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="card-body">
                    <!-- ============================================================== -->
                    <!-- Emp ID  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Employee ID</p>
                        </div>
                        <div class="col-md-9">
                            <select name="emp_id" id="emp_id" class="w-75">
                                <option selected>--Select Employee ID--</option>
                                <?php
                                $query = "SELECT users.emp_id, employees.emp_id FROM employees LEFT JOIN users  ON users.emp_id = employees.emp_id WHERE users.emp_id IS NULL;";
                                $result = mysqli_query($connection, $query);

                                while ($emp_id = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                ?>
                                <option value="<?php echo $emp_id["emp_id"]; ?>">
                                    <?php echo strtoupper($emp_id["emp_id"]); ?>
                                </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- First Name  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">First Name</p>
                        </div>
                        <div class="col-md-9">
                            <select name="first_name" id="first_name" class="w-75"> </select>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Last Name  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Last Name</p>
                        </div>
                        <div class="col-md-9">
                            <select name="last_name" id="last_name" class="w-75"></select>

                            <!-- <input type="text" class="w-75" placeholder="Last Name" id="last_name" name="last_name"> -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Department  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Departmentt</p>
                        </div>
                        <div class="col-md-9">
                            <select name="department" id="department" class="w-75"></select>

                            <!-- <input type="text" class="w-75" placeholder="Deprtment" id="department"
                                    name="department"> -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Role  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Role</p>
                        </div>
                        <div class="col-md-9">
                            <select name="role_id" id="role_id" class="w-75"></select>

                            <!-- <input type="text" class="w-75" placeholder="Role" id="role" name="role"> -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Username  -->
                    <!-- ============================================================== -->
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Username</p>
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
                            <p class="card-text">Password</p>
                        </div>
                        <div class="col-md-9">
                            <input type="password" id="password" class="w-75" placeholder="Password" name="password_1">
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
                    <button class="btn btn-sm btn-success mx-auto mb-3">Submit</button>
                </div>
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