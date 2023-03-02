<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once('../../functions/db_connection.php');
// $id = 0;
// if (empty($_GET['id'])) {
// } elseif ($_GET['id'] == 1) {
//     echo $_GET['id'];
//     echo '<script type = "text/javascript">';
//     echo 'alert("Welcome to Geeks for Geeks");';
//     echo 'window.location.href= ./test;';
//     echo '</script>';
// }


$id = 'null';
$first_name = 'null';
$last_name = 'null';
$gender = 'null';
$location = 'null';
$email = 'null';
// $password = '';
$check = 'null';

$query = "SELECT * FROM test";
$xd = mysqli_query($connection, $query);






?>

<form action="insert.php" method="POST">

    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>


    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>


    <p>
        <label for="Gender">Gender:</label>
        <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">FeMale</option>
        </select>
    </p>


    <p>
        <label for="Address">Address:</label>
        <input type="radio" name="location" id="uae" value="uae">UAE
        <input type="radio" name="location" id="usa" value="usa">USA
    </p>


    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">

    </p>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-check">
        <input name="check" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Default checkbox
        </label>
    </div>

    <button type="submit" name='submit'>submit </button>
</form>

<div class="table">
    <table>
        <thead>

            <tr>
                <th>id</th>
                <th>fname</th>
                <th>lname</th>
                <th>gender</th>
                <th>address</th>
                <th>email</th>
                <th>password</th>
                <th>check</th>
            </tr>
        </thead>
        <tbody>

            <?php

            while ($row = mysqli_fetch_array($xd)) {
                $id = $row['id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $gender = $row['gender'];
                $location = $row['location'];
                $email = $row['email'];
                $password = $row['password'];
                $check = $row['check'];
            ?>

            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $first_name ?> </td>
                <td><?php echo $last_name ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $location ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $check ?></td>
                <td><a href="<?php echo "./test?pakaya=$id" ?>" value="hjshd">edit</a></td>

            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>



<?php require_once('../includes/footer.php'); ?>