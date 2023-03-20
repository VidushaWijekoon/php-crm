<?php
ob_start();
session_start();
include_once('../../functions/403.php');

$role_id = $_SESSION['role_id'];
$department_id = $_SESSION['department_id'];

// User Authentication
if ($role_id = 1 && $department_id == 11) {

    // checking if a user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../../index.php');
    }

    include_once('../includes/header.php');
    include_once('../../functions/db_connection.php');

?>
<style>
.pagination {
    width: 100%;
    display: flex;
    justify-content: flex-end;

}

.page-item .active .page-link {
    background-color: #168EB4;
    border-color: #168EB4;
}

.pagination a {
    font-weight: bold;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    /* border: 1px solid black; */
}

.pagination a.active {
    background-color: #168EB4;
    color: #fff;
}

.pagination a:hover:not(.active) {
    background-color: skyblue;
}
</style>

<div class="row">
    <div class="col-md-5">
        <a href="./admin_dashboard">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #0c2e5b;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="">Users</h5>
                    <div class="">
                        <input type="text" class="mx-2 w-75" placeholder="Search Users">
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
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

                            $user_id = 0;
                            $per_page_record = 10;

                            if (isset($_GET["page"])) {
                                $page  = $_GET["page"];
                            } else {
                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page_record;

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
                            ORDER BY users.emp_id ASC
                            LIMIT $start_from, $per_page_record";
                            $run = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($run)) {
                                $username = $row['user_name'];
                                $is_active = $row['is_active'];
                            ?>
                        <tr>
                            <td>
                                <a href="<?php echo "update_user_password?user_id={$row['user_id']}"  ?>"><?php echo $row['emp_id'] ?>
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
                                            echo "<a class='btn btn-xs mx-1' href=\"./addNew/activate_user?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want active this user?');\">
                                        <i class='fa-solid fa-circle-check' style='color: #218838;'></i>
                                    </a>";
                                        };
                                        if ($is_active == 1) {
                                            echo "<a class='btn btn-xs mx-1' href=\"./addNew/deactivate_user?user_id={$row['user_id']}\" 
                                        onclick=\"return confirm('Are you sure $username want inactive this user?');\">
                                        <i class='fa-solid fa-trash' style='color: red;'></i>
                                  </a>";
                                        };
                                        echo "<a class='btn btn-xs mx-1' href=\"./login_logout_monitor?user_id={$row['user_id']}\">
                                        <i class='fa-solid fa-eye' style='color: #168eb4;'></i>
                                  </a>";
                                        ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php

                    $pagLink = "";
                    $query = "SELECT COUNT(*) FROM users";
                    $rs_result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];

                    echo "</br>";
                    // Number of pages required.   
                    $total_pages = ceil($total_records / $per_page_record);
                    $pagLink = "";

                    ?>
                <div class="row">
                    <div class="col">
                        <p class="">Showing <?php echo $page ?>/<?php echo $total_pages ?> of <?php echo $total_pages ?>
                            Entries</p>
                    </div>
                    <div class="col">
                        <div class="pagination">
                            <?php

                                if ($page >= 2) {
                                    echo "<a class='page-link' href='users.php?page=" . ($page - 1) . "'>  Prev </a>";
                                }

                                for ($i = 1; $i <= $total_pages; $i++) {

                                    if ($i == $page) {
                                        $pagLink .= "<a class='active'href='users.php?page=" . $i . "'>" . $i . " </a>";
                                    } else {
                                        $pagLink .= "<a class='page-item page-link' href='users.php?page=" . $i . "'> " . $i . " </a>";
                                    }
                                };
                                echo $pagLink;

                                if ($page < $total_pages) {
                                    echo "<a class='page-link' href='users.php?page=" . ($page + 1) . "'>  Next </a>";
                                }

                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function go2Page() {
    var page = document.getElementById("page").value;
    var user_id = document.getElementById("page").value;
    page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
    window.location.href = 'users.php?page=' + page;
}
</script>

<?php include_once('../includes/footer.php');
} else {
    die(access_denied());
} ?>