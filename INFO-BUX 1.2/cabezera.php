<?php include("config.php"); ?>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><?php echo $titulo ?></h1>
		<h2><?php echo $sub_titulo ?></h2>
		<img src="images/ALIM4451.jpg" width="940" height="200" alt=""></a><!-- header image -->
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
	
				
		<div class="menu">

		<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="info1.php">Que es una PTC</a></li>
				<li><a href="info2.php">Que son los referidos</a></li>
				<?php if  ($_SESSION['ID'] == 0){ ?><li><a href="registrarse.php">Registrarse</a></li><?php } ?>
				<li><a href="contacto.php">Contacto</a></li>
				
			</ul>
		</div>
	
	</nav><!-- end of top nav -->
	
	<?php
	if  ($_SESSION['nick']){?> 
	 <b>Bienvenido usuario:</b> <a href='perfil_usuario.php?id_usuario=<?php echo $_SESSION['ID'];  ?>'><?php echo $_SESSION['nick'];  ?></a> <a href='modifperfil.php'>Modif. Perfil</a> <a href='cerrarsesion.php'>Desloguear</a>
            <?php if ($_SESSION['ID'] == 1){ ?>
            <a href='admin.php'>Panel de administrador</a>
            <?php } ?>
        <?php } ?>			
