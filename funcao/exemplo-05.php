<?php
ini_set('display_errors', '1');

function somaValores (int ...$vetorSoma):float {

    return array_sum($vetorSoma);

}

echo var_dump(somaValores(2.5,2)); //converteu pra int, fez a soma e depois retornou float
echo '<br>';
echo somaValores(25,4,3,1);

?>