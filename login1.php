<html>
<head> <title>login</title> </head>
<body>
<center>

<?php
	include("conexion.php");
		if (isset($_POST["submit"]))
		{
			session_start();
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM $tbl_name WHERE Nombre = '$username'";
			$result = $conexion->query($sql); 
			if ($result->num_rows > 0)
			{
			$row = $result->fetch_array(MYSQLI_ASSOC); 
			
			if ($password == $row['clave']) {
				$_SESSI0N['loggedin'] = true;
				$_SESSI0N['Nombre'] = $username;
				$_SESSI0N['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

			} else {
				echo "Nombre o Contraseña estan incorrectos.";
				echo "<br><a href='index.html'>Volver a Intentarlo</a>"; 
			}
			mysqli_close($conexion);
			}
		}
		else
		{
		?>
		<h2>Login de Usuarios</h2>
		<hr/>
		<FORM METHOD="post" action="Acceso.php">
			Usuario:<br> <input name="username" type="text"	required><br> 
			Password:<br> <input name="password" type="password" required> <br><br>
			<input type="submit" name="submit" value=" LOGIN ">
		</FORM>
		<?php
		}
		?>
</center>
</body>
</html>
