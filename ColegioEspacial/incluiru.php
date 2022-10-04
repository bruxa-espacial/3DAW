<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="colegio_espacial";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $snha= $_POST["snha"];
        $tipo= $_POST["tipo"];
        $perfil= $_POST["perfil"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if($conn ->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "INSERT INTO `usuarios`(`nome`, `email`, `snha`, `tipo`, `perfil`) VALUES ('$nome', '$email', '$snha', '$tipo', '$perfil')";
        $result = $conn->query($sql);
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Ex SGBD</title>
    </head>
    <body>
        <h1>Adicionar Usuários</h1>
        <form action="incluiru.php" method="POST" class="container">
            <div>
                <label for="nome">Nome completo do Usuário</label><br>
                <input type="text" name="nome"><br>
            </div>
            <div>
                <label for="email">Email do Usuário</label><br>
                <input type="text" name="email"><br>
            </div>
            <div>
                <label for="tipo">Tipo de Usuário</label><br>
                <select name="tipo" id="tipo">
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                    <option value="direcao">Direção</option>
                </select>
            </div>
            <div>
                <label for="nome">Perfil de Usuário</label><br>
                <select name="perfil" id="perfil">
                    <option value="admin">Administrador</option>
                    <option value="common">Usuário</option>
                </select>
            </div>
            <div>
                <label for="nome">Senha do Usuário</label><br>
                <input type="password" name="snha"><br>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>