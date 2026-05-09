<!DOCTYPE html>
<html>
    <head>
        <title>PRAK303</title>
    </head>
<body>

<form method="post">

    Batas Bawah :
    <input type="number" name="bawah"><br>
    Batas Atas :
    <input type="number" name="atas"><br>
    <input type="submit" name="submit" value="Cetak"><br><br>

</form>

<?php

if(isset($_POST['submit'])) {

    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];

    $i = $bawah;

    do {

        if(($i + 7) % 5 == 0) {

            echo "<img src='star.png' width='20'> ";

        } else {

            echo $i . " ";
        }

        $i++;

    } while($i <= $atas);
}

?>

</body>
</html>