<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php

    require_once("../../functions/db_connection.php");

    $q = intval($_GET['q']);

    $sql = "SELECT * FROM sales_daily_customer_informations WHERE created_by = '" . $q . "'";
    $result = mysqli_query($connection, $sql);

    echo "
<table>
<tr>
<th>supplier</th>
<th>mfg</th>
<th>device</th>
<th>brand</th>
<th>model</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        $test = $row['customer_name'];
        $test2 = $row['country_name'];
        $test3 = $row['platform'];

        echo "<tr>";
        echo "<td>" . $row['customer_name'] . "</td>";
        echo "<td>" . $row['country_name'] . "</td>";
        echo "<td>" . $row['platform'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($connection);
    ?>
</body>

</html>