<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      
        table {
            width: 50%;
            background-color: #fff;
        }

        th, td {
            padding: 12px 20px;
            text-align: center;
            font-size: 16px;
        }

        th {
            background-color: gray;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: lightgray;
        }

        tr:hover {
            background-color: lightgray;
            cursor: pointer;
        }

        td {
            color: black;
        }

 
    </style>
</head>
<body>
    <h1>Estrutura de Dados</h1>
    <table>
        <caption><b>Manipulação de dados</b></caption>
        <thead>
            <tr>
                <th><b>ID</b></th>
                <th><b>Linguagem</b></th>
                <th><b>Descrição</b></th>
            </tr>
        </thead>
        <tbody>
<?php
$dados = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
];
?>
<?php
foreach($dados as $dado) {
?>
   
        
            <tr>
                <td><?=$dado["id"]?></td>
                <td><?=$dado["nome"]?></td>
                <td><?=$dado["descricao"]?></td>
            </tr>
        
<?php
 
} ?>
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>