<?php
require_once("../Clases/Estudiante.php");

class EstudianteControlador{
    
    public function createEstudiante(String $nombre, String $apellido1, String $apellido2, String $email, String $telefono){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO estudiante(nombre, apellido1, apellido2, email, telefono) VALUES ('nombre', 'apellido1', 'apellido2', 'email', 'telefono')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readEstudiantes(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM estudiante";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function updateEstudiante(int $id, String $nombre, String $apellido1, String $apellido2, String $email, String $telefono){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE estudiante SET nombre = 'nombre', apellido1 = 'apellido1', apellido2 = 'apellido2', email = 'email', telefono = 'telefono' WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function deleteEstudiante(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM estudiante WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readEstudiantePorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM estudiante where id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }
}