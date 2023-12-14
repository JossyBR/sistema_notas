<?php

require_once('../../Conexion.php');
session_start(); //esto nos permt hacer uso de la variable $_SESSION

 class Usuarios extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    //metodo de inicio de sesion
    public function login($Usuario, $Password){
        $statement = $this->db->prepare("SELECT * FROM usuarios where USUARIO = :Usuario AND PASSWORD = :Password");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Password',$Password);
        $statement->execute();
        //validacion para el registro
        if($statement->rowCount() == 1){
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = $result["NOMBRE"] . " " . $result['APELLIDO'];
            $_SESSION['ID'] = $result['ID_USUARIO'];
            $_SESSION['PERFIL'] = $result['PERFIL'];
            return true;
        }
        return false;
    }

    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }

    //VALIDAR LA SESION

    public function validateSession(){
        if($_SESSION['ID'] == null){ //en caso de que no EXISTA UNA sesion se redirige al index.ph
            header('Location: ../../index.php');
        }
    }

    public function validateSessionAdministrator(){
        if($_SESSION['ID'] != null) {
            if($_SESSION['PERFIL'] === 'Docente') {
                header('Location: ../../Estudiantes/Pages/index.php');
            }
        }
    }

    public function salir(){
        $_SESSION['ID'] = null;
        $_SESSION['NOMBRE'] = null;
        $_SESSION['PERFIL'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
 }

?>