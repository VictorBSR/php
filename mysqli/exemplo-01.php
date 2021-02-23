<?php
ini_set('display_errors', '1');

$conn = new mysqli("localvictor","root","","dbphp7");

if($conn->connect_error) {

    echo "Error: ". $conn->connect_error;
}


/* $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345@";

$stmt->execute();

$login = "user2";
$pass = "senhasecreta";

$stmt->execute(); */

?>