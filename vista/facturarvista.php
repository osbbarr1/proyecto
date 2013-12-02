<?php

    class FacturarVista{
        public $base;
        public $entrar;
        
        public function __construct() {
            $this->base=  file_get_contents("../plantillas/base1.html");
            $this->entrar=  file_get_contents("../plantillas/facturar.html");
        }
   
        public function mostrarFactura(){
            
            $this->base = str_ireplace('{contenido}', $this->entrar, $this->base);
            echo $this->base;  
        }
        
        public function listaproductos($query,$cantidad){
           
            
           $productos="";
           
           foreach ($query as $filas){
               $precio=$filas['precio_producto'];
               $total=$precio*$cantidad;
               $aux="<tr>"."<td>".$filas['id_producto']."</td>"
                       ."<td>".$filas['nombre_producto']."</td>"
                       ."<td>".$cantidad."</td>"
                       ."<td>".$precio."</td>"
                       ."<td>".$total."</td>"
                       ."</tr>";
               $productos.=$aux;                            
           }
           $this->entrar= str_ireplace('{listaproductos}', $productos, $this->entrar); 
           //$array=[$productos];
        }
       
    }
    
?>
