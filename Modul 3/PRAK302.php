<!DOCTYPE html>
<html>
    <head>
        <title>PRAK302</title>
    </head>
<body>

<form method="post">

    Tinggi :
    <input type="number" name="tinggi"><br>
    Alamat Gambar :
    <input type="text" name="gambar" size="20"><br>
    <input type="submit" name="submit" value="Cetak"><br><br>

</form>

<?php

if(isset($_POST['submit'])) {

    $tinggi = $_POST['tinggi'];
    $gambar = $_POST['gambar'];

    $i = $tinggi;
    $space = 0;

    while($i >= 1) {

        echo "<div style='margin-left: ".$space."px;'>";

        $j = 1;

        while($j <= $i) {

            echo "<img src='$gambar' width='50'>";

            $j++;
        }

        echo "</div>";

        $space += 50;
        $i--;
    }
}

?>

</body>
</html>