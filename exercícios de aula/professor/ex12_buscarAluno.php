<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawacademicomanha";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $mat = $_GET["mat"];
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `alunos` where matricula='$mat'";
        $result=$conn->query($sql);
        $linha = $result->fetch_assoc();
        $i = 0;
//        echo $result;
//        echo $sql;
        if ($result=true){
            $retorno=json_encode($linha);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>