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
                        if ($_POST["Recordar"]=="recuerdo") {
                            setcookie("email",$_POST["email"],time()+60);
                            setcookie("password",$_POST["password"],time()+60);
                        }
                        session_start();
                        $_SESSION["login"]= "Usuario logueado: ".$valor["email"];
                        $_SESSION["id"]=$valor['id'];
                        $_SESSION["nombre"]=$valor['nombre'];
                        $_SESSION["email"]=$valor['email'];
                        $_SESSION["password"]=$valor["password"];    
                        header('location: perfil.php?id='.$valor['id']);
                    } else {
                        $contraseña = "Contraseña Incorrecta";
                    }
                }else {
                    $contraseña = "Mail no Registrado"."<br><a href='formulario.php' style='text-decoration:none; color:black'>Resgistrate!!!</a>";
                    
                };
            };
        };
    };

    $emailTemporal ="";
    $contraseñaTemporal="";
    if (isset($_COOKIE["email"])){
        $emailTemporal = $_COOKIE["email"];
        $contraseñaTemporal=$_COOKIE["password"];
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
            <b style="text-align:center">Formulario de Logueo</b>
            <p>
                <label for="email"></label>
                <input type="email" name="email" placeholder="Ingrese Email" value='<?=$emailTemporal?>' required> 
                <br>
            </p>
            <p>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Ingrese contraseña" value='<?=$contraseñaTemporal?>' required>
                <br> 
            </p>
            <p>
                <input type="checkbox" name="Recordar" value="recuerdo" checked>Recordame
                <br>
            </p>


            <button type="submit" name="enviar" class="boton-Log">Login</button> 
            <br><br>
            <p style="text-align:center"><?php if ($_POST) {echo $contraseña;}?></p>

        </form>    
    </div>




</body>
</html>