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
    <div class="col">
        <div class="row">
            <div class="col-lg-12 justify-content-center mx-auto bg-white p-2">
                <h5 class="">Create New Customer</h5>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-lg-12 bg-white">
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Customer Type</p>
            </div>
            <div class="col-sm-8 d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1" style="margin-top: 6px; margin-left: 6px;">
                        Business
                    </label>
                </div>
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2" style="margin-top: 6px; margin-left: 6px;">
                        Individual
                    </label>
                </div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Primary Contact</p>
            </div>
            <div class="col-sm-8 d-flex">
                <div class="">
                    <select name="salutation">
                        <option selected>--Please Salutation--</option>
                        <option value="visit">Mrs</option>
                        <option value="own">MS</option>
                        <option value="company">Miss</option>
                        <option value="cancel">DR</option>
                    </select>
                </div>
                <div class="mx-3"><input type="text" placeholder="First Name"></div>
                <div class=""><input type="text" placeholder="Last Name"></div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Company Name</p>
            </div>
            <div class="col-sm-8">
                <div><input class="w-25" type="text" placeholder="Company Name"></div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Display Name</p>
            </div>
            <div class="col-sm-8">
                <div class=""><input class="w-25" type="text" placeholder="Company Name"></div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Customer Email</p>
            </div>
            <div class="col-sm-8">
                <div class=""><input class="w-25" type="text" placeholder="Company Name"></div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Customer Resident</p>
            </div>
            <div class="col-sm-8">
                <div class="">
                    <select name="resident" class="w-25">
                        <option selected>--Please Country--</option>
                        <option value="visit">USA</option>
                        <option value="own">Kenya</option>
                        <option value="company">Nigeria</option>
                        <option value="cancel">Canada</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Customer Phone</p>
            </div>
            <div class="col-sm-8 d-flex">
                <div class="">
                    <select name="resident" class="">
                        <option selected>--Country Code--</option>
                        <option value="visit">USA</option>
                        <option value="own">Kenya</option>
                        <option value="company">Nigeria</option>
                        <option value="cancel">Canada</option>
                    </select>
                </div>
                <div class="mx-2"><input type="text" placeholder="Customer Number"></div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col-sm-2">
                <p>Whatsapp Number</p>
            </div>
            <div class="col-sm-8 d-flex">
                <div class="">
                    <select name="resident" class="w-100">
                        <option selected>--Country Code--</option>
                        <option value="visit">USA</option>
                        <option value="own">Kenya</option>
                        <option value="company">Nigeria</option>
                        <option value="cancel">Canada</option>
                    </select>
                </div>
                <div class="mx-2"><input type="text" placeholder="Whatsapp Number"></div>
            </div>
        </div>
        <hr>
        <!-- ============================================================== -->
        <!-- Customer Other Details  -->
        <!-- ============================================================== -->
        <div class="">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <div class="nav-link active" id="custom-content-below-other-details-tab" data-toggle="pill"
                        href="#custom-content-below-other-details" role="tab"
                        aria-controls="custom-content-below-other-details" aria-selected="true">Other Details</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="custom-content-below-address-tab" data-toggle="pill"
                        href="#custom-content-below-address" role="tab" aria-controls="custom-content-below-address"
                        aria-selected="false">Address</dvi>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="custom-content-below-contact-person-tab" data-toggle="pill"
                        href="#custom-content-below-contact-person" role="tab"
                        aria-controls="custom-content-below-contact-person" aria-selected="false">Contact Persons</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="custom-content-below-remark-tab" data-toggle="pill"
                        href="#custom-content-below-remark" role="tab" aria-controls="custom-content-below-remark"
                        aria-selected="false">Remark</div>
                </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-other-details" role="tabpanel"
                    aria-labelledby="custom-content-below-other-details-tab">
                    <div class="m-2">
                        <div class="row mt-2">
                            <div class="col-sm-2">
                                <p>Currency</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="currency" class="w-25">
                                    <option value="" selected="">--Select Currency-- </option>
                                    <option value="aed">AED د.إ</option>
                                    <option value="usd">USD $</option>
                                    <option value="euro">Euro €</option>
                                    <option value="pound">Pound £</option>
                                    <option value="yen">Yen ¥</option>
                                    <option value="franc">Franc ₣</option>
                                    <option value="ruppe">Ruppe ₹</option>
                                    <option value="yuan">Yuan ¥</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Language</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="language" class="w-25">
                                    <option value="" selected="">--Select Languages--
                                    </option>
                                    <option value="english">English</option>
                                    <option value="arabic">Arabic</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="france">France</option>
                                    <option value="italian">Italian</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="hindi">Hindi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Payment Terms</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="payment_terms" class="w-25">
                                    <option value="" selected="">--Select Payment Terms--
                                    </option>
                                    <option value="net 15">Net 15</option>
                                    <option value="net 30">Net 30</option>
                                    <option value="net 45">Net 45</option>
                                    <option value="net 60">Net 60</option>
                                    <option value="due end of the month">Due end of the
                                        month</option>
                                    <option value="duo end the the next month">Due end
                                        of the next month</option>
                                    <option value="due on receipt">Due on Receipt
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Facebook</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="w-25">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Instagram</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="w-25">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 text-center">
                        <button class="btn btn-xs btn-primary">Submit</button>
                        <button class="btn btn-xs btn-danger">Cancel</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-below-address" role="tabpanel"
                    aria-labelledby="custom-content-below-address-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="text-uppercase mt-4 mb-3">Billing Address</h6>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Attention</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Country/ Region</p>
                                </div>
                                <div class="col-sm-9">
                                    <select name="salutation" class="w-75">
                                        <option selected>--Please Salutation--</option>
                                        <option value="visit">Mrs</option>
                                        <option value="own">MS</option>
                                        <option value="company">Miss</option>
                                        <option value="cancel">DR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control mt-1 w-75" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-sm-3">
                                    <p>City</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>State</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Zip Code</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Fax</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-uppercase mt-4 mb-3">Shipping Address</h6>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Attention</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Country/ Region</p>
                                </div>
                                <div class="col-sm-9">
                                    <select name="salutation" class="w-75">
                                        <option selected>--Please Salutation--</option>
                                        <option value="visit">Mrs</option>
                                        <option value="own">MS</option>
                                        <option value="company">Miss</option>
                                        <option value="cancel">DR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control mt-1 w-75" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-sm-3">
                                    <p>City</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>State</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Zip Code</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>Fax</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="">
                                        <input type="text" placeholder="" class="w-75">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-uppercase mt-4">

                            </h6>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="custom-content-below-contact-person" role="tabpanel"
                    aria-labelledby="custom-content-below-contact-person-tab">
                    <div class="col-sm-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Salutation</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Work Phone</th>
                                    <th scope="col">Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-0"><input type="text"></td>
                                    <td class="p-0"><input type="text"></td>
                                    <td class="p-0"><input type="text"></td>
                                    <td class="p-0"><input type="text"></td>
                                    <td class="p-0"><input type="text"></td>
                                    <td class="p-0"><input type="text"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="custom-content-below-remark" role="tabpanel"
                    aria-labelledby="custom-content-below-remark-tab">
                    <div class="form-group">
                        <textarea class="form-control mt-4" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Remarks" name="remarks" style="width: 50%;"></textarea>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once('../includes/footer.php'); ?>