<?php
    
    require('config.php');

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $titulo = $_GET["titulo"];
        $descricao = $_GET["descricao"];
        $placa = $_GET["placa"];
        $imgurl = $_GET["imgurl"];
        $quantPessoas = $_GET["quantPessoas"];
        $quantPortas = $_GET["quantPortas"];
        $cor = $_GET["cor"];
        $anoF = $_GET["anoF"];
        $combustivel = $_GET["combustivel"];
        $tipomarcha = $_GET["tipomarcha"];
        $arcondicionado = $_GET["arcondicionado"];
        $preco = $_GET["preco"];
        $estatus = $_GET["estatus"];
        $localR = $_GET["localR"];

        if (isset($_GET["motorista"])){
            if ($_GET["motorista"] == '1'){
                $motorista = '1';
            } else {
                $motorista = '0';
            }
        } else {
            $motorista = '0';
        }


        $sql = "INSERT INTO automoveis(titulo, descricao, placa, imgurl, quantPessoas, quantPortas, cor, anoF, combustivel, tipomarcha, arcondicionado, preco, estatus, localR, motorista) VALUES ('$titulo', '$descricao', '$placa', '$imgurl', '$quantPessoas', '$quantPortas', '$cor', '$anoF', '$combustivel', '$tipomarcha', '$arcondicionado', '$preco', '$estatus', '$localR', '$motorista')";
        
        $resultado = $conn -> query($sql);

        if ($resultado){
            $mensagem="Carro inserido com sucesso.";
        } else {
            $mensagem="Sinto muito, parece que estamos enfrentando problemas.";
        }

        echo $mensagem;
    }
?>