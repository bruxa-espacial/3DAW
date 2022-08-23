<?php
    $testep == 0;
    $nome == "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $testep = 1;
        $nome = $_POST["nome"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício!</title>
</head>
<body>
    <form action="ex02.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit">Enviar</button>
    </form>
    <p>Ah, seu nome é <?php echo $nome ?><br>Foi post? <?php if($testep == 1){echo "SIMM";}else{echo "nope :(";} ?></p>
</body>
</html>