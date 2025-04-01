<?php

function soma($v1, $v2){
    return $v1+$v2;
}

function subtrai($v1, $v2){
    return $v1-$v2;
}

function multiplica($v1, $v2){
    return $v1*$v2;
}

function dividi($v1, $v2){
    $resultado;
    if ($v1 == 0){
        $resultado = 0;
    } else if ($v2 == 0){
        $resultado = 0;
    } else{
        $resultado = $v1 / $v2;
    return $resultado;
}
}

?>