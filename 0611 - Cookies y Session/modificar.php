<?php
    session_start();

    $_SESSION["contador"];
    
    if($_POST) {
        if (isset($_POST["reset"])){
            $_SESSION["contador"]=0;
            echo "El Contador se reinicio y tiene el valor ".$_SESSION["contador"];
        }
        if(isset($_POST["enviar"])){
            $_SESSION["contador"]++;
            echo "El Contador tiene el valor ".$_SESSION["contador"];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies y Session</title>
</head>
<body>
    <br>
    <br>
    <form action="modificar.php" method="POST">
        <button type="submit" name="enviar" class="">Enviar</button>
        <button type="submit" name="reset" class="">Reset</button>
        
    </form>    
</body>
</html>