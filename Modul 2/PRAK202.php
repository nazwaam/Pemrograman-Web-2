<!DOCTYPE html>
<html>
<body>

<?php
$err_nama = $err_nim = $err_jk = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = isset($_POST['jk']) ? $_POST['jk'] : "";

    if ($nama == "") $err_nama = "* nama tidak boleh kosong";
    if ($nim == "") $err_nim = "* nim tidak boleh kosong";
    if ($jk == "") $err_jk = "* jenis kelamin tidak boleh kosong";
}
?>

<form method="post">
    Nama: 
    <input type="text" name="nama">
    <span style="color:red"><?= $err_nama ?></span>
    <br>

    NIM: 
    <input type="text" name="nim">
    <span style="color:red"><?= $err_nim ?></span>
    <br>

    Jenis Kelamin:
    <span style="color:red"><?= $err_jk ?></span><br>

    <label>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
    </label><br>

    <label>
        <input type="radio" name="jk" value="Perempuan"> Perempuan
    </label><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit']) && $err_nama=="" && $err_nim=="" && $err_jk=="") {
    echo "<h3>Output:</h3>";
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$jk";
}
?>

</body>
</html>