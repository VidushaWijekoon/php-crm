<?php
ob_start();
session_start();
require_once('./header.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

?>

<?php

for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        echo "x";
    }
    echo "<br>";
}

?>

<?php require_once('./footer.php'); ?>