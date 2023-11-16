<h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="contrasena" placeholder="Contraseña">
        <input type="submit" value="Iniciar sesión">
    </form>

    <?php
        if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
            $usuario = $_POST['nombre'];
            $contrasena = $_POST['contrasena'];

            include_once('..\Controladores\EstudianteControlador.php');
                $libros = new EstudianteControlador();
                $resultado = $libros->readEstudiantes();

                foreach ($resultado as $item) {
                    echo    "<tr>
                                <td>".$item["id"]."</td>
                                <td>".$item["nombre"]."</td>
                                <td>".$item["apellido1"]."</td>
                                <td>".$item["apellido2"]."</td>
                                <td>".$item["email"]."</td>
                                <td>".$item["telefono"]."</td>
                            </tr>";
                }

            if ($resultado) {
                $_SESSION['estudiante'] = $estudiante;

                header('Location: index.php');
            } else {
                echo "El usuario o la contraseña no son correctos.";
            }
            
        }
        
    ?>