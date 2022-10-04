<?php
    $matricula="";
    $nome = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ex03</title>
	</head>
	<body>
        <h1>ex02</h1>
        <h2>Curso 3DAW</h2>
        <form action="ex03.php" method="POST">
            Matricula: 
            <input type="text" name="matricula"><br>
            Nome: 
            <input type="text" name="nome"><br>
            <input type="submit" value="Enviar">
        </form>
        <table>
            <tr>
            <th>matricula</th>
            <th>nome</th>
            </tr>
            <tr>
                <td><?php echo $matricula ?></td>
                <td><?php echo $nome ?></td>
            </tr>
        </table>        
	</body>
</html>