<?php
ini_set('display_errors', '1');

class Pessoa {

    public $nome; //atributo
    public function falar() { //método

        return "O meu nome é ".$this->nome;  
    }
}

$humano = new Pessoa();
$humano->nome = 'Victor Barros';
echo $humano->falar();

?>