<?php
    $nomes = array("jose", "neusa", "antonio", "erika","tiago", "chico");
    $notas = array(7.5,7.0,7.1,8.0,8.5,7.7);
    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<br>";
    echo $nomes[3];
    echo "<br>";

?>
<doctype html>
<html>
	<head>
		<title>3DAW</title>
	</head>
	<body>
        <h1>Array</h1>        
        <table>
            <tr>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
            <?php
                for ($x = 0; $x <= 5; $x++) {
            ?>
                 <tr>   
                     <?php if ($notas[$x] >= 8.0) {
                                echo "<td>";
                                echo $nomes[$x];
                     
                         ?>
                                </td><td><?php 
                                echo $notas[$x];
                            } else {
                     ?>
                     <td></td><td></td>
                     <?php
                            }
                    ?>                 
                </tr>
                 <?php
                }
            ?>
	</body>
</html>