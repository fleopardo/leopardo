(function(){

	var fondo;

	page_id == "home" ? fondo = "./images/fd_home.jpg" : fondo = "./images/fd_carreras.jpg";
	
	$("body").ezBgResize({ 
	    img : fondo
	});
	

})(window);