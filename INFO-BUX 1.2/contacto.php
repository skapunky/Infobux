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
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
			
        		<article>
					<h2>Contacto</h2>
			
					<p align="justify">Para dudas, comentarios, errores o cualquier tipo de problema con los pagos pueden contactar mediante la dirección de correo electrónico <?php echo $correo ?> donde recibiran respuesta en un plazo de 24 horas aproximádamente.<p>
					
					Solucionaremos el problema o atenderémos tu petición en la mayor brevedad posible.
					<br><br>		
			</article>
			
						
	</section><!-- end of #content -->
<?php 
if  ($_SESSION['ID'] == 0){ ?> 	
<form  style="margin-left: 20px;" action="recoge.php" method="post">

Usuario:<br>
<input type="text" name="nick" /><br><br>
Password:<br>
<input type="password" name="password" /><br><br>
<input type="submit" value="Identificarse" /><br><br>
	
	
	<?php if  ($_SESSION['ID'] == 0){ ?> 
	<font color="red"> <?php if (isset($_GET["msg"])){
		echo	$_GET["msg"]; } ?> </font></br>
			
			 <?php } ?>
</form>
 <?php } ?>
		<aside id="sidebar"><!-- sidebar -->
		
		<?php include("enlaces.php"); ?>
		<br><br>
		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->
	
	<?php require ("footer.php") ?>	
	
</div><!-- #wrapper -->
</body>
</html>
