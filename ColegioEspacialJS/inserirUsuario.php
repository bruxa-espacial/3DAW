<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $matricula= $_GET["matricula"];
        $email= $_GET["email"];
        $cpf= $_GET["cpf"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);

        $sql="INSERT INTO `usuarios`(`nome`, `matricula`, `email`) VALUES ('$nome', '$matricula', '$email')";

        $result=$conn->query($sql);

        echo $result;
        echo $sql;

    }

?>