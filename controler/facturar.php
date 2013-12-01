<?php
    require_once '../modelo/conexion.php';
    require_once '../vista/facturarvista.php';
    require_once '../vista/loginvista.php';
   
    class Facturar{
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->modelo = new Conexion();
            $this->vista = new FacturarVista(); 
            $this->regreso = new LoginVista();   
        }
        
        public function mostrarVistaFacturar(){
            $this->vista->mostrarFactura();      
        }
            
         public function mostrarLogin(){
            $this->regreso->mostrarlogin();      
         }    
    }
    
    $login = new Facturar();    
    $login->mostrarVistaFacturar();
    
//        $usuario = $_POST["usuario"];   
//        $password = $_POST["password"];
//         
//         $db_host = 'localhost';
//         $db_user = 'root';
//         $db_pass = 'oscar';
//         $db_name = "facturacion";
//         
//         $init= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//          
//        $result=mysqli_query($init,"SELECT * FROM usuario WHERE id_usuario = '$usuario' AND contrasena_usuario='$password'")or die(mysql_error());
//        if($row= mysqli_fetch_array($result)){
//            $login = new Facturar();    
//            $login->mostrarVistaFacturar();
//        }
//        else{
//           echo '<script type="text/javascript">
//                     alert("Usuario incorrecto");
//                     location.href = "login.php";
//                   </script>';  
//           }
        ?>