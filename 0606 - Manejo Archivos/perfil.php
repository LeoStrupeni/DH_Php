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
    <a href="listadoUsuarios.php">Ir a Listado Usuarios</a>
    

</body>
</html>

<?php

    echo "<h1><u>"."Perfil Usuario id</u>: ".$_GET["id"] ."</h1>";
    echo "<h3><u>Foto de Perfil</u>:</h3>";
    echo "<img src='imgperfiles/Foto_Perfil_id_".$_GET["id"].".jpg' alt='img'>";


    $archivo="usuarios.json";
    $base   = file_get_contents($archivo);
    $deco1  = json_decode($base,true);

    echo "<h3><u>Nombre</u>: <em>".$deco1[$_GET["id"]]["nombre"]."</em></h3>";
    echo "<h3><u>Email</u>: <em>".$deco1[$_GET["id"]]["email"]."</em></h3>";
    echo "<h3><u>Contraseña</u>: <em>".$deco1[$_GET["id"]]["password"]."</em></h3>";

?>
