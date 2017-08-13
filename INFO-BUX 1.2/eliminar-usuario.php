<?php require ("global.php") ?>	
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Eliminar Usuario</title>
	<link rel="stylesheet" href="stylesindex.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="print.css"  type="text/css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head> 
<body>
<?php include("cabezera.php"); ?>
<?php if  ($_SESSION['ID'] == 1){ ?>



<?php echo nl2br("\n\n\n\n") ; ?>
<?PHP $nick = $_GET["nick"]; ?>



<form style="padding-left:320px;"> 
<fieldset style="padding: 15px 10px 15px 15px; height: 100px; width: 200px;">
<legend>Eliminar usuario</legend>
Desea eliminar el usuario ? <br/><br/>
<a href="actusuarioeliminar.php?nick=<?php echo $nick ?> ">SI</a>        <a href="listausuariosadmin.php">NO</a>
</fieldset>
</form>

<?php echo nl2br("\n\n\n\n") ; ?>
<?php }
else
{  echo nl2br("\n\n\n\n No tiene permiso para ver el contenido. \n\n\n") ; }      
?>
</section>

	<?php require ("footer.php") ?>	

</div><!-- #wrapper -->
</body>
</html>
