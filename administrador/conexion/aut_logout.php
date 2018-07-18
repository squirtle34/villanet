<?php  
//  Autentificator  //
// -----------------------------------------//
// Cargamos variables //
require ("aut_config.inc.php");

$nivel_acceso=4; // definir nivel de acceso para esta página.
if ($nivel_acceso < $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
// Le damos un mobre a la sesion (por si quisieramos identificarla)
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
<meta http-equiv='refresh' content='0;url=../../login.php'>
</body>
</html>
