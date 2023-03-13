<?php

ob_start();
session_start();
require_once('../includes/header.php');
require_once("../../functions/db_connection.php");
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

.cardContainer {
    width: 99%;
    background-color: #ffffff;
    padding: 10px 5px;
}

.tableSec {
    overflow-x: auto;
}
</style>


<div class="row pageNavigation pt-2 pl-2">
    <!-- <i class="pageNameIcon fa-solid fa-left"></i> -->
    <a href="./e_com_dashboard.php"><i class="fa-solid fa-backward"></i>&nbsp;Dashboard</a>
</div>
<br>

<div class="row mb-4">
    <i class="pageNameIcon fa-solid fa-store"></i>
    <h6 class="pageName">Noon Listing('Noon Excel')</h6>
</div>

<div class="row noonViewBodySec">
    <div class="cardContainer">
        <div class="tableSec row col-md-12">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>
                            <div>
                                Family
                            </div>
                        </th>
                        <th>
                            <div>
                                Product Type
                            </div>
                        </th>
                        <th>
                            <div>
                                Product SUB TYpe
                            </div>
                        </th>
                        <th>
                            <div>
                                What's In the box
                            </div>
                        </th>
                        <th>
                            <div>
                                GTIN
                            </div>
                        </th>
                        <th>Partner SKU</th>
                        <th>Brand</th>
                        <th>
                            <div>
                                Product Title
                            </div>
                        </th>
                        <th>Country of Origin</th>
                        <th>Warrenty Years</th>
                        <th>Model Year</th>
                        <th>Model Name</th>
                        <th>Model Number</th>
                        <th>
                            Colour Name
                        </th>
                        <th>
                            Colour Family
                        </th>
                        <th>
                            Keyboard Language
                        </th>
                        <th>
                            Item Condition
                        </th>
                        <th>
                            Grade
                        </th>
                        <th>
                            Screen Size
                        </th>
                        <th>
                            Screen Size Unit
                        </th>
                        <th>
                            RAM Size
                        </th>
                        <th>
                            RAM Size Unit
                        </th>
                        <th>
                            RAM Type
                        </th>
                        <th>
                            Internal Memory
                        </th>
                        <th>Internal Memory Unit</th>
                        <th>
                            Storage Type
                        </th>
                        <th>
                            HDD Rotation
                        </th>
                        <th>
                            HDD Rotation Unit
                        </th>
                        <th>Processor Brand</th>
                        <th>
                            Processor Type
                        </th>
                        <th>
                            Processor Generation
                        </th>
                        <th>
                            Number of Cores
                        </th>
                        <th>
                            Processor Version
                        </th>
                        <th>
                            Processor Speed
                        </th>
                        <th>
                            Processor Speed Unit
                        </th>
                        <th>
                            Graphic Memory
                        </th>
                        <th>
                            Graphic Memory Unit
                        </th>
                        <th>
                            Graphic Card
                        </th>
                        <th>
                            Graphic Card Version
                        </th>
                        <th>
                            Graphic Type
                        </th>
                        <th>
                            Operating System
                        </th>
                        <th>
                            Operating System Version
                        </th>
                        <th>
                            Display Type
                        </th>
                        <th>Display Resolution</th>
                        <th>Display Resolution Type</th>
                        <th>Screen Features</th>
                        <th>Pixels Per Inch</th>
                        <th>Camera Type</th>
                        <th>Primary Camera Resolution</th>
                        <th>Primary Camera Resolution Unit</th>
                        <th>Secondary Camera Resolution</th>
                        <th>Secondary Camera Resolution Unit</th>
                        <th>Average Battery Life</th>
                        <th>Battery Type</th>
                        <th>Battery Size</th>
                        <th>Battery Size Unit</th>
                        <th>Wireless</th>
                        <th>Audio Jack</th>
                        <th>Number of HDMI Ports</th>
                        <th>Connection Type</th>
                        <th>HDMI Output</th>
                        <th>Number of USB Ports</th>
                        <th>Adobe Flash Competible</th>
                        <th>SD Card Slot</th>
                        <th>SIM Type</th>
                        <th>Long Description</th>
                        <th>Feature 1</th>
                        <th>Feature 2</th>
                        <th>Feature 3</th>
                        <th>Feature 4</th>
                        <th>Feature 5</th>
                        <th>Feature Bullet 1</th>
                        <th>Feature Bullet 2</th>
                        <th>Feature Bullet 3</th>
                        <th>Feature Bullet 4</th>
                        <th>Feature Bullet 5</th>
                        <th>Product Length</th>
                        <th>Product Length Unit</th>
                        <th>Product Height</th>
                        <th>Product Height Unit</th>
                        <th>Product Width/Depth</th>
                        <th>Product Width/Depth Unit</th>
                        <th>Product Weight</th>
                        <th>Product Weight Unit</th>
                        <th>Image URL 1</th>
                        <th>Image URL 2</th>
                        <th>Image URL 3</th>
                        <th>Image URL 4</th>
                        <th>Image URL 5</th>
                        <th>Image URL 6</th>
                        <th>Image URL 7</th>
                        <th>Shipping Length</th>
                        <th>Shipping Length Unit</th>
                        <th>Shipping Height</th>
                        <th>Shipping Height Unit</th>
                        <th>Shipping Width/Depth</th>
                        <th>Shipping Width/Depth Unit</th>
                        <th>Shipping Weight</th>
                        <th>Shipping Weight Unit</th>
                        <th>Shipping Destination</th>
                        <th>Recomended Retail Price AE</th>
                        <th>Recomended Retail Price AE Unit</th>
                        <th>Recomended Retail Price SA</th>
                        <th>Recomended Retail Price SA Unit</th>
                        <th>Recomended Retail Price EG</th>
                        <th>Recomended Retail Price EG Unit</th>
                        <th>HS Code</th>
                        <th>Monitor Response Time</th>
                        <th>Refresh Rates</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>

                        </td>

                        <td>

                        </td>
                        <td>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>













<?php require_once('../includes/footer.php') ?>