<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Carrera</title>
</head>
<body>
    <h1>Crear carrera</h1>
    <form action="CrearCarrera.php" method="post"> 
        <input type="text" name="nombre" placeholder="Ingresar el Nombre de la carrera"> <br>    
        <input type="number" name="id_facultad" placeholder="Ingresar el numero de facultad que pertence"> <br>   
        <input type="submit" value="Crear">
    </form>
    <?php
        include_once('..\Controladores\CarreraControlador.php');
        if (isset($_POST['nombre'])) {  
            $nombre = $_POST['nombre'];
            $id_facultad = $_POST['id_facultad'];
            $carrera = new CarreraControlador();
            $resultado = $carrera->createCarrera($nombre, $id_facultad);    

            if ($resultado) {
                echo "La carrera se ha creado correctamente.";
            } else {
                echo " Error al crear la carrera.";
            }
        }
    ?>
</body>
</html>
