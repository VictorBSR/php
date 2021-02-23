<?php

$nome='victor barros';
echo strtoupper($nome);

echo "<br>";
echo ucwords($nome);

echo "<br>";
echo ucfirst($nome);

echo "<br>";
$nome = str_replace("i","1", $nome);
$nome = str_replace("o","0", $nome);

echo $nome;

?>