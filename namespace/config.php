<?php
//cria autoloads para usar nos namespaces
ini_set('display_errors', '1');

spl_autoload_register(function($nameClass){ //função anônima

    var_dump($nameClass);
    
    $dirClass = "class";
    $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php"; //é o path

    if(file_exists($filename))  {
        require_once($filename);
    }

});

?>