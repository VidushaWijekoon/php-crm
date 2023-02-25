<?php 
require_once('../includes/header.php')
?>

<style>
.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.packingStartContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}
</style>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">E-Commerce order packing</h6>
</div>

<div class="row ecomPackingNextBodySec">
    <div class="cardContainer">
        <div class="packingStartContentSec">
            <br>
            <div class="row" style="width: 100%;">
                <div class="col-md-6 text-center">
                    <h3>Final Product Photo</h3>
                </div>
                <div class="col-md-6 text-center">
                    <h3>Printing</h3>
                </div>
            </div>

            <br>
            <div class="row" style="width:100%">
                <div class="col-sm-6 p-4">
                    <div class="row d-flex justify-content-center border rounded" style="width:100%">
                        <img class="img-fluid" src="./images/packing 1.jpg" style="height:200px" alt="">
                        image 1
                    </div>
                    <br>
                    <div class="row d-flex justify-content-center border rounded" style="width:100%">
                        <img class="img-fluid" src="./images/laptopbox.jpg" style="height:200px" alt="">
                        image 2
                    </div>
                    <br>
                    <!-- <div class="row d-flex justify-content-center">
                        <button class="btn btn-success" type="submit">Complete Packing</button>
                    </div> -->
                </div>

                <div class="col-sm-6">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-6">
                            <div class="borderSec border p-3">
                                <b>
                                    <h5>
                                        Microsoft Authorites Refurbisher

                                    </h5>
                                </b>

                                <p>Lenovo Thinkpad T460 Laptop </p>
                                <p>intel i5-3100U 2.80Ghz processor </p>
                                <p>Display 14 inch Diagonal LCD Display </p>
                                <p>256GB SSD Disk </p>
                                <p>8GB DDR4 RAM</p>
                                <p>45W AC Adaptor</p>
                                <p>Windows 10 Pro</p>
                                <p>Alsakb QR</p>
                                <p>MFG - PCG12345</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row d-flex justify-content-center mb-4">
                        <a href="./boxPrinting.php" target="_blank">
                            <button class="btn btn-success"> Print </button>
                        </a>

                    </div> -->

                </div>
            </div>

            <br>
            <div class="row d-flex justify-content-center mb-4">
                <a href="./boxPrinting.php" target="_blank">
                    <button class="btn btn-success">Complete Print </button>
                </a>

            </div>
        </div>

    </div>

</div>


<?php
require_once('../includes/footer.php')
?>