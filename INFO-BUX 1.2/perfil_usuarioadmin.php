<?php require ("global.php") ?>
<?php require("config.php"); ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title><?php echo $titulo ?></title>
	<link rel="stylesheet" href="stylesindex.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="print.css"  type="text/css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head> 
<body>
<?php include("cabezera.php"); ?>
	
<?php
$strSQL = "SELECT ID,nick,mail,dinero_a,dinero_p,bonus,dinero_g FROM usuario
WHERE ID = ".$_GET{"ID"};
$objRS_query=mysql_query($strSQL) or die(mysql_error()); ?>

<?php
$aux = $_SESSION['nick'];
$cuentalog = "SELECT  COUNT(*) as nick FROM usuario where nick = '$aux' ";
$obj_query=mysql_query($cuentalog) or die(mysql_error());
$obj=mysql_fetch_array($obj_query);

?>
<?php if  ($_SESSION['ID'] == 1){ ?>
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				
				<h2>Perfil de Usuario</h2> 
				<?php if ($objRS=mysql_fetch_array($objRS_query)) { ?>
				
				<?php $nick = $objRS["nick"]; ?>
				
				
				<b>Usuario:</b> <?php echo $objRS["nick"]; ?> <br /> 
				<b>Correo <?php echo $sistemapago ?>:</b> <?php echo $objRS["mail"]; ?> <br /> <br />
				
				<?php $nick = $objRS["nick"]; ?>
				
				
				<form  action="actusumodifAdmin.php?nick=<?php echo $objRS["nick"] ?> " method="POST" />
				<b>Dinero Acumulado:</b><input type="text" name="dinero_a" value="<?php echo $objRS["dinero_a"]; ?>" />$<br /><br /> 
				<b>Dinero Ganado:</b><input type="text" name="dinero_g" value="<?php echo $objRS["dinero_g"]; ?>" />$   [% del acumulado]<br /> <br /> 	
				<b>Dinero Pagado Total:</b><input type="text" name="dinero_p" value="<?php echo $objRS["dinero_p"]; ?>" />$<br /><br /> 
				<b>Bonus:</b><input type="text" name="bonus" value="<?php echo $objRS["bonus"]; ?> " />Bonos<br /> 
				<br />	<input type="submit" value="Actualizar" acti style="margin-bottom: 20px; margin-left: 100px;" />
				</form>	
				<br /><br />
				
				
				 
				
				
				
				<?php } 
				else
				  echo 'El perfil de usuario que intenta acceder no existe'; ?>	
			</section><!-- end of #content -->
	

			<aside id="sidebar"><!-- sidebar -->
				
			<?php include("enlaces.php"); ?>

			</aside><!-- end of sidebar -->	

	</section><!-- end of #main content and sidebar-->
<?php }
else
{  echo nl2br("\n\n\n\n No tiene permiso para ver el contenido. \n\n\n") ; }      
?>	
<?php require ("footer.php") ?>
	
</div><!-- #wrapper -->
</body>
</html>
