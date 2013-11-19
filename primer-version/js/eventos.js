;(function(){

	var sliderEventos = $('.slider').plusSlider({
		defaultSlide: 0,
	    displayTime: 4000,
	    speed: 800,
		autoPlay: true,
		createArrows: false,
		keyboardNavigation: true,
		pauseOnHover: true,
		sliderEasing: 'easeInOutExpo',
		paginationPosition: 'append',
		sliderType: 'fader'
	});

})();