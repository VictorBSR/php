<?php

$nome = 'Victor';

function teste() {

    global $nome;
    echo $nome;
}

function teste2() {

    $nome = "Fulano";
    echo $nome . " " . "agora teste 2";
}

teste();
echo "</br>";
teste2();

?>