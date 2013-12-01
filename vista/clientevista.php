<?php
    class ClienteVista{   
                  
        public $base;
        public $entrar;
        
        public function __construct() {
            $this->base = file_get_contents("../plantillas/base1.html");
            $this->entrar = file_get_contents("../plantillas/registrocliente.html");
        }
       
        public function mostrarcliente(){
            
            $this->base = str_ireplace('{contenido}', $this->entrar, $this->base);
            echo $this->base;
        }  
    } 
?>
