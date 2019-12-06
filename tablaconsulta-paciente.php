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
<BODY>
<H1>Base de datos Citas Médicas</H1>
<P> TABLA Paciente</P>
<center><table>
  <?PHP
  include ('conexion.php');

  $conexion = conectar();

  $consulta = "SELECT * FROM Paciente";

  $resultado = mysqli_query($conexion, $consulta) or die ("Hay problemas con la consulta");

  echo "<table borde='2'>";
  echo "<tr>";
  echo "<th>Cod</th>";
  echo "<th>Nombre_paciente</th>";
  echo "<th>Direccion</th>";
  echo "<th>Telefono</th>";
  echo "<th>Clasificacion</th>";
  echo "</tr>";

  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    echo "<tr>";
    echo "<td>" . $columna['Cod'] . "</td><td>" . $columna['Nombre_paciente'] . "</td>";
    echo "<td>" . $columna['Direccion'] . "</td><td>" . $columna['Telefono'] . "</td>";
    echo "<td>" . $columna['Clasificacion'] . "</td><td>" ;
    echo "</tr>";
  }

  echo "</table>"; // Fin de la tabla

?>
  </BODY>

  <!--================ start footer Area =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2  col-md-6">
          <div class="single-footer-widget">
            <h6>Productos principales</h6>
            <ul class="footer-nav">
              <li>
                <a href="#">Afiliaciones</a>
              </li>
              <li>
                <a href="#">Afiliados</a>
              </li>
              <li>
                <a href="#">Empleadores</a>
              </li>
              <li>
                <a href="#">Red de Atencion</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4  col-md-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Contáctenos</h6>
            <p>
              Barrio Santa Bibiana,Avenida 19 # 104 - 37, Bogota, Colombia
            </p>
            <h3>3203966770</h3>
            <h3>3204046054</h3>
          </div>
        </div>
        <div class="col-lg-6  col-md-12">
          <div class="single-footer-widget newsletter">
            <h6>Hoja informativa</h6>
            <p>Para saber mas de nuestras ofertas y servicios.</p>
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
               method="get" class="form-inline">

                <div class="form-group row">
                  <div class="col-lg-7 col-md-6 col-sm-12">
                    <input name="EMAIL" placeholder="Tu correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                     required="" type="email">
                  </div>

                  <div class="col-lg-5 col-md-12">
                    <button class="nw-btn main_btn circle">Empezar
                      <span class="lnr lnr-arrow-right"></span>
                    </button>
                  </div>
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fa fa-dribbble"></i>
          </a>
          <a href="#">
            <i class="fa fa-behance"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area =================-->

</HTML>
