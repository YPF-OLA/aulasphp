<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>
    <?php
    /*  Avaliar um aluno mediante média e faltas */
    $media = 9.5;
    $faltas = 10;

    if ($media >= 7 && $faltas <= 10) {
    ?>
        <p>Aprovado!</p>
    <?php
    } else {
    ?>
        <p>Reprovado!</p>
    <?php
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
    ?>
        <p>Desconto aplicado!</p>
    <?php
    } else {
    ?>
        <p>Sem desconto!</p>
    <?php
    }
    ?>

    <hr>

    <h2>! (NÃO/NOT)</h2>

    <?php
    /* Se o usuario NÃO ESTIVER logado, exibir o link/botão de LOGIN.
Caso contrario, exibir uma saudação. */
    $usuarioLogado = true;

    if (!$usuarioLogado) {
    ?>
        <a href="login.php">Login</a>
    <?php
    } else {
    ?>
        <span>Bem-vindo ao sistema!</span>
    <?php
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

    if (($idade >= 18 || $acompanhandoDosPais) && !$estaBebado) {
    ?>
        <p>Entrada permitida!</p>
    <?php
    } else {
    ?>
        <p>Entrada negada!</p>
    <?php
    }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>