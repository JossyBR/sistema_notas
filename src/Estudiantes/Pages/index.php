<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Estudiantes();

$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Estudiantes</title>
</head>
<body> 
    <?php include('../../Nav/Nav.php'); ?> 
    <!-- Condicion para mostrar solo estudiantes en el menu, cuando el perfil es Docente -->

    <div class="mx-3">
        <h3 class="mt-5 mb-5">Bienvenido: <?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>

        <a href="add.php" target="_blank" class="mt-5 text-dark fw-bold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrar estudiantes</a><br><br>
        <table class="table table-dark table-striped table-bordered text-center">
     <tr>
        <th >Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Materias</th>
        <th>Docentes</th>
        <th>Promedio</th>
        <th>Fecha de registro</th>
        <th>Acciones</th>
    </tr>

    <?php
    $Estudiantes = $Modelo->get();
    if($Estudiantes != null){
        foreach ($Estudiantes as $Estudiante) {
    ?>
    <tr>
        <td><?php echo $Estudiante['ID_ESTUDIANTE'] ?></td>
        <td><?php echo $Estudiante['NOMBRE'] ?></td>
        <td><?php echo $Estudiante['APELLIDO'] ?></td>
        <td><?php echo $Estudiante['DOCUMENTO'] ?></td>
        <td><?php echo $Estudiante['CORREO'] ?></td>
        <td><?php echo $Estudiante['MATERIA'] ?></td>
        <td><?php echo $Estudiante['DOCENTE'] ?></td>
        <td><?php echo $Estudiante['PROMEDIO'] ?> %</td>
        <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
        <td>
            <a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE']?>" target="_blank" class="px-3 text-light link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editar</a>
            <a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE']?>" target="_blank" class="px-3 text-light link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a>
        </td>
    </tr>

    <?php
        }
    }
    ?>
    </table>
    </div>
   
</body>
</html>