;(function(window){

	$(".detalle .ch-carousel").removeClass("mask").carousel({ "pagination": true });

	if( $("html").hasClass("onepage") ){

		// Vuelvo al carousel con el boton
		$(".volver").on(app.event.TAP, function(event){

			event.preventDefault();
			event.stopPropagation();

			$(".wrapper-detalle").fadeOut("fast",function(){

				$(this).remove();
				$("#web").fadeIn();

			});

		})

		// Vuelvo al carousel con el ESC
		$(document).one("keyup", function(e){

			if (e.keyCode == 27) {

				$(".wrapper-detalle").fadeOut("fast",function(){

					$(this).remove();
					$("#web").fadeIn();

				})

			}

		});

	}

}());