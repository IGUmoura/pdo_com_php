<?php

include_once('conexao.php');

if( $_POST['bt-salvar'] ) {

    $nome       = $_POST['nome'];
    $email      = $_POST['email'];
    $senha      = $_POST['senha'];

    $querySQL   = "usuario_igormoura SET (nome, email, senha, status) VALUES (?, ?, ?, 1)";

    $executa    = $conn->prepare($querySQL);
    $executa->execute([$nome, $email, $senha]);


}

?>