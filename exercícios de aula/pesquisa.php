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
            $nome = "";
            $info = [];
            $mat = $_POST["matricula"];
            if (empty($mat)){
                echo "Preencha o formulário corretamente.";
            } else {
                    $alunos = 'Alunos.txt';
                    if (!file_exists($alunos)){
                        echo "Arquivo não encontrado!<br>Tente incluir alunos primeiro!";
                    } else{
                        $alunos = fopen("Alunos.txt", "r");
                        //fgets read one line from the open file. Sintaxe: fgets(file, length); length is optional
                        $x = 0;
                        //feof checks if the "end-of-file (EOF) has been reached for an open file. Sintaxe: feof(file);
                        /*while (!feof($alunos)){
                            //explode breaks a string into an array. Syntax: explode(separador, string, limit); limit is optional
                            $linha = fgets($alunos);
                            $info = explode(';', $linha);
                            if ($info[$x] == $mat){
                                echo $info[$x-1];
                            }
                            $x++;
                        } */
                        for ($x = 0; !feof($alunos); $x++){
                            $linha = fgets($alunos);
                            $info = explode(';', $linha);
                            if ($info[$x] == $mat){
                                echo $info[$x-1];
                            } 
                        }
                        fclose($alunos);
                    }
            }
        }
    ?>
    <main>
        <form action="pesquisa.php" method="post">
            <label for="nome">Matrícula:</label>
            <input type="text" name="matricula" id="matricula">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>