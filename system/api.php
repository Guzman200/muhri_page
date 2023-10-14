<?php

require_once "hospedajes.php";

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

