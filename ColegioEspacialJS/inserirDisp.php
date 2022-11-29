<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $preRequisito= $_GET["preRequisito"];
        $creditos= $_GET["creditos"];
        $periodo= $_GET["periodo"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="INSERT INTO `disciplinas`(`nome`, `idpre`, `creditos`, `periodo`) VALUES ('$nome', '$preRequisito', '$creditos', '$periodo')";
        
        $result=$conn->query($sql);

        echo $result;
        echo $sql;
    }
?>