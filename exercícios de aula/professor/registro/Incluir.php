<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawacademicomanha";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {    
        $nome = $_POST["nome"];
        $matricula= $_POST["matricula"];
        $email= $_POST["email"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `alunos`(`nome`, `matricula`, `email`) VALUES ('$nome', '$matricula', '$email')";
        $result=$conn->query($sql);
        echo $result;
        echo $sql;
        if ($result=true){
            $mensagem="JOINHA!👍";
        } else {
            $mensagem="DEU RUIM!😭😭";
        }
    }

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>incluir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="incluir.php" method="POST">
        <fieldset>
            <label>Nome:</label>
            <input type = "text" name = "nome" id = "nome"><br><br>
            <label>Matricula:</label>
            <input type = "text" name = "matricula" id = "matricula"><br><br>
            <label>Email:</label>
            <input type = "text" name = "email" id = "email"><br><br>
            <input type = "submit" name = "submit">
        </fieldset>
    </form>
    <p>
        <?php
            echo $mensagem;
        ?>
    </p>
</body>
</html>