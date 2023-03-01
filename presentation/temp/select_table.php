<?php
ob_start();
session_start();
include_once '../includes/header.php';
?>
<?php
// checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
$role_id = $_SESSION['role_id'];
$department = $_SESSION['department'];
$user_id = $_SESSION['username'];
$palet_id = 0;
?>
<html>

<head>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "session_set.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
    <div class="col-lg-6 grid-margin stretch-card justify-content-center mx-auto mt-2 ">
        <div class="card mt-3 w-100">
            <div class="card-body ">
                <h3>Add Item to Pallet</h3>
                <hr>
                <form>
                    <select name="users" onchange="showUser(this.value)">
                        <option value="">Select a person:</option>
                        <option value="1">Peter Griffin</option>
                        <option value="2">Lois Griffin</option>
                        <option value="3">Joseph Swanson</option>
                        <option value="4">Glenn Quagmire</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div id="txtHint"><b>Person info will be listed here...</b></div>

</body>

</html>