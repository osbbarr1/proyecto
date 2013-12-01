<?php

    class FacturarVista{
        
        public function __construct() {
            ;
        }
   
        public function mostrarFactura(){
            
            $base = file_get_contents("../plantillas/base1.html");
            $entrar = file_get_contents("../plantillas/facturar.html");
            $base = str_ireplace('{contenido}', $entrar, $base);
            echo $base;  
        }
    }
    
?>
