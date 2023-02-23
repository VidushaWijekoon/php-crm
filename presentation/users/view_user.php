<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');


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

$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);

$query = "SELECT user_id, first_name, last_name, username, users.emp_id, employees.emp_id, employees.department_id, employees.role_id,
                    departments.department_id, departments.department_name, user_roles.role_id, user_roles.role_name 
                    FROM users 
            INNER JOIN employees ON users.emp_id = employees.emp_id
            LEFT JOIN departments ON employees.department_id = departments.department_id
            LEFT JOIN user_roles ON employees.role_id = user_roles.role_id
            WHERE user_id = '$user_id'";
$run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_array($run)) {
    $user_id = $row['user_id'];
    $username = $row['username'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $department = $row['department_name'];
    $role = $row['role_name'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $department_id = mysqli_real_escape_string($connection, $_POST['department_id']);
    $role_id = mysqli_real_escape_string($connection, $_POST['role_id']);

    // $update_query = "UPDATE employees SET employees WHERE department_id = 'department_id' AND role_id = '$role_id' AND  ";
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
        <a href="./users.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
                                <input type="text" class="w-75" value="<?php echo $user_id; ?>" name="first_name"
                                    readonly>
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
                                <input type="text" class="w-75" value="<?php echo $first_name ?>" name="first_name"
                                    readonly>
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
                                <input type="text" class="w-75" value="<?php echo $last_name ?>" name="last_name"
                                    readonly>
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
                                <select name="department" class="mt-1 w-75 text-capitalize" style="border-radius: 5px;">
                                    <?php if ($department != 0) { ?>
                                    <option value="<?php echo $department ?>" selected>
                                        <?php echo $department ?></option>
                                    <?php } else { ?>
                                    <option value="" selected><?php echo "Please select" ?>
                                    </option>
                                    <?php } ?>

                                    <?php
                                    $query = "SELECT * FROM departments ORDER BY 'department_name' ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($x = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                    ?>
                                    <option value="<?php echo $x["department_id"]; ?>">
                                        <?php echo $x["department_name"]; ?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
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
                                <select name="role" class="mt-1 w-75 text-capitalize" style="border-radius: 5px;">
                                    <?php if ($role != 0) { ?>
                                    <option value="<?php echo $role ?>" selected>
                                        <?php echo $role ?></option>
                                    <?php } else { ?>
                                    <option value="" selected><?php echo "Please select" ?>
                                    </option>
                                    <?php } ?>

                                    <?php
                                    $query = "SELECT * FROM user_roles ORDER BY 'role_name' ASC";
                                    $result = mysqli_query($connection, $query);

                                    while ($x = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                    ?>
                                    <option value="<?php echo $x["role_id"]; ?>">
                                        <?php echo $x["role_name"]; ?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
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
                                <input type="text" class="w-75" value="<?php echo $username; ?>" name="username"
                                    readonly>
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
                                <input type="password" id="password" class="w-75" placeholder="Password"
                                    name="password_1">
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
                        <button type="submit" class="btn btn-xs btn-info mx-auto mb-3">Update User</button>
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

<?php require_once('../includes/footer.php'); ?>