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
				<h2>Formulario de registro</h2>
				
				<form  action="actusu.php" method="POST" />
				Nombre de Usuario:<input type="text" name="nick" /><br /> <br />	
				E-mail de Paypal: <input type="email" name="mail" /><br /> <br />
				Password:<input type="password" name="password" /><br /> <br />
				
				
				<input type="submit" value="Registrarse" acti style="margin-bottom: 20px; margin-left: 100px;" />
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
