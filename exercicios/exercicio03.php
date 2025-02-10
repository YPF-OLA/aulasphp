<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>