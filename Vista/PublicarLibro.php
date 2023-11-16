<?php
require_once ("..\Controladores\LibroControlador.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBLICACION DE LIBROS</title>
</head>
<body>
    <h1>PUBLICACION DE LIBROS</h1>
    <form action="LibroControlador.php" method="post"> 
        <div class="col-mb-4">
            <div class= "form-group">
                <label for="">NOMBRE DEL LIBRO</label><br></br>
                <input type="text"name="nombre" class="form-control" name="nombre" placeholder="Ingresar el Nombre del libro"> 
        </div>
        <div class="col-mb-4">
            <div class= "form-group">
                <label for="">AUTOR</label><br></br>
                <input type="number"name="autor" class="form-control"name="autor" placeholder="AUTOR.."> <br>
            </div> 
        </div>
        <div class="col-mb-3">
            <div class= "form-group">
                <label for="">EDICION</label><br></br>
                <input type="text" name="edicion" class="form-control" name="edicion" placeholder="Edición"> <br>
                
            </div> 
           
        </div>
        <div class="col-mb-3">
            <div class= "form-group">
                <label for="">DISPONIBILIDAD</label><br>
                <input type="checkbox" name="disponibilidad" value="1"> Disponible <br>  
            </div> 
        </div>
        <div class="mb-3">
            <div class= "form-group">
                <label for="">FECHAPUBLICACION</label><br></br>
                <input type="date" name="fechaPublicacion" class="form-control" placeholder="Fecha de publicación"> <br>
                
            </div> 
        </div>
        <div class="col-mb-3">
            <div class= "form-group">
                <label for="">PRECIO</label><br></br>
                <input type="number" name="precio" placeholder="Precio"> <br>
                 <input type="submit" value ="PublicarLibros"class="btn btn-primary">
            </div> 
        </div>  
       
    </form>
     
    <?php
        
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $edicion = $_POST['edicion'];
            $disponibilidad = isset($_POST['disponibilidad']);
            $fechaPublicacion = date_format($fechaPublicacion, "Y-m-d"); // error
            $precio = $_POST['precio'];

            $PublicarLibro = new LibroControlador();
            $resultado = $PublicarLibro->PublicarLibro($nombre, $autor, $edicion, $disponibilidad, $fechaPublicacion, $id_carrera, $precio);

            if ($resultado) {
                echo "El libro se ha creado correctamente.";
            } else {
                echo "Ocurrió un error al crear el libro.";
            }
        }
    ?>
</body>
</html>
    