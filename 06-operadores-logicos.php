<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
    <hr>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>
<?php
/*  Avaliar um aluno mediante média e faltas */
$media = 9.5;
$faltas = 10;

if ($media >= 7 && $faltas <= 10){
    echo "<p>Aprovado!</p>";
} else {
    echo "<p>Reprovado!</p>";
}
?>
<hr>
    <!-- O símbolo | é chamado de pipe -->
    <h2>|| (OU/OR)</h2>
<?php
/* Dar um desconto a um cliente que seja VIP ou que tenha cupom */
$clienteVIP = false; // valor/tipo lógico/boolean
$temCupom = false;

if ($clienteVIP || $temCupom) {
    echo "<p>Desconto aplicado!</p>";
} else {
    echo "<p>Sem desconto!</p>";
}


?>
<hr>
    <h2>! (NÃO/NOT)</h2>

</head>
<body>
    
</body>
</html>