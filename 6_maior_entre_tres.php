<?php
if ($argc != 4) {
    echo "Uso: php maior_tres_numeros.php <numero1> <numero2> <numero3>" . PHP_EOL;
    exit(1);
}

$numero1 = (float) $argv[1];
$numero2 = (float) $argv[2];
$numero3 = (float) $argv[3];

$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}

if ($numero3 > $maior) {
    $maior = $numero3;
}

echo "O maior número é: " . $maior . PHP_EOL;


/*Execute o script com o comando, passando os três números como argumentos:


php maior_tres_numeros.php 8 15 3


Substitua 8, 15 e 3 pelos números que deseja comparar. O script determinará e informará qual dos três números é o maior.
*/
?>
