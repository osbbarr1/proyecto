<?php
    
    require_once 'conexion.php';

    class ReporteModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }
                           
    }

?>