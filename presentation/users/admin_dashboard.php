<?php require_once('../includes/header.php') ?>

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
        <i class="pageNameIcon fa-solid fa-store"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;"> Admin
            Dashboard</h6>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <a class="btn dashboard-btn btn-sm" href="./create_user.php"><i class="fa fa-plus"
                style="font-weight: bold; font-size: 14px;"></i><span class="mx-1">Add
                Users</span></a>
        <a class="btn dashboard-btn mx-2 btn-sm" href="./users.php"><i class="fa fa-plus"></i><span
                class="mx-1">Disciplinary
                List</span></a>
    </div>
</div>
<?php require_once('../includes/footer.php') ?>