<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuarios = new Usuarios();
$ModeloAdministradores = new Administradores();

$ModeloUsuarios->validateSession();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Administradores</h1> 

    <a href="add.php" target='_blank'>Registrar nuevo administrador</a> <br><br>

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
        $Administradores = $ModeloAdministradores->get();
        if($Administradores != null) {
            foreach($Administradores as $Administrador){
        ?>
        <tr>
            <td><?php echo $Administrador['ID_USUARIO'] ?></td>
            <td><?php echo $Administrador['NOMBRE'] ?></td>
            <td><?php echo $Administrador['APELLIDO'] ?></td>
            <td><?php echo $Administrador['USUARIO'] ?></td>
            <td><?php echo $Administrador['PERFIL'] ?></td>
            <td><?php echo $Administrador['ESTADO'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>">Editar</a>
                <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
            }
         }
        ?>
    </table>
</body>
</html>
