<?php
    $nomes = array("jose", "neusa", "antonio", "erika", "tiago", "chico");
    $notas = array(7.5, 7.0, 7.1, 8.0, 8.5, 7.7);
    $x = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Array com While</title>
    <style>
        table{
            border: 2px solid black;
        }

        td{
            border:2px red outset;
            padding: 2px;

        }
        th{
            background-color: red;
            color: black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Nota</th>
        </tr>
        <?php
            foreach ($nomes as $nome){
        ?>
        <tr>
            <td><?php echo $nome?></td>
        </tr>
        <?php
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
            while ($x <= 5){
        ?>
        <tr>
            <td>
                <?php echo $nomes[$x]; ?>
            </td>
            <td>
                <?php echo $notas[$x]; ?>
            </td>
        </tr>
    <?php
        $x++;
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
            $y=0;
            do{
        ?>
        <tr>
            <td>
                <?php echo $nomes[$y]; ?>
            </td>
            <td>
                <?php echo $notas[$y]; ?>
            </td>
        </tr>
    <?php
        $y++;
        }while ($y <= 5);
    ?>
    </table>
</body>
</html>
