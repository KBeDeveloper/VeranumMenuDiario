<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
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
						<a href="/index.php/Welcome">
							<img src="<?= base_url();?>assets/images/icons/Menulogo.png" alt="IMG-LOGO" data-logofixed="<?= base_url();?>assets/images/icons/Menulogo.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="/index.php/Welcome">Pagina principal</a>
								</li>

								<li>
									<a href="/index.php/Menu_controller">Menu</a>
								</li>

								<li>
									<a href="/index.php/Order_controller">Reservacion</a>
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

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url();?>assets/images/Reservacion.jpg);">
		<h2 class="tit6 t-center">
			Reservation
		</h2>
	</section>
	<?php
		if($this->session->msj != null){
		echo "<script>alert('".$this->session->msj."')</script>";     
		$this->session->set_userdata("msj",null);
		}
		?>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservacion
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							libro de reservaciones
						</h3>
					</div>

					<form class="wrap-form-booking" id="form-reservation" method="POST" action="<?=base_url();?>index.php/User_controller">
						<div class="row">
							<div class="col-md-6">
								<!-- run  -->
								<span class="txt9">
									RUN
								</span>
								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-run" placeholder="run" required>
								</div>
								<!-- Date -->
								<span class="txt9">
									Fecha
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-date" required>
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Time -->
								<span class="txt9">
									Hora
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="select-hour" required>
										<option value="9:00">9:00</option>
										<option value="9:30">9:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
									</select>
								</div>

								<!-- People -->
								<span class="txt9">
									N° Personas
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="select-commensals" required>
										<option value="1">1 persona</option>
										<option value="2">2  personas</option>
										<option value="3">3  personas</option>
										<option value="4">4  personas</option>
										<option value="5">5  personas</option>
										<option value="6">6  personas</option>
										<option value="7">7  personas</option>
										<option value="8">8  personas</option>
										<option value="9">9  personas</option>
										<option value="10">10  personas</option>
										<option value="11">11  personas</option>
										<option value="12">12  personas</option>
									</select>
								</div>
								
							</div>

							<div class="col-md-6">
								<!-- dv   -->
								<span class="txt9">
									DV
								</span>
								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select3 -->
									<select class="selection-1" name="select-dv" required>
										<option value="0">0</option>
										<option selected value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="k">k</option>										
									</select>
								</div>	
								<!-- Name -->
								<span class="txt9">
									Nombre 
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-name" placeholder="Nombre" required>
								</div>

								<!-- Phone -->
								<span class="txt9">
									Telefono
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="tel" name="input-phone" placeholder="Phone" required>
								</div>

								<!-- Email -->
								<span class="txt9">
									Correo electrónico
								</span>
								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="input-email" placeholder="Email" required>
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
			</div>

			<div class="info-reservation flex-w p-t-80">
				<div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
					<h4 class="txt5 m-b-18">
						Reserva via celular
					</h4>

					<p class="size25">
						Para reservar via telefono solo debes llamar al numero que sale en pantalla
					
						<span class="txt24">(001) 345 6889</span>
					</p>
				</div>

				

			</div>
		</div>
	</section>


	<!-- Footer -->
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
	<script src="<?= base_url();?>assets/js/main.js"></script>

</body>
</html>
