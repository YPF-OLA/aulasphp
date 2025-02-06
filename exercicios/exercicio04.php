<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
        th {
            border: solid black
        };
        td {
            border: solid black;
        }
    </style>
</head>
<body>
    <h1>Estrutura de Dados</h1>
    <table>
        <caption></caption>
        <thead>
            <tr>
                <th><b>Linguagem</b></th>
                <th><b>Descrição</b></th>
            </tr>
        </thead>
<?php
$dados = [
    "Linguagem" => "Descrição",
    "HTML" => "Estruturação",
    "CSS" => "Estilo",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "JAVA" => "Softwares"
   
];

foreach($dados as $dados => $apelido) {
?>
   
        <tbody>
            <tr>
                <td><?=$dados?></td>
                <td><?=$apelido?></td>
            </tr>
        </tbody>
 

<?php
} ?>















</body>
</html>