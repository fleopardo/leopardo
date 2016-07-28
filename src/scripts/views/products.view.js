App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Products = Marionette.ItemView.extend({

        template: App.templates.products,

        onShow: function() {

        	var categoryReceive = window.document.location.hash.split('?')[1];

        	if (categoryReceive) {

        		setTimeout(function() {
	        		var $container = $('[data-js="' + categoryReceive + '"]');
	        		$container[0].scrollIntoView();
	        	
	        		$container.addClass('blink');
	        		setTimeout(function() {
	        			$container.removeClass('blink');
	        		}, 1000)

	        	}, 100);
        		

        	}

        }
    });

});
