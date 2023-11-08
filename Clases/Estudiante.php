<?php

require_once("Conn.php");

class Estudiante {
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $email;
    private $telefono;

        
    public function getId() {
        return $this->id;  
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function setApellido1(string $apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function setApellido2(string $apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono(string $telefono) {
        $this->telefono = $telefono;
    }

    public function __construct() {}
    
    public function guardar(String $nombre, String $apellido1, String $apellido2, String $email, String $telefono){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO estudiante(nombre, apellido1, apellido2, email, telefono) VALUES ('nombre', 'apellido1', 'apellido2', 'email', 'telefono')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

}