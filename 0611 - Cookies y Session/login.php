<?php
    if($_POST){
        $contraseña = null;
        $varOK = true;
        $archivo="usuarios.json";
        $base   = file_get_contents($archivo);
        $deco1  = json_decode($base,true);
        
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
            $varOK = false;
            echo "el Campo no tiene formato Email";
        } 

        if ($varOK && count($deco1)>0) {
            $recursion = 0;
            foreach ($deco1 as $valor) {
                if ($recursion == 0 && $valor["email"] == $_POST["email"]) {
                    $recursion ++;
                    if (password_verify($_POST["password"],$valor["password"])){
                        var_dump($deco1);
                        header('location: perfil.php?id='.$valor['id']);
                    } else {
                        $contraseña = "Contraseña Incorrecta";
                    }
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
    <title>Login</title>
    <style>
        *{
            font-family: sans-serif
        }

        body{
            background: gray;
        }
        .centrado {
            width: 170px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid red;
        }

        .boton-Log{
            width:170px;
        }

    </style>
</head>
<body>
    <div>
        <form action="login.php" method="POST" class="centrado">
            <b>Formulario de Logueo</b>
            <p>
                <label for="email"></label>
                <input type="email" name="email" placeholder="Ingrese Email" required> 
                <br>
            </p>
            <p>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Ingrese contraseña" required>
                <br> 
            </p>
            <button type="submit" name="enviar" class="boton-Log">Login</button> 
            <br><br>
            <?php if ($_POST) {echo $contraseña;}?>

        </form>    
    </div>




</body>
</html>