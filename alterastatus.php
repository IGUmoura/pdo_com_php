<?php

include_once('conexao.php');

$id = $_GET['id'];

$querySQL = "UPDATE usuario_igor SET status = ? WHERE cod_usuario LIKE $id";

$exec = $conn->prepare($querySQL);

$exec->execute(['0']);

header('Location: http://192.168.1.25/TRILHAS4/igormoura/pdo_com_php/usuarios.php');

?>