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


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $emp_id = mysqli_real_escape_string($connection, $_GET['emp_id']);
    $visa_type = mysqli_real_escape_string($connection, $_POST['visa_type']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $role = mysqli_real_escape_string($connection, $_POST['role']);

    $query = "UPDATE employees SET visa_type = '$visa_type', department_id = '$department', role_id = '$role' WHERE emp_id = '$emp_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header("Location: ./employees.php");
    } else {
        echo "<script>alert('failed to update this employee')</script>";
    }
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex">
        <i class="fa-solid fa-user-plus"></i>
        <h6 style="margin-top: auto; font-weight: bold;"> Update <?php echo $first_name . " " . $last_name ?></h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-11 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form action="" method="POST">
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
                                    <input type="text" class="w-100" readonly value="<?php echo $full_name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $gender; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Birthday</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $birthday; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Old Passport </label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $old_passport; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Passport </label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $current_passport; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Passport Expiring</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-100" readonly value="<?php echo $passport_expiring_date; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Type <span style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="visa_type" class="w-100">
                                        <option selected>
                                            <?php
                                            if ($visa_type == 1) {
                                                echo "Visit Visa";
                                            }
                                            if ($visa_type == 2) {
                                                echo "Own Visa";
                                            }
                                            if ($visa_type == 3) {
                                                echo "Company Visa";
                                            }
                                            if ($visa_type == 4) {
                                                echo "Cancel Visa";
                                            }
                                            if ($visa_type == 5) {
                                                echo "Student Visa";
                                            }
                                            ?>
                                        </option>

                                        <option value="1">Visit Visa</option>
                                        <option value="2">Own Visa</option>
                                        <option value="3">Company Visa</option>
                                        <option value="4">Cancel Visa</option>
                                        <option value="5">Student Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Visa Expiring <span style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="date" id="visa_expiring_date" class="w-100" name="visa_expiring_date" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="number" readonly class="w-100" min="0" placeholder="Contact Number" name="contact_number">
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="mt-2 mb-3">
                            <legend class="reset">Living Information</legend>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Current Address</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="w-100" value="<?php echo $current_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Permanent Address</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="w-100" value="<?php echo $permanent_address ?>">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Resident Country</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="w-100" value="<?php echo $resident_country ?>">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Emergency</label>
                                <div class="col-sm-8">
                                    <input type="number" min="0" class="w-100" placeholder="Contact Number" name="contact_number">
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
                                <label class="col-sm-4 col-form-label">Department <span style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="department" style="border-radius: 5px;" class="text-capitalize w-100">
                                        <option selected><?php echo $department ?></option>
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
                                <label class="col-sm-4 col-form-label">Labour Category <span style="color: red">*</span></label>
                                <div class="col-sm-8">
                                    <select name="role" style="border-radius: 5px;" class="text-capitalize w-100">>
                                        <option selected class="text-capitalize"><?php echo $role ?></option>
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
                                    <input type="text" class="w-100" readonly value="<?php echo $join_date ?>" />
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
                            <?php

                            echo "<button class='btn btn-xs btn-primary mx-1' type='submit' >
                                        <i class='fa-solid fa-check mx-1'></i>Update Employee
                                    </button>";
                            echo "<a class='btn btn-xs btn-danger mx-1' href=\"./view_emp.php?emp_id=$emp_id\">
                                        <i class='fa-solid fa-xmark mx-1'></i>Back
                                    </a>";
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>