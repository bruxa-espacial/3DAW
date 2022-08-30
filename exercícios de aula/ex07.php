<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>UGH</title>
</head>
<body>
    <?php
        $nomes = array("jose", "neusa", "antonio", "erika", "tiago", "chico");
        $notas = array(7.5, 2.0, 7.1, 8.0, 8.5, 5.7);
        $x = 0;
    ?>
    <table>
        <tr>
            <th>NOME</th>
            <th>NOTA</th>
        </tr>
        <?php
            for ($x = 0; $x <= 5; $x++){
                echo "<tr>";
                    echo "<td>";
                        echo $nomes[$x];
                    echo "</td>";
                    if ($notas[$x] >= 8){
                    ?>
                    <td style="background-color: green;">
                        <?php echo $notas[$x]; ?>
                    </td>
                    <?php
                    } else{
                        if ($notas[$x] >= 6){
                            ?>
                                <td style="background-color: yellow;">
                                    <?php echo $notas[$x]; ?>
                                </td>
                            <?php
                        } else{
                            ?>
                                <td style="background-color: red;">
                                    <?php echo $notas[$x]; ?>
                                </td>
                            <?php
                        }
                    }
                    ?>
                
        <?php
            }
        ?>
    </table>
</body>
</html>
