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
function exibirDadosDoAutor(){
    echo "<h4><mark>Agora Vai!!!</mark></h4>";
    echo "<p><mark><time>".date("d/m/Y")."</time></mark></p>";
}
 ?>
        <h3>Chamada do procedimento</h3>
        <?php
        $valor = 5000;
        if($valor > 1000){
            exibirDadosDoAutor();
        }
        ?>

        <?=exibirDadosDoAutor()?>

        <h3>Outras chamadas</h3>
        <div><?=exibirDadosDoAutor()?></div>
        <ul>
            <li><?=exibirDadosDoAutor()?></li>
            <li><b><?=exibirDadosDoAutor()?></b></li>
        </ul>

        <hr>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>