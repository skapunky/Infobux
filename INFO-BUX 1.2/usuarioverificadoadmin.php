<?php require ("global.php") ?>
<?php require("config.php"); ?>

<?php
$nick = $_GET["nick"];

$strSQL= "UPDATE usuario SET verificado = 1 WHERE nick = '$nick'";
echo $strSQL;
$objRS_query=mysql_query($strSQL) or die(mysql_error());


ob_start();  
header("Cache-Control: private");
header("Location: index.php");

?>