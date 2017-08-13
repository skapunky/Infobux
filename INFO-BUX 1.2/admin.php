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
<?php if  ($_SESSION['ID'] == 1){ ?>	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				<h2>Panel de control</h2>
			

<?php
$strSQL = "SELECT ID,nick FROM usuario";
$objRS_query=mysql_query($strSQL) or die(mysql_error()); 
?>

<table  bgcolor="#F8FFFF"  BORDER="1" style= "margin-bottom:35px"> 
<TR bgcolor="#DAF2FF"> 
   <TH style="height: 28px; width: 200px;"><a href="listausuariosadmin.php">Administrar Usuarios</a> </TH>
   <TH style="height: 28px; width: 200px;"><a href="listapagosadmin.php">Pagos Pendientes</a></TH> 
    <TH style="height: 28px; width: 200px;"><a href="verificarusuarios.php">Verificar usuario</a></TH> 
</TR>

</table>

<h2>Estadisticas</h2>

<?php
$cuentausers = "SELECT COUNT(*) as ID from usuario";
$objRS_query=mysql_query($cuentausers) or die(mysql_error());
$objRS=mysql_fetch_array($objRS_query)
?>
Usuarios registrados totales: <?php echo $objRS['ID'] ; ?> <br/><br/>

<?php
$result = "SELECT SUM(dinero_p) as total FROM usuario";
$objRS_query=mysql_query($result) or die(mysql_error());
$row = mysql_fetch_array($objRS_query, MYSQL_ASSOC);
$total = $row["total"];
?>

Total pagado a usuarios: <?php echo round($row["total"],4); ?>$

<?php
$result = "SELECT SUM(dinero_a) as total_a FROM usuario";
$objRS_query=mysql_query($result) or die(mysql_error());
$row = mysql_fetch_array($objRS_query, MYSQL_ASSOC);
?><br/><br/>
Total acumulado por los usuarios: <?php echo round($row["total_a"] + $total,4) ; ?>$<br/><br/>

<?php }
else
{  echo nl2br("\n\n\n\n No tiene permiso para ver el contenido. \n\n\n") ; }      
?>						
			</section><!-- end of #content -->
	

			<aside id="sidebar"><!-- sidebar -->
				
			<?php include("enlaces.php"); ?>

			</aside><!-- end of sidebar -->		

			</section><!-- end of #main content and sidebar-->
	
<?php require ("footer.php") ?>
	
</div><!-- #wrapper -->
</body>
</html>
