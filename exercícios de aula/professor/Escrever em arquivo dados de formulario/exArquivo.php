<?php
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["matricula"];
        $av1 = $_POST["av1"];
        $av2 = $_POST["av2"];

        $media = ($av1+$av2)/2;
        $arquivoAluno = fopen("Alunos.txt", "a");
        $txt = "Nome ; Matricula ; AV1 ; AV2 ; média\n";
        fwrite($arquivoAluno, $txt);
        $txt = $nome . " ; " . $mat ." ; ". $av1 . " ; " . $av2 . " ; " . $media . "\n";
        fwrite($arquivoAluno, $txt);
        fclose($arquivoAluno);
        echo "<h2>Arquivo Gerado</h2>";
    }
    else{
        $nome = "";
        $mat = "";
        $av1 = "";
        $av2 = "";
    }
    
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ex Arquivos</title>
    </head>
    <body>
        <h1>Formulários Alunos</h1>
        <form method="POST">
            <label for="nome">Nome do Aluno</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>

            <label for="av1">Nota AV1</label><br>
            <input type="text" name="av1"><br>

            <label for="av2">Nota AV2</label><br>
            <input type="text" name="av2"><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>