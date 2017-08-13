<?php require ("global.php") ?>	
<?php
$_SESSION['ID'] = 0;
$_SESSION['nick'] = "";
  header("Cache-Control: private");
  header("Location: ./index.php");
?>