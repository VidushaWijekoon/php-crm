<?php 

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
	header('Location: ../../index.php');
}

?>
<div class="row page-titles">
    <div class="col-md-5">
        <a href="model_summery.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-11 col-lg-11 justify-content-center mx-auto mt-1">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">DELL LATITUDE E5480</div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>core</th>
                                <th>Generation</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Dispatch</th>
                                <th>Touch Screen Count</th>
                                <th>Non Touch Count</th>
                                <th>Touch Wholesale Price</th>
                                <th>Non Touch Wholesale Price</th>
                                <th>No Battery Count</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">


                            <tr class="cell-1" data-toggle="collapse">
                                <td>1</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i3-7100u</td>
                                <td>7</td>
                                <td>1</td>
                                <td>1</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>1</td>
                                <td></td>
                                <td> </td>
                                <td>0 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-1" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-1" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>2</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-6200u</td>
                                <td>6</td>
                                <td>27</td>
                                <td>27</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>27</td>
                                <td></td>
                                <td> </td>
                                <td>17 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-2" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-2" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>3</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-6300hq</td>
                                <td>6</td>
                                <td>1</td>
                                <td>1</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>1</td>
                                <td></td>
                                <td> </td>
                                <td>0 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-3" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-3" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>4</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-6300u</td>
                                <td>6</td>
                                <td>652</td>
                                <td>652</td>
                                <td>0
                                </td>
                                <td>2</td>
                                <td>650</td>
                                <td></td>
                                <td> </td>
                                <td>231 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-4" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-4" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>5</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-6440hq</td>
                                <td>6</td>
                                <td>7</td>
                                <td>7</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>7</td>
                                <td></td>
                                <td> </td>
                                <td>5 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-5" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-5" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>6</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>17</td>
                                <td>17</td>
                                <td>0
                                </td>
                                <td>3</td>
                                <td>14</td>
                                <td></td>
                                <td> </td>
                                <td>6 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-6" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-6" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>7</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-7300u</td>
                                <td>7</td>
                                <td>43</td>
                                <td>43</td>
                                <td>0
                                </td>
                                <td>1</td>
                                <td>42</td>
                                <td></td>
                                <td> </td>
                                <td>13 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-7" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-7" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>8</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i5-7440hq</td>
                                <td>7</td>
                                <td>20</td>
                                <td>20</td>
                                <td>0
                                </td>
                                <td>3</td>
                                <td>17</td>
                                <td></td>
                                <td> </td>
                                <td>3 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-8" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-8" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>9</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i7-6600u</td>
                                <td>6</td>
                                <td>4</td>
                                <td>4</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>4</td>
                                <td></td>
                                <td> </td>
                                <td>0 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-9" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-9" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>10</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i7-7600u</td>
                                <td>7</td>
                                <td>24</td>
                                <td>24</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>24</td>
                                <td></td>
                                <td> </td>
                                <td>14 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-10" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-10" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>11</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i7-7660u</td>
                                <td>7</td>
                                <td>1</td>
                                <td>1</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>1</td>
                                <td></td>
                                <td> </td>
                                <td>1 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-11" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-11" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>12</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>i7-7820hq</td>
                                <td>7</td>
                                <td>19</td>
                                <td>19</td>
                                <td>0
                                </td>
                                <td>0</td>
                                <td>19</td>
                                <td></td>
                                <td> </td>
                                <td>4 </td>
                                <td class="text-center">
                                    <a class="" href="model_spec_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="demo-12" class="collapse cell-1 row-child">
                                <th>#</th>
                                <th>Processor</th>
                                <th>CPU</th>
                                <th>Generation</th>
                                <th>Speed</th>
                                <th>Screen Size</th>
                                <th>Screen Type</th>
                            </tr>

                            <tr id="demo-12" class="collapse cell-1 row-child">
                                <td>1</td>
                                <td>intel</td>
                                <td>i5-7200u</td>
                                <td>7</td>
                                <td>2.50ghz</td>
                                <td>14.00</td>
                                <td>no</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>