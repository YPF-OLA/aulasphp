<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
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
</body>
</html>