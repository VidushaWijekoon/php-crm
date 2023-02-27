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

    $sql = "SELECT * FROM employees WHERE emp_id = '" . $q . "'";
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
        $test = $row['first_name'];
        $test2 = $row['last_name'];
        $test3 = $row['full_name'];

        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['full_name'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($connection);
    ?>
</body>

</html>