<?
//Inicio la sesi?n
session_start();

//Comprovamos si la sesion esta activa
if (($_SESSION["autentificado"] != "publicador")&&($_SESSION["autentificado"] != "ejecutivo")) {
//si no existe, envio a la p?gina de autentificacion
header("Location: ../autentificacion.php");
//y salimos del script
exit();
}
?>