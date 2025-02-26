<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções string</title>
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
    <?php
        $nomecompleto="Joaquim Mendes da Silva";
        // Objetivo: Exibir o primeiro nome
        // no navegador, pesquisar: php funções string (Primeiro link)
        // substr = Função que busca parte de uma string
        // stripos = Localizar alguma coisa na string
        $primeironome=substr($nomecompleto,0,stripos($nomecompleto," "));
        echo("<h1>" . $nomecompleto . "</h1>");
        echo("<h2>" . $primeironome . "</h2>");
        // para mostrar o primeiro nome pego da posição 0 até encontrar
        // o primeiro espaço em branco
        $email="joaquimms@hotmail.com";
        $nomeemail=substr($email,0,stripos($email,"@"));
        echo("<h1>" . $nomeemail . "</h1>");
        // Retornou: joaquimms, pois encontrou o primeiro arroba
        // strlen - retorna o tamanho da string (quantas letras tem)
        echo(strlen($email));
        $dominio=substr($email,stripos($email,"@"),strlen($email));
        // retornou: @hotmail.com, pois pegou do primeiro arroba até o tamanho da
        // string
        echo("<h1>" . $dominio . "</h1>");
        // Aqui pegamos o sobrenome: mostramos do ultimo espaço em branco até o tamanho da string
        $sobrenome=substr($nomecompleto,strripos($nomecompleto," "),strlen($nomecompleto));
        echo("<h1>" . $sobrenome . "</h1>");
        // função strrchr - Encontra a última ocorrência de um caractere em uma string
        $ultimosobrenome2=strrchr($nomecompleto, " ");
        echo("<h2>".$ultimosobrenome2."</h2>");
 
    ?>    
</body>
</html>