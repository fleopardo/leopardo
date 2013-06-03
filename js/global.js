;(function(){

	"use strict";

	/*
	 * Elimino class no-js
	*/
	$("html").removeClass("no-js");


	/*
	 * Caché de variables
	*/
	var frases = $(".frases"),
		formBusqueda = $(".barra").find("form"),
		barraNegra = $(".barra"),
		nav = barraNegra.find("nav");


	/*
	 * Inicializacion Facebook Like
	*/
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));


	/*
	 * Inicializacion Twitter share
	*/
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');


	/*
	 * Funcionalidad en el buscador
	*/

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



	/*
	 * Inicilizar dropdown de "crear cuenta
	*/
	var dropdownCuenta = nav.find("#dropdownCuenta").dropdown();


	/*
	 * Mostrar las acciones de las frases
	*/
	/*frases.on("mouseenter", function(){
		$(this).find(".acciones").addClass("visible");
	})

	frases.on("mouseleave", function(){
		$(this).find(".acciones").removeClass("visible");
	})*/


	/*
	 * Tooltip en header
	*/
	if( nav.find(".crear-cuenta").length > 0 ){
		nav.find(".crear-cuenta").tooltip({
			offset: "-16 10"
		});
	}

	/*
	 * Inicializacion de los tooltips en acciones de cada frase
	*/
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


	/*
	 * Alert Filtros de busqueda
	*/
	$(".alert-filtros .ch-close").on("click", function(){
		$(this).parent().slideUp(function(){
			$(this).remove();
		})
	});

	/*
	 * Layer Agregar significado
	*/

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

	/* Fin agregar significado */




	/*
	 * Eliminar frases
	*/

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

	/* Fin eliminar Frases */

})();