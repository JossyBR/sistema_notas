<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
// require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

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
    <h1>Registrar Materia</h1>
    <form method="POST" action="../Controladores/add.php">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre Materia"> <br><br>
    
    <input type="submit" value="Agregar Materia">
    </form>
</body>
</html>