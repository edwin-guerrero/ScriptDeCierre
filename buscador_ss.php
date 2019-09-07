<?php

include_once 'class/consulta_sitio.php';
$objUser = new Usuarios();

echo json_encode($objUser->buscar($_GET['term']));
