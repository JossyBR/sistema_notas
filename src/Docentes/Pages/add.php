<?php

require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

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
    <h1>Registrar Docentes</h1>
    <form action="../Controladores/add.php" method="POST" class="border p-5 rounded-4 w-50">
        Nombre <br>
        <input type="text" name="Nombre" require="" autocomplete="off" placeholder="Nombre" class="form-control"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" require="" autocomplete="off" placeholder="Apellido" class="form-control"><br><br>
        Usuario <br>
        <input type="text" name="Usuario" require="" autocomplete="off" placeholder="Usuario" class="form-control"><br><br>
        Password <br>
        <input type="text" name="Password" require="" autocomplete="off" placeholder="Password" class="form-control"><br><br>
        <div class="text-center">
            <input type="submit" value="Registrar" class="btn btn-dark w-25">
        </div>
        
    </form>
    </div>
    
</body>
</html>