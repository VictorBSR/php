<?php
ini_set('display_errors', '1');

$a=10;
/* function salario($a){   //o que acontece em Vegas...
    $a+=50;
    return $a;

} */

function salario($banana){   //o que acontece em Vegas...
    $banana+=50;
    return $banana;

}

echo 'Valor função: ';
echo salario($a);
echo ' e valor do $a original: ';
//echo '<br>';
echo $a;

//Passagem de param por referência:

function salario2(&$a){   //Passa referencia do $a, altera a variável
    $a+=50;
    return $a;

}

echo '<br>';
echo '<br>';
echo 'Valor função: ';
echo salario2($a);
echo ' e valor do $a original: ';
//echo '<br>';
echo $a;

//Variável global, o que acontece?

$c=2;

function soma($c){   //Passa referencia do $a, altera a variável
    global $c;
    $c += 50;
    return $c;

}

echo '<br>';
echo '<br>';
echo 'Valor função: ';
echo soma($c);
echo ' e valor do $c original: ';
//echo '<br>';
echo $c;



?>