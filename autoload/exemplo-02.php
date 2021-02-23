<?php
ini_set('display_errors', '1');

function incluirClasses($nomeClasse){   //é chamada com spl_autoload_register
    
    if(file_exists($nomeClasse.".php") === true) {  //procura na mesma pasta
        require_once($nomeClasse.".php");   //require na mesma pasta
    }
    
}

spl_autoload_register("incluirClasses");    //Standard PHP Library, função vai ser invocada com 'new'. Primeira forma, string com nome da função
spl_autoload_register(function($nomeClasse){    //segunda forma, com função anônima

/*     if(file_exists($nomeClasse.".php") === true) {  //procura na mesma pasta
        require_once($nomeClasse.".php");   //require na mesma pasta
    } */
    //Caso os arquivos estejam em outra pasta
    if (file_exists("Abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
        require_once("Abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);

?>