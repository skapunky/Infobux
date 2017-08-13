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
<p align="justify"><?php echo $titulo ?> es una página automatizada de gestión de referidos donde puedes ganar un dinero adicional aparte del que se gana en cualquier PTC de forma tradicional viendo anuncios. Si eres usuario o has sido usuario de otras PTC ya conocerás como funciona el sistema y cómo funcionan los referidos.
Si te haces referido nuestro mediante el enlace o banner que aparece abajo, recibirás parte un porcentaje de ganancias del <?php echo $porcentaje ?> que nos generes.</p>

<p align="justify">Una vez llegado al pago mínimo de <?php echo $limite_pago ?>$ podrá solicitar automáticamente el pago mediante su perfil de usuario y se le acreditará la cantidad acumulada a su cuenta de <?php echo $sistemapago ?>.
Si tienes algún tipo de duda puedes encontrar una forma de <a href="contacto.php">contacto</a> en la sección con el mismo nombre en esta página web o si es la primera vez que utilizas una página de pago por “click” y no tienes claro su funcionamiento puedes encontrar toda la <a href="info1.php">información necesaria</a> en las pestañas superiores.</p>

<p align="justify">Para empezar a beneficiarte de nuestro sistema y de paso ganar dinero en una ptc utilizamos la página de pago por click <?php echo $nombre_ptc ?>, deberás seguir los siguientes pasos:</p>

1. Regístrate en la página de pago por click mediante el siguiente banner.<br><br>

<center><a title="Banner Referido" href="http://<?php echo $url_referido ?>"><img src="images/baner_ref.gif" alt="Banner Referido" /><a></center><br><br>

2. Revisa bien que durante el regístro aparezca como referido.<br><br>
3. Una vez registrado en la ptc, regístrate en <?php echo $titulo ?> con el mismo nombre de usuario que te registráste en la PTC.<br><br>
4. En un plazo de 24 horas, tu cuenta será validada y en tu perfil podrás ver el estado de tu cuenta.<br><br>
5. Empieza a dar click y ganar dinero en la PTC y en nuestra página.<br><br>
6. Cuando llegues al mínimo de pago, en tu perfíl aparecerá la opción para solicitar el cobro del dinero.<br><br>



<p align="justify">La ventaja de utilizar nuestro sistema automatizado, es que tu como referido podrás ganar un dinero adicional aparte del que ganes en la ptc y no deberás preocuparte de nada ya que en tu perfil podrás acceder a tus estadísticas y podrás solicitar el pago todo de forma automatizada. Por otra parte, el sistema nos permite ver a la administración los pagos pedidos, pagos enviados y mantener un control de los usuarios de una forma sencilla, automatizada y eficaz.</p>

<p align="justify">Disponemos además de un sistema de bonos, donde la administración podrá asignar un determinado numero a cualquier usuario. Dichos bonos serán canjeados cuando pidas el pago en forma de dinero. La equivalencia es de <?php echo $valor_bono?> céntimos el bono <p>
				
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
