<?php 
ob_start();
session_start();    
require_once("../../dataAccess/db_authentication.php");
require_once("../includes/header.php"); 

// checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>

<style>
input[type="text"] {
    width: 340px;
}
</style>

<div class="row page-titles">
    <div class="col-md-5"><a href="./admin_dashboard.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2">
            <div class="card">
                <form action="">
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
                                        $query = "SELECT employees.emp_id FROM employees LEFT JOIN users ON employees.emp_id = users.emp_id 
                                                    WHERE users.emp_id IS NULL ORDER BY employees.emp_id ASC";
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
                                <select name="first_name" id="first_name" class="w-75"></select>

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
                                <input type="text" class="w-75" placeholder="Password" name="password_1">
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Confirm Password  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Confirm Password</p>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="w-75" placeholder="Confirm Password" name="password_2">
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
</div>