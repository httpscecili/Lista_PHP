<?php
if ($argc != 2) {
    echo "Uso: php vogal_consoante.php <letra>" . PHP_EOL;
    exit(1);
}

$letra = strtoupper($argv[1]); 


if (strlen($letra) != 1 || !ctype_alpha($letra)) {
    echo "Por favor, insira uma única letra." . PHP_EOL;
    exit(1);
}


if (in_array($letra, ['A', 'E', 'I', 'O', 'U'])) {
    echo "A letra " . $letra . " é uma vogal." . PHP_EOL;
} else {
    echo "A letra " . $letra . " é uma consoante." . PHP_EOL;

/*Execute o script com o comando, passando a letra como argumento:

    
php vogal_consoante.php A

Substitua A pela letra que deseja verificar. O script determinará e informará se a letra é uma vogal ou uma consoante.*/
}
?>
