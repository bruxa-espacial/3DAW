<?php

    require_once('config.php');
    
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET"){   
        
        $parametro = filter_input(INPUT_GET, "parametro");



        $pesquisa = $_GET["pesquisa"];


        $sql = "SELECT * FROM `automoveis` WHERE `titulo` LIKE %$pesquisa%";
        
        $result=$conn->query($sql);
        $vetCarros[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetCarros[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetCarros);

        } else {
            $retorno=json_encode('Erro na execução');
        }
    }

    echo $retorno;

?>