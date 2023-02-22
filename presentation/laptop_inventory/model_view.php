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
        <a href="model_summery.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-11 col-lg-11 justify-content-center mx-auto mt-1">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">DELL LATITUDE E5480</div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>core</th>
                                <th>Generation</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Dispatch</th>
                                <th>Touch Screen Count</th>
                                <th>Non Touch Count</th>
                                <th>Touch Wholesale Price</th>
                                <th>Non Touch Wholesale Price</th>
                                <th>No Battery Count</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($a = 1; $a <= 10; $a++) { ?>

                                <tr>
                                    <td>1</td>
                                    <td>dell</td>
                                    <td>latitude e5480</td>
                                    <td>i3-7100u</td>
                                    <td>7</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0
                                    </td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td></td>
                                    <td> </td>
                                    <td>0 </td>
                                    <td class="text-center">
                                        <a class="" href="./model_asin.php">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>