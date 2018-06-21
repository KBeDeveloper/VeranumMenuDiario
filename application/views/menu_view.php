<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
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
							<img src="<?=base_url();?>assets/images/icons/Menulogo.png" alt="IMG-LOGO" data-logofixed="<?= base_url();?>assets/images/icons/Menulogo.png">
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
									<a href="/index.php/Order_controller">Reservaciones</a>
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url();?>assets/images/menuDiario.jpg);">
		<h2 class="tit6 t-center">
			menu diario 
		</h2>
	</section>


	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(<?= base_url();?>assets/images/tenedor.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Desayuno
				</h2>
			</div>
		</div>
		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<?php foreach($listaD as $key=>$l){?>
					<div class="blo3 flex-w flex-col-l-sm m-b-30">						
						<div class="text-blo3 size21 flex-col-l-m">
							<a href="<?=base_url().'index.php/Functionary_controller/stockFromMeal/'.$l['COMIDA_ID'];?>" class="txt21 m-b-3">
								<?=$l['COMIDA_NOMBRE'] ?>
							</a>

							<span class="txt23">
							<?=$l['COMIDA_DESCRIPCION'] ?>
							</span>

							<span class="txt22 m-t-20">
							<?=$l['COMIDA_PRECIO'] ?>
							</span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	


	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(<?= base_url();?>assets/images/cuchillo.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Almuerzo
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<?php foreach($listaA as $key=>$l){?>
						<div class="blo3 flex-w flex-col-l-sm m-b-30">						
						<div class="text-blo3 size21 flex-col-l-m">
							<a href="<?=base_url().'index.php/Functionary_controller/stockFromMeal/'.$l['COMIDA_ID'];?>" class="txt21 m-b-3">
								<?=$l['COMIDA_NOMBRE'] ?>
							</a>

							<span class="txt23">
							<?=$l['COMIDA_DESCRIPCION'] ?>
							</span>

							<span class="txt22 m-t-20">
							<?=$l['COMIDA_PRECIO'] ?>
							</span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(<?= base_url();?>assets/images/Cena.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Cena
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<?php foreach($listaC as $key=>$l){?>
						<div class="blo3 flex-w flex-col-l-sm m-b-30">						
						<div class="text-blo3 size21 flex-col-l-m">
							<a href="<?=base_url().'index.php/Functionary_controller/stockFromMeal/'.$l['COMIDA_ID'];?>" class="txt21 m-b-3">
								<?=$l['COMIDA_NOMBRE'] ?>
							</a>

							<span class="txt23">
							<?=$l['COMIDA_DESCRIPCION'] ?>
							</span>

							<span class="txt22 m-t-20">
							<?=$l['COMIDA_PRECIO'] ?>
							</span>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(<?= base_url();?>assets/images/OnceImagen.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Once
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<?php foreach($listaO as $key=>$l){?>
						<div class="blo3 flex-w flex-col-l-sm m-b-30">						
						<div class="text-blo3 size21 flex-col-l-m">
							<a href="<?=base_url().'index.php/Functionary_controller/stockFromMeal/'.$l['COMIDA_ID'];?>" class="txt21 m-b-3">
								<?=$l['COMIDA_NOMBRE'] ?>
							</a>

							<span class="txt23">
							<?=$l['COMIDA_DESCRIPCION'] ?>
							</span>

							<span class="txt22 m-t-20">
							<?=$l['COMIDA_PRECIO'] ?>
							</span>
						</div>
					</div>
					<?php }?>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Sign up -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
			</div>				
			<div class="col-4">
				<a class="btn3 form-control flex-c-m txt11 trans-0-1" href="/index.php/Functionary_controller" role="button">Consultar Insumos</a> 
			</div>
			<div class="col-4">
			</div>	
		</div>
	</div>
	<br>
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

	<!-- Footer -->



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
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
	<script src="<?= base_url()?>assets/js/main.js"></script>

</body>
</html>
