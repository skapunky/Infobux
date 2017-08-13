<?php
require ("global.php"); 
require("config.php"); 


$nick = $_GET['nick'];



$strSQL="UPDATE usuario SET dinero_a='".$_POST{"dinero_a"}.
"',dinero_p='".$_POST{"dinero_p"}.
"',bonus='".$_POST{"bonus"}.
"',dinero_g='".$_POST{"dinero_g"}.
"' WHERE nick = '$nick'";


echo $strSQL;
$objRS_query=mysql_query($strSQL) or die(mysql_error());

ob_start();
header("Cache-Control: private");
header("Location: index.php");
?>

