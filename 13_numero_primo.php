<?php
echo "Digite um número inteiro positivo maior que 1: ";
$num = (int) readline();

if ($num <= 1) {
    echo "O número deve ser maior que 1." . PHP_EOL;
    exit(1);
}

function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isPrimo($num)) {
    echo "O número $num é primo." . PHP_EOL;
} else {
    echo "O número $num não é primo." . PHP_EOL;
}
?>
