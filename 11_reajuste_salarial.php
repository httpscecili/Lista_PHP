<?php
if ($argc != 2) {
    echo "Uso: php reajuste_salarial.php <salario>" . PHP_EOL;
    exit(1);
}

$salario = (float) $argv[1];
$novo_salario = 0;
$percentual_aumento = 0;
$valor_aumento = 0;

if ($salario <= 280) {
    $percentual_aumento = 20;
} elseif ($salario > 280 && $salario <= 700) {
    $percentual_aumento = 15;
} elseif ($salario > 700 && $salario <= 1500) {
    $percentual_aumento = 10;
} elseif ($salario > 1500) {
    $percentual_aumento = 5;
}

$valor_aumento = ($salario * $percentual_aumento) / 100;
$novo_salario = $salario + $valor_aumento;

echo "Salário antes do reajuste: R$ " . number_format($salario, 2, ',', '.') . PHP_EOL;
echo "Percentual de aumento aplicado: " . $percentual_aumento . "%" . PHP_EOL;
echo "Valor do aumento: R$ " . number_format($valor_aumento, 2, ',', '.') . PHP_EOL;
echo "Novo salário após o reajuste: R$ " . number_format($novo_salario, 2, ',', '.') . PHP_EOL;
?>
