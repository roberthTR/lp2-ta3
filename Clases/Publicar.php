<?php
require_once "Conn.php";
require_once "Libro.php";

class Pulicar{

    private $id;
    private $idLibro;
    private $cantidad;
    
    public function __construct(libro $idLibro,int $cantidad, ) {
        $this->idLibro = $idLibro;
        $this->cantidad = $cantidad;

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
        $sql = ("INSERT INTO publicar(Libro,cantidad,) VALUES ('libro,cantidad");
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }
}   
