<?php require ("global.php") ?>
<?php include("config.php"); ?>
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
$strSQL = "SELECT ID,nick,mail,password FROM usuario
WHERE ID=".$_SESSION{"ID"};
$objRS_query=mysql_query($strSQL) or die(mysql_error());
$objRS=mysql_fetch_array($objRS_query)
?>
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				<h2>Modificar Correo</h2>
				
				<form  action="actusumodif.php" method="POST" />
					
				
				E-mail <?php echo $sistemapago ?>:<input type="email" name="mail" value="<?php echo $objRS["mail"]; ?>" /><br /> <br />
				
				
				
				 <br />
				
				<input type="submit" value="Modificar" acti style="margin-bottom: 20px; margin-left: 100px;" />
				</form>		
			</section><!-- end of #content -->
	

		<aside id="sidebar"><!-- sidebar -->
				
				<?php include("enlaces.php"); ?>

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->
	
<?php require ("footer.php") ?>	
	
</div><!-- #wrapper -->
</body>
</html>
