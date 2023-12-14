<?php
require_once('../Modelo/Administradores.php');

if($_POST){
    $ModeloAdministradores = new Administradores();

    $Id = $_POST['Id'];
    $ModeloAdministradores->delete($Id);
} else {
    header('Location: ../../index.php');
}

?>