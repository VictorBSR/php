<?php
ini_set('display_errors', '1');

class Carro {

    private $modelo; //atributo
    private $cor;
    private $motor;
    private $ano;

    public function getModelo():string { //método

        return $this->modelo;  
    }
    public function setModelo($modelo) {

        $this->modelo = $modelo;  
    }

    public function getCor():string {

        return $this->cor;  
    }
    public function setCor($cor) {

        $this->cor = $cor;  
    }

    public function getMotor():float {

        return $this->motor;  
    }
    public function setMotor($motor) {

        $this->motor = $motor;  
    }

    public function getAno():int {

        return $this->ano;  
    }
    public function setAno($ano) {

        $this->ano = $ano;  
    }

    public function exibir() {

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "cor"=>$this->getCor(),
            "ano"=>$this->getAno()
        );
    }

}

$ferroVelho = new Carro();
$ferroVelho->setModelo("Toyota");
$ferroVelho->setCor("Azul");
$ferroVelho->setAno("2016");
$ferroVelho->setMotor("1.6");

print_r($ferroVelho->exibir());
echo "<bar>";
var_dump($ferroVelho->exibir());


?>