<!DOCTYPE html>
<html lang="en">
<head>
	<title>MenuDiario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url();?>assets/images/icons/logopagina.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?= base_url();?>assets/index_view.php">
							<img src="images/icons/Menulogo.png" alt="IMG-LOGO" data-logofixed="images/icons/Menulogo.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="<?= base_url();?>assets/index_view.php">Pagina Principal</a>
								</li>

								<li>
									<a href="<?= base_url();?>assets/menu_view.php">Menu</a>
								</li>

								<li>
									<a href="<?= base_url();?>assets/reservation_view.php">Reservaciones</a>
								</li>
								
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

				
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	
	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
	
				<div class="item-slick1 item3-slick1" style="background-image: url(https://i.pinimg.com/originals/59/31/8f/59318f42a4809aaabc35eaaad05bd547.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Bienvenido al
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Menu Diario
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="<?= base_url();?>assets/menu_view.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Ver Menu
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	
	

	<!-- Intro -->

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="<?= base_url();?>assets/images/Restaurant Romantico.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Restaurant romantico
								</h4></a>

								<p class="m-b-20">
									Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
								</p>

								<a href="#" class="txt4">
									Ver mas
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="<?= base_url();?>assets/images/comidadeliciosa.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Comida Deliciosa
								</h4></a>

								<p class="m-b-20">
									Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna
								</p>

								<a href="#" class="txt4">
									Ver mas
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="<?= base_url();?>assets/images/VinoElegante.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Vinos finos y añejos 
								</h4></a>

								<p class="m-b-20">
									Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
								</p>

								<a href="#" class="txt4">
									ver mas
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					descubre 
				</span>

				<h3 class="tit5 t-center m-t-2">
					Nuestro menu
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?= base_url();?>assets/images/DesayunoPrincipal.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size4">
									desayuno
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?= base_url();?>assets/images/AlmuerzoPrincipal.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size5">
									almuerzo
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?= base_url();?>assets/images/CenaPrincipal.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
									Cena
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?= base_url();?>assets/images/OncePrincipal.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
									once
								</a>
							</div>
						</div>


						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="<?= base_url();?>assets/images/PostrePrincipal.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
									Agregado de postres
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Booking -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservacion
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Libro de reservas
						</h3>
					</div>

					<form class="wrap-form-booking">
						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									Date
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Time -->
								<span class="txt9">
									Time
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
										<option>9:00</option>
										<option>9:30</option>
										<option>10:00</option>
										<option>10:30</option>
										<option>11:00</option>
										<option>11:30</option>
										<option>12:00</option>
										<option>12:30</option>
										<option>13:00</option>
										<option>13:30</option>
										<option>14:00</option>
										<option>14:30</option>
										<option>15:00</option>
										<option>15:30</option>
										<option>16:00</option>
										<option>16:30</option>
										<option>17:00</option>
										<option>17:30</option>
										<option>18:00</option>
									</select>
								</div>

								<!-- People -->
								<span class="txt9">
									N° Personas
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="people">
										<option>1 persona</option>
										<option>2  personas</option>
										<option>3  personas</option>
										<option>4  personas</option>
										<option>5  personas</option>
										<option>6  personas</option>
										<option>7  personas</option>
										<option>8  personas</option>
										<option>9  personas</option>
										<option>10  personas</option>
										<option>11  personas</option>
										<option>12  personas</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									Nombre 
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Nombre">
								</div>

								<!-- Phone -->
								<span class="txt9">
									Telefono
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="telefono" placeholder="Phone">
								</div>

								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Reservar
							</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="<?= base_url();?>assets/images/ReservacionLibro.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Review -->
	


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(images/VideoFondo.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Echa un vistazo a
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Nuestro Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggt#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Consultas
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Enviar 
			</button>
		</form>
	</div>


	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
					 Contactanos
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							 Piso 8° , 379 Hudson St, New York, NY 10018
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contacto@sitio.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Horarios de apertura
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							todo el dia
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Ultimo de twiter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello es una buena opción. Tiene un control 
							deslizante integrado que muestra la imagen mostrada 
							en el control deslizante.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello es una buena opción. Tiene un control deslizante integrado que muestra
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dic 2017
						</span>
					</div>
				</div>

				
		

					
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="<?= base_url();?>assets/images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
