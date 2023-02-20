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
        <a href="laptop_inventory.php">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #ced4da;"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2">
        <button class="btn btn-xs btn-primary">Download Excel File</button>
    </div>
</div>
<div class="row">
    <div class="col col-sm-10 col-lg-10 justify-content-center mx-auto mt-2 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="mt-2">TOTAL NUMBER OF MODEL : 208</div>
                    <div class=""><input type="text" class="mx-2" placeholder="Search By Model"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>In Total</th>
                                <th>In Stock</th>
                                <th>Processing</th>
                                <th>Dispatch</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">


                            <tr class="cell-1" data-toggle="collapse">
                                <td>1</td>
                                <td>dell</td>
                                <td>latitude e5480</td>
                                <td>816</td>
                                <td>816</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>2</td>
                                <td>dell</td>
                                <td>latitude e7470</td>
                                <td>810</td>
                                <td>810</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>3</td>
                                <td>dell</td>
                                <td>latitude e7280</td>
                                <td>797</td>
                                <td>797</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>4</td>
                                <td>dell</td>
                                <td>latitude e3380</td>
                                <td>666</td>
                                <td>666</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>5</td>
                                <td>dell</td>
                                <td>latitude e7270</td>
                                <td>607</td>
                                <td>607</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>6</td>
                                <td>dell</td>
                                <td>latitude e5470</td>
                                <td>537</td>
                                <td>537</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>7</td>
                                <td>dell</td>
                                <td>latitude e7490</td>
                                <td>517</td>
                                <td>517</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>8</td>
                                <td>dell</td>
                                <td>latitude e5490</td>
                                <td>466</td>
                                <td>444</td>
                                <td>22</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>9</td>
                                <td>dell</td>
                                <td>latitude e5580</td>
                                <td>325</td>
                                <td>325</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>10</td>
                                <td>dell</td>
                                <td>latitude e7480</td>
                                <td>246</td>
                                <td>246</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>11</td>
                                <td>dell</td>
                                <td>latitude e7250</td>
                                <td>206</td>
                                <td>206</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>12</td>
                                <td>dell</td>
                                <td>latitude e7389 2in1</td>
                                <td>181</td>
                                <td>181</td>
                                <td>-8</td>
                                <td>8
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>13</td>
                                <td>dell</td>
                                <td>latitude e3580</td>
                                <td>172</td>
                                <td>172</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>14</td>
                                <td>dell</td>
                                <td>latitude e7290</td>
                                <td>102</td>
                                <td>102</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>15</td>
                                <td>dell</td>
                                <td>latitude e7390</td>
                                <td>93</td>
                                <td>93</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>16</td>
                                <td>dell</td>
                                <td>latitude e5270</td>
                                <td>77</td>
                                <td>77</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>17</td>
                                <td>dell</td>
                                <td>latitude e7214</td>
                                <td>64</td>
                                <td>64</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>18</td>
                                <td>dell</td>
                                <td>latitude e5285</td>
                                <td>58</td>
                                <td>58</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>19</td>
                                <td>dell</td>
                                <td>latitude e5570</td>
                                <td>56</td>
                                <td>56</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>20</td>
                                <td>dell</td>
                                <td>precision m7520</td>
                                <td>53</td>
                                <td>53</td>
                                <td>-24</td>
                                <td>24
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>21</td>
                                <td>dell</td>
                                <td>latitude e5400</td>
                                <td>49</td>
                                <td>49</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>22</td>
                                <td>dell</td>
                                <td>latitude e5590</td>
                                <td>48</td>
                                <td>48</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>23</td>
                                <td>dell</td>
                                <td>latitude e7400</td>
                                <td>46</td>
                                <td>46</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>24</td>
                                <td>dell</td>
                                <td>latitude e5290 2in1</td>
                                <td>45</td>
                                <td>45</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>25</td>
                                <td>dell</td>
                                <td>precision m7710</td>
                                <td>40</td>
                                <td>40</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>26</td>
                                <td>dell</td>
                                <td>precision m7510</td>
                                <td>39</td>
                                <td>39</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>27</td>
                                <td>dell</td>
                                <td>precision m7720</td>
                                <td>36</td>
                                <td>36</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>28</td>
                                <td>dell</td>
                                <td>inspiron 15 3567</td>
                                <td>36</td>
                                <td>36</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>29</td>
                                <td>dell</td>
                                <td>latitude e7214 rugged 2-in-1</td>
                                <td>26</td>
                                <td>26</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>30</td>
                                <td>dell</td>
                                <td>latitude e5491</td>
                                <td>24</td>
                                <td>24</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>31</td>
                                <td>dell</td>
                                <td>latitude e7380</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>32</td>
                                <td>dell</td>
                                <td>latitude e7310</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>33</td>
                                <td>dell</td>
                                <td>latitude e7370</td>
                                <td>22</td>
                                <td>22</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>34</td>
                                <td>dell</td>
                                <td>latitude e3490</td>
                                <td>21</td>
                                <td>21</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>35</td>
                                <td>dell</td>
                                <td>latitude e5280</td>
                                <td>20</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>36</td>
                                <td>dell</td>
                                <td>latitude 14 rugged 5414</td>
                                <td>20</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>37</td>
                                <td>dell</td>
                                <td>latitude 14 rugged 5404</td>
                                <td>19</td>
                                <td>19</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>38</td>
                                <td>dell</td>
                                <td>latitude e3480</td>
                                <td>17</td>
                                <td>17</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>39</td>
                                <td>dell</td>
                                <td>inspiron 5559</td>
                                <td>17</td>
                                <td>17</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>40</td>
                                <td>dell</td>
                                <td>latitude e5300</td>
                                <td>16</td>
                                <td>16</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>41</td>
                                <td>dell</td>
                                <td>latitude 13 e3379</td>
                                <td>15</td>
                                <td>15</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>42</td>
                                <td>dell</td>
                                <td>latitude e5500</td>
                                <td>14</td>
                                <td>14</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>43</td>
                                <td>dell</td>
                                <td>precision m5530</td>
                                <td>14</td>
                                <td>14</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>44</td>
                                <td>dell</td>
                                <td>inspiron 5570</td>
                                <td>13</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>45</td>
                                <td>dell</td>
                                <td>latitude e5289 2-in-1</td>
                                <td>13</td>
                                <td>13</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>46</td>
                                <td>dell</td>
                                <td>latitude e5289</td>
                                <td>12</td>
                                <td>12</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>47</td>
                                <td>dell</td>
                                <td>precision m3530</td>
                                <td>12</td>
                                <td>12</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>48</td>
                                <td>dell</td>
                                <td>precision m5520</td>
                                <td>12</td>
                                <td>12</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>49</td>
                                <td>dell</td>
                                <td>latitude 14 rugged extreme 540</td>
                                <td>11</td>
                                <td>11</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="cell-1" data-toggle="collapse">
                                <td>50</td>
                                <td>dell</td>
                                <td>latitude e3500</td>
                                <td>11</td>
                                <td>11</td>
                                <td>0</td>
                                <td>0
                                </td>
                                <td class="text-center">
                                    <a class="" href="model_view.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../includes/footer.php'); ?>