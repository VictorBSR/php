
<?php
//Autoload foi descontinuado, além de ter limitação de procurar na mesma pasta. Ao invés disso usar spl_autoload_register

ini_set('display_errors', '1');

//require_once("DelRey.php");   //ao invés disso, usar:

function __autoload($nomeClasse) {  //recebe 'DelRey' de 'new'

    require_once("$nomeClasse.php");    //inclui o arquivo propriamente dito. Como requer "Automovel.php", também o procura e inclui.
    //var_dump($nomeClasse);
}



$carro = new DelRey();  //ao criar objeto com 'new', ele já invoca autoload com esse parâmetro (DelRey)
$carro->acelerar(180);


?>