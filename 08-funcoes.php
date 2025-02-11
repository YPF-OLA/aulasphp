<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Trabalhando com funções</h1>

        <h2>Função como procedimentos (ou sub-rotina)</h2>
        <p><i>Procedimentos <b>não retornam</b> nada.</i></p>

        <?php
        function exibirDadosDoAutor()
        {
            echo "<h4><mark>Agora Vai!!!</mark></h4>";
            echo "<p><mark><time>" . date("d/m/Y") . "</time></mark></p>";
        }
        ?>
        <h3>Chamada do procedimento</h3>
        <?php
        $valor = 5000;
        if ($valor > 1000) {
            exibirDadosDoAutor();
        }
        ?>

        <?= exibirDadosDoAutor() ?>

        <h3>Outras chamadas</h3>
        <div><?= exibirDadosDoAutor() ?></div>
        <ul>
            <li><?= exibirDadosDoAutor() ?></li>
            <li><b><?= exibirDadosDoAutor() ?></b></li>
        </ul>

        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>
        <?php
        function somar($valor1, $valor2)
        {
            // Variável de escopo LOCAL: Este tipo de variável existe Somente Dentro da função em que foi declarada.

            // $total = $valor1 + $valor2;

            /* Retornamos o resultado, ou seja, "madandamos para fora" da função o resultado do que ela fez. */
            // return $total;


            // Podemos também aplicar o return direto na expressão (sem uso de variável local)
            return $valor1 + $valor2;
        }
        ?>
        <h3>Chamando/retornos da função somar</h3>
        <p>Resultado 1: <?= somar(10, 5) ?> </p>
        <p>Resultado 2: <?= somar(23, 107) ?> </p>

        <?php
        // Chamando a função e GUARDANDO o resultado numa variável GLOBAL
        $resultado3 = somar(10050, 788.55);
        ?>
        <p>Resultado 3: <?= $resultado3 ?></p>
        <?php if ($resultado3 > 2000) { ?>
            <p class="alert alert-success">O resultado 3 é maior que 2000</p>
        <?php } else { ?>
            <p class="alert alert-danger">O resultado 3 não é maior que 2000</p>
        <?php } ?>

        <!-- Usando uma função como parte de uma condição: PRIMEIROS, a função é chamada (e aí ela calcula e retorna), DEPOIS o resultado que ela retornou é comparando com a condição -->
        <?php if( somar(10, 50) <500 ){ ?>
            <p>João Pedro reprovado...</p>
        <?php }?>

        <h3>Função com parâmetros opcionais</h3>

        <?php 
        function exibirSaudacao($mensagem, $pessoa = "fulano"){
            return "Olá, $mensagem $pessoa";
        }    
        ?>

            <p>Mensagem 1: <?=exibirSaudacao("Bom dia", "Ygor")?></p>


            <p>Mensagem 2: <?=exibirSaudacao("Boa tarde")?></p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>