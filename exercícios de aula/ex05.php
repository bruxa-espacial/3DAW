<?php
    // EXERCÍCIO: imprimir nomes e notas numa tabela
    $nomes = array("jose", "neusa", "antonio", "erika", "tiago", "chico");
    $notas = array(7.5, 7.0, 7.1, 8.0, 8.5, 7.7);
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <table action="ex05.php">
            <tr>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
            <?php
                for ($x = 0; $x <= 5; $x++){
                    echo "<tr>";
                        echo "<td>";
                            echo $nomes[$x];
                        echo "</td>";
                        echo "<td>";
                            echo $notas[$x];
                        echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <br><br>
        <table>
            <tr>
                <th>NOME</th>
                <th>NOTA</th>
            </tr>
            <?php
                for ($x = 0; $x <= 5; $x++){
            ?>
            <tr>
                <td>
                    <?php echo $nomes[$x];?>
                </td>
                <td>
                    <?php echo $notas[$x];?>
                </td>
            </tr> 
            <?php
                }
            ?>
        </table>
    </body>
</html>
