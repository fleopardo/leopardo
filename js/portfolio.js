;(function(){

	var carousel = $("#web");

	// Inicializa el carousel de trabajos
	var carouselPortfolio = carousel.removeClass("mask").carousel({ "pagination": true });

	// Funcion para abrir el detalle
	var openDetalle = function(link){

		var section_to_load = link.attr("href");

		var section_wrapper = $('<div class="wrapper-detalle"></div>');

		section_wrapper.insertAfter(carousel);

		$(".wrapper-detalle").load(section_to_load + ' .detalle', function(response,status, xhr){

			if( status == "success"){

				carousel.fadeOut("fast", function(){

					$(".wrapper-detalle").fadeIn();

					// Por orden de directorios tuve que hacer esta validacion
		        	$.getScript(base_url + "/js/portfolio-interna.js");

				})

			}else{

				alert("Ocurrió un error");

			}

		})



	}




	// Bindeo eventos

	if( !app.touch ){
		carousel.find("a").on(app.event.TAP, function(event){

			event.preventDefault();
			event.stopPropagation();

			openDetalle($(this));

		})
	}

}());
