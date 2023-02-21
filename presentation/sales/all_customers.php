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
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-receipt m-2"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;"> All Customers</h6>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <h4>Custom Content Below</h4>
                </h3>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill"
                            href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all"
                            aria-selected="true">Customers</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel"
                        aria-labelledby="custom-content-below-all-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><a href="./customer_view.php">1</a></td>
                                    <td>John Doe</td>
                                    <td>Alsakb Computer</td>
                                    <td>Sample@sample.com</td>
                                    <td>+98347362</td>
                                </tr>
                                <tr>
                                    <td scope="row"><a href="./customer_view.php">2</a></td>
                                    <td>John Doe</td>
                                    <td>Alsakb Computer</td>
                                    <td>Sample@sample.com</td>
                                    <td>+98347362</td>
                                </tr>
                                <tr>
                                    <td scope="row"><a href="./customer_view.php">3</a></td>
                                    <td>John Doe</td>
                                    <td>Alsakb Computer</td>
                                    <td>Sample@sample.com</td>
                                    <td>+98347362</td>
                                </tr>
                                <tr>
                                    <td scope="row"><a href="./customer_view.php">4</a></td>
                                    <td>John Doe</td>
                                    <td>Alsakb Computer</td>
                                    <td>Sample@sample.com</td>
                                    <td>+98347362</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
td {
    font-size: 10px;
}
</style>

<?php require_once('../includes/footer.php'); ?>