<?php
    $media = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["matricula"];
        $av1 = $_POST["av1"];
        $av2 = $_POST["av2"];
        $arquivoAluno = fopen("Alunos.txt", "w");
        $txt = "nome;matricula;av1;av2;media\n";
        fwrite($arquivoAluno,$txt);
        $media = (($av1 + $av2)/2);
        $txt = $nome . ";" . $mat . ";" . $av1 . ";" . $av2 . ";" . $media . "\n";
        fwrite($arquivoAluno, $txt);
        fclose($arquivoAluno);
        echo "<h2>Arquivo gerado com sucesso!</h2><br>";
    } else {
        echo "<h1>Erro ao gerar arquivo</h1>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <!-- -->
    <br>
    <form action="writing.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="mat">Matrícula:</label>
        <input type="text" name="matricula" id="matricula">
        <br>
        <label for="av1">Primeira nota:</label>
        <input type="number" name="av1" id="av1">
        <br>
        <label for="av2">Segunda nota:</label>
        <input type="number" name="av2" id="av2">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        echo "Media: ", $media; 
    ?>
    <br><br>
    <a href="index.html">Página Inicial</a>
</body>
</html>