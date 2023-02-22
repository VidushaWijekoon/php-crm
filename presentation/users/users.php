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
                    $query = "SELECT user_id, users.emp_id, employees.emp_id, is_active,department_id, first_name, last_name, username, role_id 
                                FROM users INNER JOIN employees ON users.emp_id = employees.emp_id";
                    $run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($run)) {
                        $username = $row['username'];
                        $is_active = $row['is_active'];
                    ?>
                        <tr>
                            <td>
                                <a href="<?php echo "view_user.php?user_id={$row['user_id']}"  ?>"><?php echo $row['emp_id'] ?>
                                </a>
                            </td>
                            <td> <?php echo $row['first_name'] ?> </td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['department_id'] ?></td>
                            <td><?php echo $row['role_id'] ?></td>
                            <td>
                                <?php if ($is_active == 0) { ?>
                                    <span class="badge badge-success">Active User</span>
                                <?php }
                                if ($is_active == 1) { ?>
                                    <span class="badge badge-danger">In-Active User</span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($is_active == 0) {
                                    echo "<a class='btn btn-xs mx-1' href=\"deactivate_user.php?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want inactive this user?');\">
                                        <i class='fa-solid fa-trash' style='color: red;'></i>
                                  </a>";
                                }
                                if ($is_active == 1) {
                                    echo "<a class='btn btn-xs mx-1' href=\"activate_user.php?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want active this user?');\">
                                        <i class='fa-solid fa-circle-check' style='color: #218838;'></i>
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