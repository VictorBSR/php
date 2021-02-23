<?php

$anoNascimento = 1994;
$nomeCompleto = "Victor Barros e Silva dos Reis";
echo $nomeCompleto;
echo "<br/>";

//unset($nomeCompleto, $a);

if (isset($nomeCompleto))   {
    echo $nomeCompleto . " " . $anoNascimento;
}

echo "<br/>";echo "<br/>";
echo "fim";

?>