<?php
echo "Digite um número positivo: ";
$num = (int) readline();

if ($num <= 0) {
    echo "O número deve ser positivo." . PHP_EOL;
    exit(1);
}

echo "Contagem regressiva:" . PHP_EOL;
for ($i = $num; $i >= 0; $i--) {
    echo $i . PHP_EOL;
}
?>
