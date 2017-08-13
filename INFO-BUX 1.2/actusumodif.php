<?php
require ("global.php"); 

$strSQL="UPDATE usuario SET  mail='".$_POST{"mail"}.

"' WHERE ID = ".$_SESSION["ID"];

echo $strSQL;
$objRS_query=mysql_query($strSQL) or die(mysql_error());

ob_start();
header("Cache-Control: private");
header("Location: index.php");

?>


