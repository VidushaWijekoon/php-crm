<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

$created_by = $_SESSION['user_id'];

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
                        <a class="nav-link active" id="custom-content-below-all-tab" data-toggle="pill" href="#custom-content-below-all" role="tab" aria-controls="custom-content-below-all" aria-selected="true">Customers</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-all" role="tabpanel" aria-labelledby="custom-content-below-all-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">CustomerID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Customer Resident</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = "SELECT customer_id, customer_fname, customer_lname, company_name, customer_email, resident_country, country_code, country_number FROM sales_customer_infomations WHERE created_by = '$created_by'";
                                $run = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_assoc($run)) {
                                    $customer_id = $row['customer_id'];
                                    $customer_fname = $row['customer_fname'];
                                    $customer_lname = $row['customer_lname'];
                                    $company_name = $row['company_name'];
                                    $resident_country = $row['resident_country'];
                                    $country_code = $row['country_code'];
                                    $country_number = $row['country_number'];
                                    $customer_email = $row['customer_email'];
                                ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo "customer_view?customer_id={$customer_id}"  ?>"><?php echo $customer_id ?> </a>
                                        </td>
                                        <td><?php echo $customer_fname . " " . $customer_lname ?></td>
                                        <td><?php echo $resident_country ?></td>
                                        <td><?php echo $company_name ?></td>
                                        <td><?php echo $customer_email ?></td>
                                        <td><?php echo "+ " . $country_code . $country_number ?></td>
                                    </tr>

                                <?php } ?>
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