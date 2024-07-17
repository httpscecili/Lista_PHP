<?php

if ($argc != 3) {
    echo "Uso: php maior_numero.php <numero1> <numero2>" . PHP_EOL;
    exit(1);
}


$numero1 = $argv[1];
$numero2 = $argv[2];


if ($numero1 > $numero2) {
    echo "O maior número é: " . $numero1 . PHP_EOL;
} elseif ($numero2 > $numero1) {
    echo "O maior número é: " . $numero2 . PHP_EOL;
} else {
    echo "Os números são iguais." . PHP_EOL;
}

/*Execute o script com o comando, passando dois números como argumentos:


php maior_numero.php 10 20


Substitua 10 e 20 pelos números que deseja comparar. O script determinará e imprimirá o maior deles ou indicará se os números são iguais.
*/


?>