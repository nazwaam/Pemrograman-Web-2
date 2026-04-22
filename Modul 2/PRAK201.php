<!DOCTYPE html>
<html>
<body>

<form method="post">
    Nama 1: <input type="text" name="n1"><br>
    Nama 2: <input type="text" name="n2"><br>
    Nama 3: <input type="text" name="n3"><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    if ($a > $b) { $temp = $a; $a = $b; $b = $temp; }
    if ($a > $c) { $temp = $a; $a = $c; $c = $temp; }
    if ($b > $c) { $temp = $b; $b = $c; $c = $temp; }

    echo $a . "<br>" . $b . "<br>" . $c;
}
?>

</body>
</html>