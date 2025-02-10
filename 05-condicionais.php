<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .comprar{
            color: red;
        }
        .urgente{
            color: red;
            background-color: yellow;
        }
        .normal{
            color: darkgreen;
        }
    </style>
</head>
<body>
    <h1>Estruturas Condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>
    
    
<?php
$numero = 5;

if($numero > 5){
    echo "<p>$numero é maior que 1</p>";
}

if($numero > 1) echo "<p>$numero é maior que 1</p>"
?>

    <h2>Composta usando <code>if/else</code></h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 1; // o que temos
$qtdCritica = 5; // mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica){
    echo '<p class="comprar">É necessário comprar!</p>';

    if ($qtdEmEstoque === 0){
        echo '<p class="urgente"><strong>💣URGENTE💣</strong></p>';
    }

} else {
    echo '<p class="normal">Estoque normal</p>';
}

?>


    <hr>
    <h2>Encadeada usando <code>if/else</code></h2>
<!-- Verificar a idade de uma pessoa e determinar se ela é criança, adolecente, adulta ou idosa. -->

<?php
$idade = 60;
if ($idade <= 12) {
    echo "<p>Criança🧛</p>";
} elseif($idade <= 17) {
    echo "<p>Adolescente</p>";
} elseif($idade <= 59){
    echo "<p>Adulto</p>";
} else {
    echo "<p>Idoso</p>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>