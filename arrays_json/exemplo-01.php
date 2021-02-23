<?php

$pessoas = array();

array_push($pessoas,array(
    'nome'=>'Jose',
    'idade'=>20
));

array_push($pessoas,array(
    'nome'=>'Maria',
    'idade'=>25
));

array_push($pessoas,array(
    'nome'=>'Antonio',
    'idade'=>32
));

print_r($pessoas[2]['idade']);


?>