<?php 
ob_start();
session_start();    
require_once('../includes/header.php');
require_once("../../dataAccess/db_authentication.php");
$username = $_SESSION['user_name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
    $old_passport = mysqli_real_escape_string($connection, $_POST['old_passport']);
    $current_passport = mysqli_real_escape_string($connection, $_POST['current_passport']);
    $passport_expiring_date = mysqli_real_escape_string($connection, $_POST['passport_expiring_date']);
    $visa_type = mysqli_real_escape_string($connection, $_POST['visa_type']);
    $visa_expiring_date = mysqli_real_escape_string($connection, $_POST['visa_expiring_date']);
    $contact_number = mysqli_real_escape_string($connection, $_POST['contact_number']);
    $current_address = mysqli_real_escape_string($connection, $_POST['current_address']);
    $permanent_address = mysqli_real_escape_string($connection, $_POST['permanent_address']);
    $resident_country = mysqli_real_escape_string($connection, $_POST['resident_country']);
    $emergency_contact = mysqli_real_escape_string($connection, $_POST['emergency_contact']);
    $profile_photo = mysqli_real_escape_string($connection, $_POST['profile_photo']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);
    $join_date = mysqli_real_escape_string($connection, $_POST['join_date']);
    $note = mysqli_real_escape_string($connection, $_POST['note']);

    $query = "INSERT INTO employees(first_name, last_name, full_name, email, gender, birthday, old_passport, current_passport, passport_expiring_date, visa_type, 
                                visa_expiring_date, contact_number, current_address, permanent_address, resident_country, emergency_contact, profile_photo, 
                                department_id, role_id, join_date, note, created_by)                              
                VALUES('$first_name', '$last_name', '$full_name', '$email', '$gender', '$birthday', '$old_passport', '$current_passport', '$passport_expiring_date', 
                '$visa_type', '$visa_expiring_date', '$contact_number', '$current_address', '$permanent_address', '$resident_country','$emergency_contact', '$profile_photo', 
                '$department', '$role', '$join_date', '$note','$username')";
    $result = mysqli_query($connection, $query);
    header("Location: ./employees.php");
}

?>

<style>
.fas,
.fa {
    font-size: 14px !important;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 5px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
}

input[type="text"],
[type="date"],
[type="email"],
[type="number"] {
    width: 340px;
}
</style>

<div class="row page-titles">
    <div class="col-md-5 align-self-center d-flex">
        <i class="pageNameIcon fa-solid fa-user-plus"></i>
        <h6 class="text-themecolor" style="margin-top: auto; font-weight: bold;"> Create New Employee</h6>
    </div>
</div>

<div class="container-fliud">
    <div class="row">
        <div class="col-lg-11 grid-margin stretch-card justify-content-center mx-auto mt-2">
            <div class="card">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="row mx-2">
                        <div class="col-md-6">

                            <fieldset class="mt-2">
                                <legend>Personal Information</legend>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="First Name" name="first_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Full Name" name="full_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select name="gender" id="" style="width: 340px; padding: 3px;">
                                            <option selected>--Please Select Gender--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Birthday</label>
                                    <div class="col-sm-9">
                                        <input name="birthday" class="" type="date" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Old Passport</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Old Passport if necessory"
                                            name="old_passport">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Current Passport</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Current Passport"
                                            name="current_passport">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Passport Expiring</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="passport_expiring_date" name="passport_expiring_date"
                                            class="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Visa Type</label>
                                    <div class="col-sm-9">
                                        <select name="visa_type" id="" style="width: 340px; padding: 3px;">
                                            <option selected>--Please Select Visa Type--</option>
                                            <option value="visit">Visit Visa</option>
                                            <option value="own">Own Visa</option>
                                            <option value="company">Company Visa</option>
                                            <option value="cancel">Cancel Visa</option>
                                            <option value="student">Student Visa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Visa Expiring</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="visa_expiring_date" name="visa_expiring_date" class="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" min="0" class="" placeholder="Contact Number"
                                            name="contact_number">
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset class="mt-2 mb-2">
                                <legend class="reset">Living Information</legend>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Current Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Current Address"
                                            name="current_address">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Permanent Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="" placeholder="Permanent Address"
                                            name="permanent_address">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Resident Country</label>
                                    <div class="col-sm-9">
                                        <select name="resident_country" class="" style="border-radius: 5px;">
                                            <option selected>--Select Resident Country--</option>
                                            <?php
                                                $query = "SELECT country_name FROM countries ORDER BY 'country_name' ASC";
                                                $result = mysqli_query($connection, $query);

                                                while ($resident_country = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                            ?>
                                            <option value="<?php echo $resident_country["country_name"]; ?>">
                                                <?php echo strtoupper($resident_country["country_name"]); ?>
                                            </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Emergency</label>
                                    <div class="col-sm-9">
                                        <input type="number" min="1" class="" placeholder="Emergency Contact Number"
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
                                    <img src="../../dist/img/1.jpg" class="img-fluid img-thumbnail" alt="..."
                                        width="25%">
                                    <input type="file" class="-file" id="exampleFormControlFile1" name="profile_photo">
                                </picture>
                            </fieldset>

                            <fieldset class="reset">
                                <legend class="reset">Company Information</legend>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Department</label>
                                    <div class="col-sm-9">
                                        <select name="department" class="" style="border-radius: 5px;">
                                            <option selected>--Select Resident Country--</option>
                                            <?php
                                                $query = "SELECT * FROM departments ORDER BY department_name ASC";
                                                $result = mysqli_query($connection, $query);

                                                while ($x = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                            ?>
                                            <option value="<?php echo $x["department_id"]; ?>">
                                                <?php echo strtoupper($x["department_name"]); ?>
                                            </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Labour Category</label>
                                    <div class="col-sm-9">
                                        <select name="role" class="" style="border-radius: 5px;">
                                            <option selected>--Select Resident Country--</option>
                                            <?php
                                                $query = "SELECT * FROM user_roles ORDER BY role_name ASC";
                                                $result = mysqli_query($connection, $query);

                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) :;
                                            ?>
                                            <option value="<?php echo $row["role_id"]; ?>">
                                                <?php echo strtoupper($row["role_name"]); ?>
                                            </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label">Join Date</label>
                                    <div class="col-sm-9">
                                        <input class="" type="date" name="join_date" />
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
                                <button class="btn btn-xs btn-warning mx-2"><i
                                        class="fa-solid fa-broom mx-1"></i>Clear</button>
                                <a href="hr_dashboard.php" class="btn btn-xs btn-danger mx-2"><i
                                        class="fa-solid fa-xmark mx-1"></i>Close</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 300;
}
</style>

<script>
$(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#visa_expiring_date').attr('max', maxDate);
    $('#passport_expiring_date').attr('max', maxDate);
});
</script>
<?php require_once('../includes/footer.php') ?>