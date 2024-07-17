<?php
if ($argc != 3) {
    echo "Uso: php calculadora_imc.php <peso_em_kg> <altura_em_metros>" . PHP_EOL;
    exit(1);
}

$peso = (float) $argv[1];
$altura = (float) $argv[2];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "IMC: " . number_format($imc, 1) . " - Abaixo do peso" . PHP_EOL;
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "IMC: " . number_format($imc, 1) . " - Peso normal" . PHP_EOL;
} elseif ($imc >= 25 && $imc < 30) {
    echo "IMC: " . number_format($imc, 1) . " - Sobrepeso" . PHP_EOL;
} else {
    echo "IMC: " . number_format($imc, 1) . " - Obeso" . PHP_EOL;
}
?>
