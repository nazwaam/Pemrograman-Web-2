<!DOCTYPE html>
<head>
    <title>PRAK402</title>
</head>
<body>

<?php

$data = [
    [
        "nama" => "Andi",
        "nim" => "2101001",
        "uts" => 87,
        "uas" => 65
    ],
    [
        "nama" => "Budi",
        "nim" => "2101002",
        "uts" => 76,
        "uas" => 79
    ],
    [
        "nama" => "Tono",
        "nim" => "2101003",
        "uts" => 50,
        "uas" => 41
    ],
    [
        "nama" => "Jessica",
        "nim" => "2101004",
        "uts" => 60,
        "uas" => 75
    ]
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr bgcolor='#d3d3d3'>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach($data as $d){

    $akhir = (0.4 * $d['uts']) + (0.6 * $d['uas']);

    if($akhir >= 80){
        $huruf = "A";
    }elseif($akhir >= 70){
        $huruf = "B";
    }elseif($akhir >= 60){
        $huruf = "C";
    }elseif($akhir >= 50){
        $huruf = "D";
    }else{
        $huruf = "E";
    }

    echo "<tr>";
    echo "<td>".$d['nama']."</td>";
    echo "<td>".$d['nim']."</td>";
    echo "<td>".$d['uts']."</td>";
    echo "<td>".$d['uas']."</td>";
    echo "<td>".$akhir."</td>";
    echo "<td>".$huruf."</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>