<?php
$c = 37.841;

$f = ($c * 9/5) + 32;
$r = $c * 4/5;
$k = $c + 273.15;

echo "Celcius = $c <br>";
echo "Farenheit (F) = " . number_format($f, 4) . "<br>";
echo "Reamur (R) = " . number_format($r, 4) . "<br>";
echo "Kelvin (K) = " . number_format($k, 3);
?>