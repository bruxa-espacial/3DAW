<?php 
        $servidor = "localhost";
        $user = "root";
        $pass = "";
        $banco = "dawacademicomanha";
        $mensagem = ""; 

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `alunos`";
        $result=$conn->query($sql);

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listar</title>
</head>
    <body>
    <table>
        <?php
        While ($linha = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['matricula'] . "</td>";
            echo "<td><a href='alterar.php?matricula=" . $linha['matricula'] . "'>alterar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>
</html>