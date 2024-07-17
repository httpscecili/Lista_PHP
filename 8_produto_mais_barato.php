<?php
if ($argc != 4) {
    echo "Uso: php produto_mais_barato.php <preco1> <preco2> <preco3>" . PHP_EOL;
    exit(1);
}

$preco1 = (float) $argv[1];
$preco2 = (float) $argv[2];
$preco3 = (float) $argv[3];

$mais_barato = $preco1;
$produto = "Produto 1";

if ($preco2 < $mais_barato) {
    $mais_barato = $preco2;
    $produto = "Produto 2";
}

if ($preco3 < $mais_barato) {
    $mais_barato = $preco3;
    $produto = "Produto 3";
}

echo "Você deve comprar o " . $produto . " que custa " . $mais_barato . " reais." . PHP_EOL;
?>
