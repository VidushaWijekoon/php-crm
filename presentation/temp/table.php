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
    $q = intval($_GET['q']);

    $con = mysqli_connect("localhost", "root", "", "wms");
    if (!$con) {
        // die('Could not connect: ' /. mysqli_error($con));
    }

    mysqli_select_db($con, "wms");
    $sql = "SELECT * FROM machine_from_supplier WHERE machine_id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

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
        $test = $row['supplier_name'];
        $test2 = $row['mfg'];
        $test3 = $row['device'];
        $test4 = $row['brand'];
        $test5 = $row['model'];
        echo "<tr>";
        echo "<td>" . $row['supplier_name'] . "</td>";
        echo "<td>" . $row['mfg'] . "</td>";
        echo "<td>" . $row['device'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>