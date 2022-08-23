<?php
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World</title>
    </head>
    <body>
        <h2><?php echo "Hello World";?></h2>
        <h3>Hello, <?php echo $nome ?></h3>
        <p>Sua matrícula é <?php echo $matricula ?></p>
        <p>Idade: <?php $idade ?></p>
        <a href="index.html">Voltar</a>
    </body>
</html>