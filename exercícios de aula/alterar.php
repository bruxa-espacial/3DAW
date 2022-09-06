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
    <form action="alterar.php" method="post">
            <label for="nome">Matrícula:</label>
            <input type="text" name="matricula" id="matricula">
            <br>
            <button type="submit">Enviar</button>
        </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = "";
            $mat = $_POST["matricula"];
            if (empty($mat)){
                echo "Preencha o formulário corretamente.";
            } else {
                    $alunos = 'Alunos.txt';
                    if (!file_exists($alunos)){
                        echo "Arquivo não encontrado!<br>Tente incluir alunos primeiro!";
                    } else{
                        $alunos = fopen("Alunos.txt", "r");
                        $linha = fgets($alunos);
                        while (!feof($alunos)){
                            $linha = fgets($alunos);
                            //echo $linha . "<br>";
                            $info[] = explode(';', $linha);
                            if ($mat == $info){
    ?>
        <form action="alterar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="mat">Matrícula:</label>
            <input type="text" name="matricula" id="matricula">
            <br>
            <button type="submit">Enviar</button>
        </form>
    <?php
           
                            }
                        } 
                    }
                }
        }
    ?>
</body>
</html>