<?php
ini_set('display_errors', '1');

$dadosCadastrais = array(
    'nome'=>'Victor',   
    'idade'=>16
);

foreach ($dadosCadastrais as &$value) {

    if (gettype($value) === 'integer') $value +=10;
    if (gettype($value) === 'string') $value = $value." Barros";
    echo "Dado: $value<br>";
}

 print_r($dadosCadastrais);


?>