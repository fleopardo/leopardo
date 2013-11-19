/* Funcionamiento de la carga async de las secciones */

;(function(){

	// cache de variables
	    var	navegacionAsync = {};



	// Variables publicas

		// Cache de la barra de navegacion
		navegacionAsync.nav = $(".nav-principal");

		// Cache de todos los links que haran uso del scrollTo
		navegacionAsync.links = $(".nav-async");

		// Cache de la seccion que esta cargada inicialmente
		navegacionAsync.initial_section = $(".toLoad:first");

		// Cache del id de la seccion inicial
		navegacionAsync.initial_section_id = navegacionAsync.initial_section.attr("id");

		// Flag para saber si tengo que hacer prepend o append
		navegacionAsync.flag_append_after = false;

		// Velocidad para el scrollTo
		navegacionAsync.speed_scroll = 0;

		// Easing
		navegacionAsync.easing = "easeInOutQuart";

		// Flag para entender si ejecuto o no el scroll
		navegacionAsync.flag_scrollwheel = true;



	// Metodos privados

		// Navegacion mediante la barra de links
		var bind_scroll_click = function(){

			navegacionAsync.links.live(app.event.TAP,function(event){

				event.preventDefault();

				var link = $(this);

				if( $(this).hasClass("active")) return;

				navegacionAsync.scrollTo(link);

			});

		}

		// Navegacion mediante la rueda del mouse
		var bind_scroll_mouse = function(){

			$(window).on('mousewheel', function(event, delta) {

				if( navegacionAsync.flag_scrollwheel ){

					navegacionAsync.flag_scrollwheel = false;

					setTimeout(function(){

						navegacionAsync.flag_scrollwheel = true;

					},2500);

					var active = navegacionAsync.nav.find(".active").parent();

					if( delta > 0 ){

						if(active.prev().length > 0){
							navegacionAsync.scrollTo(active.prev().children());
						}

					}else{

						if(active.next().length > 0){
							navegacionAsync.scrollTo(active.next().children());
						}

					}

				}

			});
		}

		// Navegacion mediante el teclado
		var bind_scroll_arrows = function(){

			$(document).on("keyup", function(e){

				var active = navegacionAsync.nav.find(".active").parent();

				if( e.keyCode == 38 || e.keyCode == 37 ){

					if(active.prev().length > 0){
						navegacionAsync.scrollTo(active.prev().children());
					}

				}

				if(e.keyCode == 40 || e.keyCode == 39){

					if(active.next().length > 0){
						navegacionAsync.scrollTo(active.next().children());
					}

				}

			});
		}

		// Carga todas las secciones
		var load_sections = function(){

		    // Recorro las secciones
		    navegacionAsync.nav.find("a").each(function(){

		        var that = $(this);

		        var section_wrapper = $('<div class="section-wrapper"></div>');

		        // Si tiene la class active seteo la variable en true y no hago nada
		        if( that.hasClass("active") ){

		        	navegacionAsync.flag_append_after = true;

		        // Si no tiene la class active entro
		        }else{

			        // Si el flag false cargo las secciones con before
			        if( !navegacionAsync.flag_append_after ){

			            section_wrapper.insertBefore(navegacionAsync.initial_section);

			        // Sino las cargo con after
			        }else{

			        	// Si ya se cargo alguna pantalla despues de la activa la agrego despues del ultimo section
			        	if( navegacionAsync.initial_section.nextAll(".section-wrapper").length > 0 ){

			        		section_wrapper.insertAfter(".section-wrapper:last");

			        	// Sino la inserto justo despues de la active
			        	}else{

							section_wrapper.insertAfter(navegacionAsync.initial_section);

			        	}

			        }

			        // En el contenedor recien creado cargo la seccion por ajax
			        var section_to_load = that.attr("href");

			        // Llamo a la seccion, solo lo que esta dentro del class .toLoad
			        section_wrapper.load(section_to_load + ' .toLoad', function(response,status, xhr){

			        	// Acomodo la pantalla en la seccion activa
			        	$.scrollTo("#" + navegacionAsync.initial_section_id, 0);

			        	// Si da OK, cargo los script de cada pantalla
			        	if (status == "success"){

			        		$.getScript(base_url + "/js/"+that.data('nav:id')+".js");

						}

		            });

		        }

		    });

			// Una vez creadas las secciones bindeo los distintos metodos de navegacion
			bind_scroll_click();

			bind_scroll_mouse();

			bind_scroll_arrows();
		}

		//Pop State
		var popstate = function(){

			// Used to detect initial (useless) popstate.
			// If history.state exists, assume browser isn't going to fire initial popstate.
			var popped = ('state' in window.history),
				initialURL = window.location.href;

			// popstate handler takes care of the back and forward buttons
			// You probably shouldn't use pjax on pages with other pushState
			// stuff yet.
			window.onpopstate = function(event) {

				// Ignore inital popstate that some browsers fire on page load
				var initialPop = !popped && location.href == initialURL

				popped = true

				if ( initialPop ) return

				var state = event.state;

				if ( state ) {

					if ($("#" + event.state.page_id).length > 0){

						// Necesito enviar el link a la funcion scrollTo
						var linkToActive = navegacionAsync.nav.find("a[data-nav\\:id="+event.state.page_id+"]");

						navegacionAsync.scrollTo(linkToActive, true);

					}

				}

			}

		}

	// Metodos publicos

		// Funcion para activar el link de la seccion que se clickeo
		navegacionAsync.set_active = function(page_id){

			navegacionAsync.nav.find("a").removeClass("active visible");

			var link_to_active = navegacionAsync.nav.find("a[data-nav\\:id="+page_id+"]");

			link_to_active.addClass("active visible");

		}

		// Funcion para scrollear hasta la seccion que se clickeo
		navegacionAsync.scrollTo = function(link,notDoPushState){

			$(".contenedor .cuerpo, .nav-principal").addClass("animated fadeOutLeft");

			setTimeout(function(){

				var page_id = link.data("nav:id");

				$.scrollTo.window().queue([]).stop();

				$.scrollTo("#" + page_id, navegacionAsync.speed_scroll, {

					easing: navegacionAsync.easing,

					onAfter: function(){

						$(document).trigger("app.scrolled");

						$(".contenedor .cuerpo, .nav-principal").removeClass("fadeOutLeft");

						$(".contenedor .cuerpo, .nav-principal").addClass("fadeInRight");

					}

				});

				// Si llega el parametro con true no lo ejecuto
				if(notDoPushState != true){

					// Si es home no pongo nada..
					if( page_id == "home"){
						var newUrl = base_url + "/";

					}else{
						var newUrl = base_url + "/" + page_id + "/";

					}

					if(window.history.pushState){

						window.history.pushState({'page_id':page_id}, newUrl, newUrl);

					}
				}

				navegacionAsync.set_active(page_id);

				$(document).trigger("app.scrolling");

			},800);


		}

		navegacionAsync.init = function(){

			// Agrego la class onepage para aplicar algunos estilos especiales
			$("html").addClass("onepage");

			navegacionAsync.initial_section.find("nav .active").addClass("visible");

			popstate();

			load_sections();

			$(".nav-principal").removeClass("fadeIn");

			// Seteo el primer popState
			// Si es home no pongo nada..
			if( navegacionAsync.initial_section_id == "home"){

				var firstUrl = base_url+ "/";

			}else{
				var firstUrl = base_url + "/" + navegacionAsync.initial_section_id + "/";

			}

			if(window.history.pushState){
				window.history.pushState({'page_id':navegacionAsync.initial_section_id}, firstUrl, firstUrl);
			}


		}


	// Exporto el objeto
	window.navegacionAsync = navegacionAsync;

})();