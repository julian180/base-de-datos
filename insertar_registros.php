<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insertar Registros</title>
	<style>

		h1{
		text=align:center;
		color:#00F;
		border-bottom:dotted # 0000FF;
		width:50%;
		margin:auto;


		}

		table {
		border:1px slid #F00;
		padding: 20px 50px;
		margin-top: 50px;
		}

		body{
		background-color: #55b1f5;	
		}

	</style>
	
</head>


<body>

	<?php
	session_start();// REanudar sesión en el caso que exista previamente. Para que si pe pega la dirección manualmente, redirija la login.
	if(!isset($_SESSION["usuario"])){//Si no se almaceno algo en la variable superglobal
		header("location:login.php");//Entonces lo redirije a la pagina del login

	}
	?>
	<?php

	$cod=$_GET["codigo"];//vairable donde se almacena  nombre cuadro de texto donde viene la información
	$nom=$_GET["Nombre"];
	$apellido=$_GET["Apellido"];
	$fac=$_GET["Facultad"];
	$mail=$_GET["mail"];
	$cel=$_GET["Celular"];


	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la Base de datos.";
		exit ();


	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");


// Para obtener registros de una tabla

	$consulta="INSERT into Docente(Codigo,Nombre,Apellido,Facultad,Correo_electronico,Celular) VALUES ('$cod', '$nom','$apellido','$fac','$mail','$cel')";
	$resultados=mysqli_query($conexion, $consulta);

	if($resultados==false){
		echo "Error al insertar datos, el código ya existe";
	}
	else { //Muestro en pantalla cuales registros se han insertado
		echo "Registros guradados correctamente <br><br>";
		echo "<table><tr><td>$cod</td></tr>";
		echo "<table><tr><td>$nom</td></tr>";
		echo "<table><tr><td>$apellido</td></tr>";
		echo "<table><tr><td>$fac</td></tr>";
		echo "<table><tr><td>$mail</td></tr>";
		echo "<table><tr><td>$cel</td></tr></table>";
	}
	
	
	//Cerrar la conexion
	mysqli_close($conexion);

	

?>
<center> <a href="javascript:window.history.go(-1);">Volver A La Pagina Anterior</a> </center> </center>
</body>	
</html>

