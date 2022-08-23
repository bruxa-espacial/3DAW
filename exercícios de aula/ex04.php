<?php
    //código para dizer tipo da variável
    $matricula = "";
    $nome = "";
    $idade = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $media = $_POST["media"];
    }

    echo "nome é do tipo " . var_dump($nome);
    echo "<br>";
    echo "idade é do tipo " . var_dump($idade);
    echo "<br>";
    echo "matricula é do tipo " . var_dump($matricula);
    echo "<br>";
    echo "media é do tipo " . var_dump($media);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oooutro exercício :D</title>
</head>
<body>
    <form action="ex04.php" method="post">
    <label for="name">Nome:</label>                             
        <input type="text" id="nome" name="nome">
        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" id="matricula">
        <label for="media">Media:</label>
        <input type="text" name="media" id="media">
        <button type="submit">Enviar</button>
    </form>
    <table>
        <tr>
            <th>nome</th>
            <th>matricula</th>
            <th>idade</th>
            <th>media</th>
        </tr>
        <tr>
            <th><?php echo $nome ?></th>
            <th><?php echo $matricula ?></th>
            <th><?php echo $idade ?></th>
            <th><?php echo $media ?></th>
        </tr>
    </table>
</body>
</html>