<?php

echo "<hr>";
echo "Funciones"."<br>";
function unoAlDiez(){
    $arrayUnoAlDiez = [];
    for ($i=1; $i<11;$i++){
        $arrayUnoAlDiez[] = $i;
    }
    return $arrayUnoAlDiez;
};
function dobles(){
    unoAlDiez();
    $arrayDobles=[];
    foreach(unoAlDiez() as $dobles){
        $arrayDobles[] = $dobles*2;
    }
    return $arrayDobles;
};

var_dump (unoAlDiez());
echo "<br>";
var_dump (dobles());

echo "<hr>";
echo "Argumentos"."<br>";

$arrayNumeros=[];
function dobles2($arrayNumeros){
    $arrayDobles=[];
    foreach($arrayNumeros as $dobles){
        $arrayDobles[] = $dobles*2;
    }
    return $arrayDobles;
}

var_dump (dobles2())."<br>";
echo "<hr>";
function nombreCompleto($nombre, $apellido){
    return "$nombre $apellido";
}

var_dump (nombreCompleto())."<br>";
echo "<hr>";
function entre0Y100($numero){
    $resultado = false;
    if ($numero>= 0 && $numero < 101) {
        $resultado=true;
    }
    return $resultado;
}

var_dump (entre0Y100())."<br>";
echo "<hr>";

function entreDosNumeros ($numero,$min,$max){
    $resultado = false;
    if ($numero>= $min && $numero <= $max) {
        $resultado=true;
    }
    return $resultado;
}
var_dump (entreDosNumeros())."<br>";
echo "<hr>";

function entreDosNumeros2 ($numero,$min=0,$max=100){
    $resultado = false;
    if ($numero>= $min && $numero <= $max) {
        $resultado=true;
    }
    return $resultado;
}
var_dump (entreDosNumeros2())."<br>";
echo "<hr>";


?>