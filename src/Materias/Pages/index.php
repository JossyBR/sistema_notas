<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');
// require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSessionAdministrator();

$ModeloMaterias = new Materias();

// $ModeloMetodos = new Metodos();

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
    <h3>Bienvenido: <?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>
    <!-- <h1>
        <a href="../../Administradores/Pages/index.php">Administradores</a> -
        <a href="../../Docentes/Pages/index.php">Docentes</a> - 
        <a href="#">Materias</a> - 
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1>  -->


    <a href="add.php" target="_blank">Registrar Materias</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>

        <?php
        $Materias = $ModeloMaterias->get();
        if($Materias != null){
            foreach($Materias as $Materia){
        ?>
        <tr>
            <td><?php echo $Materia['ID_MATERIA']?></td>
            <td><?php echo $Materia['MATERIA']?>
            </td>
            <td>
                <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>">Editar</a>
                <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
             }
        }
        ?>
    </table>
</body>
</html>