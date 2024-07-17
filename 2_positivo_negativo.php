<?php

if ($argc != 2) {
    echo "Uso: php positivo_negativo.php <numero>" . PHP_EOL;
    exit(1);
}

$numero = $argv[1];

if ($numero > 0) {
    echo "O número " . $numero . " é positivo." . PHP_EOL;
} elseif ($numero < 0) {
    echo "O número " . $numero . " é negativo." . PHP_EOL;
} else {
    echo "O número é zero." . PHP_EOL;
}

/*Execute o script com o comando, passando o número como argumento:

php positivo_negativo.php 10

Substitua 10 pelo valor que deseja verificar. O script determinará e informará se o número é positivo, negativo ou zero.
*/
?>
