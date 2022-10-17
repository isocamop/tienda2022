
<?php 
	include("biblioteca.php"); 
	include("conexion.php"); 
	CabeceraPagina();
	$sql="SELECT cod_part FROM participante	BY cod_part";
	$result=mysqli_query($conexion, $sql);
	if($row=mysqli_fetch_array($result))
	{
		do {
			$ultimo_reg=$row[0];
		}while ($row=mysqli_fetch_array($result));
 	}
	$nuevo_cod_reg=$ultimo_reg+1;

?> 



<HTML>
<BODY>
<center>
INGRESE SUS DATOS
<FORM method="POST"  action="Insertar.php">
	<TABLE border="0" width="30%" height="250" bgcolor="6BBEFEF" >
		<tr>  
				<td align="right"><b>CODIGO: </b></td>
			<td>
			<?php
				echo "<input type='text' value=$nuevo_cod_reg name='c1' size='10' tabindex='1'>";
			?>
			</td>
		</tr>
		<tr>
			<td align="right">NOMBRE : </td>
			<td><input type="text" name="c2" size="20" tabindex="2"></td>
		</tr>
		<tr>
			<td align="right">APELLIDO : </td>
			<td><input type="text" name="c3" size="20" tabindex="3"></td>
		</tr>
		<tr>
			<td align="right">EDAD .:</font></td>
			<td><input type="text" name="c4" size="l2" tabindex="4"></td>

		</tr>
		<tr>
			<td align="right">DIRECCION : </font></td>
			<td><input type="text" name="c5" síze="22" tabindex="5"></td>
		</tr>
		<tr>
			<td align="right">TELEFONO : </td>
			<td><input type="text" name="c6" size="l2" tabindex="6"></td>
		</tr>
		<tr>
			<td align="right">AREA :</td>
			<td> <select size="1" name="c7" tabindex="7">
				<option>1.Canto </option>
				<option>2.Danza </option>
				<option>3.Musica</option>
				<option>4.Pintura</option>
				<option>5.Teatro</option>
				</select> 
			</td>
		</tr>
		
	
 
	</TABLE>
	<INPUT type="submit"  value="Aceptar" name="B1">
	<INPUT type="reset"   value="Limpiar" name="B2"> 
</FORM>
<FORM method="POST" action="carrito.php">
	<INPUT type="submit" name="volver" value="Volver">
</FORM>
</BODY>
<?
	PiePagina();
?> 
</HTML>


