<?php
require_once("Conn.php");
require_once("Libro.php");

class Factura extends Libro{
  
    private $productos;
    public function __construct(int $id,String $nombre,int $autor,String $edicion,bool $disponibilidad,String $fechaPublicacion,int $id_carrera,int $precio) {

        parent::__construct($id,$nombre,$autor,$edicion,$disponibilidad,$fechaPublicacion,$id_carrera,$precio);  
    }

    public function getProductos(){
        return $this->productos;
    }
    public function setProductos(String $Productos){
        $this->productos = $productos;
    }
    public function guardar(String $productos,){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO factura(producto) VALUES ('productos')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();

        return $resultado;

    
    }
   
}
