<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuarios = new Usuarios();
$ModeloDocentes = new Docentes();

$ModeloUsuarios->validateSessionAdministrator();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Notas</title>
</head>
<body>
    <?php include('../../Nav/Nav.php'); ?> 
    <div class="mx-3">
    <h3 class="mt-5 mb-5">Bienvenido: <?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>
    <!-- <h1>
        <a href="../../Administradores/Pages/index.php">Administradores</a> - 
        <a href="#">Docentes</a> - 
        <a href="../../Materias/Pages/index.php">Materias</a> - 
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1>  -->

    <a href="add.php" target='_blank' class="mt-5 text-dark fw-bold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrar Nuevo Docente</a> <br><br>

    <table class="table table-dark table-striped table-bordered text-center">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usarios</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
            
        <?php
        $Docentes = $ModeloDocentes->get();
        if($Docentes != null) {
            foreach($Docentes as $Docente){
        ?>
        <tr>
            <td><?php echo $Docente['ID_USUARIO'] ?></td>
            <td><?php echo $Docente['NOMBRE'] ?></td>
            <td><?php echo $Docente['APELLIDO'] ?></td>
            <td><?php echo $Docente['USUARIO'] ?></td>
            <td><?php echo $Docente['PERFIL'] ?></td>
            <td><?php echo $Docente['ESTADO'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank" class="px-3 text-light link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editar</a>
                <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank" class="px-3 text-light link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a>
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
