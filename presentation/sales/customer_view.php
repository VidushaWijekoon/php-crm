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
                        <div class="col mx-auto justify-content-center">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Sales Order</th>
                                            <th scope="col">Reference</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Order Status</th>
                                            <th scope="col">Shipping Date</th>
                                            <th scope="col">Packed</th>
                                            <th scope="col">Invoiced</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Shipped</th>
                                            <th scope="col">Shipping Method</th>
                                            <th scope="col">Remaining Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td>02/18/2023</td>
                                            <td><a href="./order_view.php">SO-12345</a></td>
                                            <td>WH1-12334</td>
                                            <td>John Doe</td>
                                            <td><a href="./sales_order_map.php">Processing</a></td>
                                            <td>02/25/2023</td>
                                            <td>
                                                <i class="fa-solid fa-circle"></i>
                                            </td>
                                            <td>
                                                <i class="fa-solid fa-circle"></i>
                                            </td>
                                            <td>
                                                <i class="fa-solid fa-circle"></i>
                                            </td>
                                            <td>
                                                <i class="fa-solid fa-circle"></i>
                                            </td>
                                            <td>Local Pickup</td>
                                            <td>5 Days 25Minutes</td>
                                            <td><a href="./order_tree.php"><i class="fa-solid fa-bullseye"></i></a></td>
                                        </tr>
                                        <?php } ?>
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
                <h6 class="modal-title">Add Billing Address</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 justify-content-center mx-auto">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Attention</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_attention">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Country/
                                Region</label>
                            <div class="col-sm-8 d-flex">
                                <select name="shipping_country" class="info_select w-100" style="border-radius: 5px;">

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8 d-flex">
                                <textarea class="" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                    name="shipping_address_1" style="width: 100%;"></textarea>

                            </div>
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 d-flex">
                                <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Street 2" name="shipping_address_2" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">City</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_city" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">State</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_state" placeholder="State">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Zip
                                Code</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_zip_code" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-xs btn-primary">Save changes</button>
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
                <h6 class="modal-title">Add Shipping Address</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8 justify-content-center mx-auto">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Attention</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_attention">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Country/
                                Region</label>
                            <div class="col-sm-8 d-flex">
                                <select name="shipping_country" class="info_select w-100" style="border-radius: 5px;">

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8 d-flex">
                                <textarea class="" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                    name="shipping_address_1" style="width: 100%;"></textarea>

                            </div>
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 d-flex">
                                <textarea class=" mt-2 mb-2" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Street 2" name="shipping_address_2" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">City</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_city" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">State</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class=" w-100" name="shipping_state" placeholder="State">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Zip
                                Code</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_zip_code" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8 d-flex">
                                <input type="number" class=" w-100" name="shipping_phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-xs btn-primary">Save changes</button>
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