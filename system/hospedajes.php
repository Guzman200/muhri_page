<?php


require_once "conexion.php";

class Hospedajes extends Conexion {

public function getHospedajes()
{

    $query = $this->con->prepare("SELECT * FROM hospedajes 
    ");

    $query->execute([]);

    $hospedajes = $query->fetchAll();

    return $hospedajes;
}

}