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
    height: 75vh;
}

.createListingHeading {
    font-weight: 600;
    font-size: 15px;
}

.sectionUnderline {
    margin-top: 0px;
    margin-bottom: 0;
    border-top: 2px solid #DBDBDB;
}

.scanSec {
    justify-content: center;
}

.btnT {
    background: #FFFFFF;
    border: 2px solid #168EB4;
    border-radius: 5px;
    font-weight: 600;
    font-size: 10px;
    padding: 5px 10px;
}

.modelID {
    width: 800px;
}

.cusName {
    font-weight: 700;
    font-size: 5rem;
    color: #168EB4;
}

.modelName {
    font-weight: 700;
    font-size: 3rem;
    color: #071a34;
}

.modelGen {
    font-weight: 700;
    font-size: 2rem;
    color: #071a34;
}

input[type='text'] {
    height: 26px;

}
</style>

<div class="row mb-4 ml-1 pt-2">
    <i class="pageNameIcon fa-solid fa-filter-list"></i>
    <h6 class="pageName">Shipment Sorting</h6>
</div>

<div class="row laptopAuditBodySec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    Scan Laptop
                </span>


            </div>
        </div>
        <hr class="sectionUnderline">
        <div class="row scanSec mt-4">
            <div class="col-2">Scan Supplier Barcode</div>
            <div class="col-4">
                <input class="w-100" type="text">
            </div>
        </div>

        <div class="row scanSec my-2">

            OR

        </div>

        <div class="row scanSec">
            <div class="col-2">Scan MFG</div>
            <div class="col-4">
                <input class="w-100" type="text">
            </div>
        </div>

        <div class="row scanSec my-2">

            <button class="btnT" data-toggle="modal" data-target="#exampleModal">Scan</button>

        </div>




    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="p-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="cusName" id="customerName"> Customer 1</div>


                    </div>
                    <div class="row justify-content-center">

                        <div class="modelName" id="modelName"> Latitude e5470</div>

                    </div>
                    <div class="row justify-content-center">

                        <div class="modelGen" id="modelGen"> 6th Gen</div>

                    </div>
                    <br>
                    <hr class="sectionUnderline">
                    <br>
                    <div class="row justify-content-center">

                        <div class="col-8 text-bold" id="supplierName">
                            Supplier Name
                            <input class="ml-2 w-75" type="text" id="supName">
                        </div>

                    </div>
                    <div class="row my-2 justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Core
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input class="w-100" type="text" id="core">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Graphic Brand
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input class="w-100" type="text" id="graphicBrand">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Touch
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input class="w-100" type="text" id="touch">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Graphic Capacity
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input class="w-100" type="text" id="graphicCapacity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Battery
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input class="w-100" type="text" id="battery">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        OS
                                    </div>
                                </div>
                                <div class="col-6">

                                    <input class="w-100" type="text" id="os">
                                    <!-- <textarea id="remarks"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center text-bold">
                                        Remarks
                                    </div>
                                </div>
                                <div class="col-6">
                                    <textarea class="form-control" name="" id="remarks" cols="40" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('../includes/footer.php')

    ?>