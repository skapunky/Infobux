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
				<h2>Lista de usuarios no verificados</h2>		

<?php
$strSQL = "SELECT ID,nick FROM usuario where verificado = '0'";
$objRS_query=mysql_query($strSQL) or die(mysql_error()); 
?>

<table bgcolor="#F8FFFF" BORDER="1" style= "margin-bottom:35px"> 
<TR bgcolor="#DAF2FF"> 
   <TH style="height: 28px; width: 100px;"><center>ID</center></TH>
   <TH style="height: 28px; width: 100px;"><center>Nick usuario</center></TH> 
    <TH style="height: 28px; width: 240px;"><center>Marcar como Pagado</center></TH> 
</TR>
<?php while($objRS=mysql_fetch_array($objRS_query)) : ?>
<TR>
   
   <TD><?php echo $objRS["ID"];?></a></TD><TD> <a href="./perfil_usuarioadmin.php?ID=<?php echo $objRS["ID"]; ?> "><?php echo $objRS["nick"];?></TD><TD> <a href="./usuarioverificadoadmin.php?nick=<?php echo $objRS["nick"]; ?> "> Marcar como Verificado</TD>
</TR>

<?php endwhile?>

<?php }
else
{  echo nl2br("\n\n\n\n No tiene permiso para ver el contenido. \n\n\n") ; }      
?>
</table>
						
			</section><!-- end of #content -->
	

			<aside id="sidebar"><!-- sidebar -->
				
			<?php include("enlaces.php"); ?>

			</aside><!-- end of sidebar -->	

	</section><!-- end of #main content and sidebar-->
	
<?php require ("footer.php") ?>
	
</div><!-- #wrapper -->
</body>
</html>
