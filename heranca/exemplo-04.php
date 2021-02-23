<?php
ini_set('display_errors', '1');

abstract class Animal {

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "Andou";
    }
}

class Cachorro extends Animal {

    public function falar(){    //o nome é o mesmo da classe-mãe! Não vai dar conflito, retorna essa função filha.
        
        return "Late";
    }
}

class Gato extends Animal {

    public function falar(){   
        
        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){   
        
        return "Pia";
    }

    public function mover() {
        
        return "Voou"." e ".parent::mover(); //chama o método mover da classe Animal
    }
}

$pluto = new Cachorro();
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";
echo"<br>";

$garfield = new Gato();
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";
echo"<br>";

$lili = new Passaro();
echo $lili->falar()."<br>";
echo $lili->mover()."<br>";


?>