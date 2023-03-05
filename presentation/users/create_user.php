<?php

ob_start();
session_start();
require_once("../includes/header.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row">
    <div class="col-md-5 mx-1">
        <a href="./admin_dashboard">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #0c2e5b;"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2">
        <div class="card">
            <form action="./addNew/create_user.php" method="POST">
                <fieldset class="mx-3 mb-3 mt-2">
                    <legend>Create New User</legend>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Employee ID <span style="color: red">*</span></p>
                        </div>
                        <input type='text' name="emp_id" id='emp_id' class="w-50" placeholder='Enter user id' onkeyup="GetDetail(this.value)">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">First Name<span style="color: red">*</span></p>
                        </div>
                        <input type="text" name="first_name" class="text-capitalize w-50" id="first_name" placeholder='First Name'>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Last Name<span style="color: red">*</span></p>
                        </div>
                        <input type="text" name="last_name" class="text-capitalize w-50" id="last_name" placeholder='Last Name'>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Department<span style="color: red">*</span></p>
                        </div>
                        <input type="text" name="department" class="text-capitalize w-50" id="department" placeholder='Department'>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Role<span style="color: red">*</span></p>
                        </div>
                        <input type="text" name="role" class="text-capitalize w-50" id="role" placeholder='Role'>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Username<span style="color: red">*</span></p>
                        </div>
                        <input type="text" name="username" class="w-50" placeholder='Username'>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <p class="card-text">Password<span style="color: red">*</span></p>
                        </div>
                        <input type="password" name="password" class="w-50" placeholder='Password'>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="d-flex">
                                <input type="checkbox" onclick="showPassword()" style="width:20px;height:20px">
                                <p class="mt-1 mx-2">Show Password</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" name="create_user" class="btn btn-xs btn-success mx-auto mb-3">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script>
    // Show password
    const showPassword = () => {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    // onkeyup event will occur when the user
    // release the key and calls the function
    // assigned to this event
    const GetDetail = (str) => {
        if (str.length == 0) {
            document.getElementById("first_name").value = "";
            document.getElementById("last_name").value = "";
            document.getElementById("department").value = "";
            document.getElementById("role").value = "";
            return;
        } else {

            // Creates a new XMLHttpRequest object
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {

                // Defines a function to be called when
                // the readyState property changes
                if (this.readyState == 4 &&
                    this.status == 200) {

                    // Typical action to be performed
                    // when the document is ready
                    var myObj = JSON.parse(this.responseText);

                    // Returns the response data as a
                    // string and store this array in
                    // a variable assign the value
                    // received to first name input field

                    document.getElementById("first_name").value = myObj[0];

                    // Assign the value received to
                    // last name input field
                    document.getElementById("last_name").value = myObj[1];
                    document.getElementById("department").value = myObj[2];
                    document.getElementById("role").value = myObj[3];
                }
            };

            // xhttp.open("GET", "filename", true);
            xmlhttp.open("GET", "load_user_details.php?emp_id=" + str, true);

            // Sends the request to the server
            xmlhttp.send();
        }
    }
</script>

<?php require_once('../includes/footer.php') ?>