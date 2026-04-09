<?php
$data = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
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
            font-weight: bold;
            text-align: center;
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