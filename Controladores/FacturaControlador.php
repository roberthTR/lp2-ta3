<?php

require_once("../Clases/Factura.php");
require_once("../Clases/Libro.php");

class FacturaControlador{

    public function vender(Libro $idLibro, String $producto, int $cantidad) {
       
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE Factura SET disponibilidad = disponibilidad - $cantidad WHERE id = $idLibro";
        $resultado = $conexion->exec($sql); 
        $conn->cerrar();  
        return $resultado;
       
    }


}
