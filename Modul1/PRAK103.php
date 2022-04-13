<?php
$Celcius = 37.841;
$Celciustofahrenheit = (9/5)*$Celcius+32;
$Celciustoreamur = (4/5)*$Celcius;
$Celciustokelvin = $Celcius+273;

echo "Fahrenheit (F) = ". round($Celciustofahrenheit,4). "<br>";
echo "Reamur (R) = ". round($Celciustoreamur,4). "<br>";
echo "Kelvin (K) = ". round($Celciustokelvin,4). "<br>";
?>