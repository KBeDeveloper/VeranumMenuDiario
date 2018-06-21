<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insumos</title>
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
    <script defer type="text/javascript" src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/jquery.dataTables.min.css">
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
	<br>
	<!-- Order meal -->
	<section class="section-reservation bg1-pattern p-t-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Peticion de Insumos
						</h3>
					</div>

					<form class="wrap-form-booking" id="form-reservation" method="POST" action="<?=base_url();?>index.php/User_controller">
						<div class="row">
							<div class="col-md-6">
								<!-- Functionary Code -->
								<span class="txt9">
									Codigo Funcionario
								</span>
								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-functionary-code" placeholder="Codigo">
								</div>
								<!-- RUN -->
								<span class="txt9">
									RUN
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-functionary-run" placeholder="Phone">
								</div>
								<!-- Date -->
								<span class="txt9">
									Fecha
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
				
								<!-- Order -->
								
								
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									Nombre 
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="input-functionary-name" placeholder="Nombre">
								</div>

								<!-- DV  -->
								<span class="txt9">
									DV
								</span>
								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select3 -->
									<select class="selection-1" name="select-dv">
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
								
								<!-- Email -->
								<span class="txt9">
									Correo electrónico
								</span>
								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="input-functionary-email" placeholder="Email">
								</div>

								<!-- Quantity -->	
								<!--En el select se deberia desplegar las unidades segun los insumos-->
								
															
							</div>
						</div>

						<div class="row">						
							<div class="col-md">
								<table id="table-stock">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nombre</th>
											<th>Cantidad Disponible</th>
											<th>Cantidad a solicitar</th>
											<th></th>
										</tr>									
									</thead>
									<tbody>								
									<?php foreach($stock_list as $key=>$l){?>
									<form id="form-stock-<?= $l['STOCK_ID']?>" method="get" action="#">
										<tr>
											<td><?= $l['STOCK_ID']?></td>
											<td><?= $l['STOCK_NOMBRE']?></td>
											<td><?= $l['STOCK_CANT_DISPONIBLE']?></td>
											<td>
												<div class="col-md-8">
													<input class="form-control" style="background-color: rgba(64,64,64,0.2);" type="text" id="" name="input-quantity">
												</div>
											</td>
											<td>
												<div class="col-md-4">
													<button class="btn3 form-control size13 flex-c-m txt11 trans-0-4" type="submit">Agregar</button> 
												</div>											
											</td>
										</tr>
									</form>
									<?php }?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Enviar Pedido
							</button>
						</div>
					</form>
				</div>
			</div>

			


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

<script>
$(document).ready( function () {
    $('#table-stock').DataTable();
} );
</script>

</body>
</html>
