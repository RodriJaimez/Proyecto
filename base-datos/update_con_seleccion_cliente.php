<?php
include("apertura-base-datos.php");

$ssql = "SELECT * FROM user";

$resultado = $conectar->query($ssql);

	while ( $registro = $resultado->fetch_assoc() )
	{
		echo   $registro["nombre"] . "br"; 

	}

mysqli_close($conexion);
?>