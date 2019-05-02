<!doctype html>
<html lang="es">

<head>
    <!--
    Programación Hypermedial
    Ingeniería de Sistemas
    Séptimo Ciclo
    
    Author: Jorge Arévalo
    Date: 23/04/2019  

    Filename: envio.html
   -->

    <meta charset="utf-8" />
    <title>Insertar datos de persona</title>
</head>

<body>
    <?php
       include '../../../config/conexionBD.php';
       $codigo = $_POST['codigo'];
       echo " <h2>Codigo: $codigo</h2 ";
       $cedula = $_POST['cedula'];
       echo " <h2>cédula: $cedula</h2 ";
       $nombre = $_POST['nombre'];
       echo " Nombre " . $nombre;
       $apellido = $_POST['apellido'];
       echo " apellido " . $apellido;

    ?>
</body>

</html>
