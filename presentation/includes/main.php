<?php
ob_start();
session_start();
require_once('./header.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

?>


<div id="timer"> </div>
<?php

$msg = date('d/m/Y h:i:s');
echo $msg . "<br>";


?>

<script>
    $(document).ready(function() {

        function update() {
            $.ajax({
                type: 'POST',
                url: 'datetime.php',
                timeout: 1000,
                success: function(data) {
                    $("#timer").html(data);
                    window.setTimeout(update, 1000);
                },
            });
        }
        update();

    });

    $(document).ready(function() {
        setInterval(function() {
            $("#timer").load("datetime.php");
        }, 1000);
    });
</script>

<?php require_once('./footer.php'); ?>