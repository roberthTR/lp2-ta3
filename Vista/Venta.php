<!DOCTYPE html>
<html>
<head>
    <title>Venta</title>
</head>
<body>
    <hi>FACTURA DE VENTA</hi><br><br>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="idLibro">ID DEL LIBRO:</label><br>
        <input type="number" id="idLibro" name="idLibro"><br><br>
        <label for="producto">PRODUCTO:</label><br>
        <input type="text" id="producto" name="producto"><br><br>
        <label for="cantidad">CANTIDAD:</label><br>
        <input type="number" id="cantidad" name="cantidad"><br>
        <input type="submit" value="Vender">
    </form>
    <?php
        require_once("../Controladores/FacturaControlador.php");
        require_once("../Clases/Libro.php");

        $facultad = new FacturaControlador();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idLibro = $_POST['idLibro'];
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];

            $Libro = new Libro();
            $Libro->setidLibro($idLibro);
            $resultado = venta->vender( $idLibro, $producto,  $cantidad);

            if ($resultado) {
                echo "La venta se ha creado correctamente.";
            } else {
                echo "Ocurrió un error al crear la venta.";
            }
        }
    ?>

</body>
</html>  



