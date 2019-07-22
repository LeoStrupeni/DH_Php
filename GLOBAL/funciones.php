<?php

function generosPelis(PDO $pdo)
{
    $query = $pdo->prepare("SELECT name,title FROM `movies` m left join `genres` g on m.`genre_id` = g.id order by g.name desc");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}

function ratingPelis(PDO $pdo)
{
    $query = $pdo->prepare("SELECT name,ROUND(AVG(rating),2) AS Prom_Rating FROM `movies` m inner join `genres` g on m.`genre_id` = g.id GROUP BY name HAVING AVG(rating) > 5");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}

function actores(PDO $pdo)
{
    $query = $pdo->prepare("SELECT title, name, concat(last_name,', ',first_name) as Nombre FROM `movies` m inner join actor_movie am on m.id = am.movie_id inner join actors a on a.id = am.actor_id LEFT join genres g on m.genre_id = g.id order by title");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}

function actorPelicula(PDO $pdo)
{
    $query = $pdo->prepare("SELECT first_name as Nombre, title FROM actors a left join actor_movie am on a.id = am.actor_id left join `movies` m on am.movie_id = m.id order by Nombre");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}


function episodios(PDO $pdo)
{
    $query = $pdo->prepare("SELECT  S.number as NumeroTemporada, 
                                    SE.title as NombreSerie,
                                    E.number as Episodio, 
                                    E.title as NombreEpisodio,  
                                    G.name as Genero, 
                                    count(A.id) as Cantidad_Actores 
                                    from episodes E 
                                    inner join seasons S on E.season_id = S.id 
                                    inner join series SE on S.serie_id = SE.id 
                                    inner join genres G on SE.genre_id = G.id 
                                    inner join actor_episode EP on E.id = EP.episode_id 
                                    inner join actors A on EP.actor_id = A.id 
                                    group by E.number,E.title,S.number,S.title,SE.title,G.name 
                                    order by NombreSerie,NumeroTemporada,Episodio");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}

function episodiosXanio(PDO $pdo,$anio)
{
    $query = $pdo->prepare("SELECT SE.title as NombreSerie, e.release_date, COUNT(E.number) as Cant_Episodios from episodes E inner join seasons S on E.season_id = S.id inner join series SE on S.serie_id = SE.id group by NombreSerie,e.release_date having LEFT(e.release_date,4)='$anio'");
    $query->execute();
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;
}



function consultaTabla(PDO $pdo, $nombreTabla)
{
    $query = $pdo->prepare("SELECT * FROM $nombreTabla");
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function listarDatos(PDO $pdo, $nombreTabla, $id)
{
    $query = $pdo->prepare("SELECT DATE_FORMAT(release_date, '%d de %M de %Y') 'Fecha de estreno', title Titulo FROM $nombreTabla WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}


?>