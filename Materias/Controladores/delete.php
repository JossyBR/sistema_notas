<?php
require_once('../Modelo/Materias.php');

if($_POST){
    $Modelo = new Materias();

    $Id = $_POST['Id'];
    $Modelo->delete($id);
} else {
    header('Location: ../../index.php');
}

?>