<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
	
</head>

<body>
	
<?php
		
		$usuario=$_GET['us'];
		$contra=$_GET['con'];
		$perfil=$_GET['per'];
		
	
		require("datos_conexion.php");

		$conexion = mysqli_connect($servername, $username, $password, $database);

			if (!$conexion) {
				die("Connection failed: " . mysqli_connect_error());
			}

		$consulta="INSERT INTO perfilusuarios (id,usuario, password, perfil) VALUES (NULL,'$usuario', '$contra', '$perfil')";

		$resultados=mysqli_query($conexion,$consulta);
	
		//VAMOS AÑADIR UN ECHO O ALGO QUE NOS DIGA SI HA REALIZADO YA LA INSERCION EN LA BBDD
		if ($resultados==false){ //si ocurre eso entonces es que ha habido algún tipo de error
			echo "Error en la consulta";
		}else {
			
			echo "Registro guardado<br><br>";		
		}
	
	
	

		mysqli_close($conexion); //liberar recursos. cerramos conexion
?>

</body>
</html>