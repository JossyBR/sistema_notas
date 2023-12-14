<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
// require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];

// $ModeloMetodos = new Metodos();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Materia</h1>
    <form method="POST" action="../Controladores/delete.php">
        
    <input type="hidden" name="Id" value="<?php echo $Id ?>">
    <p>¿Estás seguro que deseas eliminar esta Materia?</p>
    <input type="submit" value="Eliminar Materia">
    </form>
    
</body>
</html>