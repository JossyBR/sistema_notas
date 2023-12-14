<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Estudiantes();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <h1>Estudiantes</h1>
    <h3>Bienvenido: <?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>
    
    <!-- Condicion para mostrar solo estudiantes en el menu, cuando el perfil es Docente -->
    <?php
    if($ModeloUsuarios->getPerfil() == 'Docente'){
    ?>
     <h1>
        <a href="#">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1>
    <?php
    } else {
    ?>
    <h1>
        <a href="../../Administradores/Pages/index.php">Administradores</a> - 
        <a href="../../Docentes/Pages/index.php">Docentes</a> - 
        <a href="../../Materias/Pages/index.php">Materias</a> -
        <a href="#">Estudiantes</a> - 
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1>
    <?php
    }
    ?>
    
     

    <a href="add.php" target="_blank">Registrar estudiantes</a><br><br>
    <table border="1">
        <tr>
            <th>Id</th>
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
                <a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE']?>" target="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE']?>" target="_blank">Eliminar</a>
            </td>
        </tr>

        <?php
            }
        }
        ?>

    </table>

</body>
</html>