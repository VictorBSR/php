<?php

require_once("config.php");

use Cliente\Cadastro;   //usa o namespace com a classe Cadastro específica para cliente

$cad = new Cadastro(); //já invoca (pelo config.php) os dois namespaces, o raiz (Cadastro) e o Cliente (classe Cadastro filha)
$cad->setNome("Bill Gates");
$cad->setEmail("b.gates@microsoft.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;  //invoca o __toString

?>