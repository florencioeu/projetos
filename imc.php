<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
body{
    font-family: Verdana, sans-serif; 
    text-align: center;
}
</style>
</head>
<body>
    <!--
    Através do método POST, Fazemos uma requisição para o servidor
    fazer alguma ativividade com os parametros, ou seja, os valores digitados
    dentro do form, após clicar no botão
    placeholder coloca um texto dentro do input
    -->
    <div class="container">
    <h2>Calculadora de IMC</h2>  
    <br>  
    <form method="post">
        <label>
        Peso (kg):
        <input type="text" name="peso" class="form-control"
        placeholder="Informe seu peso" required><br>
        Altura (m):
        <input type="text" name="altura" class="form-control"
        placeholder="Informe sua altura" required><br>
        <input type="submit" class="btn btn-primary" value="Calcular IMC">
       
        <br>
    </form>
    <br>
    <?php
    // Aqui, o Servidor vai reconher o método post e executar a ação
    // if está condicionando se existe uma requisição feita pelo
    // metodo post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // str_replace, troca a virgula por ponto
        $peso = str_replace(',', '.', $_POST["peso"]);
        $altura = str_replace(',', '.', $_POST["altura"]);
        // floatval, converte de string para float (numero com casa decimal)
        $peso = floatval($peso);
        $altura = floatval($altura);
   
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);  // $altura**2
            $imc = number_format($imc, 2); // transforma em numero com 2 casas
            echo "<h4 style='color:rgb(7, 7, 7);'>Seu IMC é: " . $imc . "</h4>";
            if ($imc < 18.5) {
                echo "Classificação: <h4 style='color: orange;'> Abaixo do peso</h4>";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                echo "Classificação: <h4 style='color: green;'> Peso normal</h4>";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                echo "Classificação: <h4 style='color: yellow;'> Sobrepeso</h4>";
            } else { // o else é a última opção
                echo "Classificação: <h4 style='color: red;'> Obesidade</h4>";
            }
        } else {
            echo "Altura deve ser maior que zero.";
        }
    }
    ?>
    </div>
</body>
</html>