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
$strSQL = "SELECT ID,nick,mail,dinero_a,dinero_p,bonus,verificado,pago,dinero_g FROM usuario
WHERE ID=".$_SESSION{"ID"};
$objRS_query=mysql_query($strSQL) or die(mysql_error()); 
$objRS=mysql_fetch_array($objRS_query);?>

	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				
				<h2>Estado de la cuenta</h2>
				
					<?php if ($objRS["verificado"] == 0) { ?>
					<font color="red">Cuenta no Verificada</font>
					<?php }  ?> 
				
					<?php if ($objRS["verificado"] == 1) { ?>
					<font color="green">Cuenta Verificada</font>
					<?php } ?>
				
				<br /><br /><h2>Histórico Pagos</h2>
				
				<b>Dinero pagado:</b> <?php echo $objRS["dinero_p"]; ?>$<br /><br />
				
				<h2>Estadísticas Personales</h2>
				<b>Dinero Ganado:</b> <?php echo $objRS["dinero_g"]; ?>$ [% que recibirás]<br /><br />
				<b>Dinero Generado como referido:</b> <?php echo $objRS["dinero_g"]; ?>$<br /><br />
				<b>Bonus:</b> <?php echo $objRS["bonus"]; ?><br /><br />
				
				<center>
				<?php if ($objRS["dinero_g"] >= $limite_pago) {
				
					if ($objRS["pago"] == 0) { ?>
					<a href="pagopedido.php?nick=<?php echo $objRS["nick"]?> ">
					Pedir pago</a>
					<?php }  ?> 
				
					<?php if ($objRS["pago"] == 1) { ?>
					<font color="red">Pago pendiente</font>
					<?php } ?>
				
				<?php } ?>
				
				
				</center>
				
				
				
				<br /><br />	
			</section><!-- end of #content -->
	

			<aside id="sidebar"><!-- sidebar -->
				
			<?php include("enlaces.php"); ?>

			</aside><!-- end of sidebar -->	

	</section><!-- end of #main content and sidebar-->
	
<?php require ("footer.php") ?>
	
</div><!-- #wrapper -->
</body>
</html>
