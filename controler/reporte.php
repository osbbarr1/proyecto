<?php

require_once '../modelo/reportemodel.php';
require_once '../vista/reportevista';

class reporte{
    
    public $modelo;
    public $vista;

    public function __construct() {
        $this->modelo= new ReporteModel();
    }
}
?>

