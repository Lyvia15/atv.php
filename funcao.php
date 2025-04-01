<?php

function adicao() {
    return isset($_POST['num1'], $_POST['num2']) ? $_POST['num1'] + $_POST['num2'] : "Erro: Valores inválidos";
}

function subtracao() {
    return isset($_POST['num1'], $_POST['num2']) ? $_POST['num1'] - $_POST['num2'] : "Erro: Valores inválidos";
}

function multiplicacao() {
    return isset($_POST['num1'], $_POST['num2']) ? $_POST['num1'] * $_POST['num2'] : "Erro: Valores inválidos";
}

function divisao() {
    return isset($_POST['num1'], $_POST['num2']) ? ($_POST['num2'] != 0 ? $_POST['num1'] / $_POST['num2'] : "Erro: Divisão por zero") : "Erro: Valores inválidos";
}

?>