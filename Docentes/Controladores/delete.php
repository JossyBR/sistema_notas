<?php
require_once('../Modelo/Docentes.php');

if($_POST){
    $ModeloDocentes = new Docentes();

    $Id = $_POST['Id'];
    $ModeloDocentes->delete($Id);
} else {
    header('Location: ../../index.php');
}

?>