<?php


require_once "conexion.php";

class Hospedajes extends Conexion {

public function getHospedajes()
{

    $query = $this->con->prepare("
        select fecha, hora, hoteles.nombre, destinos.destino, tipos.tipo, costo from hospedajes
        inner join hoteles on hoteles.id = hospedajes.hotel_id
        inner join destinos on destinos.id = hospedajes.destino_id
        inner join tipos on tipos.id = hospedajes.tipo_id;
    ");

    $query->execute([]);

    $hospedajes = $query->fetchAll();

    return $hospedajes;
}

}