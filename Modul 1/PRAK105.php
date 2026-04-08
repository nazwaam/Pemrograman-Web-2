<?php
$data = [
    "hp1" => "Samsung Galaxy S22",
    "hp2" => "Samsung Galaxy S22+",
    "hp3" => "Samsung Galaxy A03",
    "hp4" => "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 1px double black;
        }
        td {
            border: 1px double black;
            padding: 6px;
        }
        .judul {
            background-color: red;
            font-weight: bold;
            text-align: center;
            font-size: 22px;
            height: 70px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td class="judul">Daftar Smartphone Samsung</td>
    </tr>

    <?php
    foreach ($data as $item) {
        echo "<tr><td>$item</td></tr>";
    }
    ?>

</table>

</body>
</html>