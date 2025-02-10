<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center">Estrutura de Dados</h1>
    <table class="table table-bordered table table-striped table-hover table table-dark table-striped">
        <caption><b>Manipulação de dados</b></caption>
        <thead>
            <tr>
                <th scope="col"><b>ID</b></th>
                <th scope="col"><b>Linguagem</b></th>
                <th scope="col"><b>Descrição</b></th>
            </tr>
        </thead>
        <tbody>
<?php
$dados = [
    "HTML" => "Estruturação",
    "CSS" => "Estilo",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "JAVA" => "Softwares"
   
];

$id = 1;
foreach($dados as $dados => $apelido) {
?>
   
        
            <tr>
                <td><?=$id?></td>
                <td><?=$dados?></td>
                <td><?=$apelido?></td>
            </tr>
        
<?php
 $id++; 
} ?>
</tbody>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>