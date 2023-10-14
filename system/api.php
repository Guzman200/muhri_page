<?php

require_once "Conexion.php";

if(isset($_GET['get_all_hospedajes'])){

    $hospedajes = new Hospedajes();

    $data = $hospedajes->getHospedajes();

    echo json_encode($data);

    return 0;
}

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