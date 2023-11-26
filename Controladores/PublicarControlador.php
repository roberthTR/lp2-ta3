<?php
require_once("../Clases/Publicar.php");
require_once("../Clases/Libro.php");

class PublicarControlador{

    public function PublicarLibro (Libro $idLibro,  int $cantidad) {
       
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE Publicar SET cantidad = 'cantidad' , idLibro = $idLibro  WHERE id = $id";
        $resultado = $conexion->exec($sql); 
        $conn->cerrar();  
        return $resultado;
       
    }



}

