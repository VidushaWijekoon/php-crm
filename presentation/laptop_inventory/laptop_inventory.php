<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-5">
        <button class="btn btn-xs btn-primary">Download Excel File</button>
        <button class="btn btn-xs btn-primary">Download All Unit Excel File</button>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">Laptop Stock Report</div>
                    <div class=""><input type="text" class="mx-2" placeholder="Search By Model"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Dispatch</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td> dell</td>
                                <td> 8061</td>
                                <td>8007</td>
                                <td>32</td>
                                <td class="text-center">
                                    <a class="" href="model_summery.php"><i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> hp</td>
                                <td> 1669</td>
                                <td>1669</td>
                                <td>0</td>
                                <td class="text-center">
                                    <a class="" href="model_summery.php"><i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> lenovo</td>
                                <td> 4990</td>
                                <td>4990</td>
                                <td>0</td>
                                <td class="text-center">
                                    <a class="" href="model_summery.php"><i class="fas fa-eye fas-2x"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> panasonic</td>
                                <td> 5</td>
                                <td>5</td>
                                <td>0</td>
                                <td class="text-center">
                                    <a class="" href="model_summery.php"><i class="fas fa-eye"></i>
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