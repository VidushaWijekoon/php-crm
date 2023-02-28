<?php
ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-user-plus"></i>
        <h6 style="margin-top: auto; font-weight: bold;"> Create New Employee</h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-11 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form action="./addNew/insert_employee.php" method="POST">
                <div class="row mx-2">
                    <div class="col-md-6">

                        <fieldset class="mt-2">
                            <legend>Personal Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">First Name <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" required placeholder="First Name"
                                        name="first_name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Last Name <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" required placeholder="Last Name" name="last_name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Full Name <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" required placeholder="Full Name" name="full_name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="w-100" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Gender <span style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="gender" class="w-100" required>
                                        <option selected>--Please Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8">
                                    <input name="birthday" class="w-100" type="date" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Old Passport</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" placeholder="Old Passport if necessory"
                                        name="old_passport">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Passport <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" required placeholder="Current Passport"
                                        name="current_passport">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Passport Expiring <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="date" class="w-100" id="passport_expiring_date"
                                        name="passport_expiring_date" required />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Type <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="visa_type" required class="w-100">
                                        <option selected>--Please Select Visa Type--</option>
                                        <option value="1">Visit Visa</option>
                                        <option value="2">Own Visa</option>
                                        <option value="3">Company Visa</option>
                                        <option value="4">Cancel Visa</option>
                                        <option value="5">Student Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Expiring <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="date" class="w-100" id="visa_expiring_date" name="visa_expiring_date"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="number" class="w-100" min="0" placeholder="Contact Number"
                                        name="contact_number">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="mt-2 mb-3">
                            <legend class="reset">Living Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" placeholder="Current Address"
                                        name="current_address">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Permanent Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" placeholder="Permanent Address"
                                        name="permanent_address">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Resident Country <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="resident_country" required style="border-radius: 5px;" class="w-100">
                                        <option selected>--Select Resident Country--</option>
                                        <?php
                                        $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                        $result = mysqli_query($connection, $query);

                                        while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $resident_country["country_name"]; ?>">
                                            <?php echo strtoupper($resident_country["country_name"]); ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Emergency</label>
                                <div class="col-sm-8">
                                    <input type="number" class="w-100" min="1" placeholder="Emergency Contact Number"
                                        name="emergency_contact">
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
                                <input type="file" class="-file" id="exampleFormControlFile1" name="profile_photo"
                                    style="border: none;">
                            </picture>
                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Company Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Department <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="department" class="w-100" required style="border-radius: 5px;">
                                        <option selected>--Select Department--</option>
                                        <?php
                                        $query = "SELECT * FROM departments ORDER BY department_name ASC";
                                        $result = mysqli_query($connection, $query);

                                        while ($x = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $x["department_id"]; ?>">
                                            <?php echo strtoupper($x["department_name"]); ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Labour Category <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="role" class="w-100" required style="border-radius: 5px;">
                                        <option selected>--Select Role--</option>
                                        <?php
                                        $query = "SELECT * FROM user_roles ORDER BY role_name ASC";
                                        $result = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <option value="<?php echo $row["role_id"]; ?>">
                                            <?php echo strtoupper($row["role_name"]); ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Join Date <span
                                        style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="date" class="w-100" required name="join_date" />
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Special Note</legend>
                            <div class="mb-3">
                                <textarea class="w-75" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="About Employee " name="note"></textarea>
                            </div>
                        </fieldset>


                        <div class="mt-3 mb-3 text-center">
                            <button type="submit" name="submit" class="btn btn-xs btn-success mx-2"><i
                                    class="fa-solid fa-floppy-disk mx-1"></i>Save</button>
                            <a href="hr_dashboard.php" class="btn btn-xs btn-danger mx-2"><i
                                    class="fa-solid fa-xmark mx-1"></i>Back</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>