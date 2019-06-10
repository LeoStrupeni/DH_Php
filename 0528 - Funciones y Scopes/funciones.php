<?php

function mayor($num1,$num2,$num3=100) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return max($num1,$num2,$num3);
}

function tabla($base,$limite=100){
    for ($i=$base;$i<=$limite;$i++){
        $arrayTabla[]=$i;
    }
    return $arrayTabla;
}

?>