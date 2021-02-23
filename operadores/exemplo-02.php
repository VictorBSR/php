<?php

$a=50;
$b=35;

var_dump($a <=> $b);    //spaceship, faz <, = e > ao mesmo tempo

$a=NULL;
$b=NULL;
$c=10;

echo $a ?? $b ?? $c;    //null coalesce = mostre a, se for null mostre b, se for null mostre c...

//&& = AND
//|| = OR

?>