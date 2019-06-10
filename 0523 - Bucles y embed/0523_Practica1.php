<?php
echo "Ejercicio 1"."<br>";
for($i=1;$i<11;$i++){
    echo ($i * 2) . " "; 
}
echo "<hr>";
Echo "Ejercicio 2"."<br>";
$numero = 100;
while ($numero>= 85){
    echo $numero  . " ";
    $numero--;
}
echo "<hr>";
echo "Ejercicio 3"."<br>";
$contador = 1;
while ($contador<6){
    echo ($contador*2) . " " ;
    $contador++;
}
echo "<hr>";
echo "Ejercicio 4"."<br>";

$numero=rand(0,1);
$cantidad = 0;
$cara = 0;

while ($cara<5){
    if ($numero==1) {
        $cara++; 
        $cantidad++;
    } else if ($numero==0) {
        $cantidad++;
    };
    $numero=rand(0,1);
};
echo "Cantidad de Tiros : ". $cantidad."<br>";
echo "Cantidad de Caras : ". $cara;

echo "<hr>";
echo "Ejercicio 5 a (for)"."<br>";

$nombres = ["Ariel","Enzo","Leo","Daniel","Martin"];

for ($i=0; $i < count($nombres)  ;$i++){
    echo $nombres[$i]."<br>";
}

echo "<br>"."Ejercicio 5 b (While)"."<br>";

$i=0;
while ($i < count($nombres)){
    echo $nombres[$i]."<br>";
    $i++;
}

echo "<br>"."Ejercicio 5 c (do/while)"."<br>";

$i=0;
do {
    echo $nombres[$i]."<br>";
    $i++;
} while ($i < count($nombres));

echo "<br>"."Ejercicio 5 d (foreach)"."<br>";

foreach ($nombres as $valores) {
    echo $valores."<br>";
}

echo "<hr>";
echo "Ejercicio 6"."<br>";

$numero=rand(0,10);
$valores_array=[];

for ($i=0; $i <10 ;$i++) {
            $valores_array [] = $numero;
            $numero=rand(0,10);
        };
var_dump( $valores_array);

$i=0;     

while ($i<10 && $valores_array[$i]!=5) {
    echo $valores_array[$i]."<br>";
    $i++;
}
echo "Se encontró un 5!"."<br>";

echo "<hr>";
echo "Ejercicio 7"."<br>";
/* 7. Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando
cuantos números son pares. */

$numero=rand(0,100);
$valores100_array=[];

for ($i=0; $i <10 ;$i++) {
    $valores100_array [] = $numero;
    $numero=rand(0,100);
};
var_dump($valores100_array);
    
$i=0;
$pares=0;

while ($i <10) {
    if  ($valores100_array[$i]%2==0){
        $pares++;
    };
    $i++; 
};
echo $pares."<br>";

echo "<hr>";
echo "Ejercicio 8"."<br>";
$mascota = [
    "Mascota" => "Perro",
    "Edad" => 5,
    "Altura" => 0.60,
    "Nombre" => "Sonic"
];

foreach ($mascota as $position => $valores) {
    echo $position.": ".$valores.".<br>";  
}

echo "<hr>";
echo "Ejercicio 9"."<br>";
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

foreach ($ceu as $pais => $capital){
    echo $capital." es la capital de ".$pais.".<br>";     
}
echo "<hr>";
echo "Ejercicio 10"."<br>";

$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $ciudades){
    echo "Las ciudades de ".$pais." son :<br>";
    foreach ($ciudades as $ciudad) {
        echo " *   ".$ciudad."<br>";
    };   
}

echo "<hr>";
echo "Ejercicio 15"."<br>";


foreach ($ceu as $pais => $ciudades){
    $Pais = [
        "Ciudades" => $ciudades,
        "EsAmericado" => ($pais == "Argentina" || $pais == "Brasil" || $pais == "Colombia")
    ];
    var_dump($Pais);
}


?>