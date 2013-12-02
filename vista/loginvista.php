<?php
    class LoginVista{    
        public $base;
        public $entrar;
        public $user;
        public function __construct() {
            $this->base = file_get_contents("../plantillas/base1.html");
            $this->entrar = file_get_contents("../plantillas/login.html");
            $this->user = file_get_contents("../plantillas/facturar.html");
            
        }
       
        public function mostrarlogin(){
            
            $this->base = str_ireplace('{contenido}', $this->entrar, $this->base);
            echo $this->base;
        } 
        
        public function mostrarusuario($usuario){
            
            $this->base = str_ireplace('{usuario}', $usuario, $this->user);
            echo $this->base;
        } 
        
         
    } 
?>
