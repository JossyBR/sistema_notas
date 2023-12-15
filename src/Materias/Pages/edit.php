<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Materias();

$Id = $_GET['Id'];
$InformacionMateria = $Modelo->getById($Id);

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
    <h1>Editar Materia</h1>
    <form method="POST" action="../Controladores/edit.php" class="border p-5 rounded-4 w-50"">
    <input type="hidden" name="Id" value="<?php echo $Id ?>" class="form-control">

    <?php
    if ($InformacionMateria != null) {
        foreach ($InformacionMateria as $Info) {
            
    ?>

    Nombre <br>
    
    <input type="text" name="Materia" required="" autocomplete="off" placeholder="Nombre Materia" value="<?php echo $Info['MATERIA'] ?>" class="form-control"> <br><br>
    
    <?php
        }
    }
    ?>
    <div class="text-center">
        <input type="submit" value="Editar Materia" class="btn btn-dark w-25">
    </div>
    
    
    </form>
    
    </div>
    
</body>
</html>