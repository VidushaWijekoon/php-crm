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

    <div class="col-sm-12 bg-white">
        <div class="p-2 mt-1">
            <h6>COSCO COMPUTERS, NIGERIA</h6>
        </div>
        <div class="">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-below-overview-tab" data-toggle="pill"
                        href="#custom-content-below-overview" role="tab" aria-controls="custom-content-below-overview"
                        aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-order-tab" data-toggle="pill"
                        href="#custom-content-below-order" role="tab" aria-controls="custom-content-below-order"
                        aria-selected="false">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-common-models-tab" data-toggle="pill"
                        href="#custom-content-below-common-models" role="tab"
                        aria-controls="custom-content-below-common-models" aria-selected="false">Common Modals</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-overview" role="tabpanel"
                    aria-labelledby="custom-content-below-overview-tab">
                    <div class="row">
                        <div class="col-sm-5 pl-3" style="background-color: #ffffff;">
                            <div class="mt-3 mx-1">
                                <p>Cosco Computers, Nigeria</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class=""
                                        style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                        <img src="../../dist/img/avatar.png" style="width: 20%;" class="rounded-circle"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-2 mb-3">
                                    <div class="" style="line-height: 3px;">
                                        <p style="font-weight: bold">Uchechukwu Obualo</p>
                                        <p><i class="fa-regular fa-mobile"></i>+234 806 735 6096</p>
                                        <a href="">Edit |</a>
                                        <a href="" onclick="deleteThisUser()">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mx-1">
                                <div class="row">
                                    <div class="w-100 d-flex" style="justify-content: space-between;">
                                        <p>Address</p>
                                        <i class="right fas fa-angle-left" onclick="address()"></i>
                                    </div>
                                    <div id="address">
                                        <div class="" style="line-height: 0;">
                                            <p>Billing Address</p>
                                            <div class="d-flex">
                                                <span>No Billing Address - </span>
                                                <a href="" data-toggle="modal" data-target="#billing_address">Add
                                                    Billing
                                                    Address</a>
                                            </div>
                                        </div>
                                        <div class="mt-4" style="line-height: 0;">
                                            <p>Shipping Address</p>
                                            <div class="d-flex">
                                                <span>No Shipping Address - </span>
                                                <a href="" data-toggle="modal" data-target="#shipping_address">Add
                                                    Shipping
                                                    Address</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="w-100 d-flex" style="justify-content: space-between;">
                                        <p>Other Details</p>
                                        <i class="right fas fa-angle-left" onclick="otherDetails()"></i>
                                    </div>
                                    <div id="other_details">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>Cutomer Type</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Business</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>Defualt Currency</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>AED</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>Payment Terms</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Due on Receipt</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>Portal Language</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>English</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="w-100 d-flex" style="justify-content: space-between;">
                                        <p>Contact Person</p>
                                        <i class="right fas fa-angle-left" onclick="address()"></i>

                                    </div>
                                </div>

                            </div>
                            <hr>

                        </div>
                        <div class="col-sm-7">

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="custom-content-below-order" role="tabpanel"
                    aria-labelledby="custom-content-below-order-tab">
                    <div class="row">
                        <div class="col-sm-9 mx-auto justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-hover mt-3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Device</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Processor</th>
                                            <th scope="col">Core</th>
                                            <th scope="col">Generation</th>
                                            <th scope="col">Speed</th>
                                            <th scope="col">QTY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>Dell</td>
                                            <td>Latitude E7470</td>
                                            <td>Intel</td>
                                            <td>i5-6300u</td>
                                            <td>6</td>
                                            <td>2.30Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">35</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>Dell</td>
                                            <td>Precision M5530</td>
                                            <td>Intel</td>
                                            <td>i9-8950HQ</td>
                                            <td>8</td>
                                            <td>2.60Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">25</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>HP</td>
                                            <td>Elitebook 1030 G3</td>
                                            <td>Intel</td>
                                            <td>i5-7600u</td>
                                            <td>7</td>
                                            <td>1.90Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">5</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-below-common-models" role="tabpanel"
                    aria-labelledby="custom-content-below-common-models-tab">
                    <div class="row">
                        <div class="col-sm-9 mx-auto justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-hover mt-3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Device</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Processor</th>
                                            <th scope="col">Core</th>
                                            <th scope="col">Generation</th>
                                            <th scope="col">Speed</th>
                                            <th scope="col">QTY</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>Dell</td>
                                            <td>Latitude E7470</td>
                                            <td>Intel</td>
                                            <td>i5-6300u</td>
                                            <td>6</td>
                                            <td>2.30Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">35</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>Dell</td>
                                            <td>Precision M5530</td>
                                            <td>Intel</td>
                                            <td>i9-8950HQ</td>
                                            <td>8</td>
                                            <td>2.60Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">25</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Laptop</td>
                                            <td>HP</td>
                                            <td>Elitebook 1030 G3</td>
                                            <td>Intel</td>
                                            <td>i5-7600u</td>
                                            <td>7</td>
                                            <td>1.90Ghz</td>
                                            <td><span class="badge badge-success px-2 py-1">5</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Billing Address  -->
<!-- ============================================================== -->
<div class="modal fade" id="billing_address">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Shipping Address  -->
<!-- ============================================================== -->
<div class="modal fade" id="shipping_address">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
const address = () => {
    var y = document.getElementById("address");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}

const otherDetails = () => {
    var x = document.getElementById("other_details");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

const deleteThisUser = () => {
    alert("Are you sure you want to delete this customer?");
}
</script>

<?php require_once('../includes/footer.php'); ?>