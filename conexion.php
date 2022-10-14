<?php
$dbhost='localhost'; 
$dbusername='root'; 
$dbuserpass='12345678';
$dbname='concurso';
$conexion=mysqli_connect($dbhost, $dbusername, $dbuserpass,$dbname);

if(!$conexion)
{
	echo "Error: No se pudo conectar a la Base de datos";

}
?>