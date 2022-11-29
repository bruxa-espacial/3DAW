<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawacademicomanha";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $matricula= $_GET["matricula"];
       
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `alunos` WHERE `matricula`= $matricula";
        
        $result=$conn->query($sql);
        $linhaAluno = $result->fetch_assoc();
    
    ?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action = "alterar.php" method = "POST">
        nome:  <input type="text" name="nome" value="<?php echo $linhaAluno['nome']; ?>"><br>
        email: <input type="text" name="email" value="<?php echo $linhaAluno['email']; ?>"><br>
        Matricula:   <input type="text" name="matricula" value="<?php echo $linhaAluno['matricula']; ?>"><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
   <?php }
    elseif ($_SERVER["REQUEST_METHOD"]=="POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $matricula= $_POST["matricula"];
       
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="UPDATE `alunos` SET `nome` = '$nome', `email` = '$email' WHERE `matricula`= '$matricula'";
        
        $result=$conn->query($sql);
        echo $sql;
        echo $result;
    }
?>
