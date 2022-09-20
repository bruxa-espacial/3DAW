<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Interno Colégio</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="incluir.php">Incluir aluno</a></li>
                <li><a href="pesquisa.php">Buscar Aluno</a></li>
                <li><a href="alterar.php">Alterar cadastro</a></li>
            </ul>
        </nav>
    </header>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $mat = $_POST["matricula"];
            $txt = "";
            if (empty($mat) || empty($nome)){
                echo "Preencha o formulário corretamente.";
            } else {
                    $alunos = 'Alunos.txt';
                    if (!file_exists($alunos)){
                        $alunos = fopen("Alunos.txt", "w");
                        fwrite($alunos, $txt);
                        $txt = $nome . ";" . $mat . "\n";
                        fwrite($alunos, $txt);
                        fclose($alunos);
                } else{
                    $alunos = fopen("Alunos.txt", "a");
                    fwrite($alunos, $txt);
                    $txt = $nome . ";" . $mat . "\n";
                    fwrite($alunos, $txt);
                    fclose($alunos);
                }
            }
        }
    ?>
    <main>
        <form action="incluir.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="mat">Matrícula:</label>
            <input type="text" name="matricula" id="matricula">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>