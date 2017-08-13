<?php
require ("global.php"); 
// inserta los datos de usuario en la base de datos, encriptando el password
$strSQL="INSERT usuario (nick,mail,password) VALUES ('".$_POST{"nick"}."','".($_POST{"mail"})."','".MD5($_POST{"password"})."')";
// La pasword se guarda con encriptación md5, con ella seria --> MD5($_POST{"password"})
echo $strSQL;
$objRS_query=mysql_query($strSQL) or die(mysql_error());
// rellena la variable de sesión con el id del usuario
//$_SESSION["ID"]=mysql_insert_id();
// redirecciona al menú de usuarios registrados
ob_start();
header("Cache-Control: private");
header("Location: alta.php");
?>