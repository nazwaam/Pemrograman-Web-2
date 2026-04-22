<!DOCTYPE html>
<html>
<body>

<?php
$hasil = "";

if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    if ($dari == "C") $c = $nilai;
    elseif ($dari == "F") $c = ($nilai - 32) * 5/9;
    elseif ($dari == "R") $c = $nilai * 5/4;
    elseif ($dari == "K") $c = $nilai - 273;

    if ($ke == "C") $hasil = $c;
    elseif ($ke == "F") $hasil = ($c * 9/5) + 32;
    elseif ($ke == "R") $hasil = $c * 4/5;
    elseif ($ke == "K") $hasil = $c + 273;
}
?>

<form method="post">
    Nilai: <input type="number" name="nilai"><br>

    Dari:<br>
    <input type="radio" name="dari" value="C"> Celcius<br>
    <input type="radio" name="dari" value="F"> Fahrenheit<br>
    <input type="radio" name="dari" value="R"> Reamur<br>
    <input type="radio" name="dari" value="K"> Kelvin<br>

    Ke:<br>
    <input type="radio" name="ke" value="C"> Celcius<br>
    <input type="radio" name="ke" value="F"> Fahrenheit<br>
    <input type="radio" name="ke" value="R"> Reamur<br>
    <input type="radio" name="ke" value="K"> Kelvin<br>

    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if ($hasil !== "") {
    echo "<h3>Hasil Konversi: $hasil °$ke</h3>";
}
?>

</body>
</html>