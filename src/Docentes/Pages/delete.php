<?php

require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];

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
    <div class="container d-flex flex-column align-items-center mt-5 vh-100">
        <h1>Eliminar Docente</h1>
        <form method="POST" action="../Controladores/delete.php" class="border p-5 rounded-4 w-50 mt-3">
            <p>¿Estás seguro que deseas eliminar este Administrador?</p> 
            <input type="hidden" name="Id" value="<?php echo $Id ?>">
            <div class="text-center">
                <input type="submit" value="Eliminar" class="btn btn-dark w-25">
            </div>
            
        </form>
    </div>
    
    
</body>
</html>