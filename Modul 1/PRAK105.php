<?php
$smartphones = [
    "tipe1" => "Samsung Galaxy S22",
    "tipe2" => "Samsung Galaxy S22+",
    "tipe3" => "Samsung Galaxy A03",
    "tipe4" => "Samsung Galaxy Xcover 5"
];
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border: 1px solid #000;

        }

        th, td {
            border: 1px solid #000; 
            padding: 8px 12px; 
            text-align: left; 
        }

        th {
            background-color: red;
            font-size: 24px;
            font-weight: bold;
            padding: 25px 12px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach ($smartphones as $key => $phone): ?>
            <tr>
                <td><?php echo $phone; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>