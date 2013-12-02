<?php
    require_once '../modelo/clientemodel.php';
    require_once '../vista/clientevista.php';
    
    class Cliente{
        
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->modelo= new UsuarioModel();
            $this->vista = new ClienteVista();  
        }
        
        public function mostrar(){ 
            $this->vista->mostrarcliente();
        } 
        
        public function insertarcliente($nombre,$apellido,$id,$tel,$loc){
            
            $result = $this->modelo->insertarcliente($nombre,$apellido,$id,$tel,$loc);
            
            if($result){
                echo '<script type="text/javascript">
                      alert("Insercion exitosa");
                    </script>';  
                header('location: facturar.php');  
                
            }else{
                       
                echo '<script type="text/javascript">
                      alert("Error de Conexion");
                    </script>';                                             
            }
            
        }
    }
    
        $cliente = new Cliente();    
           
        if(isset($_POST['nombres'])){

        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $id = $_POST['identificacion'];
        $tel=$_POST['telefono'];
        $loc=$_POST['localidad'];
      
        $cliente->insertarcliente($nombre,$apellido,$id,$tel,$loc);        
        
    }else{
        
       $cliente->mostrar();          
    }
         
//         $init= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//         $result=mysqli_query($init,"INSERT INTO cliente(nombre_cliente,apellido_cliente,identificacion_cliente,telefono_cliente,clientecol) VALUES ('$nombre','$apellido','$ide','$telefono','$localidad')")or die(mysql_error());
//               echo '<script type="text/javascript">
//                     alert("Usuario ingresado correctamente");
//                   </script>';  
   
      
   ?>
    
   