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
    <div class="col-lg-10 justify-content-center mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between mt-1">
                    <h6>February Monthly Report</h6> <select name="" id="" style="width: 200px; padding: 0 20px; ">
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
                <table id="" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Completed QR</th>
                            <th>Target</th>
                            <th>Morning Delay Time</th>
                            <th>Lunch Delay Time</th>
                            <th>Teatime delay time</th>
                            <th>Total delay time per day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-02-01 09:09:25</td>
                            <td>22</td>
                            <td>still not complete </td>
                            <td>00:03:00</td>
                            <td>00:10:00</td>
                            <td>00:00:00</td>
                            <td>00:13:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-02 09:03:09</td>
                            <td>19</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>00:09:00</td>
                            <td>0</td>
                            <td>00:09:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-04 09:06:10</td>
                            <td>21</td>
                            <td>still not complete </td>
                            <td>00:01:00</td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:01:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-05 09:01:27</td>
                            <td>21</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-06 09:03:19</td>
                            <td>23</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2023-02-07 09:05:40</td>
                            <td>19</td>
                            <td>still not complete </td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-08 09:01:10</td>
                            <td>21</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2023-02-09 09:01:39</td>
                            <td>21</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-11 09:04:04</td>
                            <td>23</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:00:00</td>
                            <td>00:00:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-12 09:01:36</td>
                            <td>41</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2023-02-13 09:01:20</td>
                            <td>40</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:02:00</td>
                            <td>00:02:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-14 09:10:01</td>
                            <td>41</td>
                            <td>still not complete </td>
                            <td>00:05:00</td>
                            <td>00:04:00</td>
                            <td>00:00:00</td>
                            <td>00:09:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-15 09:10:08</td>
                            <td>38</td>
                            <td>still not complete </td>
                            <td>00:05:00</td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:05:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-16 09:07:37</td>
                            <td>16</td>
                            <td>still not complete </td>
                            <td>00:02:00</td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:02:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-19 11:27:38</td>
                            <td>17</td>
                            <td>still not complete </td>
                            <td>02:22:00</td>
                            <td>0</td>
                            <td>0</td>
                            <td>02:22:00</td>
                        </tr>
                        <tr>
                            <td>2023-02-21 18:58:42</td>
                            <td>4</td>
                            <td>still not complete </td>
                            <td>0</td>
                            <td>0</td>
                            <td>00:13:00</td>
                            <td>00:13:00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Delay Time during selected date range</td>
                            <td>03:16:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> <?php require_once('../includes/footer.php'); ?>