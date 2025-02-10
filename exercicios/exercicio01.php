<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (ok)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .texto {
            font-style: italic;
            border-top: solid 1px;
            border-bottom: solid 1px;
        }
    </style>
</head>
<body>
    <h1>Exercício 01 (ok)</h1>
    <hr>
<?php
// Definindo o timezone (fuso horário)
date_default_timezone_set("America/Sao_Paulo");

// $data = "30/01/2025";
$data = date("d/m/Y");
$hora = date("H:i");
echo $data. " - ". $hora;

const NOME = "Ygor";
$curso = "Modelagem de Dados";
$cargaHoraria = 100;
$limiteDeFaltas = $cargaHoraria * 0.25; // ou $cargaHoraria / 4

/* mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas. */
?>
<p class="texto">O aluno <span style="color: red;"><?=NOME?></span> está matriculado no curso <?=$curso?>, cuja carga horária é de <?=$cargaHoraria?>h tendo limite de faltas de <?=$limiteDeFaltas?>h.</p>

<hr>

<?php
/* Diferenças entre const/define e variável */
// VARIÁVEL
$exemplo = 10;
echo $exemplo;

echo "<br><br>";

$exemplo = 150;
echo $exemplo;

echo "<br><br>";

// CONSTANTE
const EXEMPLO = 10;
echo EXEMPLO;

//EXEMPLO = 200; // dá erro pois constantes NÃO PODEM SER MODIFICADAS
//echo EXEMPLO;
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>