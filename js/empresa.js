;(function(){

	var carousel = $('#carousel-empresa'),
		zoom = $(".empresa .zoom");

	/* Instancio carousel */
	carousel.removeClass("mask").jcarousel();

	/* Pongo la primer imagen del Carousel en el ZOOM */
	zoom.find("img").attr("src",carousel.find("img:first").attr("src"));

	/* ZOOM de carousel*/
	carousel.find("a").on("click", function(event){

		event.preventDefault();

		zoom.find("img").attr("src", $(this).attr("href"));

	});

}());