/*
 * autors:
 * Santiago Leopardo @sleopardo
 * Fernando Leopardo @fer_leopardo
*/

;(function(window){


	var app = {};


	/*
	 * Cache de variables cros-site / Helpers
	*/

	app.window = $(window);

	app.document = $(document);

	app.html = $("html");

	app.body = $("body");


	/*
	 * Flag para saber si es dispositivo touch
	*/

	app.touch = 'createTouch' in document;

	/*
	 * Flag para saber si es ipad
	*/
	app.isiPad = navigator.userAgent.match(/iPad/i) != null;

	/*
	 * Eventos personalizados para soportar mobile y desktop
	*/

	app.event = {};

	app.event.DOWN = (app.touch) ? 'touchstart' : 'mousedown';

	app.event.UP = (app.touch) ? 'touchend' : 'mouseup';

	app.event.MOVE = (app.touch) ? 'touchmove' : 'mousemove';

    app.event.TAP = (app.touch) ? 'touchend' : 'click';

    app.event.ENTER = (app.touch) ? 'touchstart' : 'mouseenter';

    app.event.LEAVE = (app.touch) ? 'touchend' : 'mouseleave';


	/*
     * Funcion para carga async de imagenes
    */

    app.imglazyload = function(selector){

		selector.each(function(i,e){

			var srcOrig = $(e).attr("data-src");

			$(e).attr("src",srcOrig);

		});

	}

    /*
     * Export object
    */
	window.app = app;


	/*
	 * Elimino class no-js
	*/
	$("html").removeClass("no-js");

	/*
	 * Inicializacion de la navegacion async
	*/

	if( app.touch ){

		if( app.isiPad ){
			app.html.addClass("ipad");
		}

	}else{

		navegacionAsync.init();

	}


})(window);