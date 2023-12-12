<?php

require_once('../Modelo/Materias.php');

if($_POST){
    $Modelo = new Materias();

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Modelo->update($Id, $Nombre);
} else {
    header('Location: ../../index.php');
}

?>