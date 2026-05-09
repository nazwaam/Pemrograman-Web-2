<!DOCTYPE html>
<html>
    <head>
        <title>PRAK305</title>
    </head>
<body>

<form method="post">

    <input type="text" name="kata">
    <input type="submit" name="submit" value="submit">

</form>

<br>

<?php

if(isset($_POST['submit'])) {

    $kata = $_POST['kata'];
    $panjang = strlen($kata);
    $i = 0;

    while($i < $panjang) {
        $j = 1;
        while($j <= $panjang) {
            if($j == 1) {
                echo strtoupper($kata[$i]);
            } else {
                echo strtolower($kata[$i]);
            }
            $j++;
        }

        $i++;
    }
}

?>

</body>
</html>