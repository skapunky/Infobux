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
					<h2>¿Cómo funcionan las PTC?</h2>
			
					<p align="justify">Un aunciante contrata los servicios de una PTC para obtener publicidad para su sitio/producto. El anunciante le pagará a la PTC por cada clic que de cada usuario a la publicidad. Las PTC pagarán determinada cantidad de centavos (o fracciones de centavo) a los usuarios por ver cada anuncio una determinada cantidad de tiempo, frecuentemente 30 segundos.<br><br> Para aumentar la actividad y popularidad de la PTC todas suelen tener sistemas de referidos, en la que ofrecen pagar un porcentaje de lo que te pagan (normalmente la mitad) por la actividad de los miembros que un usuario refiera.</p>
					<br><br>
					<h2>¿Se puede ganar dinero con las PTC?</h2>
					<p align="justify">En una palabra sí. Aunque es muy frecuente que existan sitios scam, es decir, sitios fraudulentos que no pagan o desaparecen. La mayoría termina desapareciendo. Otros sitios de PTC que son fraudulentos son los que ofrecen pagar un dólar por cada clic, con toda seguridad es una estafa. Piensa en la respuesta de la pregunta antes mencionada, ¿pagaría un anunciante un dolar por cada clic en su publicidad? Imagina que el precio base que cobra Google para los anunciantes en sus resultados de búsqueda o de Adsense es 0.10 USD por clic. Si yo fuera un anunciante, no pagaría nunca un dólar por el tipo de publicidad que ofrecen las PTC.</p>
					<br><br>
					<h2>¿Cuánto se gana con las PTC?</h2>
					<p align="justify">Aunque es posible ganar dinero con este método es muy poco lo que puedes ganar. La mayoría paga un centavo de dólar por un clic de 30 segundos, muy pocos (no he sabido de alguno) pagan dos centavos. Las PTC más confiables te dan más o menos entre 5 y 10 anuncios al dia, con lo que podrías ganar entre 5 y 10 centavos de dólar al día. Si tuvieras unos 100 referidos, y te pagan la mitad de su actividad podrías ganar entre 5.05 y 10.10 dólares al día. Todo depende de la cantidad de referidos que consigas.</p> 
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

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->
	
	<?php require ("footer.php") ?>	
	
</div><!-- #wrapper -->
</body>
</html>
