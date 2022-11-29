<?php

$nomes = ["aluno1", "aluno2", "aluno3", "aluno4"];
$notas = [6, 7, 8, 9]; 
?>
<style>
    table{
        background-color: lightgray;

    }
    td{
        border: color, black, 1px;
        min-width: 60px;
        text-align: center;
        
    } 
    

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1360, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
<body>
<table>
    <tr>
    <td style = "text-align: left"><b>Nome</b></td>
    <?php
        for($i=0;$i<4;$i++){
            echo  "<td>{$nomes[$i]}</td>"; 
        }
?>
    </tr>
    <tr>
    
    <td style = "text-align: left"><b>Nota</b></td>
    <?php
        for($i=0;$i<4;$i++){
            echo  "<td>{$notas[$i]}</td>" ;
        }
?>
    
    </tr>
   
</table>
    
</body>
</html>