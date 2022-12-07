<?php
    require_once('assets/config.php');

    if($_SERVER["REQUEST_METHOD"]=="GET"){

        $sql = "SELECT titulo, estatus, localR FROM automoveis ORDER BY id_auto DESC";

        $resultado = $conn -> query($sql);
        $verCarros[] = array();
        $i = 0;

        if (($resultado) AND ($resultado -> num_rows != 0)){
            while($linha = $resultado -> fetch_assoc()){
            $verCarros[$i] = $linha;
            $i++;
            }
        } else {
            echo "Nenhum resultado encontrado";
        }


        if ($resultado){
            $retorno = json_encode($verCarros);
        } else {
            $retorno = json_encode("Erro na conexão com o banco de dados");
        }
        echo $retorno;
    }
?>