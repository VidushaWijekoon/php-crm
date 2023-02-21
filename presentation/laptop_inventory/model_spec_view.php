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
    <div class="col col-sm-12 col-lg-12 justify-content-center mx-auto mt-2">
        <button class="btn btn-xs btn-primary">Download Excel File</button>
    </div>
</div>
<div class="row">
    <div class="col col-sm-12 col-lg-12 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2 text-uppercase">Dell Latitude E5480 Intel i5-6300u</div>
                    <div class=""><input type="text" class="mx-2" placeholder="Search By Model"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Device</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Processor</th>
                                <th class="core">Core</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                                <th>Optical</th>
                                <th>RAM</th>
                                <th>HDD</th>
                                <th>Location</th>
                                <th>MFG</th>
                                <th>ASIN</th>
                                <th>Inventory ID</th>
                                <th>Battery Status</th>
                                <th>Wholesale Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($d = 1; $d <= 10; $d++) { ?>
                            <tr>
                                <td>Laptop</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>intel</td>
                                <td>i5-6300u</td>
                                <td>6</td>
                                <td>2.40ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                                <td>no</td>
                                <td>8GB</td>
                                <td>256GB</td>
                                <td>wh4-6-latitude e5480 </td>
                                <td>6v6tnq2</td>
                                <td>B07NYTMHQS</td>
                                <td>ALSAKB225111</td>
                                <td>
                                    <div class="text-success">yes</div>
                                </td>
                                <td>$165.00</td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@media (max-width: 1370px) {
    .core {
        width: 65px;
    }
}
</style>

<?php require_once('../includes/footer.php'); ?>