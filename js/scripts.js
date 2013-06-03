var initInterval;
// decorations config

var decorations = {
	'left-01': { 'classes': 'capas left', 'posY': 0, 'posX': 150, 'speed': 8 },
	'left-02': { 'classes': 'capas left', 'posY': 599, 'posX': 50, 'speed': 4 },
	'right-01': { 'classes': 'capas right', 'posY': 10, 'posX': 1300, 'speed': 8 },
	'right-02': { 'classes': 'capas right', 'posY': 1732, 'posX': 1300, 'speed': 5 }
};

$(function(){

	// javascript enabled so we remove class from body
	$('html').removeClass('no-js');

	// section top position
	if ($('html').hasClass('ie7') || $('html').hasClass('ie8')) {
		windowHeight = document.documentElement.clientHeight;
		windowWidth = document.documentElement.clientWidth;
	} else {
		windowHeight = window.innerHeight;
		windowWidth = window.innerWidth;
	}
	scrollSpeed = 2500;
	siteWidth = 1920;
	sectionsHeight = $('.section:first').innerHeight();
	sectionsPadding = $('.section:first').height() / 2;

	positionCalculate = Math.round(((windowHeight - sectionsHeight) / 2));

	// cache section loaded in markup
	currentSection = $('.section:first');

	// auto load sections
	indexSection = $('nav li.active').index();
	totalSections = $('nav li').size();

	$('nav li:not(.active) a').each(function(i, item){

		sectionHolder = $('<div class="section-holder"></div>');
		if ($(item).parent().index() < indexSection) {
			sectionHolder.insertBefore(currentSection);
		} else {
			if (currentSection.nextAll('.section-holder').size() > 0) {
				sectionHolder.insertAfter('.section-holder:last');
			} else {
				sectionHolder.insertAfter(currentSection);
			}
		}

		sectionHolder.load(this.href + ' .section', function (response) {
			count = i + 1;
			if (count == totalSections - 1) {
				initInterval = self.setInterval('init()', 2000);
			}
		});

	});
	// scroll sections
	$('nav li a, .section footer li a').live('click', function(e) {
		e.preventDefault();
		indexItem = $(this).parent().index();
		var boxPosition = $('.section:eq(' + indexItem + ')').offset().top;
		$.scrollTo(boxPosition - positionCalculate, {speed: scrollSpeed, easing:'easeInOutCirc'});
		//$('html,body').animate({scrollTop: boxPosition - positionCalculate}, "slow");
	});

	// logo click
	$('.logo').live('click', function(e){
		e.preventDefault();
		var boxPosition = $('.section#home').offset().top;
		$.scrollTo(boxPosition - positionCalculate, {speed: scrollSpeed, easing:'easeInOutCirc'});
	});
	// orders & delivery button scroll
	$('#about .cta-btn, #products .cta-btn, .orders-btn').live('click', function(e) {
		e.preventDefault();
		var boxPosition = $('.section#contact').offset().top;
		$.scrollTo(boxPosition - positionCalculate, {speed: scrollSpeed, easing:'easeInOutCirc'});
	});
	// products btns scroll
	$('#home .cta-btn, #products-overview a').live('click', function(e) {
		e.preventDefault();
		var boxPosition = $('.section#products').offset().top;
		$.scrollTo(boxPosition - positionCalculate, {speed: scrollSpeed, easing:'easeInOutCirc'});
	});

	decorationsLoad();
	// Cache the Window object
	windowElement = $(window);
	windowElement.scroll(function(){
		decorationPosition();
	});
	windowElement.resize(function(){
		// update window sizes variables
		if ($('html').hasClass('ie7') || $('html').hasClass('ie8')) {
			windowHeight = document.documentElement.clientHeight;
			windowWidth = document.documentElement.clientWidth;
		} else {
			windowHeight = window.innerHeight;
			windowWidth = window.innerWidth;
		}
		decorationPosition();
	});

	/*
	 * Form Validation & Submit
	 */
	$('#contact-form').live('submit', function(event) {

		event.preventDefault();
		event.stopPropagation();

		$('#contact-form .input').removeClass('error');

		var name = $('#name');
		var email = $('#email');
		var message = $('#message');

		var nameIngresado = $('#name').val();
		var emailIngresado = $('#email').val();
		var messageIngresado = $('#message').val();

		var error = false;
		var errorName = false;
		var errorEmail = false;
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

			/*var mensajeError = '<p id="mensajeError">Los siguientes campos tienen errores: ';

			if(errorName){ mensajeError += 'Nombre. ';}
			if(errorEmail){ mensajeError += 'Email. ';}
			if(errorPais){ mensajeError += 'Telefono (Solo numeros). ';}
			if(errorMessage){ mensajeError += 'Consulta. ';}

			mensajeError += '</p>';

			contentError.append(mensajeError);
			contentError.fadeIn(1000);*/

		}else{

			$.ajax({
				type: 'POST',
				data: 'name='+nameIngresado+'&email='+emailIngresado+'&message='+messageIngresado,
				dataType: 'json',
				url: 'contacto.php',
				error: function (xhr, ajaxOptions, thrownError) {
					$('#form-response').text('Error, intente nuevamente!').removeClass('loading').addClass("error");
				},
				success: function(r) {

					if(r.status == 'ok') {
						$('#name, #email, #message').val('');
						$('#form-response').text('Gracias por su consulta!').removeClass('loading').removeClass("error");
					}
				}
			});

		}

	});

	$('#contact-form input, #contact-form textarea').live('focus', function(e){
		$(this).removeClass('error')
	});

});

