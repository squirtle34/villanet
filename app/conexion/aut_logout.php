<?php  
//  Autentificator  //
// -----------------------------------------//
// Cargamos variables //
require ("aut_config.inc.php");

 
// Le damos un mobre a la sesion (por si quisieramos identificarla)
session_name($usuarios_sesion);
// Iniciamos sesiones //
session_start();
// Destruimos la session de usuarios. //
session_destroy();
 
?>
 <html>
<head>
<script type="text/javascript">
window.location="../index.html";
</script>