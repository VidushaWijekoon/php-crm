<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<style>
    .pageNameIcon {
        font-size: 25px;
        margin-right: 05px;
    }

    .pageName {
        font-size: 20px;
        margin-top: 5px;
        font-weight: bold;
    }

    input[type='radio'] {
        height: 18px;
        width: 18px;
        cursor: pointer;
    }

    input[type='text'] {
        height: 26px;
        cursor: pointer;
    }

    .DropDown {
        height: 25px;
        width: 100%;
        border-radius: 5px;
        border: 1px solid #D1CDCD;
        /* padding: 0px 10px; */
    }

    .pageNavigation a {
        color: #168EB4;
        font-weight: 600;
    }
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./sales_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashbord</a>
</div>


<div class="p-2 card card-primary card-outline">
    <div class="row">
        <div class="col-sm-12 col-lg-12 bg-white">
            <div class="row pl-4">
                <!-- <i class="pageNameIcon fa-solid fa-store"></i> -->
                <i class="pageNameIcon fa-sharp fa-solid fa-list-radio"></i>
                <h6 class="pageName">Create Customer</h6>
            </div>
        </div>
    </div>
    <form action="./addNew/create_customer" method="POST">
        <div class="row mt-4">
            <div class="col-sm-12 col-lg-12 bg-white">
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p class="required">Customer Type</p>
                    </div>
                    <div class="col-sm-8 d-flex pb-3">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="cutomer_type" value="0" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1" style="margin-left: 6px;">
                                Business
                            </label>
                        </div>
                        <div class="form-check mx-2  d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="cutomer_type" value="1" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2" style="margin-left: 6px;">
                                Individual
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-lg-2">
                        <p class="required">Primary Contact</p>
                    </div>
                    <div class="col-lg-8 col-sm-12 d-flex">
                        <div class="">
                            <select name="salutation" id="salutation" class="DropDown w-100">
                                <option selected value="mr">Mr</option>
                                <option value="0">Mrs</option>
                                <option value="1">Miss</option>
                                <option value="2">Ms</option>
                                <option value="3">DR</option>
                            </select>
                        </div>
                        <div class="mx-3"><input class="w-100" type="text" name="customer_fname" id="fName" placeholder="First Name" required></div>
                        <div class=""><input class="w-100" type="text" name="customer_lname" id="lName" placeholder="Last Name" required></div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p>Company Name</p>
                    </div>
                    <div class="col-sm-8">
                        <div><input class="w-25" type="text" name="company_name" placeholder="Company Name"></div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p>Display Name</p>
                    </div>
                    <div class="col-sm-8">
                        <div class=""><input class="w-25" type="text" name="display_name" placeholder="Customer Display Name"></div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p>Customer Email</p>
                    </div>
                    <div class="col-sm-8">
                        <div class=""><input class="w-25" type="text" name="customer_email" placeholder="E-mail"></div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p class="required">Customer Resident</p>
                    </div>
                    <div class="col-sm-8">
                        <div class="">
                            <select name="resident_country" id="country_name" class="w-25 DropDown" required>
                                <option selected>--Select Resident Country--</option>
                                <?php
                                $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                $result = mysqli_query($connection, $query);

                                while ($x = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $x["country_name"]; ?>">
                                        <?php echo strtoupper($x["country_name"]); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p class="required">Customer Phone</p>
                    </div>
                    <div class="col-sm-8 d-flex">
                        <div class="">
                            <select name="country_code" id="country_code" required style="border-radius: 5px;" class="w-100">

                            </select>
                        </div>
                        <div class="mx-2">
                            <input type="text" name="country_number" placeholder="Customer Number" required>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-sm-2">
                        <p>Whatsapp Number</p>
                    </div>
                    <div class="col-sm-8 d-flex">
                        <div class="">
                            <select name="whatsapp_code" class="DropDown">
                                <option selected>--Country Code--</option>
                                <?php
                                $query = "SELECT phone_code FROM countries";
                                $result = mysqli_query($connection, $query);

                                while ($x = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $x["phone_code"]; ?>">
                                        <?php echo "+" . $x["phone_code"]; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mx-2">
                            <input type="text" placeholder="Whatsapp Number" name="whatsapp_number">
                        </div>
                    </div>
                </div>
                <hr>
                <!-- ============================================================== -->
                <!-- Customer Other Details  -->
                <!-- ============================================================== -->
                <div class="">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <div class="nav-link active tabLable" id="custom-content-below-other-details-tab" data-toggle="pill" href="#custom-content-below-other-details" role="tab" aria-controls="custom-content-below-other-details" aria-selected="true">Other Details
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link tabLable" id="custom-content-below-address-tab" data-toggle="pill" href="#custom-content-below-address" role="tab" aria-controls="custom-content-below-address" aria-selected="false">Address</dvi>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link tabLable" id="custom-content-below-contact-person-tab" data-toggle="pill" href="#custom-content-below-contact-person" role="tab" aria-controls="custom-content-below-contact-person" aria-selected="false">Contact
                                Persons
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link tabLable" id="custom-content-below-remark-tab" data-toggle="pill" href="#custom-content-below-remark" role="tab" aria-controls="custom-content-below-remark" aria-selected="false">Remark</div>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade show active" id="custom-content-below-other-details" role="tabpanel" aria-labelledby="custom-content-below-other-details-tab">
                            <div class="m-2">
                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        <p class="required">Currency</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="currency" class="w-25 DropDown" required>
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
                                        <p class="required" title=" Speaking language">Language</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="language" class="w-25 DropDown" title=" Select Customer Speaking language" required>
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
                                        <p class="required">Payment Terms</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="payment_terms" class="w-25 DropDown" required>
                                            <option value="" selected="">--Select Payment Terms--
                                            </option>
                                            <option value="1">Net 15</option>
                                            <option value="2">Net 30</option>
                                            <option value="3">Net 45</option>
                                            <option value="4">Net 60</option>
                                            <option value="5">Due end of the
                                                month</option>
                                            <option value="6">Due end
                                                of the next month</option>
                                            <option value="7">Due on Receipt
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <p>Facebook</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="" name="facebook" class="w-25">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <p>Instagram</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="" name="instagram" class="w-25">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="custom-content-below-address" role="tabpanel" aria-labelledby="custom-content-below-address-tab">
                            <div class="row px-4">
                                <div class="col-sm-6">
                                    <h6 class="text-uppercase mt-4 mb-3">Billing Address</h6>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Attention</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_attention" class="w-75 ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Country</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="billing_country" class="w-75 DropDown">
                                                <option selected>--Select Resident Country--</option>
                                                <?php
                                                $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                                $result = mysqli_query($connection, $query);

                                                while ($x = mysqli_fetch_assoc($result)) { ?>
                                                    <option value="<?php echo $x["country_name"]; ?>">
                                                        <?php echo strtoupper($x["country_name"]); ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control w-75" rows="3" placeholder="Billing Address 1" name="billing_address1"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control mt-1 w-75" rows="3" placeholder="Billing Address 2" name="billing_address2"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-sm-3">
                                            <p>City</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_city" class="w-75">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>State</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_state" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Zip Code</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_zip_code" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_phone" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Fax</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="billing_fax" class="w-75">
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
                                                <input type="text" placeholder="" name="shipping_attention" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Country/ Region</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="shipping_country" class="w-75 DropDown">
                                                <option selected>--Select Resident Country--</option>
                                                <?php
                                                $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                                $result = mysqli_query($connection, $query);

                                                while ($x = mysqli_fetch_assoc($result)) { ?>
                                                    <option value="<?php echo $x["country_name"]; ?>">
                                                        <?php echo strtoupper($x["country_name"]); ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control w-75" rows="3" placeholder="Shipping Address" name="shipping_address1"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control mt-1 w-75" rows="3" placeholder="Shipping Adderess" name="shipping_address2"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-sm-3">
                                            <p>City</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="shipping_city" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>State</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="shipping_state" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Zip Code</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="shipping_zip_code" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="shipping_phone" class="w-75">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>Fax</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="">
                                                <input type="text" placeholder="" name="shipping_fax" class="w-75">
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

                        <div class="tab-pane fade" id="custom-content-below-contact-person" role="tabpanel" aria-labelledby="custom-content-below-contact-person-tab">
                            <div class="col-sm-12 table-responsive w-100">
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
                                            <td class="p-0">
                                                <select name="contact_salutation" class="DropDown">
                                                    <option selected>Select</option>
                                                    <option value="1">Mrs</option>
                                                    <option value="2">MS</option>
                                                    <option value="3">Miss</option>
                                                    <option value="4">DR</option>
                                                </select>
                                            </td>
                                            <td class="p-0"><input type="text" name="contact_fist_name" class="w-100"></td>
                                            <td class="p-0"><input type="text" name="contact_last_name" class="w-100"></td>
                                            <td class="p-0"><input type="text" name="contact_email" class="w-100"></td>
                                            <td class="p-0"><input type="text" name="contact_work_phone_number" class="w-100"></td>
                                            <td class="p-0"><input type="text" name="contact_mobile_number" class="w-100"></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="custom-content-below-remark" role="tabpanel" aria-labelledby="custom-content-below-remark-tab">
                            <div class="form-group">
                                <textarea class="form-control mt-4" rows="3" placeholder="Remarks" name="remarks" style="width: 50%;"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 float-right">
                        <button type="submit" name="create_customer" class="btnTB ">Create Customer</button>
                        <a href="./sales_dashboard.php" class="btnTC">Cancel</a>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    });

    $(document).ready(function() {
        $("#country_name").on("change", function() {
            var country_name = $("#country_name").val();
            var getURL = "./addNew/get_phone_code.php?country_name=" + country_name;
            $.get(getURL, function(data, status) {
                $("#country_code").html(data);
            });
        });
    });
</script>


<?php require_once('../includes/footer.php'); ?>