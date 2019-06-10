<?php


function triangulo($base,$altura) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return (($base*$altura)/2);
}

function rectangulo($base,$altura) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return ($base*$altura);
}

function cuadrado($base) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return ($base*$base);
}

function circulo($radio) {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return (pi()*($radio**2));
}

?>