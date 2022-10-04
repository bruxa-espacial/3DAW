<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST ["nome"]; 
    $matricula= $_POST["matricula"];
    echo json_encode($_POST ["nome"]);
    echo json_encode($_POST ["matricula"]);
    if($nome == NULL  || $matricula== NULL)
    {
        echo "Nao foi <br>";
    }
    else if(!file_exists("Dojo.json")) {
       $arquivo = fopen ("Dojo.json", "w");
//       echo json_encode($cars);
        $cabecalho = "{ \"Alunos\": [ \n";
       fwrite($arquivo, $cabecalho);
    
       $linha = ($nome.";".$matricula.";\n");
       fwrite($arquivo, $linha);
       
       $footer = "] \n }";
       fwrite($arquivo, $footer);
       fclose($arquivo);

    }
    else {
//        $arquivo = fopen ("Dojow.json", "w");
        $arquivoAlunoIn = fopen("Dojo.json", "r") or die("Erro na abertura do arquivo");
    
        while (!feof($arquivoAlunoIn)) {
            $linhas[] = fgets($arquivoAlunoIn);
        }
        fclose($arquivoAlunoIn);

        $arquivoAlunoOut = fopen("Dojo.json", "w") or die("Erro na abertura do arquivo");
        $linhaInc = ($nome.";".$matricula.";\n");
        foreach ($linhas as $linha) {
            echo "linha: " . $linha;
            $jsonDados = json_decode($linha);
            echo "jsonDados: " . var_dump($jsonDados);  //"$jsonDados: " . $jsonDados;
            echo "colchete: " . strpos($linha, "]");
            if (strpos($linha, "]") >= 0 ){
                $txt = ",{\"nome\": \"$nome\", \"matricula\": \"$matricula\"}\n";
                echo "txt: " . $txt;
                fwrite($arquivoAlunoOut, $txt);
            } else {
                $txt = $linha;
            }
            fwrite($arquivoAlunoOut, $linha);
        }
        fclose($arquivoAlunoOut);
//        fwrite($arquivo, $linha);

//        fclose($arquivo);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dojo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="dojo_json.php" method="POST">
        <fieldset>
            <label>Nome:</label> 
            <input type="text" name="nome">
            <label>Matricula:</label> 
            <input type="text" name="matricula"> <br>
            <input type="submit" value="incluir">
        </fieldset>
    </form>
    
</body>
</html>