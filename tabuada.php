<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
    <?php
       echo("<h1>Hello Sala 39!</h1>");
       $primeironome="Robson";
       $sobrenome="Florêncio";
       $idade=23;
       $salario=2500.50;
       echo("Seja bem vindo, " . $primeironome . " " . $sobrenome . " " . $idade . " Anos");
       echo("<br>");
       $numero1=250;
       $numero2=50;
       echo("<br>" . $numero1 + $numero2);
       echo("<br><br>");
       $numero=7;
       for ($i=1 ; $i<=10 ; $i++) {
        echo($numero ." X " . $i . " = " . $numero*$i . "<br>");
       }
      ?>
</body>
</html>