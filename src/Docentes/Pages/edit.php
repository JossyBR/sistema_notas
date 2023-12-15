<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');


$ModeloUsuarios = new Usuarios();
$ModeloDocentes = new Docentes();

$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];
$Docente = $ModeloDocentes->getById($Id);

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
    <h1>Editar Docente</h1>
    <form method="POST" action="../Controladores/edit.php" class="border p-5 rounded-4 w-50">
        
        <?php
        if($Docente != null){
            foreach($Docente as $Info){
        ?>

        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        Nombre <br>
        <input type="text" name="Nombre" required='' autocomplete="off" placeholder="Nombre" value="<?php echo $Info['NOMBRE'] ?>" class="form-control"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required='' autocomplete="off" placeholder="Apellido" value="<?php echo $Info['APELLIDO']; ?>" class="form-control"><br><br>
        Usuario <br>
        <input type="text" name="Usuario" required='' autocomplete="off" placeholder="Usuario" value="<?php echo $Info['USUARIO']; ?>" class="form-control"><br><br>
        Password <br>
        <input type="password" name="Password" required='' autocomplete="off" placeholder="Password" value="<?php echo $Info['PASSWORD']; ?>" class="form-control"><br><br>
        Estado <br>
        <select name="Estado" required="" class="btn btn-outline-secondary dropdown-toggle">
            <option value="<?php echo $Info['ESTADO'] ?>"><?php echo $Info['ESTADO'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
           
        </select> <br><br>
        <?php
             }
        }
        ?>
        <div class="text-center">
            <input type="submit" value="Editar" class="btn btn-dark w-25">
        </div>
        

    </form>
    </div>
    
</body>
</html>