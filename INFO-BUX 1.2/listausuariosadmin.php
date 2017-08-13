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
	
	
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				<h2>Lista de usuarios</h2>		

<?php
$strSQL = "SELECT ID,nick FROM usuario ORDER BY ID ASC";
$objRS_query=mysql_query($strSQL) or die(mysql_error()); 
?>

<table bgcolor="#F8FFFF" BORDER="1" style= "margin-bottom:35px"> 
<TR bgcolor="#DAF2FF"> 
   <TH style="height: 28px; width: 100px;">ID</TH>
   <TH style="height: 28px; width: 100px;">Nick usuario</TH> 
    <TH style="height: 28px; width: 100px;">Eliminar usuario</TH> 
</TR>
<?php while($objRS=mysql_fetch_array($objRS_query)) : ?>
<TR>
   
   <TD><?php echo $objRS["ID"];?></a></TD><TD> <a href="./perfil_usuarioadmin.php?ID=<?php echo $objRS["ID"]; ?> "><?php echo $objRS["nick"];?></TD><TD> <a href="./eliminar-usuario.php?nick=<?php echo $objRS["nick"]; ?> "> eliminar</TD>
</TR>

<?php endwhile?>
</table>
						
			</section><!-- end of #content -->
	

			<aside id="sidebar"><!-- sidebar -->
				
			<?php include("enlaces.php"); ?>
			<br><br>
			</aside><!-- end of sidebar -->	

	</section><!-- end of #main content and sidebar-->
	
<?php require ("footer.php") ?>
	
</div><!-- #wrapper -->
</body>
</html>
