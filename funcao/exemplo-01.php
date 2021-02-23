<?php

function ola($texto ='mundo', $periodo = 'Bom dia!'){  //param da esquerda é sempre o obrigatório

    return "Olá $texto! $periodo<br>";

}

echo ola(); //passa o valor padrao
echo ola('');
echo ola('Johnny', 'Boa noite...');
echo ola('qwert');

$frase = ola(); //parametro é vazio
echo $frase;
echo strlen($frase);
echo "<br>";
var_dump($frase);


?>