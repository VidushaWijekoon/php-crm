<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="laptop_inventory.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <button class="btn btn-xs btn-primary">Download Excel File</button>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>Brand : <span>###</span>
                        <div class="mt-2">TOTAL NUMBER OF MODEL : <span>###</span></div>
                    </div>

                    <div class=""><input type="text" class="mx-2" placeholder="Search By Model">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Processing</th>
                                <th>Dispatch</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="cell-1" data-toggle="collapse">
                                <td>1</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>816</td>
                                <td>816</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>