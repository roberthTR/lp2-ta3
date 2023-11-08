<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar carrera</title>
</head>
<body>
    <h1>Editar carrera</h1>
    <form action="EditarLibro.php" method="post">
        <tr>
            <input type="number" name="id" placeholder="ID de la carrera" required><br>
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="number" name="id_facultad" placeholder="ID de la facultad"><br>
            <input type="submit" value="Editar">
        </tr>
    </form>

    <?php
        include_once('..\Controladores\CarreraControlador.php');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $id_facultad = $_POST['id_facultad'];
            

            $carrera = new CarreraControlador();
            $resultado = $carrera->updateCarrera($id, $nombre, $id_facultad);

            if ($resultado) {
                echo "La carrera se ha editado correctamente.";
            } else {
                echo "Ocurrió un error al editar la carrera.";
            }
        }
    ?>
</body>
</html>