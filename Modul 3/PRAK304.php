<!DOCTYPE html>
<html>
    <head>
        <title>PRAK304</title>
    </head>
<body>

<?php

$jumlah = "";

if(isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];
}

if(isset($_POST['tambah'])) {
    $jumlah = $_POST['jumlah'];
    $jumlah++;
}

if(isset($_POST['kurang'])) {
    $jumlah = $_POST['jumlah'];

    if($jumlah > 0) {
        $jumlah--;
    }
}

?>

<form method="post">

    Jumlah Bintang
    <input type="number" name="jumlah" value="<?php echo $jumlah; ?>"><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>

    <?php

    if($jumlah > 0) {

        echo "Jumlah Bintang $jumlah";
        echo "<br><br><br>";

        $i = 1;

        while($i <= $jumlah) {

            echo "<img src='star.png' width='50'> ";

            $i++;
        }

    ?>

        <br>

        <input type="submit" name="tambah" value="Tambah"><input type="submit" name="kurang" value="Kurang">

    <?php
    }
    ?>

</form>

</body>
</html>