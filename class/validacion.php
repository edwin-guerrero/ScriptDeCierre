<?php
echo "hola";

include 'database.php';

class validacion extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($usuario){
        $usuario="Backup";
        $datos = array();
        $sth = $this->prepare('SELECT * FROM errores '
                . 'WHERE des_errores = "'.$usuario.'" ');
        $sth->execute();
        #$result=$sth ->
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
             $datos[] = array("value" => $value['des_errores']);
        }
        #return $datos;
        echo $datos;

    }
}