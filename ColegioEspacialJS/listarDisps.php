<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "colegio_espacial";
    
    if($_SERVER["REQUEST_METHOD"]=="GET"){    
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql= "SELECT * FROM `disciplinas`";
        
        $result=$conn->query($sql);
        $vetDiscp[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetDiscp[$i] = $linha;
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