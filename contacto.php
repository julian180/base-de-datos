
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
    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div id="mapBox" class="mapBox">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Bogota, Colombia</h6>
                            <p>Santa Bibiana</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a href="#">3204046054/3203966770</a>
                            </h6>
                            <p>Lunes a Viernes 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a href="#">urgencias@hospice.gov.co</a>
                            </h6>
                            <p>¡Envíenos su consulta en cualquier momento!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Tu Correo Electronico">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Ingresar mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!-- start footer Area -->
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
              <h3>3204046054</h3>
              <h3>3203966770</h3>
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
    <!-- End footer Area -->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script> -->
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script> -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7nx22ZmINYk9TGiXDEXGVxghC43Ox6qA"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
