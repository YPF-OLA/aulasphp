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
   $resultado = ($nota1 + $nota2 + $nota3) / 3;
   return $resultado;
}

function verificarSituacao($valorDaMedia){
    if ($valorDaMedia < 7) {
        return '<samp class="badge text-bg-danger">Reprovado!!!</samp>';
        
    } else {
        return '<samp class="badge text-bg-primary">Aprovado!!!</samp>';
    }
    
}


$notafinal = calculandoMedia(1, 7, 13); 

$situacao = verificarSituacao($notafinal);

//echo "Média final: " . number_format($notafinal, 2, ',', '.') . "<br>"; 
echo "Situação: " . $situacao; 
?>

<hr>

<?php

$alunos = [
    [
    "nome" => "Ygor",
    "nota1" => 1, 
    "nota2" => 6, 
    "nota3" => 5, 
    ],
    [
    "nome" => "Felipe",
    "nota1" => 9, 
    "nota2" => 6, 
    "nota3" => 5, 
    ],
    [
    "nome" => "Fernanda",
    "nota1" => 9, 
    "nota2" => 2, 
    "nota3" => 2, 
    ],
    [
    "nome" => "Paula",
    "nota1" => 2, 
    "nota2" => 6, 
    "nota3" => 4, 
    ],
    [
    "nome" => "João",
    "nota1" => 1, 
    "nota2" => 6, 
    "nota3" => 1, 
    ],

   
];


foreach ($alunos as $aluno) {
    $medias = calculandoMedia($aluno["nota1"],$aluno["nota2"], $aluno["nota3"]);
    $situcacaos = verificarSituacao($media);
?>
<hr>
  <h2> <?=$aluno["nome"]?></h2>

    <p>Aluno <?=$medias?></p>

    <p>Situação: <b><?=$situacao?></b></p>
    
 
    

   

   <hr>
<?php
}


?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>