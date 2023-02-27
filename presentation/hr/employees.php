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
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-users"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;"> All Employees</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Employees</div>
                    <div class=""><input type="text" class="w-75 px-2" placeholder="Search Employee ID"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>Join Date</th>
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

                        $query = "SELECT emp_id, full_name, resident_country, join_date, first_name, departments.department_id, department_name, user_roles.role_id, role_name 
                                    FROM employees
                                    LEFT JOIN departments ON employees.department_id = departments.department_id
                                    LEFT JOIN user_roles ON employees.role_id = user_roles.role_id";
                        $query_run = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_array($query_run)) {
                            $emp_id = $row['emp_id'];
                            $resident_country = $row['resident_country'];
                            $first_name = $row['first_name'];
                            $full_name = $row['full_name'];
                            $join_date = $row['join_date'];
                            $department = $row['department_name'];
                            $role = $row['role_name'];

                        ?>
                            <tr>
                                <td>
                                    <?php echo "<a href=\"view_employee.php?emp_id={$row['emp_id']}\">$emp_id</a>" ?>
                                </td>
                                <td class="text-capitalize"><?php echo $full_name ?></td>
                                <td><?php echo $department ?></td>
                                <td><?php echo $role ?></td>
                                <td class="text-capitalize"><?php echo $resident_country ?></td>
                                <td>
                                    <span class="badge badge-success px-2 p-1">Active</span>
                                </td>
                                <td><?php echo $join_date ?></td>
                                <td>
                                    <?php

                                    echo "<a class='btn btn-xs mx-1 text-danger' href=\"./addNew/remove_employee.php?emp_id={$row['emp_id']}\">
                                        <i class='fa-sharp fa-solid fa-circle-xmark' style='font-size: 15px;'></i>
                                    </a>";

                                    echo "<a class='btn btn-xs text-primary mx-1' href=\"./view_emp.php?emp_id={$row['emp_id']}\">
                                        <i class='fa-solid fa-eye' style='font-size: 15px;'></i>
                                    </a>";

                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php
                    $query = "SELECT COUNT(*) FROM users";
                    $rs_result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];

                    echo "</br>";
                    // Number of pages required.   
                    $total_pages = ceil($total_records / $per_page_record);
                    $pagLink = "";

                    if ($page >= 2) {
                        echo "<a class='page-link' href='employees.php?page=" . ($page - 1) . "'>  Prev </a>";
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {

                        if ($i == $page) {
                            $pagLink .= "<a class='active'href='employees.php?page=" . $i . "'>" . $i . " </a>";
                        } else {
                            $pagLink .= "<a class='page-item page-link' href='employees.php?page=" . $i . "'> " . $i . " </a>";
                        }
                    };
                    echo $pagLink;

                    if ($page < $total_pages) {
                        echo "<a class='page-link' href='employees.php?page=" . ($page + 1) . "'>  Next </a>";
                    }

                    ?>
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
        window.location.href = 'employees.php?page=' + page;
    }
</script>

<?php require_once('../includes/footer.php') ?>