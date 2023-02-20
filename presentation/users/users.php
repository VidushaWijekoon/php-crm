<?php require_once('../includes/header.php'); ?>
<div class="row page-titles">
    <div class="col-md-5"><a href="./admin_dashboard.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Users</div>
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
                        <th>Role</th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><a href="./view_user.php">1</a></td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Prodution</td>
                        <td>
                            <span class="badge badge-success px-2 p-1">Active</span>
                        </td>
                        <td>
                            <i class="fa-solid fa-trash" style="color: #bb0000;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><a href="./view_user.php">2</a></td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Prodution</td>
                        <td>
                            <span class="badge badge-danger px-2 p-1">Inactive</span>
                        </td>
                        <td>
                            <i class="fa-solid fa-trash" style="color: #bb0000;"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>