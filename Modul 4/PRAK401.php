<!DOCTYPE html>
<head>
    <title>PRAK401</title>
</head>
<body>

<form method="post">

    Panjang : 
    <input type="text" name="panjang"> <br>
    Lebar : 
    <input type="text" name="lebar"> <br>
    Nilai : 
    <input type="text" name="nilai"> <br>
    <input type="submit" name="tampil" value="Cetak">

</form>
<br>

<?php
if(isset($_POST['tampil'])) {

    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];
    $data = explode(" ", $nilai);
    $ukuran = $panjang * $lebar;

    if(count($data) != $ukuran) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {

        $index = 0;
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        for($i = 0; $i < $panjang; $i++) {

            echo "<tr>";

            for($j = 0; $j < $lebar; $j++) {
                echo "<td>".$data[$index]."</td>";
                $index++;
            }

            echo "</tr>";
        }

        echo "</table>";
    }
}

?>

</body>
</html>