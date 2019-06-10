<?php
    $var=[
        "nombre" => "",
        "email" => "",
        "clave" => ""
    ];
    if ($_POST) {
        $varOK = true;
        if (strlen($_POST["nombre"])==0) {
            $varOK = false;
            $var["nombre"]= "El Nombre debe ser Completado";
        };
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
            $varOK = false;
            $var["email"]= "el Campo no tiene formato Email";
        };
        if (strlen($_POST["password"])<5) {
            $varOK = false;
            $var["clave"] = "La clave elegida no cumple con los parametros solicitados";
        };
        if ($varOK) {
            $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);
            header("Location: registro.php");
        };
    };

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
    <form action="formulario.php" method="POST">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"> 
            <?php if ($_POST) {echo $var["nombre"];}?>
            <br>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email"> 
            <?php if ($_POST) {echo $var["email"];}?>
            <br>
        </p>
        <p>
            <label for="password">contraseña</label>
            <input type="password" name="password">
            <?php if ($_POST) {echo $var["clave"];}?>
            <br> 
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
    

</body>
</html>