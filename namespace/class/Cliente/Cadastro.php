<?php

namespace Cliente;  //define um namespace

class Cadastro extends \Cadastro {  //herda da classe Cadastro genérica, da pasta acima

    public function registrarVenda()
    {
        echo "Foi registrada uma venda para o cliente ".$this->getNome().".<br>";
    }

}



?>