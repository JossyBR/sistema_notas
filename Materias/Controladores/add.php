<?php

require_once('../Modelo/Materias.php');

if($_POST){
    $Modelo = new Materias();
    
    $Nombre = $_POST['Nombre'];
    $Modelo->add($Nombre);  
} else {
    header('Location: ../../index.php');
}
?>