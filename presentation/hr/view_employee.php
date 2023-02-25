<?php

ob_start();
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

?>

<div class="row">
    <div class="col-md-5 align-self-center d-flex p-2">
        <i class="fa-solid fa-users"></i>
        <h6 class="mx-1" style="margin-top: auto; font-weight: bold;">Emp 256</h6>
    </div>
</div>
<div class="row">
    <div class="col col-sm-12 col-lg-12 justify-content-center mx-auto">
        <button class="btn btn-xs btn-primary">Download Excel File</button>
    </div>
</div>
<div class="row mt-2">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between mt-1">
                    <h6>February Monthly Report</h6>
                    <select name="" id="" style="width: 200px; padding: 0 20px; ">
                        <option selected>--Select Month--</option>
                        <option value="visit">January</option>
                        <option value="own">February</option>
                        <option value="company">March</option>
                        <option value="cancel">April</option>
                        <option value="student">May</option>
                        <option value="student">June</option>
                        <option value="student">July</option>
                        <option value="student">August</option>
                        <option value="student">September</option>
                        <option value="student">October</option>
                        <option value="student">November</option>
                        <option value="student">December</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Attendance</th>
                            <th>Daily Target</th>
                            <th>Completed</th>
                            <th>Different</th>
                            <th>Achived</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="daily_performance.php">1</a></td>
                            <td><span class="badge badge-success">Present</span></td>
                            <td>50</td>
                            <td>45</td>
                            <td>-5</td>
                            <td><span class="badge badge-danger">90%</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">2</a></td>
                            <td><span class="badge badge-success">Present</span></td>
                            <td>50</td>
                            <td>55</td>
                            <td>+5</td>
                            <td><span class="badge badge-success">110%</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">3</a></td>
                            <td><span class="badge badge-warning">Day Off</span></td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><span class="badge badge-warning">0</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">3</a></td>
                            <td><span class="badge badge-success">Present</span></td>
                            <td>50</td>
                            <td>56</td>
                            <td>+6</td>
                            <td><span class="badge badge-success">112%</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">5</a></td>
                            <td><span class="badge badge-danger">Absent</span></td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><span class="badge badge-danger">Absent</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">6</a></td>
                            <td><span class="badge badge-success">Present</span></td>
                            <td>50</td>
                            <td>37</td>
                            <td>-13</td>
                            <td><span class="badge badge-danger">74%</span></td>
                        </tr>
                        <tr>
                            <td><a href="daily_performance.php">7</a></td>
                            <td><span class="badge badge-success">Present</span></td>
                            <td>50</td>
                            <td>65</td>
                            <td>+15</td>
                            <td><span class="badge badge-success">130%</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total Working Days: 21/26</td>
                            <td>250</td>
                            <td>258</td>
                            <td>+8</td>
                            <td><span class="badge badge-success">103%</span></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">February Salary Sheet</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Name: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>John Doe </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Employee ID: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>001 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Department: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>Production </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Designation: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>Technician </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h6>Salary Calculation</h6>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-5">
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Basic Salary: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>AED 1500.00 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Bonus: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>100.00 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Allowance: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>300.00 </p>
                            </div>
                        </div>
                        <h6>Deductions</h6>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Attendance: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>55.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Performance: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>155.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Other: </p>
                            </div>
                            <div class="col-sm-5">
                                <p>500.00</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6>Net Salary: </h6>
                            </div>
                            <div class="col-sm-5">
                                <p>997.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php') ?>