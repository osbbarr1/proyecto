<?php
    
    require_once 'conexion.php';

    class FacturarModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }
                
        
       
        public function buscarproducto($producto,$cantidad){
   
               $query = "SELECT id_producto, nombre_producto, precio_producto "
                        . "FROM productos WHERE id_producto='".$producto."'";
               
               return $this->conexion->get_resultados_query($query);
               //var_dump($query);
        }            
    }

?>
