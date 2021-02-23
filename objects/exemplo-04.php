<?php
ini_set('display_errors', '1');

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    //metodos mágicos, não se vê o que está acontecendo
    //public function Endereco ($a,$b,$c) //em desuso
    public function __construct($a,$b,$c)
    {
        $this->logradouro=$a;   //ação definida toda vez que o objeto for criado (new)
        $this->numero=$b;
        $this->cidade=$c;
    }

    public function __destruct()
    {
        var_dump("DESTRUIR");   //ação definida toda vez que o objeto for unsetted
    }

    //setter e getters viriam aqui...
    public function getLogradouro():string
    {
        return $this->logradouro;
    }
    public function setLogradouro($logradouro)
    {
        $this->logradouro=$logradouro;
    }
    //...

    public function __toString() //serializa o objeto (transforma em string) para dar echo, por exemplo
    {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("AOS2, Bloco A","202", "Brasília"); //metodo construtor (magico) já passando todos os atributos, sem necessidade de todos os setters e getters
var_dump($meuEndereco);
echo "<bar>";
//print_r($meuEndereco);
echo "<bar>";
echo($meuEndereco);
unset($meuEndereco); //chama o método destruct (ao fim da execução ou com unset)


?>