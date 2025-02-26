<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swich case </Title>
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
<?php
$dia_da_semana = "quarta";
 
switch ($dia_da_semana) {
    case "segunda": // : Obrigatório na sintaxe
        echo "Hoje é segunda-feira!";
        break; // Interrompe o processo
    case "terça":
        echo "Hoje é terça-feira!";
        break;
    case "quarta":
        echo "Hoje é quarta-feira!";
        break;
    case "quinta":
        echo "Hoje é quinta-feira!";
        break;
    case "sexta":
        echo "Hoje é sexta-feira!";
        break;
    case "sábado":
        echo "Hoje é sábado!";
        break;
    case "domingo":
        echo "Hoje é domingo!";
        break;
    default:
        echo "Dia inválido!";
}
?>
   
   
</body>
</html>