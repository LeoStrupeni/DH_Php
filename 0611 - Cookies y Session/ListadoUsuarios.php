<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="formulario.php">Volver al Formulario</a>
    <br>
    <a href="perfil.php?id=0">Ir a Perfiles</a>
    <br> 
</body>
</html>

<?php

echo "<h1><u>Listado Usuarios</u></h1>";
$archivo="usuarios.json";
$base   = file_get_contents($archivo);
$deco1  = json_decode($base,true);

var_dump($deco1);
$var = 0;


foreach($deco1 as $usuarios) {
    Echo "<a style='text-transform:uppercase;' href='perfil.php?id=".$var."'>".$usuarios["nombre"]."</a><br>";
    $var ++;
}

?>
