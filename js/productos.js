;(function(){

	var carousel_hidraulicos = $('#carousel-hidraulicos'),
		carousel_neumaticos = $("#carousel-neumaticos");

	/* Instancio carouseles */

	carousel_hidraulicos.removeClass("mask").jcarousel();
	carousel_neumaticos.removeClass("mask").jcarousel();

	/* Pophovers */

	carousel_hidraulicos.find("img").each(function(){

		var that = $(this);

		that.popover({
			title: that.data("title"),
			content: that.siblings("p").text(),
			trigger: (app.touch) ? 'none' : 'hover',
			position: 'top',
			fadeSpeed: 200,
			hideOnHTMLClick: true
		});



		if (app.touch){

			that.on(app.event.TAP, function(){

				carousel_hidraulicos.find("img").popover('hideAll');

				setTimeout(function(){
					that.popover("show");
				},200);

			});

		}


	});

	carousel_neumaticos.find("img").each(function(){

		var that = $(this);

		that.popover({
			title: that.data("title"),
			content: that.siblings("p").text(),
			trigger: (app.touch) ? 'none' : 'hover',
			position: 'top',
			fadeSpeed: 200,
			hideOnHTMLClick: true
		})

		if (app.touch){

			that.on(app.event.TAP, function(){

				carousel_hidraulicos.find("img").popover('hideAll');

				setTimeout(function(){
					that.popover("show");
				},200);

			});

		}

	});



}());