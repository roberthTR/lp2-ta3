<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Ingrese nombre del Libro"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            include_once "..\Controladores\LibroControlador.php";
            $tc = new LibroControlador();   
            $resultado = $tc -> buscarLibroPorNombre($nombre);
            ?>
            <table border="1px solid">
                <tr>
                    <th>nombre</th>
                    <th>autor</th>
                    <th>edicion</th>
                    <th>disponibilidad</th>
                    <th>fecha de Publicacion</th>
                    <th>carrera</th>
                    <th>precio</th>
                </tr>
                <?php
                    foreach($resultado as $item){
                        echo "<tr>
                                <td>".$item["nombre"]."</td>
                                <td>".$item["autor"]."</td>
                                <td>".$item["edicion"]."</td>
                                <td>".$item["disponibilidad"]."</td>
                                <td>".$item["fechaPublicacion"]."</td>
                                <td>".$item["id_carrera"]."</td>
                                <td>".$item["precio"]."</td>
                            </tr>";
                    }
                ?>
            </table> 
        <?php
    }
    ?>