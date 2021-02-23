<?php
ini_set('display_errors', '1');

$conn = new mysqli("localvictor","root","","dbphp7");

if($conn->connect_error) {

    echo "Error: ". $conn->connect_error;
}


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
//var_dump($result);  //$result é um objeto que contém toda a tabela
echo "<br>";

$data = array(); //gera um array para receber arrays

while ($row = $result->fetch_array(MYSQLI_ASSOC)){  //retorna os arrays, quando o array for FALSE, sai do while
    //enquanto $result conseguir pegar um array, atribua a $row
    //var_dump($row);
    array_push($data, $row); //insere array $row no array $data
}

echo json_encode($data);


?>