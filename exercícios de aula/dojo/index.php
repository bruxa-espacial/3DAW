<?php
    $matricula = "";
    $nome = "";
    $idade = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Nome:</label>                             
        <input type="text" id="nome" name="nome">
        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" id="matricula">
        <button type="submit">Enviar</button>
    </form>
    <table>
        <tr>
            <th>nome</th>
            <th>matricula</th>
            <th>idade</th>
        </tr>
        <tr>
            <th><?php echo $nome ?></th>
            <th><?php echo $matricula ?></th>
            <th><?php echo $idade ?></th>
        </tr>
    </table>
    <a href="EX001.php">Próximo Exercício</a>
</body>
</html>