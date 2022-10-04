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
            <?php
                if ($conn -> connect_errno){
                    echo "Erro de Conexão ao MySql: " ; $conn -> connect_error;
                    exit();
                }

                $sql = "SELECT * FROM `disciplinas`";
                $query = $conn->query($sql);
                while ($dados = $query->fetch_array($resultado)) {
                    echo 'ID: ' . $id_disciplina['id_disciplina'] . '';
                    echo 'Nome: ' . $nome['nome'] . '';
                }
                echo "<br>";
                echo 'Registros encontrados: ' . $query->num_rows;

                /*
                $sql = ("SELECT * FROM disciplinas");
                $resultado = $conn -> query($sql);

                $row = $resultado -> fetch_assoc();
                echo "ID: " . $id_disciplina["id_disciplina"];

                $resultado -> free_result();
                $conn -> close($conn);

            
               $sql = mysqli_query($conn, "SELECT `nome`, `periodo`, `creditos` FROM `disciplinas`") or die ("Erro");
               //$query = $conn -> query($sql);
               //$dados = $query->mysqli_fetch_array()
               while ($dados = mysqli_fetch_assoc($sql)) {
                    echo 'Nome: ' . $nome['nome'] . '';
                    echo 'Período: ' . $periodo['periodo'] . '';
                    echo 'Créditos: ' . $creditos['creditos'] . '';
               }
               echo 'Registros encontrados: ' . $query->num_rows;

               */
            ?>
        </main>
    </body>
</html>