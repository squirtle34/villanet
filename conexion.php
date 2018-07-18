<?php 

$local="localhost";
$user="root";
$pass="";
$base="villanet";

$conexion=mysql_connect("$local","$user","$pass") or die("<h2>No se puede conectar con el servidor</h2>");
$base=mysql_select_db("$base",$conexion) or die ("<h2>No existe la Base de Datos</h2>");

?>
