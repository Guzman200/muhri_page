<?php

    class Conexion {

        private $host  = "127.0.0.1";// "34.130.137.64"; 
        private $bd    = "rpas";
        private $user  = "eltruekecom_pg";
        private $pass  = "trueke2021!";//"C0ll3ct42021!";
        protected $con = null;

        // Se establece la conexion a la base de datos
        public function __construct()
        {
            try {
                
                $this->con = new PDO("pgsql:host=$this->host;port=5432;dbname=$this->bd", $this->user, $this->pass);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (Exception $e) {
                //echo "Ocurrió un error con la base de datos: " . $e->getMessage();
            }
        }

        public function getConexion(){
            return $this->con;
        }

        public function closeConexion(){
            $this->con = null;
        }
        
    }

    
