<?php

require_once "conexion.php";

if(isset($_GET['get_all_hospedajes'])){

    try{

        $hospedajes = new Hospedajes();

        $data = $hospedajes->getHospedajes();

        echo json_encode($data);

        return 0;

    }catch(Throwable $e){


        echo json_encode(['error' => $e->getMessage()]);

    }

    
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