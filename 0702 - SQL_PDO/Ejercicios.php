<?php

require_once "../GLOBAL/config.php";
require_once "../GLOBAL/conexion.php";
require_once "../GLOBAL/funciones.php";

$series = consultaTabla($pdo, "series");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listado Series</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Listado de Series</h1>
        </header>

        <ul>
            <?php foreach ($series as $serie) :  ?>
                <li>
                    <a href="serie.php?id=<?= $serie["id"] ?>" class="text-decoration-none">
                        <?= $serie["title"] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>