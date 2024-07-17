<?php
if ($argc != 4) {
    echo "Uso: php ordem_decrescente.php <numero1> <numero2> <numero3>" . PHP_EOL;
    exit(1);
}

$numeros = [(float) $argv[1], (float) $argv[2], (float) $argv[3]];

rsort($numeros);

echo "Os números em ordem decrescente são: " . implode(", ", $numeros) . PHP_EOL;
?>
