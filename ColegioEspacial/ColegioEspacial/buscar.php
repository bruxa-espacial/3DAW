<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="colegio_espacial";
    $esc = 0;

    $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
    
    if($conn ->connect_error){
        die("Conexao com banco de dados falhou.");
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Listar Disciplinas</title>
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
            <h1>Listar Disciplinas</h1>
            <form action="listd.php" method="POST" class="container">
                <div>
                    
                </div>
                <input type="submit" value="Enviar">
            </form>
            <br><br>
            <?php
                if ($esc != 0){
                    echo $esc . " resultados encontrados";
                } else{
                    echo "Zero resultados encontrados";
                }
            ?>
        </main>
    </body>
</html>