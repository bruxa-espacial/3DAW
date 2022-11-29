<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $id = $_GET["id"]; 
        $nome = $_GET["nome"]; 
        $preRequisito = $_GET["preRequisito"]; 
        $periodo = $_GET["periodo"]; 
        $credito = $_GET["credito"]; 
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="UPDATE `disciplinas` SET `nome`='$nome',`periodo`='$periodo',`idpre`='$preRequisito',`creditos`='$credito' WHERE `id` = $id";
        
        $result=$conn->query($sql);
        
    }
?>