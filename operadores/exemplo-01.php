<?php

$nome = "hcode";

echo $nome . 'mais algo<br><br>';

$nome .= 'Treinamentos<br>';

echo $nome;

echo "<br>";
echo "<br>";
echo "<br>";

//somando valores
$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;

echo $valorTotal;
echo "<br>";

//desconto de 25%
$valorTotal *= .75;
echo "<br>";

//ou
//$valorTotal -= 0.25*$valorTotal;

echo $valorTotal;

?>