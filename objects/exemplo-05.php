<?php
ini_set('display_errors', '1');

class Pessoa {

    public $nome = "Rasmus Lerdof"; //acessado por todos
    protected $idade = 48;          //acessado pelos métodos da classe e pelas classes-filha (herança)
    private $senha = 123456;        //acessado somente pela própria classe

    public function verDados()      //método PÚBLICO consegue divulgar atributos privados/protegidos!
    {
        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";
    }

}

$objeto = new Pessoa(); //ja tem dados definidos/fixos!
//echo $objeto->nome."<br/>";
//echo $objeto->idade."<br/>";  //dá erro
//echo $objeto->senha."<br/>";  //dá erro
$objeto->verDados();

?>