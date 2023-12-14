<?php

require_once('../Modelo/Usuarios.php');

//Verificar que haya un POST
if($_POST){ // envio por post

    //recibo la informacion
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Contrasena'];

   $Modelo = new Usuarios(); //creo el objeto y con el objeto accedo al metodo login
   if( $Modelo->login($Usuario, $Password)){
        header('Location: ../../Estudiantes/Pages/index.php');
   } else {
        header('Location: ../../index.php');
   }  

} else { //si los datos no lleguen por post
    header('Location: ../../index.php');
}

?>