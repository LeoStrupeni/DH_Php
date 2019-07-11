<?php

function consultaTabla(PDO $db, $nombreTabla)
{
    $query = $db->prepare("SELECT * FROM $nombreTabla");
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function listarDatos(PDO $db, $nombreTabla, $id)
{
    $query = $db->prepare("SELECT DATE_FORMAT(release_date, '%d de %M de %Y') 'Fecha de estreno', title Titulo FROM $nombreTabla WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

?>