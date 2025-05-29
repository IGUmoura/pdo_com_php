<?php

include_once('conexao.php');

if( $_POST['bt-salvar'] ) {

    $cod_usuario        = $_POST['cod_usuario'];
    $nome               = $_POST['nome'];
    $email              = $_POST['email'];
    $senha              = $_POST['senha'];

    if( !$_POST['modifica-senha'] ) {

        $querySQL       = "UPDATE usuario_igor SET nome = ?, email =? WHERE cod_usuario LIKE $cod_usuario";

        $executa = $conn->prepare($querySQL);

        $executa->execute([$nome, $email]);
        
    } else {

        $querySQL       = "UPDATE usuario_igor SET nome = ?, email =?, senha = ? WHERE cod_usuario LIKE $cod_usuario";

        $executa = $conn->prepare($querySQL);

        $executa->execute([$nome, $email, $senha]);

    }

    header("Location: http://192.168.1.25/TRILHAS4/igormoura/pdo_com_php/usuarios.php");

}


?>