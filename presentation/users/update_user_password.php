<?php

ob_start();
session_start();
require_once("../includes/header.php");
require_once("../../functions/db_connection.php");


// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$emp_id = 0;
$user_id = 0;
$first_name = '';
$last_name = '';
$department = '';
$role = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);

    $query = "SELECT users.emp_id AS user_emp_id, user_id, first_name, last_name, user_name, users.emp_id, employees.emp_id, employees.department_id, employees.role_id,
                    departments.department_id, departments.department_name, user_roles.role_id, user_roles.role_name 
                    FROM users 
            INNER JOIN employees ON users.emp_id = employees.emp_id
            LEFT JOIN departments ON employees.department_id = departments.department_id
            LEFT JOIN user_roles ON employees.role_id = user_roles.role_id
            WHERE users.user_id = '$user_id'";
    $run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($run)) {
        $user_id = $row['user_emp_id'];
        $username = $row['user_name'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $department = $row['department_name'];
        $role = $row['role_name'];

        $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        $update_query = "UPDATE users SET user_password = '$hashed_password' WHERE user_id = '$user_id' ";
        echo $update_query;
        $run = mysqli_query($connection, $update_query);
        if ($run) {
            header("Location: users.php");
        }
    }
}
?>
<style>
    input[type="text"] {
        width: 240px;
        padding: 0 5px;
    }
</style>

<div class="row">
    <div class="col-md-5">
        <a href="./users">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #0c2e5b;"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form method="POST" action="">
                <fieldset class="mx-3 mb-3 mt-2">
                    <legend>Create New User</legend>
                    <div class="card-body">
                        <!-- ============================================================== -->
                        <!-- Emp ID  -->
                        <!-- ============================================================== -->
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <p class="card-text">Employee ID</p>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="w-75" value="<?php echo $user_id; ?>" readonly>
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
                                <input type="text" class="w-75" value="<?php echo $first_name ?>" readonly>
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
                                <input type="text" class="w-75" value="<?php echo $last_name ?>" readonly>
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
                                <input type="text" class="w-75" value="<?php echo $department ?>" readonly>
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
                                <input type="text" class="w-75 text-capitalize" value="<?php echo $role ?>" readonly>

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
                                <input type="text" class="w-75 text-capitalize" value="<?php echo $username; ?>" readonly>
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
                                <input type="password" id="password" class="w-75" placeholder="Create New Password" name="password">
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
                        <button type="submit" name="submit" class="btn btn-xs btn-info mx-auto mb-3">Update User</button>
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

<?php require_once('../includes/footer.php') ?>