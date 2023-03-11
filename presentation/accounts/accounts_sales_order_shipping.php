<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
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
    /* width: 99%; */
    background-color: #ffffff;
    padding: 10px 5px;
}

.headingSec {
    display: flex;
    justify-content: space-between;
}

.tableSec table {
    width: 100%;
    font-size: 10px;
}

.tableSec table th {
    color: #168EB4;
    font-weight: 700;
    font-size: 10px;
}

.lable {
    font-size: 12px;
    font-weight: 500;
}

.navSec {
    display: flex;
    justify-content: space-between;
}

.shippingDetailsCol {
    display: flex;
    justify-content: space-between;
    font-weight: 500;
    margin-bottom: 10px;
    font-size: 10px;
}

.palletQtySec {
    display: flex;
    /* flex-direction: column; */
}

.imgSec {
    display: flex;
}

.img {
    display: flex;
}

.imgbox {
    width: 70px;
    height: 70px;
    border: #168EB4 solid 1px;
    /* display: flex; */
    margin-right: 2px;
    margin-top: 2px;

}

.palIndex p,
.palQty p {
    height: 70px;
    margin-right: 5px;
    text-align: center;
}

.salesOrders,
.OrderDetails {
    height: 80vh;
    overflow-y: auto;
}

.pageNavigation a {
    color: #168EB4;
    font-weight: 600;
}

/* image Uplorder */
*,
::before,
::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
} */

.image-uploader {
    position: relative;
    width: 90%;
    max-width: 600px;
    height: 350px;
    border: 2px dashed #4169e1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
    cursor: pointer;
}

.cloud-icon {
    font-size: 5rem;
    color: #4169e1;
}

/* h2 {
    font-size: 2rem;
    font-weight: 400;
    margin-top: 1em;
}

p {
    margin: 0.75em 0;
    color: #696969;
} */

.browse-link {
    border: none;
    background-color: transparent;
    font-size: 1.15rem;
    text-decoration: underline;
    cursor: pointer;
    color: #4169e1;
}

.image-preview {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #fff;
    display: none;
    /* padding: 1em; */
}

.image-preview::before {
    content: "Click or Drag to add more images";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #696969;
    font-size: 1.05rem;
    opacity: 0;
}

.image-preview:hover::before {
    opacity: 1;
}

