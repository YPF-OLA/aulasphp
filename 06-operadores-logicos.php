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

    if ($media >= 7 && $faltas <= 10) {
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

    <?php
    /* Se o usuario NÃO ESTIVER logado, exibir o link/botão de LOGIN.
Caso contrario, exibir uma saudação. */
    $usuarioLogado = true;

    if (!$usuarioLogado) {
        echo "<a href=\"login.php\">Login</a>";
    } else {
        echo "<span>Bem-vindo ao sistema!</span>";
    }

    ?>

    <hr>
    <h2>Usando os operadores combinados para uma lógica mais elaborada</h2>
<?php
/* Para entrar em uma festa é necessário atender os seguintes critérios:

- Idade mínima de 18 anos
- Ou estar acompanhado dos pais
- E não estar bêbado */   

// Variáveis
$idade = 18;
$acompanhandoDosPais = true;
$estaBebado = true;

if( ($idade >= 18 || $acompanhandoDosPais) && !$estaBebado) {
    echo "<p>Entrada permitida!</p>";
} else {
    echo "<p>Entrada negada!</p>";
}
?>



</head>

<body>

</body>

</html>