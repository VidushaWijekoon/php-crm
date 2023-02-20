<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>
</style>

<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-users"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;">Daily Sales Person Task</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill"
                            href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all"
                            aria-selected="true">Customer Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-packing-tab" data-toggle="pill"
                            href="#custom-content-below-packing" role="tab" aria-controls="custom-content-below-packing"
                            aria-selected="false">Post to Customer</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel"
                        aria-labelledby="custom-content-below-all-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Platform</th>
                                    <th scope="col">Search by Keyword</th>
                                    <th scope="col" class="text-center">Today Need Create New Customer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><a href="order_view.php">1</a></td>
                                    <td>Monday</td>
                                    <td>Facebook</td>
                                    <td>
                                        <div style="display: grid">
                                            <input type="text" class="mb-1" placeholder="Search Keyword 1"
                                                name="search_keyword_1">
                                            <input type="text" class="mb-1" placeholder="Search Keyword 2"
                                                name="search_keyword_2">
                                            <input type="text" class="mb-1" placeholder="Search Keyword 3"
                                                name="search_keyword_3">
                                            <input type="text" class="mb-1" placeholder="Search Keyword 4"
                                                name="search_keyword_4">
                                            <input type="text" class="mb-1" placeholder="Search Keyword 5"
                                                name="search_keyword_5">
                                        </div>

                                    </td>
                                    <td>
                                        <div class=""
                                            style="display: flex; justify-content: center; align-items: center; height: 100px; font-size: 75px; font-weight: bold;">
                                            5
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Whatsapp Number</th>
                                    <th scope="col">Platform</th>
                                    <th scope="col">Model He Selling & Buying</th>
                                    <th scope="col">He Can Pick Up From UAE?</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="w-100"></td>
                                    <td>
                                        <select name="visa_type" class="w-100">
                                            <option selected>--Please Select Visa Type--</option>
                                            <option value="visit">Visit Visa</option>
                                            <option value="own">Own Visa</option>
                                            <option value="company">Company Visa</option>
                                            <option value="cancel">Cancel Visa</option>
                                            <option value="student">Student Visa</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="w-100"></td>
                                    <td>
                                        <select name="visa_type" class="w-100">
                                            <option selected>--Please Select Visa Type--</option>
                                            <option value="visit">Visit Visa</option>
                                            <option value="own">Own Visa</option>
                                            <option value="company">Company Visa</option>
                                            <option value="cancel">Cancel Visa</option>
                                            <option value="student">Student Visa</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="w-100">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="">
                                                <input type="radio" id="uae_pickup1" name="uae_pickup1" value="yes">
                                                <label class="label_values" for="uae_pickup1">Yes
                                                </label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="uae_pickup2" name="uae_pickup1" value="no">
                                                <label class="label_values" for="uae_pickup2">No
                                                </label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="uae_pickup3" name="uae_pickup1" value="n/a">
                                                <label class="label_values" for="uae_pickup3">N/A
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" name="add_customer"
                                            style="background: transparent; border:none;" fdprocessedid="4ckj3h">
                                            <i class="fa-solid fa-circle-plus fa-2x text-primary"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-packing" role="tabpanel"
                        aria-labelledby="custom-content-below-packing-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Platform</th>
                                            <th scope="col">Search by Keyword</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>
                                                <div style="display: grid">
                                                    <input type="text" placeholder="Search Keyword 1" class="mb-1"
                                                        name="search_keyword_1">
                                                    <input type="text" placeholder="Search Keyword 2" class="mb-1"
                                                        name="search_keyword_2">
                                                    <input type="text" placeholder="Search Keyword 3" class="mb-1"
                                                        name="search_keyword_3">
                                                    <input type="text" placeholder="Search Keyword 4" class="mb-1"
                                                        name="search_keyword_4">
                                                    <input type="text" placeholder="Search Keyword 5" class="mb-1"
                                                        name="search_keyword_5">
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display: grid">
                                                    <input type="text" placeholder="Search Keyword 1" class="mb-1"
                                                        name="search_keyword_1">
                                                    <input type="text" placeholder="Search Keyword 2" class="mb-1"
                                                        name="search_keyword_2">
                                                    <input type="text" placeholder="Search Keyword 3" class="mb-1"
                                                        name="search_keyword_3">
                                                    <input type="text" placeholder="Search Keyword 4" class="mb-1"
                                                        name="search_keyword_4">
                                                    <input type="text" placeholder="Search Keyword 5" class="mb-1"
                                                        name="search_keyword_5">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger p-1">Please Follow the Order</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Platform</th>
                                            <th scope="col">Search by Keyword</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>
                                                <div style="display: grid">
                                                    <input type="text" placeholder="Search Keyword 1" class="mb-1"
                                                        name="search_keyword_1">
                                                    <input type="text" placeholder="Search Keyword 2" class="mb-1"
                                                        name="search_keyword_2">
                                                    <input type="text" placeholder="Search Keyword 3" class="mb-1"
                                                        name="search_keyword_3">
                                                    <input type="text" placeholder="Search Keyword 4" class="mb-1"
                                                        name="search_keyword_4">
                                                    <input type="text" placeholder="Search Keyword 5" class="mb-1"
                                                        name="search_keyword_5">
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display: grid">
                                                    <input type="text" placeholder="Search Keyword 1" class="mb-1"
                                                        name="search_keyword_1">
                                                    <input type="text" placeholder="Search Keyword 2" class="mb-1"
                                                        name="search_keyword_2">
                                                    <input type="text" placeholder="Search Keyword 3" class="mb-1"
                                                        name="search_keyword_3">
                                                    <input type="text" placeholder="Search Keyword 4" class="mb-1"
                                                        name="search_keyword_4">
                                                    <input type="text" placeholder="Search Keyword 5" class="mb-1"
                                                        name="search_keyword_5">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger p-1">Please Follow the Order</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="" style="font-size: 10px; margin-top: 5px">Please Select Country First: </p>
                            <div class="mx-1">
                                <select name="visa_type" style="height: 24px">
                                    <option selected>--Select Country--</option>
                                    <option value="visit">USA</option>
                                    <option value="own">UK</option>
                                    <option value="company">Japan</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Whatsapp Number</th>
                                        <th scope="col" style="width: 5%">Platform</th>
                                        <th scope="col">Model He Selling/ Buying</th>
                                        <th scope="col">Posted Model 1</th>
                                        <th scope="col">Posted Model 2</th>
                                        <th scope="col">Customer Asking Model</th>
                                        <th scope="col">Customer Asking Price</th>
                                        <th scope="col">He Can Pick Up From UAE?</th>
                                        <th scope="col">Posted Time</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1IRN Topnet</td>
                                        <td>989395401832</td>
                                        <td>instgram</td>
                                        <td>folio</td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td><input type="text"></td>
                                        <td>Yes</td>
                                        <td>02/18/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="">
                            <button class="btn btn-xs btn-success float-right">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
thead {
    font-size: 8px;
}
</style>
<?php require_once('../includes/footer.php') ?>