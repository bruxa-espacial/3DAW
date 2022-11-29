<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";
    
    if($_SERVER["REQUEST_METHOD"]=="GET"){    
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);

        $sql= "SELECT * FROM `disciplinas`";
        
        $result=$conn->query($sql);
        $disciplinas[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $disciplinas[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetDiscp);

        } else {
            $retorno=json_encode("Erro!");
        }
    }
echo $retorno;
?> 