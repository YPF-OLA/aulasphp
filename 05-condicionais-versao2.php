<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais (VERSÃO 2)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .comprar {
            color: red;
        }

        .urgente {
            color: red;
            background-color: yellow;
        }

        .normal {
            color: darkgreen;
        }
    </style>
</head>

<body>
    <h1>Estruturas Condicionais (VERSÃO 2)</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>


    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?=$numero?> é maior que 1</p>
    <?php
    }
    ?>

    <h2>Composta usando <code>if/else</code></h2>
    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 1; // o que temos
    $qtdCritica = 5; // mínimo necessário
    ?>
    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

    <?php
    if ($qtdEmEstoque < $qtdCritica) {
    ?>
      <p class="comprar">É necessário comprar!</p>

    <?php
        if ($qtdEmEstoque === 0) {
    ?>
      <p class="urgente"><strong>💣URGENTE💣</strong></p>
    <?php
        }
    } else {
    ?>
      <p class="normal">Estoque normal</p>
    <?php
    }

    ?>


    <hr>
    <h2>Encadeada usando <code>if/else</code></h2>
    <!-- Verificar a idade de uma pessoa e determinar se ela é criança, adolecente, adulta ou idosa. -->

    <?php
    $idade = 5;
    if ($idade <= 12) {
        $texto = "Criança🧛";
    } elseif ($idade <= 17) {
        $texto = "Adolescente";
    } elseif ($idade <= 59) {
        $texto = "Adulto";
    } else {
        $texto = "Idoso";
    }
    ?>
<p><?=$texto?></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>