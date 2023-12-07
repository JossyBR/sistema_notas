<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Estudiates();


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
    <a href="add.ph" target="_blank">Registrar estudiantes</a><br><br>
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
            foreach($Estudiantes as $Estudiante)

        ?>


        <tr>
            <td>1</td>
            <td>Diego</td>
            <td>Palacio</td>
            <td>4214214</td>
            <td>diego@gmail.com</td>
            <td>Español</td>
            <td>Stiven Tangarife</td>
            <td>98%</td>
            <td>2019-10-26</td>
            <td>
                <a href="edit.php" target="_blank">Editar</a>
                <a href="delete.php" target="_blank">Eliminar</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>