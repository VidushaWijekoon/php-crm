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
                    <a class="nav-link" id="custom-content-below-transactions-tab" data-toggle="pill"
                        href="#custom-content-below-transactions" role="tab"
                        aria-controls="custom-content-below-transactions" aria-selected="false">Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-orders-tab" data-toggle="pill"
                        href="#custom-content-below-orders" role="tab" aria-controls="custom-content-below-orders"
                        aria-selected="false">Order</a>
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
                                        <a href="">Delete</a>
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

                            </div>
                            <hr>

                        </div>
                        <div class="col-sm-7">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-below-transactions" role="tabpanel"
                    aria-labelledby="custom-content-below-transactions-tab">
                    Transactions
                </div>
                <div class="tab-pane fade" id="custom-content-below-order" role="tabpanel"
                    aria-labelledby="custom-content-below-order-tab">
                    Orders
                </div>
                <div class="tab-pane fade" id="custom-content-below-common-models" role="tabpanel"
                    aria-labelledby="custom-content-below-common-models-tab">
                    Models
                </div>
            </div>
        </div>
    </div>
</div>

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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
function address() {
    var x = document.getElementById("address");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function otherDetails() {
    var x = document.getElementById("other_details");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<?php require_once('../includes/footer.php'); ?>