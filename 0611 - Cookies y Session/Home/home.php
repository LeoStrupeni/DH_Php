<?php

    if($_POST){
        session_start();
        $_SESSION["color"]= "bgcolor= " . $_POST["favcolor"];
        $_SESSION["name"]=$_POST["nombre"];
        header("location:perfil.php");
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
    <form action="home.php" method="POST">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">   
        </p>
        <p>
            <label for="favcolor">Color:</label>  
            <input type="color" name="favcolor">        
        </p> 
        <p>
            <button type="submit" name="enviar">Login</button> 
        </p>
    </form>    
</body>
</html>