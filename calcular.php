<?php
include 'funcao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacao = $_POST["operacao"];
    $resultado = "";

    switch ($operacao) {
        case "adicao":
            $resultado = adicao();
            break;
        case "subtracao":
            $resultado = subtracao();
            break;
        case "multiplicacao":
            $resultado = multiplicacao();
            break;
        case "divisao":
            $resultado = divisao();
            break;
      
    }
    
    echo "<h3>Resultado: $resultado</h3>"; 
}
?>