App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Contact = Marionette.ItemView.extend({

        template: App.templates.contact,

        onShow: function() {
            //GOOGLE MAPS
        	if( typeof(google) != "undefined"){

// -34.5760088
// -58.4977576
//
// -34.5760132
// -58.4955689
        		var options = {
        			zoom: 15,
        			center: new google.maps.LatLng(-34.5760088,-58.4977576),
        			mapTypeId: google.maps.MapTypeId.ROADMAP,
        			mapTypeControl: false,
        			navigationControl: false,
        			streetViewControl: false
        		};
        		var map1 = new google.maps.Map(document.getElementById('map'), options);

        		new google.maps.Marker({
        			position: map1.getCenter()
        			, map: map1
        			, cursor: 'default'
        			// , icon: './css/assets/fd_map-flag.png'
        			, draggable: true
        		});

        	}

        }
    });

});
