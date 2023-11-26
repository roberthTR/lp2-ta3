<?php
require_once "Conn.php";
require_once "Libro.php";

class Factura{
    private $idLibro;
    private $producto;
    private $cantidad;

    public function __construct(Libro $idLibro,String $producto,int $cantidad){
        $this->idLibro = $idLibro;
        $this->producto = $producto;
        $this->cantidad = $cantidad;

    }
    
    public function getidLibro(){
        return $this->$idLibro;
    }
    
    public function setidLibro(Libro $idLibro){
        $this->idLibro = idLibro;

    }

    public function getProducto(){
        return $this->$producto;
    }
    
    public function setProducto(String $producto){
        $this->producto = producto;

    }

    public function getCantidad(){
        return $this->$cantidad;
    }
    
    public function setCantidad(int $cantidad){
        $this->cantidad = cantidad;

    }Public function getTotal(){
        return $this->libro->getPrecio() * $this->cantidad;
    }

}