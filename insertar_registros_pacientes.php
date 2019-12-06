<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Bogo Health</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<a href="login.html">
								<i class="fa fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="login.html">
								<i class="lnr lnr-phone-handset"></i>
								3203966770
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								urgencias@Bogohealth.gov.co
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/bogologos.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item">
										<a class="nav-link" href="index.php">Inicio</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="departamentos.php">Departamentos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="especialistas.php">Especialistas</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INFORMACION</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="tablas.php">tablas</a>


											</li>
											<li class="nav-item">
												<a class="nav-link" href="consultas.php">Consultas</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="elements.html">Elementos</a>
											</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ingreso de datos</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="registrodatos.php">Registro de datos</a>
											</li>
                      <li class="nav-item">
												<a class="nav-link" href="actualizaciondatos.php">Actualización datos</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="eliminaciondatos.php">Eliminacion de datos</a>
											</li>
										</ul>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="contacto.php">Contacto</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
  <!--================Header Menu Area =================-->


<body>

	<?php
	session_start();// REanudar sesión en el caso que exista previamente. Para que si pe pega la dirección manualmente, redirija la login.
	if(!isset($_SESSION["usuario"])){//Si no se almaceno algo en la variable superglobal
		header("location:login.php");//Entonces lo redirije a la pagina del login

	}
	?>
	<?php

	$cod=$_GET["cod"];//vairable donde se almacena  nombre cuadro de texto donde viene la información
	$nom=$_GET["Nombre_paciente"];
	$dir=$_GET["Direccion"];
	$tel=$_GET["Telefono"];
	$clas=$_GET["Clasificacion"];



	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la Base de datos.";
		exit ();


	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");


// Para obtener registros de una tabla

	$consulta="INSERT into paciente(Cod,Nombre_paciente,Direccion,Telefono,Clasificacion) VALUES ('$cod', '$nom','$dir','$tel','$clas')";
	$resultados=mysqli_query($conexion, $consulta);

	if($resultados==false){
		echo "Error al insertar datos, el código ya existe";
	}
	else { //Muestro en pantalla cuales registros se han insertado
		echo "Registros guradados correctamente <br><br>	echo "Registros guradados correctamente <br> <br><br> <br><br><br><br>";";
		echo "<table><tr><td>Cödigo:$cod</td></tr>";
		echo "<table><tr><td>Nombre Completo: $nom</td></tr>";
		echo "<table><tr><td>Dirección: $dir</td></tr>";
		echo "<table><tr><td>Telefono: $tel</td></tr>";
		echo "<table><tr><td>Clasificación : $clas</td></tr>";
		}


	//Cerrar la conexion
	mysqli_close($conexion);



?>
<center> <a href="javascript:window.history.go(-1);">Volver A La Pagina Anterior</a> </center> </center>

</body>
</html>
