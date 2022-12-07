<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "fallscar";
    $resultado = "";
    $mensagem = "";

    $conn = new mysqli ($servidor, $user, $pass, $banco);

    if ($conn->connect_error){
        die("Erro na conexão com o banco de dados".$conn->connect_error);
    }
    
?>