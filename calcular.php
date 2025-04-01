<?php
include "funcao.php";

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$ope = $_POST["operacao"];

switch ($ope){
    case "+":
        $total = soma($n1,$n2);
    break;
    case "-":
        $total = subtrai($n1, $n2);
    break;
    case "x":
        $total = multiplica($n1, $n2);
    break;
    case "/":
        $total = dividi($n1, $n2);
    break;

}
echo "Seu resultado é: ", $total;

?>