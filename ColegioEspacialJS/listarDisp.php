<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";


    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $id = $_GET["id"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `disciplinas` WHERE `id_disciplina` = $id";
        $result=$conn->query($sql);
        
        $discp = $result->fetch_assoc();

        if ($result=true){
            $retorno=json_encode($discp);

        } else {
            $retorno=json_encode("Erro!");
        }
    }
echo $retorno;
?>