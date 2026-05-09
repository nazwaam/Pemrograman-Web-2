<!DOCTYPE html>
<html>
    <head>
        <title>PRAK301</title>
    </head>
<body>

<form method="post">
    Jumlah Peserta :
    <input type="number" name="jumlah"><br>
    <input type="submit" name="submit" value="Cetak">
</form>

<?php
if(isset($_POST['submit'])) {

    $jumlah = $_POST['jumlah'];
    $i = 1;

    while($i <= $jumlah) {

        if($i % 2 == 1) {
            echo "<h2 style='color:red;'>Peserta Ke-$i</h2>";
        } else {
            echo "<h2 style='color:green;'>Peserta Ke-$i</h2>";
        }

        $i++;
    }
}
?>

</body>
</html>