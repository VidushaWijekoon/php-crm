<?php
session_start();
require_once('../includes/header.php');
$connection = mysqli_connect("localhost", "root", "", "main_project");
// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
?>


<style>
.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

.pageNameIcon {
    font-size: 25px;
    margin-right: 05px;
}

.pageName {
    font-size: 20px;
    margin-top: 5px;
    font-weight: bold;
}

.ecomPackingStartBodySec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;

}

.scanPackingSec {

    /* align-items: center; */

}

.scanPackingSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 26px;
    width: 60%;
}

.orderviewTableSec {
    display: flex;
    /* justify-content: center; */
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.scanDetailsSec input[type='text'] {
    border: 1px solid #A1A3A8;
    border-radius: 5px;
    height: 26px;
}

.scanDetails {
    width: 80%;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    border-top: 2px solid #DBDBDB;
    margin-top: 0px;
}

.chargingContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingStartContentSec {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.packingHeader {
    font-weight: 700;
    font-size: 15px;
    color: #A1A3A8;
}

.btnNextSec {
    margin-left: 10%;
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
}

.packedQty {
    background-color: #168eb4;
    padding: 3px 10px;
    border-radius: 50%;
    color: #fff;
}

.lable1 {
    font-size: 10px;
}

.packingSubSec {
    display: flex;
}


.Lside {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 50%;
    /* background-color: #168EB4; */
}

.box1 {
    height: 200px;
    width: 200px;
}

.Rside {
    display: flex;
    /* justify-content: center; */
    align-items: center;
    flex-direction: column;
    width: 50%;
}

.box3 {
    padding: 10px;
    width: 250px;
    height: 300px;
}

.stikerHead {
    font-weight: 600;
    /* text-align: center; */
    font-size: 14px;
    margin-bottom: 5px;
}

.stikerDetails {
    font-size: 10px;
    font-weight: 500;
}

.tblName {
    font-weight: 600;

}

.packedItem {
    display: flex;
    justify-content: center;
    /* width: 100%; */
}

.nu {
    padding: 5px 10px;
}

.packItemDetails {
    padding: 5px 10px;
    display: flex;

}
</style>

<div class="row pageNavigation">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>/
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-house"></i>&nbsp;E-commerce packing</a>/
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Order Packing</h6>
</div>

<div class="row ecomPackingStartBodySec">
    <div class="cardContainer">
        <div class="">
            <div class="createListingHeading">
                Scan Laptop
            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="scanPackingSec">
            <div class="row">
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2 lable1"> Scan Alsakb Number</label>
                        <input class="col-7" type="text">

                    </div>
                </div>

                <div class="col-lg-2 col-sm-12 text-center">
                    <label class="pt-2">
                        <span style="font-size: larger;">
                            OR
                        </span>
                    </label>
                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2 lable1"> Scan MFG Number</label>
                        <input class="col-7" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="row" style="width: 80%;">
                        <label class="col-5 pt-2 lable1">Sales Order Number</label>
                        <input class="col-7" type="text">

                    </div>
                </div>

                <div class="col-lg-2 col-sm-12 text-center">

                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">

                </div>
            </div>

        </div>

        <br>
        <br>


        <div class="scanDetailsSec">

            <div class="tblName mb-2">Scanned Laptop Details</div>
            <div class="scanDetails">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">ASIN</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->

                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Brand</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Model</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Processor</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Core</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Generation</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Speed</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Touch</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Screen Size</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Resolution</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">RAM</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">HDD Type</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">HDD Capacity</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">OS</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Backlight Keyboard</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Graphic Brand</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Graphic Capacity</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Condition</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Charger Watt</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Charger Pin Colour</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Charger type</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">Packing Type</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <!-- <div class="col-3"></div> -->
                            <label class="col-5  lable1">Shipping Method</label>
                            <input class="col-7" type="text">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5">
                        <div class="row mt-1">
                            <label class="col-5  lable1">QTY</label>
                            <input class="col-7" type="text">
                            <!-- <div class="col-2"></div>    -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <!-- <div class="row">
                        
                        <label class="col-5 ">Shipping Method</label>
                        <input class="col-7" type="text">
                    </div> -->
                    </div>
                </div>
                <br>
                <br>





            </div>
        </div>
        <!-- Charger -->


        <!-- Box -->

        <div class="packingStartContentSec mt-3">
            <div class="PackingSec" style="width: 80%;">

                <hr class="sectionUnderline">

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <p class="mr-2">Box Number</p>
                            <input type="text">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <p class="mr-2">Bubble Wrapping User ID</p>
                            <input type="text">
                        </div>
                    </div>
                </div>


            </div>





            <div class="printingSec mt-4" style="width:80%">
                <div class="">
                    <div class="createListingHeading">
                        Printing Packing Details
                    </div>
                </div>
                <hr class="sectionUnderline">

                <div class="packingSubSec">
                    <div class="Lside">

                        <h6>Final Product </h6>

                        <div class="box1 border">

                        </div>
                        <!-- <div class="box1 mt-1 border">

                        </div> -->


                    </div>
                    <div class="Rside">
                        <h6>Printing Product </h6>

                        <div class="box3 border">
                            <p class="stikerHead">Microsoft Authorized Refurbisher</p>
                            <p class="stikerDetails">Lenovo Thinkpad T460 Laptop</p>
                            <p class="stikerDetails">intel i5-3100U 2.80Ghz processor</p>
                            <p class="stikerDetails">Display 14 inch Diagonal LCD Display</p>
                            <p class="stikerDetails">256GB SSD Disk</p>
                            <p class="stikerDetails">8GB DDR4 RAM</p>
                            <p class="stikerDetails">45W AC Adaptor</p>
                            <p class="stikerDetails">Windows 10 Pro</p>
                            <p class="stikerDetails">MFG - PCG12345</p>
                            <p class="stikerDetails">ALSakb QR : <i class="fa-solid fa-qrcode"
                                    style="font-size: 40px;"></i>
                            </p>
                            <p class="stikerDetails">ASIN - AS12345 &nbsp;&nbsp; <span>#5</span></p>

                        </div>

                    </div>

                </div>


                <div class="row w-100 mt-4 justify-content-end">
                    <button class="btnTB" type="submit">
                        Print & Complete
                    </button>
                </div>


            </div>
            <div class="scanedLaptopList mt-4" style="width:80%">
                <div class="">
                    <div class="createListingHeading">
                        Printed Laptop Details
                    </div>
                </div>
                <hr class="sectionUnderline">

                <div class="scannedLaptopSub">
                    <div class="packedItem mb-1">
                        <div class="nu">1</div>
                        <div class="packItemDetails border">
                            <p>Dell</p> &nbsp;&nbsp;
                            <p>Latitude e5480</p> &nbsp;&nbsp;
                            <p>Intel</p> &nbsp;
                            <p>i5-5200U</p> &nbsp;
                            <p>8GB RAM</p> &nbsp;&nbsp;
                            <p>256GB SSD</p>
                        </div>
                    </div>
                    <div class="packedItem mb-1">
                        <div class="nu">2</div>
                        <div class="packItemDetails border">
                            <p>Dell</p> &nbsp;&nbsp;
                            <p>Latitude e5480</p> &nbsp;&nbsp;
                            <p>Intel</p> &nbsp;
                            <p>i5-5200U</p> &nbsp;
                            <p>8GB RAM</p> &nbsp;&nbsp;
                            <p>256GB SSD</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="d-flex justify-content-center mt-2">
                    <button class="btnT mx-2">Confirm</button>
                    <button class="btnT mx-2">Print</button>
                </div> -->




            </div>
        </div>


        <br>
        <br>
        <!-- Next Btn Sectiom -->

        <!-- <div class="row btnNextSec">
            <a href="./e_com_packing_next.php">
                <div class="btnTB" style="width: 200px;">
                    Next
                </div>
            </a>
        </div> -->

        <!-- Printing Sec -->






    </div>
</div>




<?php
require_once('../includes/footer.php')
?>