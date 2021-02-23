<?php
ini_set('display_errors', '1');

class Documento {

    private $numero;
    public function getNumero():string
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $resultado = Documento::validarCpf($numero);    //usa-se :: para chamar métodos estáticos

        if ($resultado === false)
        {
            throw new Exception("CPF informado não é válido", 1);
        } else echo "CPF aceito: <br>";

        $this->numero = $numero;
    }

    public static function validarCpf($cpf):bool
    {
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length<br>";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            //regras para cpf válido...
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    echo "numbers<br>";
                    return false;
                }
            }
     
            return true;
        }
    }
}

$cpf = new Documento();
$cpf->setNumero('03896216171');
echo $cpf->getNumero();
var_dump($cpf->getNumero());
echo "<br>";
var_dump(Documento::validarCpf('03896216171'));

?>