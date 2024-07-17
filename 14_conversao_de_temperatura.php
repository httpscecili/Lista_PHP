<?php
echo "Digite a temperatura em graus Celsius: ";
$celsius = (float) readline();

$fahrenheit = ($celsius * 9/5) + 32;

echo "Temperatura em Fahrenheit: " . number_format($fahrenheit, 2) . " °F" . PHP_EOL;
?>
