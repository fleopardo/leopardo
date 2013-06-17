;(function(){

	/*
	 * Elimino class no-js
	*/
	$("html").removeClass("no-js");




	/*****************************
	 **** Cache de variables ****
	*****************************/
	var frases = $(".frases"),
		formBusqueda = $(".barra").find(".search"),
		barraNegra = $(".barra"),
		nav = barraNegra.find("nav");





	/*****************************
	 **** Barra FIXED ****
	*****************************/
	barraNegra.sticky({topSpacing:25});







	/*****************************
	 **** BUSCADOR ****
	*****************************/
	formBusqueda.find("input[type=text]").on("keyup", function(){

		if( $(this).val() == "" ){
			formBusqueda.find(".filtros-de-busqueda").hide();
		}else{
			formBusqueda.find(".filtros-de-busqueda").show();
			$(this).addClass("active");
		}

	});

	formBusqueda.find(".filtros-de-busqueda .ch-close").on(app.event.TAP, function(){

		$(this).parent().hide();
		formBusqueda.find("input[type=text]").focus();
		formBusqueda.find("input[type=text]").removeClass("active");
	});






	/*****************************
	 **** Enviar frases ****
	*****************************/

	nav.find(".enviar-frase").tooltip({
		offset: "-10 10"
	});

	// ABRIR Y CERRAR EL MENU
	nav.find(".enviar-frase").on("click",function(event){

		event.preventDefault();

		var that = $(this);

		if( that.hasClass("active") ){

			that.removeClass("active");

			barraNegra.find(".agregar-frases").slideUp();

			$("#dimmer").remove();

		}else{

			that.addClass("active");

			barraNegra.find(".agregar-frases").slideDown(function(){

				app.body.append('<div id="dimmer"></div>');

				// Bindeo el cierre al documento
				$("#dimmer,#cancelar-envio-frase").one("click", function(){

					that.removeClass("active");

					barraNegra.find(".agregar-frases").slideUp();

					$("#dimmer").remove();

				});

			});

		}

	});


	// MOSTRAR Y OCULTAR ENVIAR SIGNIFICADO DESDE EL CHECKBOX

	barraNegra.find(".significado input[type=checkbox]").on("change", function(){

		if( $(this).prop("checked") ){

			barraNegra.find(".significado .completar-significado").show();

		}else{

			barraNegra.find(".significado .completar-significado").hide();

		}

	});


	// CAMBIOS SEGUN SELECCION DEL USUARIO EN EL SELECT DE CATEGORIAS
	barraNegra.find(".agregar-frases #categs").on("change", function(){

		var id_selected = $(this).find("option:selected").data("id");

		var input_frase = $("#input-frase");
		var name_artist = $("#name-artist");
		var agregar_significado = barraNegra.find(".agregar-frases .significado");
		var descripcion = barraNegra.find(".frases .info");


		//seleccion tulexico
		if( id_selected == 1){

			input_frase.attr("placeholder","Ej.: ¡Que te garúe finito!");
			name_artist.hide();
			agregar_significado.show();
			descripcion.html("Asegúrate de que la frase cumpla con el <u>manifiesto tuléxico</u> y esté <u>bien escrita</u> para que sea publicada.");
		};

		//seleccion famoscitas
		if( id_selected == 2){
			input_frase.attr("placeholder","Ej.: La pelota no se mancha");
			name_artist.show();
			agregar_significado.hide();
			descripcion.html("Asegúrate de que la frase se haya hecho conocida por haberl sido reresentativaa de un famoso");
		};

		//seleccion pene
		if( id_selected == 3){
			input_frase.attr("placeholder","Ej.: Garompa");
			name_artist.hide();
			agregar_significado.hide();
			descripcion.html("Asegúrate de escribir una manera de llamar al pene.");
		};

		//seleccion vagina
		if( id_selected == 4){
			input_frase.attr("placeholder","Ej.: Concha");
			name_artist.hide();
			agregar_significado.hide();
			descripcion.html("Asegúrate de escribir una manera de llamar a la vagina.");
		};

	});




	/*********************************
	 **** Init Dropdown Mi cuenta ****
	*********************************/
	var dropdownCuenta = nav.find("#dropdownCuenta").dropdown();







	/*****************************
	 **** Tooltips Header ****
	*****************************/
	if( nav.find(".crear-cuenta").length > 0 ){
		nav.find(".crear-cuenta").tooltip({
			offset: "-16 10"
		});
	}





	/*****************************
	 **** Tooltips Footer ****
	*****************************/
	if( $("footer .creadores").length > 0 ){
		$("footer .creadores").find("a").tooltip({
			offset: "-16 10"
		});
	}




	/****************************************
	 **** Tooltips en acciones de frases ****
	*****************************************/
	if( frases.find(".ver-significado").length > 0 ){
		frases.find(".ver-significado").tooltip({
			offset: "-18 10"
		});
	}

	if( frases.find(".agregar-significado").length > 0 ){
		frases.find(".agregar-significado").tooltip({
			offset: "-20 10"
		});
	}

	if( frases.find(".borrar").length > 0 ){
		frases.find(".borrar").tooltip({
			offset: "-16 10"
		});
	}





	/***********************************
	 **** ALERT FILTRO DE BUSQUEDA ****
	***********************************/

	$(".alert-filtros .ch-close").on("click", function(){
		$(this).parent().slideUp(function(){
			$(this).remove();
		})
	});






	/*****************************
	 **** Agregar significado ****
	*****************************/
	if(frases.find(".agregar-significado").length > 0){

		frases.find(".agregar-significado").each(function(){

			// Creo el contenido
			var content =	"<p>Sugiérenos el significado, o en qué caso se utiliza</p>" +
							"<form id='enviar-significado'>" +
								"<textarea></textarea>" +
								"<input type='submit' value='Sugerir' class='btn btn-negro btn-disabled' />" +
							"</form>" +
							"<p class='feedback disabled'>Revisaremos tu sugerencia. Puede ser que la modifiquemos o no la incluyamos.</p>";

			// Creo el layer
			$(this).layer({
				"width": "300px",
				"event": "click",
				"classes": "ch-box-lite layer-agregar-significado",
			    "offset": "-15 10",
				"content": content,
				"onShow": function(){

					// Oculto el tooltip
					//tooltip["agregarSignificado"].hide();

					// Cache de variables
					var layer = $(this);
					var layer_trigger = $(this.element);
					var contenidoLayer = $(".layer-agregar-significado");
					var enviado = false; //Flag para saber si se envio

					// Chequeo que tenga contenido el textarea y habilito el submit
					contenidoLayer.find("textarea").on("keyup", function(){

						if( $(this).val() == "" ){
							contenidoLayer.find("input[type=submit]").addClass("btn-disabled");
							contenidoLayer.find(".feedback").addClass("disabled");
						}else{
							contenidoLayer.find("input[type=submit]").removeClass("btn-disabled");
							contenidoLayer.find(".feedback").removeClass("disabled");
						}

					})


					// Envio el form
					$(".layer-agregar-significado").find("form").on("submit", function(event){

						event.preventDefault();

						// Si el btn esta disabled no hago nada
						if( contenidoLayer.find("input[type=submit]").hasClass("btn-disabled") ||  enviado == true ) return;


						//Aca la query por ajax para que se grabe el significado{

							//En el success del ajax muestro mensaje de exito
							contenidoLayer.find(".feedback").addClass("success").text("!Muchas gracias! Tu sugerencia fue enviada con éxito :)");

							// Desabilito el submit
							contenidoLayer.find("input[type=submit]").addClass("btn-disabled");

							// Desabilito el submit
							contenidoLayer.find("textarea").attr("readonly","readonly").addClass("disabled");

							// Unbind keyup al textarea
							contenidoLayer.find("textarea").off("keyup");

							// Me grabo que fue enviado para que no pueda enviarlo de nuevo
							enviado = true;

						//}

					});


				},

				"onHide": function(){

					// Si el mensaje se envio
					if( $(".layer-agregar-significado").find(".feedback").hasClass("success") ){

						// Agrego class disabled al icono y le unbindeo el click y el hover para evitar que se abra el layer nuevamente
						$(this.element).addClass("enviado").off('click').off("hover");

					}

				}

			});

		});

	}






	/*****************************
	 **** Eliminar frases ****
	*****************************/

	if(frases.find(".borrar").length > 0){

		frases.find(".borrar").each(function(){

			var content =	"<p>¿Estás seguro que deseas <strong>eliminar</strong> esta frase?</p>" +
							"<div class='action'>" +
								"<input type='button' class='btn btn-gris cancelar' value='Cancelar' />" +
								"<input type='button' class='btn btn-negro eliminar' value='Eliminar' />" +
							"</div>";

			$(this).layer({
				"width": "300px",
				"event": "click",
				"classes": "ch-box-lite layer-eliminar-frase",
			    "offset": "-15 10",
				"content": content,
				"onShow": function(){

					// oculto el tooltip para que no se solape con el layer
					//tooltip["borrarFrase"].hide();

					// Me guardo unas variables para usarlas despues en las funciones de abajo
					var layer = $(this);
					var layer_trigger = $(this.element);

					// Bind evento para cancelar y salir del layer
					$(".layer-eliminar-frase").find(".cancelar").on("click", function(){
						layer[0].hide();
					});

					// Bind evento para eliminar la frase
					$(".layer-eliminar-frase").find(".eliminar").on("click", function(){


						//ACA hago el ajax y borro la frase{

							// En el succes del ajax desaparezco el layer
							layer[0].hide();

							// Y borro la frase del documento
							layer_trigger.parents(".frases").slideUp(function(){
								$(this).remove();
							});

						//}

					});


				}
			});

		});

	}




	/*****************************
	 **** Init Facebook Plugins ****
	*****************************/
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));






	/*****************************
	 **** Init Twitter Plugins ****
	*****************************/
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');


})();