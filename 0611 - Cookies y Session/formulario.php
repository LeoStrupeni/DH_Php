<?php
    $var=[
        "nombre" => "",
        "email" => "",
        "clave" => ""
    ];
    $claveHash="";
    if ($_POST) {
        $archivo="usuarios.json";
        $base   = file_get_contents($archivo);
        $deco1  = json_decode($base,true);

        $varOK = true;
        if (strlen($_POST["nombre"])==0) {
            $varOK = false;
            $var["nombre"]= "El Nombre debe ser Completado";
        };
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
            $varOK = false;
            $var["email"]= "el Campo no tiene formato Email";
        };
        if (strlen($_POST["password"])<3) {
            $varOK = false;
            $var["clave"] = "La clave elegida no cumple con los parametros solicitados";
        };
        if ($varOK && count($deco1)>0) {
            $recursion = 0;
            foreach ($deco1 as $valor) {
                if ($recursion == 0 && $valor["email"] == $_POST["email"]) {
                    $varOK = false;
                    $recursion ++;
                    echo "El mail ingresado ya existe en nuestra base de datos";
                };
            };
        };

        if ($varOK) {
            $claveHash=($_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT));
            $deco1[]= $_POST;
            $enco1  = json_encode($deco1);
            file_put_contents($archivo,$enco1);

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
            header("location: registro.php");
        };
    };



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <style>
        *{
            font-family: sans-serif
        }

    </style>

</head>
<body>
    
    <?php
        $archivo="usuarios.json";
        $base   = file_get_contents($archivo);
        $deco1  = json_decode($base,true);
        $id = (is_null($deco1)) ? 0 : count($deco1) ; //IF TERNARIO
    ?>

    <form action="formulario.php" method="POST" enctype="multipart/form-data">
        <?php
            echo '<input type="hidden" id="id" name="id" value="'.$id.'">';
        ?>
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"> 
            <?php if ($_POST) {echo $var["nombre"];}?>
            <br>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email"> 
            <?php if ($_POST) {echo $var["email"];}?>
            <br>
        </p>
        <p>
            <label for="password">Contraseña:</label>
            <input type="password" name="password">
            <?php if ($_POST) {echo $var["clave"];}?>
            <br> 
        </p>
        <p>
            <label for="foto">Cargue una foto para su perfil</label><br><br>
            <input type="file" name="foto">
            <br> 
        </p>
        <p>
            <input type="submit">
        </p>
        <a href="login.php">Login</a><br>
        <a href="perfil.php?id=0">Ir a Perfiles</a><br>
        <a href="listadoUsuarios.php">Ir a Listado Usuarios</a>
    </form>
    

</body>
</html>