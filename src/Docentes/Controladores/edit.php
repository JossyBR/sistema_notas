<?php

require_once('../Modelo/Docentes.php');

if ($_POST) {
    $ModeloDocentes = new Docentes();

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $Estado = $_POST['Estado'];

    $ModeloDocentes->update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado);
}else {
    header('Location: ../../index.php');
}

?>