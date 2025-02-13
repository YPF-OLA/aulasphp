<?php
define("ESCOLA", "Senac Penha"); // constante
$curso = "Téc. Informatica para Internet."; // variável
$tecnologias = ["HTML", "CSS", "JS"]; // array

// função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}