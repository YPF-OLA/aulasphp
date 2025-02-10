<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .exemplo {
            color: red;
            border: solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>

<?php 
    // Geração de strings/textos
    echo "Hoje o Corinthians joga!";

    // Geração de tags e atributos
    echo "<p>Vai ganhar de goleada!</p>";
    
    // Aspas duplas fora, aspas simples dentro (CORRETO)
    echo "<p><abbr title='Sport Club Corinthians Paulista'>SCCP</abbr></p>";

    // Aspas duplas/simples dentro e fora (ERRADO)
    //echo "<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>";

    // Aspa usando escape \ (CORRETO)
    echo "<p><abbr title=\"Sport Club Corinthians Paulista\">SCCP</abbr></p>";

    // Aspas simples fora, aspas duplas dentro (CORRETO)
    echo '<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>';

    echo "<h2>Brincando <span class=\"exemplo\">PHP</span> </h2>";
    
    $saudacao = "Olá!";
?>

<script>
    const exemplo = document.querySelector(".exemplo");
    
    exemplo.addEventListener("click", function(){
        alert( "<?php echo $saudacao; ?>" );
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>