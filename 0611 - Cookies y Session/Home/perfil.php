<?php

    session_start();
    
    if($_POST){
        $_SESSION["color"]= "white";
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
<body <?= $_SESSION["color"] ?>>
    <h1>Hola <?= $_SESSION["name"] ?></h1>
    
    <form action="perfil.php" method="POST">
        <button type="submit" name="reset">RESET FONDO</button> 
    </form>

    <a href="home.php">volver a home</a>
</body>
</html>