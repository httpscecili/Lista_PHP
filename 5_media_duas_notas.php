<?php

if ($argc != 3) {
    echo "Uso: php media_notas.php <nota1> <nota2>" . PHP_EOL;
    exit(1);
}

$nota1 = (float) $argv[1];
$nota2 = (float) $argv[2];


$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "Aprovado com Distinção" . PHP_EOL;
} elseif ($media >= 7) {
    echo "Aprovado" . PHP_EOL;
} else {
    echo "Reprovado" . PHP_EOL;
}

/*Execute o script com o comando, passando as duas notas como argumentos:

php media_notas.php 8 

Substitua 8 e 9 pelas notas que deseja usar para calcular a média. O script determinará e informará se o aluno está "Aprovado", "Aprovado com Distinção" ou "Reprovado" com base na média das notas fornecidas.
*/
?>
