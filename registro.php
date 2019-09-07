<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
header("Content-Type: text/plain; charset=iso-8859-1");
require_once 'class/conexionbd_login.php';
$Diagnostico=utf8_decode($_POST['Diagnostico']);
$Pruebas=utf8_decode($_POST['Pruebas']);
$Solucion=utf8_decode($_POST['Solucion']);
$terror=utf8_decode($_POST['buscador']);
$va_otro=utf8_decode($_POST['va_otro']);
$sql= "INSERT INTO reg_mesa (`r_diagnostico`, `r_pruebas`, `r_solucion`, `r_terror`, `r_otro`) 
VALUES ('$Diagnostico','$Pruebas','$Solucion', '$terror','$va_otro')";
echo mysqli_query($link,$sql);
?>