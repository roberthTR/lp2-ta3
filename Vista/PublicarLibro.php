<!DOCTYPE html>
<html>
<head>
    <title>Publicar</title>
</head>
<body>
    <hi>PUBLICAR LiBRO</hi><br><br>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="idLibro">ID DEL LIBRO:</label><br>
        <input type="number" id="idLibro" name="idLibro"><br><br> 
        <label for="cantidad">CANTIDAD:</label><br>
        <input type="number" id="cantidad" name="cantidad"><br>
        <input type="submit" value="PUBLICAR">
    </form>
    <?php
        require_once("../Controladores/PublicarControlador.php");
        require_once("../Clases/Libro.php");

        $Publicar = new PublicarControlador();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idLibro = $_POST['idLibro'];
            $cantidad = $_POST['cantidad'];

            $Libro = new Libro();
            $Libro->setidLibro($idLibro);
            $resultado = Publicar->PublicarLibro( $idLibro, $cantidad);

            if ($resultado) {
                echo "La venta se ha creado correctamente.";
            } else {
                echo "Ocurrió un error al crear la venta.";
            }
        }
    ?>

</body>
</html>  