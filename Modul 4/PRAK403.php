<!DOCTYPE html>
<head>
    <title>PRAK403</title>
</head>
<body>

<?php

$mahasiswa1 = [
    "No" => "1",
    "Nama" => "Ridho",
    "Mata Kuliah diambil" => [
        "Pemrograman I",
        "Praktikum Pemrograman I",
        "Pengantar Lingkungan Lahan Basah",
        "Arsitektur Komputer"
    ],
    "SKS" => [2,1,2,3]
];

$mahasiswa2 = [
    "No" => "2",
    "Nama" => "Ratna",
    "Mata Kuliah diambil" => [
        "Basis Data I",
        "Praktikum Basis Data I",
        "Kalkulus"
    ],
    "SKS" => [2,1,3]
];

$mahasiswa3 = [
    "No" => "3",
    "Nama" => "Tono",
    "Mata Kuliah diambil" => [
        "Rekayasa Perangkat Lunak",
        "Analisis dan Perancangan Sistem",
        "Komputasi Awan",
        "Kecerdasan Bisnis"
    ],
    "SKS" => [3,3,3,3]
];

$data = [$mahasiswa1,$mahasiswa2,$mahasiswa3];

function keterangan($total){

    if($total < 7){
        return "Revisi KRS";
    }else{
        return "Tidak Revisi";
    }

}

foreach($data as $i => $mhs){

    $total = array_sum($mhs["SKS"]);
    $data[$i]["Total SKS"] = $total;
    $data[$i]["Keterangan"] = keterangan($total);

}

function warna($total,$index){

    if($index == 0){
        if($total < 7){
            return "red";
        }else{
            return "limegreen";
        }

    }

}

?>

<table border="1" cellpadding="8" cellspacing="0">

<tr bgcolor='#d3d3d3'> 
    <th>No</th>
    <th>Nama</th>
    <th>Mata Kuliah diambil</th>
    <th>SKS</th>
    <th>Total SKS</th>
    <th>Keterangan</th>
</tr>

<?php foreach($data as $mhs) : ?>

    <?php foreach($mhs["Mata Kuliah diambil"] as $i => $matkul) : ?>

    <tr>

        <td><?= $i == 0 ? $mhs["No"] : "" ?></td>
        <td><?= $i == 0 ? $mhs["Nama"] : "" ?></td>
        <td><?= $matkul ?></td>
        <td><?= $mhs["SKS"][$i] ?></td>
        <td><?= $i == 0 ? $mhs["Total SKS"] : "" ?></td>
        <td bgcolor="<?= warna($mhs["Total SKS"],$i) ?>">
            <?= $i == 0 ? $mhs["Keterangan"] : "" ?>
        </td>

    </tr>

    <?php endforeach; ?>

<?php endforeach; ?>

</table>

</body>
</html>