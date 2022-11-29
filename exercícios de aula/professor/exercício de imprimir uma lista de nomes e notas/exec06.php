<!doctype html>
<html>
    <head>
        <title> ex06array</title>
    </head>
    <style>
        table, th, td,tr {
        border:1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 15px;
        }
    </style>
    <body>
    </body>
</html>
<?php 
    $nomes = array("jose", "neusa", "antonio", "erika", "tiago", "chico");
    $notas = array(7.5,7.0,8,9.4,3.4,8);

    echo "<table>
        <tr>
            <th>nome</th>
            <th>nota;</th>
        </tr>
    ";

    for($x = 0; $x <= 5; $x++){
        echo"
                    <tr>
                        <td>$nomes[$x]</td>
                        <td>$notas[$x];</td>
                    </tr>
                ";
    }
    echo "</table>"

    ?>