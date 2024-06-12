<?php
$miConexion = new mysqli("localhost","desarrollador","","pasteleria");
if($miConexion->connect_errno){
    echo "Fallo al connectar con MySql";
}
//realizar consulta sql

$losNombres = $_POST["nombre"];
$losApellidos = $_POST["apellido"];
$elUsuario = $_POST["usuario"];

if(!$miConexion->query("INSERT INTO clietes VALUES (6,'$losNombres','$losApellidos','$elUsuario')"))
{
    echo "Fallo en la creacion de la tabla";
}
?>