figure {
    width: 100px;
    height: 20px;
    /* margin: 1em; */
    display: inline-block;
    animation: zoomIn 500ms ease-in 1;
    filter: drop-shadow(0 0 0.5em #e5e5e5);
}

figure::before {
    content: "x";
    position: absolute;
    width: 1.5em;
    height: 1.5em;
    background-color: rgb(229, 15, 15);
    color: #fff;
    display: grid;
    place-items: center;
    /* top: -0.05em;/ */
    /* right: -0.75em; */
    border-radius: 50%;
    font-weight: bold;
    transform: scale(0);
    transition: transform 250ms ease-in;
}

figure:hover::before {
    transform: scale(1);
}

figure.zoomOut {
    animation: zoomOut 500ms ease-in 1;
}

img {
    width: 50%;
    height: 50px;
    object-fit: cover;
    border-radius: 0.5em;
    margin: 25px;
}

@keyframes zoomIn {
    0% {
        transform: scale(0);
    }

    100% {
        transform: scale(1);
    }
}

@keyframes zoomOut {
    0% {
        transform: scale(1);
    }

    100% {
        transform: scale(0);
    }
}

/*  */
</style>

<div class="allSalesOrderBody">
    <div class="cardContainer">
        <div class="row pageNavigation pt-1 pl-2">
            <a href="./accounts_dashboard"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
                Dashboard</a>
        </div>
        <div class="row pl-2 pt-2">
            <i class="pageNameIcon fa-solid fa-square-dollar"></i>
            <h6 class="pageName">Sales Order : 12345</h6>
        </div>
        <div class="row pt-3">
            <div class="col-lg-3 border">
                <div class="salesOrders">
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>
                    <div class="SO border p-2 mt-1">
                        <p class="soNum">
                            <b>
                                S0-123445
                            </b>
                        </p>
                        <div class="soDetails d-flex justify-content-between">
                            <p class="lableSo">John Doe</p>
                            <!-- Shipping Date -->
                            <p>2022-02-03</p>
                        </div>
                        <p class="soStatus">Packed</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 border">
                <div class="OrderDetails">
                    <!-- Nav Bar eka -->
                    <div class="navSec mt-1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item border rounded-top">
                                <a class="nav-link" aria-current="page" href="./accounts_sales_order_new.php">Sales
                                    Order</a>
                            </li>
                            <li class="nav-item border">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_packing.php">Packing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_invoice.php">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="./accounts_sales_order_shipping.php">Shipping</a>
                            </li>

                        </ul>

                        <div class="">
                            <div><button class="btnT"><i class="fa-sharp fa-solid fa-print"></i></button></div>
                        </div>

                    </div>
                    <!-- Shipping Sec eka -->
                    <form action="">
                        <div>
                            <!-- Shipping Sec eka -->
                            <div class="row justify-content-between p-3">
                                <h6 style="font-weight: 700;">Shipping</h6>
                            </div>

                            <div class="row px-3">
                                <div class="col-lg-12 mb-4">
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
                                                    SO No
                                                </div>
                                                <div class="col-7">
                                                    dhfkshf
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
                                                    Invoice No
                                                </div>
                                                <div class="col-7">
                                                    12315
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
                                                    Sales Person
                                                </div>
                                                <div class="col-7">
                                                    sales Person 1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
                                                    Invoice Date
                                                </div>
                                                <div class="col-7">
                                                    12315
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5">
                                                    Shipping Date
                                                </div>
                                                <div class="col-7">
                                                    2023-2-1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol ">
                                        <div>
                                            Invoice Qty : <span>80</span>
                                        </div>
                                        <div>
                                            Shipping Qty : <span> 80</span>
                                        </div>
                                        <div>
                                            Order Qty : <span> 100</span>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    Shipping Box
                                                </div>
                                                <div class="col-7">
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    Shipping Method

                                                </div>
                                                <div class="col-7">
                                                    <input type="text">
                                                    <span><i id='buttonid' class="fa-solid fa-link ml-2"
                                                            style="cursor: pointer;"></i></span>
                                                    <input id='fileid' type='file' hidden />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    Shipping Mark
                                                </div>
                                                <div class="col-7">
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="shippingDetailsCol row ">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    Pickup Date and Time
                                                </div>
                                                <div class="col-7">
                                                    <input type="date" style="width:50%;">
                                                    <input type="time" style="width:40%;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-2">
                                        <div class="row">

                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="palletQtySec">
                                                <div class="palIndex">
                                                    <p>Pallet Index</p>
                                                    <p>1 -></p>
                                                    <p>2 -></p>
                                                    <p>3 -></p>
                                                    <p>4 -></p>
                                                    <p>5 -></p>
                                                </div>
                                                <div class="palQty">
                                                    <p>Pallet Qty</p>
                                                    <p>10</p>
                                                    <p>20</p>
                                                    <p>30</p>
                                                    <p>40</p>
                                                    <p>50</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-9 mt-5">
                                            <div class="imgSec">

                                                <div class="image-uploader" id="dragArea">
                                                    <!-- <i class="fa-solid fa-cloud-arrow-up cloud-icon"></i> -->
                                                    <p>Drag &amp; Drop</p>
                                                    <p>
                                                        your file here or
                                                        <span class="browse-link">browse</span>
                                                    </p>
                                                    <input id="anu1" type="file" accept="image/*" multiple hidden />

                                                    <div class="image-preview" id="imagePreview"></div>

                                                </div>
                                                <!-- <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div> -->
                                            </div>
                                            <div class="imgSec">



                                                <!-- <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div> -->
                                            </div>
                                            <div class="imgSec">



                                                <!-- <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div> -->
                                            </div>
                                            <div class="imgSec">


                                                <!-- <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div> -->
                                            </div>
                                            <div class="imgSec">


                                                <!-- <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div>
                                                <div class="imgbox">
                                                </div> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end pr-3 mb-4">
                                <button class="btnTB" type="submit">Confirm</button>
                            </div>
                        </div>
                    </form>

                    <!-- Driver Sec -->
                    <form action="">
                        <div class="driverSec border">
                            <div class="row justify-content-between p-3">
                                <h6 style="font-weight: 700;">Driver Details</h6>
                            </div>
                            <div class="row px-5 mb-3">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-lg-5">Driver ID</div>
                                        <div class="col-lg-7"><input type="text"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-lg-5">Vehicle Number</div>
                                        <div class="col-lg-7"><input type="text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end pr-3 mb-4">
                                <button class="btnTB" type="submit">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>

<?php require_once('../includes/footer.php'); ?>

<script>
document.getElementById('buttonid').addEventListener('click', openDialog);

function openDialog() {
    document.getElementById('fileid').click();
}
</script>
<script>
const fileInput = document.getElementById("anu1");
// const fileInput = document.getElementById("anu2");
const dragArea = document.getElementById("dragArea");
const imagePreview = document.getElementById("imagePreview");

dragArea.addEventListener("click", () => {
    fileInput.click();
    console.log("pala hutto yanna")
    console.log(fileInput)
});

function preventDefault(event) {
    event.preventDefault();
    event.stopPropagation();
}

dragArea.addEventListener("dragenter", preventDefault);
dragArea.addEventListener("dragleave", preventDefault);
dragArea.addEventListener("dragover", preventDefault);
dragArea.addEventListener("drop", preventDefault);

dragArea.addEventListener("drop", (event) => {
    let files = event.dataTransfer.files;
    checkFileType(files);
});

fileInput.addEventListener("change", () => {
    let files = fileInput.files;
    checkFileType(files);
});

function checkFileType(files) {
    let validTypes = ["image/jpeg", "image/png", "image/gif"];
    for (let i = 0; i < files.length; i++) {
        let fileType = files[i].type;

        if (validTypes.includes(fileType)) {
            displayImage(files[i]);
        }
    }
}

function displayImage(image) {
    imagePreview.style.display = "block";

    let figure = document.createElement("figure");
    let img = document.createElement("img");

    figure.append(img);
    imagePreview.append(figure);

    figure.addEventListener("click", removeImage);

    let fileReader = new FileReader();

    fileReader.onload = (event) => {
        img.src = event.target.result;
    };

    fileReader.readAsDataURL(image);
}

function removeImage(event) {
    event.stopPropagation();
    let deletedImage = event.currentTarget;
    deletedImage.classList.add("zoomOut");

    setTimeout(() => {
        imagePreview.removeChild(deletedImage);

        if (imagePreview.children.length == 0) {
            imagePreview.style.display = "none";
        }
    }, 450);
}
</script>