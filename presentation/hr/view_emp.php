<?php
ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$first_name = '';
$last_name = '';
$full_name = '';
$email = '';
$gender = '';
$birthday = '';
$old_passport = '';
$current_passport = '';
$passport_expiring_date = '';
$visa_expiring_date = '';
$contact_number = '';
$current_address = '';
$permanent_address = '';
$country_name = '';
$emergency_contact = '';
$profile_photo = '';
$department = '';
$role = '';
$join_date = '';
$note = '';

$username = $_SESSION['username'];
$emp_id = mysqli_real_escape_string($connection, $_GET['emp_id']);

$query = "SELECT 
    emp_id, 
    first_name,
    last_name,
    full_name,
    email,
    gender,
    birthday,
    old_passport,
    current_passport,
    passport_expiring_date,
    visa_expiring_date,
    contact_number,
    current_address,
    permanent_address,
    resident_country,
    emergency_contact,
    profile_photo,
    join_date,
    note,
    departments.department_id,
    department_name,
    user_roles.role_id,
    role_name
FROM
    employees
LEFT JOIN departments ON employees.department_id = departments.department_id
LEFT JOIN user_roles ON employees.role_id = user_roles.role_id";
$run = mysqli_query($connection, $query);
while ($x = mysqli_fetch_array($run)) {
    $first_name = $x['first_name'];
    $last_name = $x['last_name'];
    $full_name = $x['full_name'];
    $email = $x['email'];
    $gender = $x['gender'];
    $birthday = $x['birthday'];
    $old_passport = $x['old_passport'];
    $current_passport = $x['current_passport'];
    $passport_expiring_date = $x['passport_expiring_date'];
    $visa_expiring_date = $x['visa_expiring_date'];
    $contact_number = $x['contact_number'];
    $current_address = $x['current_address'];
    $permanent_address = $x['permanent_address'];
    $resident_country = $x['resident_country'];
    $emergency_contact = $x['emergency_contact'];
    $profile_photo = $x['profile_photo'];
    $department = $x['department_id'];
    $role = $x['role_id'];
    $join_date = $x['join_date'];
    $note = $x['note'];
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-user-plus"></i>
        <h6 class="" style="margin-top: auto; font-weight: bold;"> Create New Employee</h6>
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
                                    <input type="text" value="<?php echo $first_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $last_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" values="<?php echo $full_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $gender ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $birthday ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Old Passport</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $old_passport ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Passport</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $current_passport ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Passport Expiring</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $passport_expiring_date ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Type</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $visa_type ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Expiring</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $visa_expiring_date ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $contact_number ?>">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="mt-2 mb-3">
                            <legend class="reset">Living Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Address</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $current_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Permanent Address</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?php echo $permanent_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Resident Country</label>
                                <div class="col-sm-8">
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
                                <label class="col-sm-4 col-form-label">Emergency</label>
                                <div class="col-sm-8">
                                    <input type="number" min="1" class="" placeholder="Emergency Contact Number" name="emergency_contact">
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
                                <input type="file" class="-file" id="exampleFormControlFile1" name="profile_photo">
                            </picture>
                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Company Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Department</label>
                                <div class="col-sm-8">
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
                                <label class="col-sm-4 col-form-label">Labour Category</label>
                                <div class="col-sm-8">
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
                                <label class="col-sm-4 col-form-label">Join Date</label>
                                <div class="col-sm-8">
                                    <input class="" type="date" name="join_date" />
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="reset">
                            <legend class="reset">Special Note</legend>
                            <div class="mb-3">
                                <textarea class="w-75" id="exampleFormControlTextarea1" rows="3" placeholder="About Employee " name="note"></textarea>
                            </div>
                        </fieldset>


                        <div class="mt-3 mb-3 text-center">
                            <button type="submit" name="submit" class="btn btn-xs btn-success mx-2"><i class="fa-solid fa-floppy-disk mx-1"></i>Save</button>
                            <a href="hr_dashboard.php" class="btn btn-xs btn-danger mx-2"><i class="fa-solid fa-xmark mx-1"></i>Close</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>