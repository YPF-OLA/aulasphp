<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício de Função</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
    <div class="container">
        <h1></h1>
        <hr>

<?php
$nota1 = 1;
$nota2 = 10;
$nota3 = 1;

// $media = ($nota1 + $nota2 + $nota3) / 3;
$media = calculandoMedia($nota1, $nota2, $nota3) ;
  
   if($media < 7){
?> 
    <p>Sua nota é: <?=$media?>, e você foi <span class="badge text-bg-danger">Reprovado!!!</span></p>
<?php
   } else {
    ?>
        <p>Sua nota é: <?=$media?>, e você foi <samp class="badge text-bg-primary">Aprovado!!!</samp></p>
    <?php
   }

?>

<?php

function calculandoMedia($nota1, $nota2, $nota3){
   
}
?>
<p><?=$resultadoFinal?></p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>