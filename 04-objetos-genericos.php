<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Trabalhando com objetos genéricos</h1>
    <hr>
<?php
/* Criando uma instância de uma classe genéricas chamada stdClass (Standar Class)  */
$usuario = new stdClass(); // instâcia ou objeto

// Adicionando propriedades/atributos ao objeto
$usuario  -> nome = "Chaves";
$usuario  -> idade = 35;
$usuario  -> email = "chaves243@gmail.com";
$usuario  -> telefones = ["11-91111-1111", "11-4002-8922"];

echo $usuario->nome;

echo "<p><mark>$usuario->nome</mark></p>";


?>

    <h2>Analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saída de dados</h2>
    <p>Nome: <?=$usuario->nome?></p>
    <p>Idade: <?=$usuario->idade?> anos</p>
    <p>Telefone: <?=$usuario->telefones[1]?></p>

    <hr>


    <h2>Convertendo um objeto em um array associativo</h2>
<?php

$arrayUsuario = (array) $usuario;

?>

     <h3>Analisando o array gerado a partir de um objeto</h3>
    <pre><?=var_dump($arrayUsuario)?></pre>

    <h2>Convertendo (fazendo um casting) array associativo em objeto</h2>

<?php
 $aluno = ["nome" => "Fulano", "sobrenome" => "dos Santos"];

 // Convertendo array para objeto
 $objAluno = (object) $aluno; 
?>

<h3>Analisando o objeto gerado a parte de um array</h3>
<pre><?=var_dump($objAluno)?></pre>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>