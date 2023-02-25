<?php
ob_start();
session_start();
require_once('./header.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

?>

<?php require_once('./footer.php'); ?>