<?php  
$sql_host ="localhost";
$sql_usuario ="root";
$sql_pass ="";
$sql_db ="villanet";
$sql_tabla ="usuarios";
$usuarios_sesion = "autentificator";
$link=mysql_connect($sql_host,$sql_usuario,$sql_pass);
mysql_select_db("$sql_db",$link);
mysql_query ("SET NAMES 'utf8'");
?>
