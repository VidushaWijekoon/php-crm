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
        <a href="model_view.php">
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
                                <th class="text-center">Asin</th>
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
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><a href="./model_spec_view.php">B07NYTMHQS</a></td>
                                <td>Dell</td>
                                <td>LATITUDE E5480</td>
                                <td>I3-7100U</td>
                                <td>7</td>
                                <td>100</td>
                                <td>90</td>
                                <td>10</td>
                                <td>45</td>
                                <td>55</td>
                                <td>$150</td>
                                <td>$165</td>
                                <td>12</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>