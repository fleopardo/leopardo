;(function(){

	/** Inicializacion Placeholder fallback **/
	$('input[placeholder], textarea[placeholder]').placeholder();

	/** Contacto - Form Validation & Submit **/
	$('#envio-consulta').on('submit', function(event){

		event.preventDefault();
		event.stopPropagation();

		$('#form-response').addClass("loading");

		$('#envio-consulta input, #envio-consulta textarea').removeClass('error');

		var name = $('#nombre');
		var email = $('#email');
		var telefono = $('#telefono');
		var message = $('#consulta');

		var nameIngresado = $('#nombre').val();
		var emailIngresado = $('#email').val();
		var telefonoIngresado = $('#telefono').val();
		var messageIngresado = $('#consulta').val();

		var error = false;
		var errorName = false;
		var errorEmail = false;
		var errorTelefono = false;
		var errorMessage = false;

		//Si ya hay mensajes los oculto
		//contentError.html('').hide();

		//valido nombre
		if(!(isNaN(name.val())) || name.val() == null || name.val().length == 0 || /^\s+$/.test(name.val()) || name.val() == name.attr("placeholder")) {
			error = true;
			errorName = true;
			name.addClass("error");
		}else{
			name.removeClass('error');
		}

		//valido email
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val())) || email.val() == email.attr("placeholder")) {
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
				data: 'name='+nameIngresado+'&email='+emailIngresado+'&telefono='+telefonoIngresado+'&message='+messageIngresado,
				dataType: 'json',
				url: $('#envio-consulta').attr("action"),
				error: function (xhr, ajaxOptions, thrownError) {
					$('#form-response').text('Error en la conexion, intentá nuevamente.').removeClass('loading').addClass("error");
				},
				success: function(r) {

					if(r.status == 'ok') {
						$('#nombre, #email, #telefono, #consulta').val('');
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
	$('input[placeholder], textarea[placeholder]').placeholder();

}());