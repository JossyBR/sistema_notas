<?php

require_once('../Modelo/Estudiantes.php');

if($_POST){
    $Modelo = new Estudiantes();

    $Id = $_POST['Id'];
    $Modelo->delete($Id);
} else {
    header('Location: ../../index.php');
}

?>