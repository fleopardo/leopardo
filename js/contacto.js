;(function(){

	$('select').selectmenu({
		transferClasses:true
	});

	//GOOGLE MAPS
	if( typeof(google) != "undefined"){

		/* Casa central */
		var options = {
			zoom: 15,
			center: new google.maps.LatLng(-34.569638,-58.555951),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			navigationControl: false,
			streetViewControl: false
		};
		var map1 = new google.maps.Map(document.getElementById('mapa-central'), options);

		new google.maps.Marker({
			position: map1.getCenter()
			, map: map1
			, cursor: 'default'
			, icon: './css/assets/fd_map-flag.png'
			, draggable: true
		});

		/* Ventas */
		var options_2 = {
			zoom: 15,
			center: new google.maps.LatLng(-34.576956,-58.53072),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			navigationControl: false,
			streetViewControl: false
		};
		var map2 = new google.maps.Map(document.getElementById('mapa-ventas'), options_2);

		new google.maps.Marker({
			position: map2.getCenter()
			, map: map2
			, cursor: 'default'
			, icon: './css/assets/fd_map-flag.png'
			, draggable: true
		});

	}


	/** Contacto - Form Validation & Submit **/

	$('#form-consulta').on('submit', function(event){

		event.preventDefault();
		event.stopPropagation();

		$('#form-response').addClass("loading");

		$('#form-consulta input, #form-consulta textarea').removeClass('error');

		var name = $('#nombre');
		var apellido = $('#apellido');
		var email = $('#email');
		var telefono = $('#telefono');
		var message = $('#consulta');
		var destinatario = $("#destinatario");

		var nameIngresado = $('#nombre').val();
		var apellidoIngresado = $('#apellido').val();
		var emailIngresado = $('#email').val();
		var telefonoIngresado = $('#telefono').val();
		var messageIngresado = $('#consulta').val();
		var destinatarioIngresado = $("#destinatario").val();

		var error = false;
		var errorName = false;
		var errorApellido = false;
		var errorEmail = false;
		var errorTelefono = false;
		var errorMessage = false;

		//valido nombre
		if(!(isNaN(name.val())) || name.val() == null || name.val().length == 0 || /^\s+$/.test(name.val())) {
			error = true;
			errorName = true;
			name.addClass("error");
		}else{
			name.removeClass('error');
		}

		//valido apellido
		if(!(isNaN(apellido.val())) || apellido.val() == null || apellido.val().length == 0 || /^\s+$/.test(apellido.val())) {
			error = true;
			errorApellido = true;
			apellido.addClass("error");
		}else{
			apellido.removeClass('error');
		}

		//valido email
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val()))) {
			error = true;
			errorEmail = true;
			email.addClass("error");
		}else{
			email.removeClass('error');
		}

		//Valido telefono
		if(telefono.val() == null || telefono.val() == 0 || telefono.val() == "" ){
			//puede estar vacio
			telefono.removeClass('error');
		}else{
			//Si tiene datos los valido
			if( isNaN(telefono.val()) || /^\s+$/.test(telefono.val())) {
				error = true;
				errorTelefono = true;
				telefono.addClass("error");
			}else{
				telefono.removeClass('error');
			}
		}

		//valido consulta
		if(message.val().length <= 10) {
			error = true;
			errorMessage = true;
			message.addClass("error");
		}else{
			message.removeClass('error');
		}


		//Si hubo errores
		if( error ){

			$('#form-response').removeClass("loading").text("Ingresá los datos correctamente.").addClass("error");

		}else{

			$.ajax({
				type: 'POST',
				data: 'name='+nameIngresado+'&apellido='+apellidoIngresado+'&email='+emailIngresado+'&telefono='+telefonoIngresado+'&consulta='+messageIngresado+'&destinatario='+destinatarioIngresado,
				dataType: 'json',
				url: $('#form-consulta').attr("action"),
				error: function(xhr, ajaxOptions, thrownError){
					$('#form-response').text('Error en la conexion, intentá nuevamente.').removeClass('loading').addClass("error");
				},
				success: function(r){
					if(r.status == 'ok') {
						$('#nombre, ,#apellido, #email, #telefono, #consulta').val('');
						$('#form-response').text('Gracias por tu consulta!').removeClass('loading').removeClass("error");
					}
				}
			});

		}

	});


	$('#envio-consulta input, #envio-consulta textarea').bind('focus', function(e){
		$(this).removeClass('error');
	});

	/** Inicializacion Placeholder fallback **/
	//$('input[placeholder], textarea[placeholder]').placeholder();

}());