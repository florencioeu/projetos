<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
<?php
    echo("<h1>Resultado</h1>");
    echo("<br/>");
    $nota = 6.5;
    if ($nota < 5) { // if = se (sempre entre parentesis)
        echo("Aluno reprovado");
    } elseif ($nota < 7) { //Caso contrário (pode ter vários)
        echo("Aluno em recuperação");
    } else { //Caso contrário final (não tem outra alternativa)
        echo("Aluno aprovado");
    }
 ?>
   
</body>
</html>