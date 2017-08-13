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
			
                        <h2>¿Que són los referidos?</h2>
			<p align="justify"> La mayoria de sistemas de negocio basados en internet disponen de los llamados referídos ya que disponer de un sistema de referídos dá muchas ventajas que detallaré a continuación. Los referídos son personas que se registran a un servicio, en éste caso una PTC, y te aportan un beneficio como un % de su dinero generado o una cantidad de dinero en proporcion al dinero que puedan ingresar por una membresía o para añadir publicidad.<br></p> 				
			<center><p><img src="images/referidos.jpg" width="280px" height="160px" alt="Referidos" /></p></center>
			<p align="justify">Gracias a los sistemas de referídos, los usuarios buscan nuevas personas para que se inscríban en la PTC mediante un enlace personal, de ésta forma puede ganar una cantidad de dinero adicional y por supuesto remarcar que el referído, nunca verá perjudicada sus ganáncias por ser un referido.<br></p>

			<br>Las ventajas de un sistema de referídos son:<br><br>
			- Publicidad y crecimiento de la PTC.<br>
			- El tener referídos incrementa las ganáncias.<br>
			- Algúnas PTC permíten varios niveles de referídos, es decir puedes llegar a cobrar dinero de los referídos de tus referídos.<br><br>
			
			<p align="justify">Es muy importante saber, que las PTC no són sistemas piramidales, es un concepto mas sencillo de lo que parece, te pagan por ver publicidad y el tener referídos te aporta unas ganáncias que en tu contra, hace que tengas de emplear tiempo en la búsqueda de gente interesada.<br></p>
			
			</p> 
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