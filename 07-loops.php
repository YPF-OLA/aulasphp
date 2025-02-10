<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Trabalhando com comandos/laços de repetição</h1>  
    <hr>
    
    <h2>WHILE (ENQUANTO)</h2>
    <p>Executa ações <b>enquanto a condição for verdadeira</b>. Se a condição inicialmente não é verdadeira, o loop não funciona nenhuma vez.</p>
<?php
$i = 1;
while ($i <= 3) {
?>
    <p> <?=$i?></p>
<?php 
  $i++;   
}
?>
     <hr>

    <h2>DO/WHILE (parecido com REPITA)</h2>
    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a codição se tornar falsa.</p>

<?php
$j = 1;
do {
?>
   <div>
    <hr>
        <h3>Titulo...</h3>
        <p>Texto qualquer...</p>
   </div>
<?php
   $j++;
}while($j <= 3);
?>


<hr>

    <h2>FOR (PARA)</h2>
    <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>
<?php
for($i = 1; $i <= 10; $i++ ){
?>
    <p><code>i</code> vale: <b><?=$i?></b></p>
<?php
}
?>


<hr>
<h2>Mini-exercícios</h2>
<p>Crie uma array contendo os 12 meses do ano e usando um dos loops que vimos, mostre os nomes dos meses em uma lista ordenado HTML</p>
<hr>

<?php
$meses = array(
    "Janeiro", 
    "Fevereiro", 
    "Março", 
    "Abril", 
    "Maio", 
    "Junho", 
    "Julho", 
    "Agosto", 
    "Setembro", 
    "Outubro", 
    "Novembro", 
    "Dezembro"
);
 ?>


<ol>
<?php
 for($y = 0; $y < 12; $y++ ){
    ?>
       
        <li><?=$meses[$y]?></li>
       
    <?php }?>
</ol>

<hr>

<h2>FOREACH (PARA CADA)</h2>
<p>Versão simplificada do loop for e bem mais fácil de usar com arrays</p>

<?php
$alunos = ["Denis", "Paulo", "Heloisa"];

foreach( $alunos as $alunos ) {
?>
 <p>Nome: <?=$alunos?></p>
<?php
}
?>

<h3>Acessando array associativo</h3>

<?php
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach($clubes as $clubes => $apelido) {
?>
   <p>O clobe <?=$clubes?> é conhecido como <?=$apelido?></p>

<?php
}?>
<hr>
<?php
$livro = new stdClass();
$livro->titulo = "Senhor dos Anéis: A Sociedade do Anél";
$livro->autor = "J.R.R Tolkien";
$livro->ano = 1954;

foreach($livro as $propriedade => $valor){
?>
   <p><?=$propriedade?>: <b><?=$valor?></b></p>
<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>