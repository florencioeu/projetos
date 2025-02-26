<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços</title>
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
    <?php
        // Laço for, onde crio uma variavel de incremento
        // Até onde deve fazer a repetição
        // Qual é o incremento ? Nesse caso somamos um
        echo("<h3>Laço For</h3>");
        for ($i=1;$i<=10;$i=$i+1) {
            echo($i . "<br>");
        }
        // Laço while - Não incrementa na mesma linha
        echo("<h3>Laço While</h3>");
        $contador = 1;
        while ($contador <= 10) {
            echo($contador . "<br>");
            $contador = $contador + 1;  // $contador++
        }
    ?>
</body>
</html>