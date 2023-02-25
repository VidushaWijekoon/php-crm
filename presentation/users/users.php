<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>
<div class="row">
    <div class="col-md-5">
        <a href="./admin_dashboard.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="">Users</h5>
                    <div class=""><input type="text" class="mx-2" placeholder="Search Users"></div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Username</th>
                        <th>Department</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT
                                users.user_name,
                                users.is_active,
                                employees.first_name,
                                employees.last_name,
                                employees.department_id,
                                employees.role_id,
                                users.emp_id,
                                users.user_id,
                                departments.department_id,
                                departments.department_name,
                                user_roles.role_id,
                                user_roles.role_name
                            FROM
                                users
                            INNER JOIN employees ON users.emp_id = employees.emp_id
                            LEFT JOIN departments ON employees.department_id = departments.department_id
                            LEFT JOIN user_roles ON employees.role_id = user_roles.role_id
                            ORDER BY users.emp_id ASC";
                    $run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($run)) {
                        $username = $row['user_name'];
                        $is_active = $row['is_active'];
                    ?>
                        <tr>
                            <td>
                                <a href="<?php echo "view_user.php?user_id={$row['user_id']}"  ?>"><?php echo $row['emp_id'] ?>
                                </a>
                            </td>
                            <td> <?php echo $row['first_name'] ?> </td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['department_name'] ?></td>
                            <td><?php echo $row['role_name'] ?></td>
                            <td>
                                <?php if ($is_active == 0) { ?>
                                    <span class="badge badge-danger">In-Active User</span>
                                <?php }
                                if ($is_active == 1) { ?>
                                    <span class="badge badge-success">Active User</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($is_active == 0) {
                                    echo "<a class='btn btn-xs mx-1' href=\"./addNew/activate_user.php?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want active this user?');\">
                                        <i class='fa-solid fa-circle-check' style='color: #218838;'></i>
                                    </a>";
                                };
                                if ($is_active == 1) {
                                    echo "<a class='btn btn-xs mx-1' href=\"./addNew/deactivate_user.php?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want inactive this user?');\">
                                        <i class='fa-solid fa-trash' style='color: red;'></i>
                                  </a>";
                                };
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>