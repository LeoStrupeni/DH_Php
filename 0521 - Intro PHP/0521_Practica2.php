<?php
$numero1 = "10";
$numero2 = "20";

if ($numero1 >= $numero2) {
    echo $numero1;
} else {
    echo $numero2;
};

echo "<hr>";

$randon=rand(1,5);  

if ($randon==3 || $randon==5) {
    echo $randon;
};

echo "<hr>";


$randon2=rand(1,5);  
    
if ($randon2!=3) {
    echo "El número NO es 3";
} else {
    echo $randon2;
}

echo "<hr>";

$randon3=rand(1,100);

if ($randon3 > 50){
    echo "El número es mayor a 50";
} else  if ($randon3 == 50) {
    echo "El número el 50";
} else {
    echo "El número es menor a 50";
};

echo "<hr>";

$randon4=rand(1,100);

switch ($randon4) {
    case $randon4 < 50: 
        echo "El número es menor a 50";
        break;
    case $randon4 = 50:
        echo "El número el 50";
        break;
    case $randon4 > 50:
        echo "El número es mayor a 50";
        break;
}

echo "<hr>";

$nombreDeUsuario="aaa";
$ContraseniaDeUsuario="11111";

if ($nombreDeUsuario == "admin") {
    if ($ContraseniaDeUsuario == "1234") {
        echo "Bienvenido";
    } else {
        echo "Error en la Contraseña";    
    }     
} else {
    echo "Usuario Incorrecto";
}

echo "<hr>";
$edad = 17; //numero
$casado = false; // booleano
$sexo = "Otro"; //String “Masculino”, “Femenino” u “Otro”

if ($edad >= 18 && $casado == false ) {
    echo "Bienvenido";
} else  if ($sexo == "Otro") {
    echo "Bienvenido";
} else {
    echo "No Bienvenido";
};

      
echo "<hr>";

$cantidadDeAlumnos = -1; // Numero

if ($cantidadDeAlumnos) {
    echo true;
    }
    else {
    echo false;
    }

echo "<hr>";
$numero=1;

$parImpar = $numero%2==0 ? "Par": "Impar";

echo $parImpar;

echo "<hr>";
$nota = 11;

switch ($nota) {
    case 1 : 
        echo "desaprobado";
        break;
    case 2 : 
        echo "desaprobado";
        break;
    case 3 : 
        echo "desaprobado";
        break;
    case 4:
        echo "zafamos";
        break;
    case 5:
        echo "zafamos";
        break;
    case 6 :
        echo "Bien!!!";
        break;
    case 7 :
        echo "Bien!!!";
        break;
    case 8 :
        echo "Bien!!!";
        break;
    case 9 :
    echo "MUY bien!!";
        break;
    case 10 :
    echo "Excelente!!!!!";
        break;
    default:
        echo "El número no es válido";
};


echo "<hr>";

?>

