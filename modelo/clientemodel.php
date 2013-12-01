<?php
    
    require_once 'conexion.php';

    class UsuarioModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }
               
        public function insertarcliente($nombre,$apellido,$identificacion,$tel,$localidad){
   
               $query = "INSERT INTO cliente (nombre_cliente,apellido_cliente,identificacion_cliente,telefono_cliente,clientecol)"
                       . " VALUES ('$nombre','$apellido','$identificacion','$tel','$localidad')";                                         
               return $this->conexion->ejecutar_query($query);
        }
    }
?>