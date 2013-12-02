<?php
    require_once '../modelo/facturarmodelo.php';
    require_once '../vista/facturarvista.php';
    
   
    class Facturar{
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->modelo = new FacturarModel();
            $this->vista = new FacturarVista(); 
              
        }
        
        public function mostrarVistaFacturar(){
            $this->vista->mostrarFactura();      
        }
            
        
         public function buscarproducto($producto,$cantidad){
            $query=$this->modelo->buscarproducto($producto,$cantidad);
            //var_dump($query);                     
             
            if($query){
                 $this->vista->listaproductos($query,$cantidad);
            }
                 
            else {
                     echo '<script type="text/javascript">
                      alert("no hay datos");
                    </script>';
                     header('location: facturar.php');
            }
                 
             }
         }
    
    
    $factura = new Facturar();    
    //$factura->mostrarVistaFacturar();
    
    if (isset($_POST['producto'])|isset($_POST['tabla'])){
        $cantidad=$_POST['cantidad'];
        $producto=$_POST['producto'];
        if (isset($_POST['tabla'])){
            
        }else{
           
        
        }
        
        $factura->buscarproducto($producto,$cantidad);
    }
    if (isset($_POST['tabla'])){
        $tabla=$_POST['tabla'];
        echo $tabla;
    }
    else {
        //$factura->mostrarVistaFacturar();
    }
    $factura->mostrarVistaFacturar();
?>