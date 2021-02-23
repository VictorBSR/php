<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "Delete OK.<br/>"

//var_dump($results);

?>