<?php
if ($argc != 2) {
    echo "Uso: php turno_estudo.php <turno>" . PHP_EOL;
    exit(1);
}

$turno = strtoupper($argv[1]);

if ($turno == 'M') {
    echo "Bom dia!" . PHP_EOL;
} elseif ($turno == 'V') {
    echo "Boa tarde!" . PHP_EOL;
} elseif ($turno == 'N') {
    echo "Boa noite!" . PHP_EOL;
} else {
    echo "Valor inválido." . PHP_EOL;
}
?>
