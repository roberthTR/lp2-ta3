<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
<?php
    seccion_start();
    if(!isset($_SESSION["usuario"])){
        header("location: login.php");
    }
    ?>

<h1>Bienvenido <?PHP echo $_SESSION["usuario"];?></h1> 
    <ul>
        <?php
        if($_SECCION["tipo"]=="docente"){ 
            echo "<li><a href='elimianarTimeSlot.php'>eliminar TimeSlot</a></li>";
        }?>
        <?php
        if($_SECCION["tipo"]=="estudiante"){ 
            echo "<li><a href='elimianarTimeSlot.php'>eliminar TimeSlot</a></li>";
        }?>
        <!-- <li><a href="mostrarInfoTeachar.php">mostrar Info Teachar</a></li> -->
        <li><a href="logout.php">Salir</a></li>
    </ul>

    <nav class="navbar">
        <a href="../../Vista/MostrarLibro.php">Libros</a>
        <a href="../../Vista/MostarFacultadPorId.php">Facultades</a>
        
    </nav>
    

</body>

</html>


