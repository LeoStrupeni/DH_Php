<?php
$funcionesEjecutadas = 0;
require_once("funciones.php");
require_once("superficie.php");


function mayorCirculo ($var1,$var2,$var3) {
    return mayor(circulo($var1),circulo($var2),circulo($var3))."<br>";
}

echo "Despued de definir la funcion mayorCirculo: ";
echo "funcionesEjecutadas = " .$funcionesEjecutadas;echo "<br>";
echo "<br>";
echo "El mayor entre radios 2, 4 y 3: ".mayorCirculo(2,4,3);echo "<br>";
echo "Despued de ejecutar la funcion mayorCirculo: ";
echo "funcionesEjecutadas: " .$funcionesEjecutadas;echo "<br>";

echo "<hr>";


$primerAparicionPhp = strpos("Me encanta php, a mi también me encanta php!","php");
echo "La primer aparacion de 'PHP' es : ";
echo $primerAparicionPhp;
?>