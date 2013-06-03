$(function(){
	
	function lazyLoad(carousel){
		var image = carousel.find('li img')
		image.each(function(){
			image = $(this).attr('orig');
			$(this).attr('src' , image);
		});
	}

	/* Muestro scroll o lo oculto */
	function showScroll(){
		
		if( $(window).height() < 700){
			$("body,html").css("overflow-y","visible");
		}else{
			$("body,html").css("overflow-y","hidden");
		}
	}

	

	$(window).resize(function(){
		// Me fijo si hay que mostrar scroll o no..
		showScroll();
	});

	// Me fijo si hay que mostrar scroll o no..
	showScroll();

	//Reemplazo los loading por las imagenes originales
	lazyLoad($('.carousel-productos'));

	//INICIALIZACION JCAROUSEL
	$('.carousel-productos').removeClass("mask").jcarousel({
		scroll: $('.carousel-productos').hasClass("home") ? 3 : 4,
		start: 1,
		easing: "easeOutCirc"
	});
	
	//GOOGLE MAPS
	if( typeof(google) != "undefined"){

		var options = {
			zoom: 15,
			center: new google.maps.LatLng(-34.660347,-58.426861),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			navigationControl: false,
			streetViewControl: false
		};
		var map = new google.maps.Map(document.getElementById('map'), options);
		
		new google.maps.Marker({
			position: map.getCenter()
			, map: map
			, title: 'Pulsa aquí'
			, cursor: 'default'
			, icon: './img/fd_map-flag.png'
			, draggable: true
		});

	}
	
	/*INICIALIZACION PLUS SLIDER -- PANTALLA IMAGENES  --  */
	
	/*$('#slider-dest').plusSlider({
		createArrows: false,
		sliderType: 'fader',
		displayTime: 3500,
		speed :  1200
	});*/
	
	
	/*INICIALIZACION DEL SCROLL TUNEADO*/

	$('.scroll-content').jScrollPane({
		verticalDragMaxHeight : 45,
		verticalDragMinHeight : 45 
	});
	
	/* Inicializo modal GoogleMap */
	$("#openMap").click(function(){
		$(".contentMap").modal({

			onOpen: function (dialog) {
				
				$(".contentMap").css("visibility", "visible");
				dialog.overlay.fadeIn('fast', function () {
					dialog.container.slideDown('fast', function () {
						dialog.data.fadeIn('fast');
					});
				});
			},

			onClose: function (dialog) {
				$(".contentMap").css("visibility", "hidden");
				dialog.data.fadeOut('fast', function () {
					dialog.container.slideUp('fast', function () {
						dialog.overlay.fadeOut('fast', function () {
							$.modal.close(); // must call this!
						});
					});
				});
			}

		});
	});
	
	/* Acordeones */
	$(".accordion-menu h2").bind("click",function(){

		var titulo = $(this);
		var lista = $(this).next();
		var idCategoria = $(this).attr("data-id");

		if(lista.hasClass("DN")){

			$(".accordion-menu ul").slideUp("fast",function(){
				$(".accordion-menu ul").addClass("DN");
				$(".accordion-menu h2").removeClass("selected");
			});

			lista.slideDown("fast",function(){
				lista.removeClass("DN");
				titulo.addClass("selected");
			});

		}else{
			
			lista.slideUp("fast",function(){
				lista.addClass("DN");
				titulo.removeClass("selected");
			});

		}

		$(".right-col").load("./get_categorias.php?id="+idCategoria, function(){
			
			//Inicio el carousel para los productos que traiga como resultado
			$('.carousel-productos').removeClass("mask").jcarousel({
				scroll: 1,
				start : 1
			});

			//Bindeo click para abrir el modal de productos
			$(".ver-producto").each(function(){
				$(this).one("click",function(event){
					
					var href = $(this).attr("href");
					openProductos(href);
					
					event.preventDefault();
					event.stopPropagation();
				});
			});
			
		});
		
	});


	/* Inicializo modal producto */
	$(".ver-producto").each(function(){
		$(this).one("click",function(event){

			var href = $(this).attr("href");	
			openProductos(href);

			event.preventDefault();
			event.stopPropagation();
		});
	});


	function openProductos(href){
		$("#producto").load(href,function(){

			//Lo oculto al principio
			$("#producto").css("visibility","hidden");

			$("#producto").modal({
				onOpen: function (dialog) {

					dialog.overlay.fadeIn('fast', function () {
						dialog.container.slideDown('fast', function () {
							dialog.data.fadeIn('fast');
						});
					});

				},

				onClose: function (dialog) {
					dialog.data.fadeOut('50', function () {
						dialog.container.slideUp('fast', function () {
							dialog.overlay.fadeOut('fast', function () {
								$.modal.close(); // must call this!
							});
						});
					});
				}
			});

			setTimeout(function(){

				//Necesita tiempo para que se cree el contenido..
				$('.scroll-content').jScrollPane({
					verticalDragMaxHeight : 45,
					verticalDragMinHeight : 45 
				});

				//Lo muestro
				$("#producto").css("visibility","visible");

			},500);

		});

	};


	/* Inicializo modal servicios */
	$("#openServicio").click(function(){
		$("#servicios").modal({

			onOpen: function (dialog) {
				dialog.overlay.fadeIn('fast', function () {
					dialog.container.slideDown('fast', function () {
						dialog.data.fadeIn('fast');
					});
				});
			},

			onClose: function (dialog) {
				dialog.data.fadeOut('fast', function () {
					dialog.container.slideUp('fast', function () {
						dialog.overlay.fadeOut('fast', function () {
							$.modal.close(); // must call this!
						});
					});
				});
			}

		});
	});



	//Funcion para validar el formulario de contacto
	var contactar = function(event){
		
		var nombre = $("form #nombre");
		var email = $("form #email");
		var telefono = $("form #telefono");
		var consulta = $("form #consulta");
		
		var nombreIngresado = $("form #nombre").val();
		var emailIngresado = $("form #email").val();
		var telefonoIngresado = $("form #telefono").val();
		var consultaIngresado = $("form #consulta").val();
		
		var contentError = $("#contentError");
		
		var error = false;
		var errorNombre = false;
		var errorEmail = false;
		var errorTelefono = false;
		var errorConsulta = false;
		
		//Si ya hay mensajes los oculto
		contentError.html('').hide();
		
		//valido nombre
		if(!(isNaN(nombre.val())) || nombre.val() == null || nombre.val().length == 0 || /^\s+$/.test(nombre.val()) || nombre.val() == nombre.attr("placeholder")) {
			error = true;
			errorNombre = true;
			nombre.addClass("error");
		}else{
			nombre.removeClass('error');
		}
		
		//valido email
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val())) || email.val() == email.attr("placeholder")) {
			error = true;
			errorEmail = true;
			email.addClass("error");
		}else{
			email.removeClass('error');
		}
		
		//valido telefono
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
		if(consulta.val().length <= 10) {
			error = true;
			errorConsulta = true;
			consulta.addClass("error");
		}else{
			consulta.removeClass('error');
		}
		
		
		//Si hubo errores
		if( error ){
			
			var mensajeError = '<p id="mensajeError">Los siguientes campos tienen errores: ';
			
			if(errorNombre){ mensajeError += 'Nombre. ';}
			if(errorEmail){ mensajeError += 'Email. ';}
			if(errorTelefono){ mensajeError += 'Telefono (Solo numeros). ';}
			if(errorConsulta){ mensajeError += 'Consulta. ';}
			
			mensajeError += '</p>';
			
			contentError.append(mensajeError);
			contentError.fadeIn(1000);
			
		}else{
			
			$.ajax({
				type:'post',
				url:'envio-mail.php',
				data:{
					nombre:nombreIngresado,
					email:emailIngresado,
					telefono:telefonoIngresado,
					consulta:consultaIngresado
				},
				dataType:'json',
				success:function(datos,status){
					if(datos.success == true){
						contentError.append('<p id="mensajeExito">Los datos fueron enviados correctamente. Muchas Gracias.</p>');
						nombre.val('');
						email.val('');
						telefono.val('');
						consulta.val('');
					}else{
						contentError.append('<p id="mensajeError">No se pudo enviar la consulta, intente nuevamente.</p>');
					}
					contentError.fadeIn(1000);
				}
			});
		}
		
		//Freno el submit del navegador
		event.preventDefault();
		event.stopPropagation();
	}
	
	
	/**** INIT ****/
	
	//append contenedor error
	$("form").prepend('<div id="contentError"></div>');
	
	//Envio de email
	$("#botonEnviarConsulta").click(function(event){
		contactar(event);
	});



}); 