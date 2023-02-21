<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>
<style>
input[type="text"] {
    width: 340px;
}
</style>

<div class="row">
    <div class="col-md-5">
        <a href="./users.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>

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
                            <select name="emp_id" id="emp_id" class="w-100">
                                <option selected>--Select Employee ID--</option>

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
                            <input type="text" class="w-100" placeholder="First Name" name="first_name">
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
                            <input type="text" class="w-100" placeholder="Last Name" name="last_name">
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
                            <input type="text" class="w-100" placeholder="Deprtment" name="department">
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
                            <input type="text" class="w-100" placeholder="Role" name="role">
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
                            <input type="text" class="w-100" placeholder="Username" name="username">
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
                            <input type="text" class="w-100" placeholder="Password" name="password_1">
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
                            <input type="text" class="w-100" placeholder="Confirm Password" name="password_2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="./edit_user.php" class="btn btn-sm btn-info mx-auto mb-3">Edit</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php require_once('../includes/footer.php'); ?>