<!DOCTYPE html>
<html>
<head>

	<p><a href="cierre.php">Cerrar sesón</a></p>
	<?php
	session_start();// REanudar sesión en el caso que exista previamente. Para que si pe pega la dirección manualmente, redirija la login.
	if(!isset($_SESSION["usuario"])){//Si no se almaceno algo en la variable superglobal
		header("location:login.php");//Entonces lo redirije a la pagina del login

	}
	?>
	<meta charset="utf-8">
	<title>Busqueda Centros de Atención</title>


	<?php

	function ejecuta_consulta($labusqueda) {


	require("datos_conexion.php");// Pagina de donde viene la información

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la Base de datos.";
		exit ();



	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");


// Para obtener registros de una tabla

	$consulta="SELECT * FROM centro_de_atencion where Nombre LIKE $labusqueda";
	$resultados=mysqli_query($conexion, $consulta);

	while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){


	 //Crar tabla
echo"<hr />";

	echo '<table align="center" border="3" cellpadding="1" cellspacing="1" style="width:500px;">';


echo'<caption><u><span style="color:#0000FF;"><strong><em>Datos Centros de Atencion</em></strong></span></u></caption>';
    echo"<thead>";
	echo"<tr>";
	echo "<th scope='col'><u>Nombre</u></th>";
	echo "<th scope='col'><u>Direccion</u></th>";
	echo "<th scope='col'><u>Codigo_ciudad</u></th>";
	echo"</tr>";
	echo"</tehead>";
	echo"<tbody>";

	echo"</td><td style='text-align: center;'>";
	echo $fila['Nombre'] . "</td><td style='text-align: center;'>";
	echo $fila['Direccion'] . "</td><td style='text-align: center;'>";
	echo $fila['Codigo_ciudad'] ."</td><td style='text-align: center;'>";
	echo"</tr>";



	}


	//Cerrar la conexion
	mysqli_close($conexion);
}
?>

</head>

<body>



	<?php

	@$mibusqueda=$_GET["buscar"];// Arroba para eliminar error al ejecutar la primera consulta, ya que el valor es nulo
	$mipag=$_SERVER["PHP_SELF"]; //LA VARIABLE SE ENVIA A ESTA MISMA PÁGINA
	if ($mibusqueda!=NULL){
		ejecuta_consulta($mibusqueda); //la informacion del la variable misbusqueda es ejecutada por ejecuta_cosnutla, funcion del head

	} else {
		echo("<form action='" . $mipag . "' method='get')>
			<label>Buscar:<input type='text' name='buscar'></label>
			<input type='submit' name='enviando' value='Ok'>
			</form>");
		//formulario para enviar la informacion a la misma pagina, envia lo que hay en la variable en $mipag por metodo get
		//llama a la pagina del servidor, es ella misma
		// boton recargar pagina, en la casilla de busqueda ya hay información, se vuleve a leer codigo, y ya se almacena la información
	}


	?>
	<center> <a href="javascript:window.history.go(-1);">Volver A La Pagina Anterior</a> </center> </center>



	    <div class="main">
                <div class="title">
    <h2>Seleccione la Consulta  </h2>
                <br>
                <h2><a href="http://localhost/ProyectoSalasdeSistemas/formulario_registro.php">Nuevos Docentes  </a></h2>
                <br>
                <h2><a href="http://localhost/ProyectoSalasdeSistemas/formulario_eliminar.php">Eliminar Docentes   </a></h2>
                <br>
                 <h2><a href="http://localhost/ProyectoSalasdeSistemas/formulario_actualizar.php"> Actualizar Docentes  </a></h2>
                <br>

            </div>
        </div>

        <center> <a href="javascript:window.history.go(-1);">Volver A La Pagina Anterior</a> </center> </center>

</body>
</html>
