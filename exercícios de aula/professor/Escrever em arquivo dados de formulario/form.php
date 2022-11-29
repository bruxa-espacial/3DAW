<?php
$verif = true;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $av1 = $_POST["av1"];
            $av2 = $_POST["av2"];
            $media = ($av1 + $av2)/2;
        
            $arquivoCriar = fopen("fichaAluno.txt", "w");
            $txtInterno = "Nome               ||Matricula    || Av1||Av2 || Média ||    \n";
            fwrite($arquivoCriar,$txtInterno);
            $txtInterno = $nome . "            ||" . $matricula . "||   " . $av1 . "||  " . $av2 . " || " . $media . "     ||" . "\n";
            fwrite($arquivoCriar,$txtInterno);
            fclose($arquivoCriar);
        }
else{
    $verif = false;
}


    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="" method="POST">
        Nome: <br><input type="text" name="nome" id="nome" placeholder="Nome"><br>
        Matrícula: <br><input type="text" name="matricula" id="matricula" placeholder="123456789"><br>
        AV1: <br><input type="number" name="av1" id="av1" placeholder="0 à 10"><br>
        AV2: <br><input type="number" name="av2" id="av2" placeholder="0 à 10"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>