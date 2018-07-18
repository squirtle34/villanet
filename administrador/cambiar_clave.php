<?php

include"conexion/aut_verifica.inc.php";

$id=$_POST['id'];
$clave=md5($_POST['clave']);

mysql_query("UPDATE usuarios SET clave='$clave' where id='$id'");

 session_name($usuarios_sesion);
// Iniciamos sesiones //
 session_start();
// Destruimos la session de usuarios. //
  session_destroy();
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
Cargando...
 <meta http-equiv='refresh' content='0;url=../login.php'>
 </body>
</html>
