<html>

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
</head>

<body>
    <div class="container">
        <h1>GeeksForGeeks</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>User Id</label>
                    <input type='text' name="emp_id" id='emp_id' class='form-control' placeholder='Enter user id' onkeyup="GetDetail(this.value)" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder='First Name' value="first_name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder='Last Name' value="last_name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Department:</label>
                    <input type="text" name="department" id="department" class="form-control" placeholder='Last Name' value="department">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Role:</label>
                    <input type="text" name="role" id="role" class="form-control" placeholder='Last Name' value="role">
                </div>
            </div>
        </div>
    </div>
    <script>
        // onkeyup event will occur when the user
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
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
                xmlhttp.open("GET", "gfg.php?emp_id=" + str, true);

                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
</body>

</html>