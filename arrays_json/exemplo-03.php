<?php


$json = '[
    {
      "nome": "Jose",
      "idade": 20
    },
    {
      "nome": "Maria",
      "idade": 25
    },
    {
      "nome": "Antonio",
      "idade": 32
    }
  ]';

$data = json_decode($json,true);

echo $data; //só retorna "Array"
echo "<br>";
echo "<br>";
var_dump($data);

?>