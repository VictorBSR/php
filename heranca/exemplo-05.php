<?php

function __autoload($nomeClasse){   //descontinuada, utilizar spl_autoload_register();
    
    require_once("$nomeClasse.php");
    var_dump($nomeClasse);
}

//

$carro = new DelRey();
$carro->acelerar(80);

?>