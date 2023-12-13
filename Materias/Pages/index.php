<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');
// require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Materias();

// $ModeloMetodos = new Metodos();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Materias</h1>

    <h1>
        <a href="../../Administradores/Pages/index.php">Administradores</a> -
        <a href="../../Docentes/Pages/index.php">Docentes</a> - 
        <a href="#">Materias</a> - 
        <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
        <a href="">Salir</a>
    </h1> 


    <a href="add.php" target="_blank">Registrar Materias</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>

        <?php
        $Materias = $Modelo->get();
        if($Materias != null){
            foreach($Materias as $Materia){
        ?>
        <tr>
            <td><?php echo $Materia['ID_MATERIA']?></td>
            <td><?php echo $Materia['MATERIA']?>
            </td>
            <td>
                <a href="edit.php?Id=<?php echo $Materia['MATERIA'] ?>">Editar</a>
                <a href="delete.php?Id=<?php echo $Materia['MATERIA'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
             }
        }
        ?>
    </table>
</body>
</html>