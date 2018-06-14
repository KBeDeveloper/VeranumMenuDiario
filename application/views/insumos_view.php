<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insumos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_insumo.css">
	<link rel="stylesheet" type="text/css" href="css/insumo.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Peticion de insumos
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Porfavor ingresa tu nombre">
					<span class="label-input100">Nombre del Funcionario *</span>
					<input class="input100" type="text" name="name" placeholder="Nombre">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "ingresa tu codigo de tarjeta">
					<span class="label-input100">Codigo Funcionario *</span>
					<input class="input100" type="text" name="email" placeholder="Codigo">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="phone" placeholder="Email">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Insumos a pedir *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Opciones</option>
							<option>Verduras</option>
							<option>Almuerzos</option>
							<option>desayunos</option>
							<option>once</option>
							<option>cena</option>
							<option>bebestibles</option>
							<option>otros</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Metodo para insumos</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Unitarias
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								cajas
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								por mayor
							</label>
						</div>
					</div>

					<div class="wrap-contact100-form-range">
						<span class="label-input100">cantidad/U *</span>

						<div class="contact100-form-range-value">
							<span id="value-lower">610</span> - <span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Porfavor Ingresa la descripcion de insumos">
					<span class="label-input100">Peticion</span>
					<textarea class="input100" name="message" placeholder="ingresa la descripcion y la cantidad de los insumos elegidos"></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Enviar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 0, 5000 ],
	        connect: true,
	        range: {
	            'min': 1,
	            'max': 5000
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main_insumos.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
