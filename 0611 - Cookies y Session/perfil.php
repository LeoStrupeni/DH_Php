<?php
    session_start();
    $usuario = "No hay ningun usuario Logueado";
    if (isset($_SESSION["login"])) {$usuario = $_SESSION["login"];}

    if($_POST) {
        if($_FILES) {
            if($_FILES["foto"]["error"] != 0) {
                echo "Hubo un error en la carga. Error numero: ".$_FILES["foto"]["error"]."<br>";
            } else {
                $ext = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
                if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
                    echo "La extension de la imagen ".$ext." no se puede cargar. Solo puede carga jpg, jpeg o png.";
                } else {
                    move_uploaded_file ($_FILES["foto"]["tmp_name"],"imgPerfiles/Foto_Perfil_id_".$_POST["id"].".jpg");
                };
            };
        };

    }

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
    <br>
    
    <button style="margin-left: 260px; padding: 10px">
        <a href="logout.php" style="text-decoration:none; color:black">Cerrar Sesión</a>
    </button>

    <h1><u>Perfil Usuario</u></h1>
    <?="<h2 style='Color:red'>".$usuario."</h2>"?>



    <form action="perfil.php?id=<?=$_SESSION["id"]?>" method="POST" enctype="multipart/form-data">
        <p>
            <?="<img src='imgperfiles/Foto_Perfil_id_".$_SESSION["id"].".jpg' alt='img'><br>"?>
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
            <label for="foto">Actualizar Foto:</label><br>
            <input type="file" name="foto">
            <br> 
        </p>
        <p>
            <input type="submit" value="Actualizar" style="margin-left: 270px; padding: 10px">
        </p>
    </form>



</body>
</html>
