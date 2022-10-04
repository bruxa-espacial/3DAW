<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="colegio_espacial";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $periodo = $_POST["periodo"];
        $prerequisito= $_POST["prerequisito"];
        $creditos= $_POST["creditos"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if($conn ->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "INSERT INTO `disciplinas`(`nome`, `periodo`, `id_prerequisito`, `creditos`) VALUES ('$nome', '$periodo', '$prerequisito', '$creditos')";
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
        <h1>Adicionar Disciplina</h1>
        <form action="incluird.php" method="POST" class="container">
            <div>
                <label for="nome">Nome da disciplina</label><br>
                <input type="text" name="nome"><br>
            </div>
            <div>
                <label for="periodo">Período</label><br>
                <select name="periodo" id="periodo">
                    <option value="01">Primeiro Período</option>
                    <option value="02">Segundo Período</option>
                    <option value="03">Terceiro Período</option>
                    <option value="04">Quarto Período</option>
                    <option value="05">Quinto Período</option>
                </select>
            </div>
            <div>
                <label for="prerequisito">Pré-Requisito</label><br>
                <select name="prerequisito" id="prerequisito">
                    <option value="01">Organização de Computadores</option>
                    <option value="02">Fundamentos de Algoritmos Computacionais</option>
                    <option value="03">Aplicações WEB</option>
                    <option value="04">Sistemas Operacionais</option>
                    <option value="05">Matemática Básica</option>
                </select>
            </div>
            <div>
                <label for="creditos">Créditos</label><br>
                <input type="number" name="creditos">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>