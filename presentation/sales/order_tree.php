<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>

<div class="row table-responsive">
    <div class="col-sm-12">
        <div class="mx-auto mt-3 justify-content-center d-flex">
            <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                SO-12345
            </span>
        </div>
    </div>
    <div class="">
        <div class="col-sm-12 ">

            <div class="d-flex">
                <div class="mx-auto mt-3 justify-content-center d-flex">
                    <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                        Dell
                    </span>
                </div>
                <div class="mx-auto mt-3 justify-content-center d-flex">
                    <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                        Lenovo
                    </span>
                </div>
                <div class="mx-auto mt-3 justify-content-center d-flex">
                    <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                        HP
                    </span>
                </div>

            </div>
        </div>
    </div>
    <div class="">
        <div class="col-sm-12 ">

            <div class="d-flex">

                <div class="mx-auto mt-3 justify-content-center d-flex">
                    <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                        Latitude E7470
                    </span>
                </div>
                <div class="mx-auto mt-3 justify-content-center d-flex">
                    <span style="font-weight: bold; padding: 10px; border: 1px solid #168eb4">
                        Precision M5530
                    </span>
                </div>

            </div>
        </div>
    </div>

</div>

<?php require_once('../includes/footer.php'); ?>