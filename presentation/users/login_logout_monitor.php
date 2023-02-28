<?php

session_start();
require_once("../includes/header.php");
require_once("../../functions/db_connection.php");

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}

$user_id = $_GET['user_id'];

?>

<style>
    .pagination {
        width: 100%;
        display: flex;
        justify-content: flex-end;

    }

    .page-item .active .page-link {
        background-color: #168EB4;
        border-color: #168EB4;
    }

    .pagination a {
        font-weight: bold;
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        /* border: 1px solid black; */
    }

    .pagination a.active {
        background-color: #168EB4;
        color: #fff;
    }

    .pagination a:hover:not(.active) {
        background-color: skyblue;
    }
</style>

<div class="row">
    <div class="col-md-5 mx-1">
        <a href="./users">
            <i class="fa-regular fa-circle-left fa-2x" style="color: #0c2e5b;"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 justify-content-center mx-auto mt-2 mb-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="">Users <?php echo $user_id; ?></h5>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Logged In Time</th>
                            <th>Logged Out Time</th>
                            <th>Logged Time Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_id = 0;
                        $per_page_record = 10;
                        $user_id = $_GET['user_id'];

                        if (isset($_GET["page"])) {
                            $page  = $_GET["page"];
                        } else {
                            $page = 1;
                        }

                        $start_from = ($page - 1) * $per_page_record;

                        $query = "SELECT * FROM users_logged_in_time WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $start_from, $per_page_record";
                        $rs_result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_array($rs_result)) {
                            // Display each field of the records.    
                        ?>
                            <tr>
                                <td>#</td>
                                <td><?php echo $row["log_in_time"]; ?></td>
                                <td><?php echo $row["log_out_time"]; ?></td>
                                <td>
                                    <?php if ($row['log_out_time'] == '0000-00-00 00:00:00') { ?>
                                        <span class="badge badge-lg badge-success text-white">Still Looged in</span>
                                    <?php } elseif ($row['log_out_time'] != '0000-00-00 00:00:00') { ?>
                                        <span class="badge badge-lg badge-primary text-white">
                                            <?php $working_time_in_seconds = strtotime($row['log_out_time']) - strtotime($row['log_in_time']);
                                            echo date('h:i:s', $working_time_in_seconds);
                                            ?>
                                        </span>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php
                        };
                        ?>
                    </tbody>
                </table>
                <?php

                $query = "SELECT COUNT(*) FROM users_logged_in_time";
                $rs_result = mysqli_query($connection, $query);
                $row = mysqli_fetch_row($rs_result);
                $total_records = $row[0];

                echo "</br>";
                // Number of pages required.   
                $total_pages = ceil($total_records / $per_page_record);
                $pagLink = "";
                $query = "SELECT COUNT(*) FROM users_logged_in_time";
                $rs_result = mysqli_query($connection, $query);
                $row = mysqli_fetch_row($rs_result);
                $total_records = $row[0];

                echo "</br>";
                // Number of pages required.   
                $total_pages = ceil($total_records / $per_page_record);
                $pagLink = "";

                ?>
                <div class="row">
                    <div class="col">
                        <p class="">Showing <?php echo $page ?>/<?php echo $total_pages ?> of <?php echo $total_pages ?> Entries</p>
                    </div>
                    <div class="col">
                        <div class="pagination">
                            <?php

                            if ($page >= 2) {
                                echo "<a class='page-link' href='login_logout_monitor.php?user_id=$user_id&page=" . ($page - 1) . "'>  Prev </a>";
                            }

                            for ($i = 1; $i <= $total_pages; $i++) {

                                if ($i == $page) {
                                    $pagLink .= "<a class='active'href='login_logout_monitor.php?user_id=$user_id&page=" . $i . "'>" . $i . " </a>";
                                } else {
                                    $pagLink .= "<a class='page-item page-link' href='login_logout_monitor.php?user_id=$user_id&page=" . $i . "'> " . $i . " </a>";
                                }
                            };
                            echo $pagLink;

                            if ($page < $total_pages) {
                                echo "<a class='page-link' href='login_logout_monitor.php?user_id=$user_id&page=" . ($page + 1) . "'>  Next </a>";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function go2Page() {
        var page = document.getElementById("page").value;
        var user_id = document.getElementById("page").value;
        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
        window.location.href = 'login_logout_monitor.php?user_id=' + user_id + ' page=' + page;
    }
</script>

<?php require_once('../includes/footer.php') ?>