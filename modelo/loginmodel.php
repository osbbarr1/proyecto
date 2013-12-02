<?php

    require_once 'conexion.php';
    
    

    class LoginModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }  
        
        
        public function login($usuario, $pass){            
            $query = "SELECT id_usuario, contrasena_usuario,nombre_usuario 
                    FROM usuario
                    where id_usuario = '".$usuario."' AND contrasena_usuario= '".$pass."'";
            
            $resultados = $this->conexion->get_resultados_query($query);
                                    
            return $resultados;            
        }
        
        public function insertarUsuario($user){
         $query = "SELECT nombre_usuario "
                        . "FROM usuario WHERE id_usuario='".$user."'";
               
               return $this->conexion->get_resultados_query($query);
        }
    }
    
    ?>