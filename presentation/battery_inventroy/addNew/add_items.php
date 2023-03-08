<?php
require_once('../../../functions/db_connection.php');

if (isset($_GET['rack']) && ($_GET['id'])) {
    // getting the user information
    $rack = mysqli_real_escape_string($connection, $_GET['rack']);
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    if (isset($_POST[''])) {
        echo $qty = mysqli_real_escape_string($connection, $_POST['qty']);

        // should not delete current user
        $query = "UPDATE battery SET qty = '$qty' WHERE rack_no = '$rack' AND id = '$id' LIMIT 1";
        echo $query;
        $result = mysqli_query($connection, $query);
    }



    // if ($result) {
    //     echo "<script>
    //         alert('Successfully Created Customer');
    //         window.location.href=' ./create_order?rack={$rack}&id={$id}';
    //     </script>";
    // } else {
    //     echo "Sorry Cannot Insert this item";
    // }
}
