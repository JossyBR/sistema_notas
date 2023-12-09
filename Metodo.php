<?php

require_once('Conexion.php');

 class Metodos extends Conexion {
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function getMaterias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM  materias");
        $statement->execute();
        while($result = $statement->fecth()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getDocentes(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
 }

?>