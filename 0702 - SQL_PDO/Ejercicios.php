<?php

require_once "../GLOBAL/config.php";
require_once "../GLOBAL/conexion.php";
require_once "../GLOBAL/funciones.php";

$gen=generosPelis($pdo);
$actores=actores($pdo);
$actorPelicula=actorPelicula($pdo);
$episodios=episodios($pdo);
$ratingPelis=ratingPelis($pdo);
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
    <h1 class="text-center">Práctica I (Integradora)</h1><br>
        <div class="row">
            <div class="col h3">
                1.1 - Listado Peliculas y Genero
            </div>
        </div>    
        <div class="row">
            <div class="col-6 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Genero</th>
                            <th scope="col">Pelicula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($gen as $peli) :?>
                        <tr>
                            <td><?=$peli['name']?></td>
                            <td><?=$peli['title']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col h3">
                1.2 - Listado Peliculas, Genero y Actores
            </div>
        </div>    
        <div class="row">
            <div class="col-10 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Actores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($actores as $peli) :?>
                        <tr>
                            <td><?=$peli['title']?></td>
                            <td><?=$peli['name']?></td>
                            <td><?=$peli['Nombre']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col h3">
                1.3 - Listado Actores y sus peliculas
            </div>
        </div>    
        <div class="row">
            <div class="col-7 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Actor</th>
                            <th scope="col">Pelicula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($actorPelicula as $peli) :?>
                        <tr>
                            <td><?=$peli['Nombre']?></td>
                            <td><?=$peli['title']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col h3">
                1.5 - Episodios
            </div>
        </div>    
        <div class="row">
            <div class="col-12 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Temp.</th>
                            <th scope="col">Temp. Name</th>
                            <th scope="col">Num. Epis.</th>
                            <th scope="col">Epis. name</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Actores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($episodios as $peli) :?>
                        <tr>
                            <td><?=$peli['NumeroTemporada']?></td>
                            <td><?=$peli['NombreSerie']?></td>
                            <td><?=$peli['Episodio']?></td>
                            <td><?=$peli['NombreEpisodio']?></td>
                            <td><?=$peli['Genero']?></td>
                            <td><?=$peli['Cantidad_Actores']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col h3">
                1.6 - Rating por Genero
            </div>
        </div>    
        <div class="row">
            <div class="col-4 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Genero</th>
                            <th scope="col">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ratingPelis as $peli) :?>
                        <tr>
                            <td><?=$peli['name']?></td>
                            <td><?=$peli['Prom_Rating']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <?php $episodiosXanio=episodiosXanio($pdo,'2016') ?>
        <div class="row">
            <div class="col h3">
                1.7 - Episodios 2016
            </div>
        </div>    
        <div class="row">
            <div class="col-6 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serie</th>
                            <th scope="col">Año</th>
                            <th scope="col">Cant. 2016</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($episodiosXanio as $peli) :?>
                        <tr>
                            <td><?=$peli['NombreSerie']?></td>
                            <td><?=$peli['release_date']?></td>
                            <td><?=$peli['Cant_Episodios']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        
        <?php $pAnio=2019;
        $episodiosXanio=episodiosXanio($pdo, $pAnio) ?>
        <div class="row">
            <div class="col h3">
                <?="1.8 - Episodios ". $pAnio. " (Actual)" ?>
            </div>
        </div>    
        <div class="row">
            <div class="col-6 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serie</th>
                            <th scope="col">Año</th>
                            <th scope="col"><?="Cant. ". $pAnio ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($episodiosXanio as $peli) :?>
                        <tr>
                            <td><?=$peli['NombreSerie']?></td>
                            <td><?=$peli['release_date']?></td>
                            <td><?=$peli['Cant_Episodios']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

    </div>

</body>

</html>
