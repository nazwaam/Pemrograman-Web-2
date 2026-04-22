<!DOCTYPE html>
<html>
<body>

<form method="post">
    Nilai: <input type="number" name="angka"><br>
    <input type="submit" name="cek" value="Konversi">
</form>

<?php
if (!isset($_POST['cek'])) {
    $_POST = [];
}

if (isset($_POST['cek']) && $_POST['angka'] !== "") {
    $a = $_POST['angka'];
    $hasil = "";

    if ($a >= 1000) {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    } elseif ($a >= 100) {
        $hasil = "ratusan";
    } elseif ($a >= 20) {
        $hasil = "puluhan";
    } elseif ($a >= 10) {
        $hasil = "belasan";
    } elseif ($a > 0) {
        $hasil = "satuan";
    } elseif ($a == 0) {
        $hasil = "nol";
    }

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>