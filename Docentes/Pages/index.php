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
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Docente</h1> 
    <h3>Bienvenido: <?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>
    <h1>
        <a href="../../Administradores/Pages/index.php">Administradores</a> - 
        <a href="#">Docentes</a> - 
        <a href="../../Materias/Pages/index.php">Materias</a> - 
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1> 

    <a href="add.php" target='_blank'>Registrar Nuevo Docente</a> <br><br>

    <table border="1">
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
                <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Eliminar</a>
            </td>
        </tr>
        <?php
            }
         }
        ?>
    </table>
</body>
</html>
