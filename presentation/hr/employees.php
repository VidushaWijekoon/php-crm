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
.fas,
.fa {
    font-size: 14px !important;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 5px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
}
</style>

<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-users"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;"> All Employees</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Employees</div>
                    <div class=""><input type="text" class="mx-2" placeholder="Search Users"></div>
                </div>
            </div>
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
                    
                        $query = "SELECT emp_id, full_name, resident_country, join_date, departments.department_id, department_name, user_roles.role_id, role_name 
                                    FROM employees
                                    LEFT JOIN departments ON employees.department_id = departments.department_id
                                    LEFT JOIN user_roles ON employees.role_id = user_roles.role_id;";
                        $query_run = mysqli_query($connection, $query);
                        foreach($query_run as $row){
                            $emp_id = $row['emp_id'];
                            $resident_country = $row['resident_country'];
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
                            <i class="fa-solid  fa-pen-to-square" style="color: red;"></i>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php') ?>