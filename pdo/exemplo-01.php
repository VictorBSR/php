<?php
ini_set('display_errors', '1');

$conn = new PDO("mysql:dbname=dbphp7;host=localvictor","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {

        echo "<strong>".$key.": </strong>".$value."<br/>";
    }

    echo "========================<br>";

}

//var_dump($results);



?>