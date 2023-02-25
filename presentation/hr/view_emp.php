<?php
ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");
require_once("./addNew/get_employee.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex p-1 px-2">
        <i class="fa-solid fa-user-plus"></i>
        <h6 class="mx-2 text-capitalize" style="margin-top: auto; font-weight: bold;"> View <?php echo $first_name . " " . $last_name; ?></h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-11 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form action="./addQuery/insert_employee.php" method="POST">
                <div class="row mx-2">
                    <div class="col-md-6">

                        <fieldset class="mt-2">
                            <legend>Personal Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $first_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $last_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly values="<?php echo $full_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $gender ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $birthday ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Old Passport</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $old_passport ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Passport</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $current_passport ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Passport Expiring</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $passport_expiring_date ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Type</label>
                                <div class="col-sm-8">
                                    <?php if ($visa_type == 1) { ?>
                                        <input type="text" class="w-100" readonly value="Visit Visa">
                                    <?php }
                                    if ($visa_type == 2) { ?>
                                        <input type="text" class="w-100" readonly value="Own Visa">
                                    <?php }
                                    if ($visa_type == 3) { ?>
                                        <input type="text" class="w-100" readonly value="Company Visa">
                                    <?php }
                                    if ($visa_type == 4) { ?>
                                        <input type="text" class="w-100" readonly value="Cancel Visa">
                                    <?php }
                                    if ($visa_type == 5) { ?>
                                        <input type="text" class="w-100" readonly value="Student Visa">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Expiring</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $visa_expiring_date ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $contact_number ?>">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="mt-2 mb-3">
                            <legend class="reset">Living Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $current_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Permanent Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $permanent_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Resident Country</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $resident_country ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Emergency</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $emergency_contact ?>">
                                </div>
                            </div>
                        </fieldset>
                    </div>


                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <!-- LINE CHART -->
                        <fieldset class="mt-2">
                            <legend class="reset">Image</legend>
                            <picture class="d-flex">
                                <source srcset="../../dist/img/1.jpg" type="image/svg+xml">
                                <img src="../../dist/img/1.jpg" class="img-fluid img-thumbnail" alt="..." width="25%">
                            </picture>
                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Company Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Department</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $department ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Labour Category</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $role ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Join Date</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $join_date ?>">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Special Note</legend>
                            <div class="mb-3">
                                <input type="text" class="w-100" readonly rows="3" value="<?php echo $note ?>">
                            </div>
                        </fieldset>


                        <div class="mt-3 mb-3 text-center">
                            <?php
                            echo "<a class='btn btn-xs btn-primary mx-1' href=\"update_employee.php?emp_id=$emp_id\">
                                        Update Employee
                                    </a>";
                            ?>
                            <a href="./employees.php" class="btn btn-xs btn-danger mx-2"><i class="fa-solid fa-xmark mx-1"></i>Back</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>