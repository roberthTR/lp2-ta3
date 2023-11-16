<?php

require_once("Conn.php");
require_once("Libro.php");

class PulicarLibro extends Libro{

    private $cantidad;
    
    function __construct(int $id,String $nombre,int $autor,String $edicion,bool $disponibilidad,String $fechaPublicacion,int $id_carrera,int $precio) {
      
        parent::__construct($id,$nombre,$autor,$edicion,$disponibilidad,$fechaPublicacion,$id_carrera,$precio);
      
    }
    public function getCantidad() {
        return $this->cantidad;  
    }

    public function setCantidad(int $cantidad) {
        $this->cantidad = $cantidad;
    }
    
    public function guardar(int $cantidad){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO PublicarLibro(cantidad) VALUES ('cantidad')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }
   

}