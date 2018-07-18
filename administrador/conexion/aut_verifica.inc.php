<?php
require("aut_config.inc.php");
$url = explode("?",$_SERVER['HTTP_REFERER']);
$pag_referida=$url[0];
$redir=$pag_referida;
// chequear si se llama directo al script.
/*
if ($_SERVER['HTTP_REFERER']==""){  ?>
<?php
exit;
}
*/
// Chequeamos si se est� autentificandose un usuario por medio del formulario
if (isset($_POST['user']) && isset($_POST['pass'])) {

$db_conexion=  mysqli_connect($sql_host, $sql_usuario, $sql_pass, $sql_db);

if (!$db_conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//$db_conexion->set_charset("utf8");

// realizamos la consulta a la BD para chequear datos del Usuario.
$usuario_consulta = $db_conexion->query("SELECT * FROM usuarios WHERE  usuario='".$_POST['user']."'");

 // miramos el total de resultado de la consulta (si es distinto de 0 es que existe el usuario)
 if (mysqli_num_rows($usuario_consulta) != 0) {
    // eliminamos barras invertidas y dobles en sencillas
    $login = stripslashes($_POST['user']);
    // encriptamos el password en formato md5 irreversible.
    $password = md5($_POST['pass']);

    // almacenamos datos del Usuario en un array para empezar a chequear.
 	  $usuario_datos = mysqli_fetch_array($usuario_consulta);

    // chequeamos el nombre del usuario otra vez contrastandolo con la BD
    // esta vez sin barras invertidas, etc ...
    // si no es correcto, salimos del script con error 4 y redireccionamos a la
    // p�gina de error.
    if ($login != $usuario_datos['usuario']) {
       	Header ("Location: index.html?3");
		exit;}

    // si el password no es correcto ..
    // salimos del script con error 3 y redireccinamos hacia la p�gina de error
    //incrementando 1 al campo de control accseso por posible ataque de diccionario
    if ($password != $usuario_datos['clave']) {
        Header ("Location: index.html?4");
	    exit;}
	// verifico si el usuario no esta bloqueado


    // Paranoia: destruimos las variables status,login y password usadas
    unset($login);
    unset ($password);
    unset ($status);

    // liberamos la memoria usada por la consulta, ya que tenemos estos datos en el Array.
    mysqli_free_result($usuario_consulta);
    // cerramos la Base de dtos.
    mysqli_close($db_conexion);
    // En este punto, el usuario ya esta validado.
    // Grabamos los datos del usuario en una sesion.

     // le damos un mobre a la sesion.
    session_name($usuarios_sesion);
     // incia sessiones
    session_start();

    // Paranoia: decimos al navegador que no "cachee" esta p�gina.
    session_cache_limiter('nocache,private');

    // Asignamos variables de sesi�n con datos del Usuario para el uso en el
    // resto de p�ginas autentificadas.

    // definimos usuarios_id como IDentificador del usuario en nuestra BD de usuarios
    $_SESSION['usuario_id']=$usuario_datos['id'];

    // definimos usuario_nivel con el Nivel de acceso del usuario de nuestra BD de usuarios
    $_SESSION['usuario_nivel']=$usuario_datos['nivel'];

    //definimos usuario_nivel con el Nivel de acceso del usuario de nuestra BD de usuarios
    $_SESSION['usuario_login']=$usuario_datos['usuario'];

    //definimos usuario_password con el password del usuario de la sesi�n actual (formato md5 encriptado)
    $_SESSION['usuario_password']=$usuario_datos['clave'];


      $_SESSION['usuario_rif']=$usuario_datos['rif'];
    // Hacemos una llamada a si mismo (scritp) para que queden disponibles
    // las variables de session en el array asociado $HTTP_...
    $pag=$_SERVER['PHP_SELF'];
    Header ("Location: index.php");
    exit;

   } else {
      // si no esta el nombre de usuario en la BD o el password ..
      // se devuelve a pagina q lo llamo con error
      Header ("Location: index.html?5");
      exit;}
} else {

// -------- Chequear sesi�n existe -------

// usamos la sesion de nombre definido.
session_name($usuarios_sesion);
// Iniciamos el uso de sesiones
session_start();

// Chequeamos si estan creadas las variables de sesi�n de identificaci�n del usuario,
// El caso mas comun es el de una vez "matado" la sesion se intenta volver hacia atras
// con el navegador.

if (!isset($_SESSION['usuario_login']) && !isset($_SESSION['usuario_password'])){
// Borramos la sesion creada por el inicio de session anterior
session_destroy(); ?>
<?php

exit;
}
}
?>
