<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia DAW</title>
</head>
<body>
    <?php
        $ehPost = true;
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db = "DAWAcademia";

        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $id = $_GET["id"];
            $nome = $_GET["nome"];
            $mat = $_GET["matricula"];
            $email = $_GET["email"];

            $conn = new mysqli($servidor, $usuario, $senha, $db);
            if ($conn ->  connect_error){
                die("Conexão falhou");
            }
            //INSERT INTO 'alunos' ('id', 'nome', 'matricula', 'email') VALUES ([value-1], [value-2], [value-3], [value-4]);
            $sql = "Insert into Alunos('id', 'nome', 'matricula', 'email') VALUES ($id, '$nome', '$mat', '$email')";
            $result = $conn->query($sql);
            echo "result?: " . $result;
        } else{
            $ehPost = false;
        }
        echo "Aluno incluído com sucesso";
    ?>
</body>
</html>