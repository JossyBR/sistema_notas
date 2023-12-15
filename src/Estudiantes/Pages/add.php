<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$ModeloMetodos = new Metodos();

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
    <div class="container d-flex flex-column align-items-center mt-4 vh-100">
    <h1>Registrar Estudiante</h1>

    <form method="POST" action="../Controladores/add.php" class="border p-5 rounded-4 w-50">
    Nombre <br>
    <input type="text" name="Nombre" required='' autocomplete="off" placeholder="Nombre" class="form-control"><br><br>

    Apellido <br>
    <input type="text" name="Apellido" required='' autocomplete="off" placeholder="Apellido" class="form-control"><br><br>
    Documento <br>
    <input type="text" name="Documento" required='' autocomplete="off" placeholder="Documento" class="form-control"><br><br>
    Correo <br>
    <input type="email" name="Correo" required='' autocomplete="off" placeholder="Correo" class="form-control"><br><br>
    
    Materia <br>
    <select name="Materia" required="" class="btn btn-outline-secondary dropdown-toggle">
        <option >Seleccione</option>
        <!-- Se crea un array de materias, para traerlas de forma dinamica -->
        <?php
        $Materias = $ModeloMetodos->getMaterias();
        if ($Materias != null) {
            foreach ($Materias as $Materia) {
        ?>
                <option value="<?php echo $Materia['MATERIA'] ?>"><?php echo $Materia['MATERIA'] ?></option>
        <?php
            }
        }
        ?>
    </select> <br><br>

    Docente <br>
    <select name="Docente" required="" class="btn btn-outline-secondary dropdown-toggle">
        <option>Seleccione</option>
        <?php
        $Docentes = $ModeloMetodos->getDocentes();
        if ($Docentes != null) {
            foreach ($Docentes as $Docente) {
        ?>
                <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?>"><?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?></option>
        <?php
            }
        }
        ?>
       
    </select> <br><br>
    Promedio <br>
    <input type="number" name="Promedio" required='' autocomplete="off" placeholder="Promedio" class="form-control"><br><br>

    <div class="text-center">
        <input type="submit" value="Registrar Estudiante" class="btn btn-dark w-25">
    </div>
    

    </form>
    </div>
    
</body>
</html>