<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando condicionais</title>
</head>

<body>
    <h1>Calculando compras!</h1>

    <?php
    $valorProduto = 30000;
    

    if ($valorProduto >= 5000) {
        //$valorTotal -> $valorProduto *0.25;
        $valorFinal = $valorProduto - $valorProduto * 0.15;
       // echo "<p>com desconto fica por R$$valorFinal</p>";
    } elseif ($valorProduto >= 3000) {
        $valorFinal = $valorProduto - $valorProduto * 0.10;
       // echo "<p>com desconto fica por R$$valorFinal</p>";
    } elseif ($valorProduto >= 1000) {
        $valorFinal = $valorProduto - $valorProduto * 0.05;
       // echo "<p>com desconto fica por R$$valorFinal</p>";
    } else {
        echo "<p>Você não tem desconto!!!</p>";
    }
    
    ?>
    <p>Valor do produto é de R$:
    <?=number_format($valorProduto, 2, ',', '.');?>
    </p>

    <p>Valor final com desconto é de R$:
    <?=number_format($valorFinal, 2, ',', '.');?>
    </p>
  



</body>

</html>