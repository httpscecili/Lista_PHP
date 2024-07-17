<?php

if ($argc != 2) {
    echo "Uso: php identificacao_genero.php <letra>" . PHP_EOL;
    exit(1);
}


$letra = strtoupper($argv[1]);


if ($letra == 'F') {
    echo "Feminino" . PHP_EOL;
} elseif ($letra == 'M') {
    echo "Masculino" . PHP_EOL;
} else {
    echo "Sexo inválido" . PHP_EOL;
}

/*Execute o script com o comando, passando a letra como argumento:


php identificacao_genero.php F

Substitua F pela letra que deseja verificar. O script determinará e informará se o gênero é "Feminino", "Masculino" ou "Sexo inválido".*/
?>
