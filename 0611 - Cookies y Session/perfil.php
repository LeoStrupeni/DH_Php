<?php
    session_start();
    $usuario = "No hay ningun usuario Logueado";
    if (isset($_SESSION["login"])) {$usuario = $_SESSION["login"];}
?>

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
    <br>
    <h1><u>Perfil Usuario</u></h1>
    <?="<h2 style='Color:red'>".$usuario."</h2>"?>

    <form action="formulario.php" method="POST" enctype="multipart/form-data">
        <p>
            <label for="id">ID Usuario:</label>
            <input type="text" name="id" value="<?=$_SESSION["id"]?>" readonly style="text-align: right; width: 280px"> 
            <br>
        </p>

        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?=$_SESSION["nombre"]?>" style="width: 299px"> 
            <br>
        </p>

        <p>
            Birthday:
            <input type="date" name="bday" max="1950-12-31" min="2002-01-01" style="width: 296px">
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" value="<?=$_SESSION["email"]?>" readonly style="width: 308px"> 
            <br>
        </p>
        <p>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" value="<?=$_SESSION["password"]?>" readonly style="width: 280px"> 
            <br>
        </p>
        <p>
            <label for="foto">Foto perfil</label><br>
            <?="<img src='imgperfiles/Foto_Perfil_id_".$_SESSION["id"].".jpg' alt='img'><br>"?>
            <input type="file" name="foto">
            <br> 
        </p>
        <p>
            <br>
            <input type="submit" value="Actualizar">
        </p>
    </form>

</body>
</html>