function decorationsLoad () {
	// insert decorations in DOM
	$.each(decorations, function (key, value) {
		$('<div id="' + key + '" class="' + value.classes + '" data-type="sprite" data-offsetY="' + value.posY + '" data-Xposition="' + value.posX + '" data-speed="' + value.speed + '"></div>').insertAfter(currentSection);
	});
}

function decorationPosition () {
	// Check for other sprites in this section
	$('[data-type="sprite"]').each(function() {
		// Cache the sprite
		sprite = $(this);

		// Use the same calculation to work out how far to scroll the sprite
		var yPos = -(windowElement.scrollTop() / sprite.data('speed'));

		posMarginLeft = Math.round((windowWidth - siteWidth) / 2);

		coordsX = sprite.data('Xposition') + posMarginLeft;

		var coords = coordsX + 'px ' + (yPos + sprite.data('offsetY')) + 'px';
		sprite.css({ backgroundPosition: coords });
	});
}

function init () {

	window.clearInterval(initInterval);

	// Init scroll
	var boxPosition = currentSection.offset().top;
	$.scrollTo(boxPosition - positionCalculate);

	if ($('html').hasClass('ie7') || $('html').hasClass('ie8')) {
		$('.section').each(function(){
			$(this).html(innerShiv($(this).html()));
		});
	}

	$('.capas').height(totalSections * currentSection.innerHeight());

	$('[data-type="sprite"]').each(function() {
		$(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
		$(this).data('speed', $(this).attr('data-speed'));
	});

	decorationPosition();


	//Seteo de scroll tuneado en seccion videos y audio dentro de trabajos
	$('.scroll-videos, .scroll-audios').jScrollPane({
		verticalDragMaxHeight : 40,
		verticalDragMinHeight : 40
	});


	// SLIDER VIDEOS HOME

	$('#slider-video').plusSlider({
		createArrows: false,
		sliderType: 'fader' // Choose whether the carousel is a 'slider' or a 'fader'
	});

	/*PRETTY PHOTO - PLUG IN ABRIR VIDEO EN POPUP*/
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools:false
	});




	// SLIDER MARCAS QUE CONFIARON

	$('.sliderLogos').bjqs({
	        'width' : 390,
	        'height' : 70,
	        'showMarkers' : false,
	        'showControls' : false,
	        'centerMarkers' : false,
	        'automatic' : true

	});

	//FIN SLIDER MARCAS QUE CONFIARON


	//*MODAL OTROS PROYECTOS

	$('.otros-trabajos-cont').click(function(){

		$('#contentOtrosTrabajos').css("visibility","hidden");

		$('#contentOtrosTrabajos').modal({
			opacity:80,
			overlayCss: {backgroundColor:"#000"},
			overlayClose : true,
			onOpen: function (dialog) {

				dialog.overlay.fadeIn('fast', function () {
					dialog.container.slideDown(100, function () {
						dialog.data.fadeIn('fast');
					});
				});

			},

			onClose: function (dialog) {
				dialog.data.fadeOut('50', function () {
					dialog.container.slideUp(100, function () {
						dialog.overlay.fadeOut('fast', function () {
							$.modal.close(); // must call this!
						});
					});
				});
			}

		});

		setTimeout(function(){

			//Necesita tiempo para que se cree el contenido..
			$('.otros-proyectos-scroll').jScrollPane({
				horizontalDragMaxHeight : 8,
				horizontalDragMinHeight : 8
			});

			//Lo muestro
			$("#contentOtrosTrabajos").css("visibility","visible");

		},1000);


	});

	var videos = {
		v1 : "http://www.youtube.com/embed/gTqspNePVM8?rel=0", //Discovery
		v2 : "http://www.youtube.com/embed/lj4Rbw6zqOI?rel=0", //fibertel
		v3 : "http://www.youtube.com/embed/gq35CxROAGA?rel=0", //Gen 2.0
		v4 : "http://www.youtube.com/embed/26hB-rbZ5Eo?rel=0", //Reporte gambling
		v5 : "http://www.youtube.com/embed/iGHxgZFIsr4?rel=0", //TEDX
		v6 : "http://www.youtube.com/embed/Rlq1ZJhwcXw?rel=0", //OM Latam
		v7 : "http://www.youtube.com/embed/edKOFvJB6XA?rel=0", //Imperio DT
		v8 : "http://www.youtube.com/embed/t2dHJ18VfNg?rel=0", //Playfe
		v9 : "http://www.youtube.com/embed/9vaQzKSZ_z8?rel=0", //Biingo Golden Jack
		v10 : "http://www.youtube.com/embed/4tCjH3-om0k?rel=0", //Coprotagonico TYC
		v11 : "http://www.youtube.com/embed/CyYRQy1CTNc?rel=0" //Verizon

	};



	$('.otros-proyectos-scroll li a').each(function(){
		$(this).click(function(e){
			e.preventDefault();
			var videoId =  $(this).attr('data-id');
			$('.videos-cont').find('iframe').attr('src',videos[videoId]);
		});
	});

	//*FIN MODAL OTROS PROYECTOS



	//PLACEHOLDER CHROME

	$.support.placeholder = false;
	test = document.createElement('input');
	if('placeholder' in test) jQuery.support.placeholder = true;

	if(!$.support.placeholder) {
		var active = document.activeElement;
		$(':text,textarea').focus(function () {
			if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
				$(this).val('').removeClass('hasPlaceholder');
			}
		}).blur(function () {
			if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
				$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
			}
		});
		$(':text,textarea').blur();
		$(active).focus();
		$('form').submit(function () {
			$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
		});
	}



}
