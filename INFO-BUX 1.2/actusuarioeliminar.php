<?php
require ("global.php");

 $nick = $_GET["nick"];

$strSQL="DELETE FROM usuario WHERE  nick = '$nick'";


echo $strSQL;
$objRS_query=mysql_query($strSQL) or die(mysql_error());

ob_start();
header("Cache-Control: private");
header("Location: listausuariosadmin.php");

?>