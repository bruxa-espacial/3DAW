<?php
    $servidor = "localhost";
    $usuario = "";
    $senha = "";
    $banco = "colegio_espacial";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $matricula= $_GET["matricula"];
        $email= $_GET["email"];
        $cpf= $_GET["cpf"];
        $conn = new mysqli ($servidor, $usario, $senha, $banco);
        $sql="INSERT INTO `usuarios`(nome, matricula, email) VALUES ('$nome', '$matricula', '$email')";
        $result=$conn->query($sql);
        echo $result;
        echo $sql;
        if ($result=true){
            $mensagem="Inserido com Sucesso";
        } else {
            $mensagem="Error";
        }
    }
    echo $mensagem;
?>