<?php
    require_once('assets/config.php');
    
    //$sql = "SELECT titulo, estatus, localR FROM `automoveis`";
    //WHERE `titulo` LIKE %$pesquisa%

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        //$escolha = $_GET["escolha"];
        $parametro = $_GET["parametro"];

        $sql = "SELECT id_auto, titulo, estatus, localR FROM `automoveis` WHERE `titulo` LIKE %$parametro%";
        
        $resultado = $conn -> query($sql);
        $carros[] = array();
        
        $i = 0;
        
        while ($linha = $resultado -> fetch_assoc()){
            $carros[$i] = $linha;
            $i++;
        }

        if ($resultado =true){
            $mensagem=json_encode($carros);

        } else {
            $mensagem=json_encode('Houve um erro');
        }
    }
    echo $mensagem;

?>