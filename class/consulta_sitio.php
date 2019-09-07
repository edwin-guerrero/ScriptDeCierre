<?php

include 'database.php';

class Usuarios extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($usuario){
        $datos = array();
        $sth = $this->prepare('SELECT * FROM errores_ss '
                . 'WHERE des_errores LIKE "%'.$usuario.'%" ');
        $sth->execute();
        #$result=$sth ->
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
            $datos[] = array("value" => $value['des_errores']);
        }        
        return $datos;
    }
}