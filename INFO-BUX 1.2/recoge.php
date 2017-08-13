<?php require ("global.php");

$nick = $_POST["nick"];
$password = MD5($_POST["password"]);

$sql='SELECT ID,nick,password FROM usuario WHERE nick="'.$nick.'" and  password="'.$password.'"';



$result = mysql_query($sql);
$r=mysql_fetch_array($result);

// Página que recoge el usuario para loguear


if ($r) {

//echo "existe";
$_SESSION['ID'] =  $r['ID'];
$_SESSION['nick'] = $r['nick'];

  ob_start();
  header("Cache-Control: private");
  header("Location: ./index.php?msg=");
}
else
{
    $_SESSION['ID'] = 0;
    $_SESSION['nick'] = "";
  ob_start();
  header("Cache-Control: private");
  header("Location: ./index.php?msg=Usuario y/o password invalido");
}

?>

  