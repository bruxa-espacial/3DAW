<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "fallscar";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $titulo = $_GET["titulo"];
        $descricao= $_GET["descricao"];
        $placa= $_GET["placa"];
        $imgurl= $_GET["imgurl"];
        $quantPessoas= $_GET["quantPessoas"];
        $quantPortas= $_GET["quantPortas"];
        $cor= $_GET["cor"];
        $anoF= $_GET["anoF"];
        $combustivel= $_GET["combustivel"];
        $tipomarcha= $_GET["tipomarcha"];
        $arcondicionado= $_GET["arcondicionado"];
        $preco= $_GET["preco"];
        $estatus= $_GET["estatus"];
        $localR= $_GET["localR"];
        $motorista= $_GET["motorista"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="INSERT INTO `automoveis`(`titulo`, `descricao`, `placa`, `imgurl`, `quantPessoas`, `quantPortas`, `cor`, `anoF`, `combustivel`, `tipomarcha`, `arcondicionado`, `preco`, `estatus`, `localR`, `motorista`) VALUES ('$titulo', '$descricao', '$placa', '$imgurl', '$quantPessoas', '$quantPortas', '$cor', '$anoF', '$combustivel', '$tipomarcha', '$arcondicionado', '$preco', '$estatus', '$localR', '$motorista')";
        
        $result=$conn->query($sql);

        echo $result;
        echo $sql;

        if ($result=true){
            $mensagem="Carro inserido com sucesso.";
        } else {
            $mensagem="Sinto muito, parece que estamos enfrentando problemas.";
        }
    }
?>