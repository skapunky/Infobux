<?php include("config.php"); ?>
<?php
mysql_pconnect($host,$usuario,$db_pass);
mysql_select_db($db_nombre);

session_start();

if (!isset($_SESSION['ID']))
    {
    $_SESSION['ID'] = 0;
    $_SESSION['nick'] = "";
    }

?>