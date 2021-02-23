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

class Programador extends Pessoa {  //herda atributos (definidos) da classe Pessoa

    public function verDados()
    {
        echo get_class($this)."<br>";   //Printa "Programador"

        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        //echo $this->senha."<br/>";  //gera erro pois não herda senha da classe mãe
    }

}

$objeto = new Programador();
//echo $objeto->nome."<br/>";
$objeto->verDados();

?>