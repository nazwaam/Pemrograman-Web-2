<?php
$phi = 3.14;
$r = 4.2;
$t = 5.4;
$p = 8.9;
$l = 14.7;
$s = 7.9;

$volume = (4/3) * $phi * $r * $r * $r;

echo "Jari-jari = $r <br>";
echo "Tinggi = $t <br>";
echo "Panjang = $p <br>";
echo "Lebar = $l <br>";
echo "Sisi = $s <br>";
echo "Volume = " . number_format($volume, 3) . "m3";
?>