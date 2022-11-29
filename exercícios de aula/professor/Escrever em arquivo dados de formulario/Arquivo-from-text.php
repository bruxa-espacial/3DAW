<?php
    $ehPost = true; 

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        $nome         = $_GET ["nome"];
        $matricula    = $_GET ["matricula"];
        $av1          = $_GET ["av1"];
        $av2          = $_GET ["av2"];
        $media        = ($av1+$av2)/2;

        $arquivoAluno = fopen("Aluno.txt" , "w");
        
        
        $txt          = "nome;matricula;AV1;AV2;Média\n";
        fwrite($arquivoAluno,$txt);
        
        $txt          = $nome . ";" . $matricula . ";" . $av1 . ";" . $av2 . ";" . $media . "\n";
        fwrite($arquivoAluno, $txt);
        
        fclose($arquivoAluno);
    }else{
        $ehPost = false;
    }
    echo "funcionou!";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <form action="Arquivo.php" method="GET">
        Matricula:
        <input type="text" name="matricula" placeholder="Digite a matricula">
        Nome:
        <input type="text" name="nome" placeholder="Digite o nome">
        Av1:
        <input type="number" name="av1" placeholder="Insira a nota">
        Av2:
        <input type="number" name="av2" placeholder="Insira a nota">

        <input type="submit" value="enviar">
    </form>
</body>
</html>