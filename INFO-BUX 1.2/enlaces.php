
	
<?php
$strSQL = "SELECT ID,nick,dinero_g,dinero_p FROM usuario ORDER BY (dinero_g + dinero_p) DESC LIMIT 5";
$objRS_query=mysql_query($strSQL) or die(mysql_error());
?>	
	
	<h2>Top 5 </h2>
				
	<table BORDER="0" style= "margin-bottom:0px" BORDERCOLOR="#FFFFFF" BGCOLOR="#FFFFFF"> 
	<TR> 
	   <TH style="height: autopx; width: autopx;">Usuario</TH>
	   <TH style="height: autopx; width: autopx;">$</TH> 
   
	</TR>
	<?php while($objRS=mysql_fetch_array($objRS_query)) : ?>
	<TR>
	   <TD> <?php echo $objRS["nick"]?> </TD><TD><?php echo $objRS["dinero_g"] + $objRS["dinero_p"];?>$</TD>
	</TR>

	<?php endwhile?>
	</table>



<?php
$result = "SELECT SUM(dinero_p) as total FROM usuario";
$objRS_query=mysql_query($result) or die(mysql_error());
$row = mysql_fetch_array($objRS_query, MYSQL_ASSOC);
$total = $row["total"];
?>

<?php
$resultg = "SELECT SUM(dinero_g) as totalg FROM usuario";
$objRSg_query=mysql_query($resultg) or die(mysql_error());
$rowg = mysql_fetch_array($objRSg_query, MYSQL_ASSOC);
$totalg = $rowg["totalg"];
?>
	<br><br><h2>Estadísticas </h2>
	Total pagado: <?php echo round($row["total"],2); ?><br>
	Total acumulado: <?php echo round($rowg["totalg"],2); ?>


	