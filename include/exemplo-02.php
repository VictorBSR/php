<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

//include 'inc/exemplo-01.php'; //tenta funcionar mesmo sem o arquivo existir. Permite include PATH e include dinâmico
require_once 'inc/exemplo-01.php';   //obriga o o arquivo a existir, se não retorna erro fatal
require_once 'inc/exemplo-01.php'; 

$resultado = somar(10,20);
echo $resultado;


?>