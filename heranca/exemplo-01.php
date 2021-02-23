<?php
ini_set('display_errors', '1');

class Documento {

    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }

}

class Cpf extends Documento { //tem acesso às funções, mas não ao private direto!

    public function validar():bool
    {
        //$numeroCpf = $this->getNumero();  //tem acesso às funções, mas não ao private direto!
        return true;
    }
}

$doc = new Cpf();
$doc->setNumero("047159131-94");    //utiliza os métodos da classe-mãe através da filha. Salva o atrib 'numero' (private)
var_dump($doc->validar());   //faria o proced. de validação e retorna true... 
echo "<br>";
echo $doc->getNumero(); //retorna o numero (private)

?>