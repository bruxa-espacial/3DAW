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
        $path = "docuser.txt";

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if($conn ->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "INSERT INTO `usuarios`(`nome`, `email`, `snha`, `tipo`, `perfil`) VALUES ('$nome', '$email', '$snha', '$tipo', '$perfil')";
        $result = $conn->query($sql);

        if (file_exists($path)){
            $docuser = fopen($path, "a");
            fwrite($docuser,$txt);
            $txt = ($nome . ";" . $email . ";" . $snha . ";" . $tipo . ";" . $perfil .PHP_EOL);
            fwrite($docuser, $txt);
            fclose($docuser);  
        } else{
            $docuser = fopen($path, "w");
            $txt = "nome;email;tipo;perfil\n";
            fwrite($docuser,$txt);
            $txt = ($nome . ";" . $email . ";" . $tipo . ";" . $perfil .PHP_EOL);
            fwrite($docuser, $txt);
            fclose($docuser); 
        }
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Incluir Usuário</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="incluird.php">Incluir Disciplina</a>
                </li>
                <li>
                    <a href="altd.php">Alterar Disciplina</a>
                </li>
                <li>
                    <a href="listar.php">Listar Disciplina</a>
                </li>
                <li>
                    <a href="buscar.php">Buscar Disciplina</a>
                </li>
                <li>
                    <a href="excluded.php">Excluir Disciplina</a>
                </li>
                <li>
                    <a href="incluiru.php">Incluir Usuário</a>
                </li>
            </ul>
        </nav>
        <main>
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
        </main>
    </body>
</html>