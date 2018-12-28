App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Contact = Marionette.ItemView.extend({

        template: App.templates.contact,

        ui: {
            'btnSubmit': '[data-js="btnSubmit"]',
            'nombre': '[data-js="nombre"]',
            'apellido': '[data-js="apellido"]',
    		'email': '[data-js="email"]',
    		'telefono': '[data-js="telefono"]',
    		'ciudad': '[data-js="ciudad"]',
    		'empresa': '[data-js="empresa"]',
    		'consulta': '[data-js="consulta"]',
            'contentError': '[data-js="contentError"]'
        },

        events: {
            'click @ui.btnSubmit': 'contact'
        },

        onShow: function() {
            this.showMap();
            this.ui.contentError.hide();
        },

        showMap: function() {
            //GOOGLE MAPS
        	if( typeof(google) != "undefined"){

        		var options = {
        			zoom: 15,
        			center: new google.maps.LatLng(-34.423483, -58.966853),
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
        },

        contact: function(event) {

    		event.preventDefault();
    		event.stopPropagation();

            var that = this,
                error = {};
            error.fields = {};

    		//Si ya hay mensajes los oculto
    		this.ui.contentError.html('').hide();

    		//valido nombre
    		if(!(isNaN(this.ui.nombre.val())) || this.ui.nombre.val() == null || this.ui.nombre.val().length == 0 || /^\s+$/.test(this.ui.nombre.val()) || this.ui.nombre.val() == this.ui.nombre.attr("placeholder")) {
    			error.flag = true;
    			error.fields.nombre = true;
    			this.ui.nombre.addClass("error");
    		}else{
    			this.ui.nombre.removeClass('error');
    		}

            //valido apellido
    		if(!(isNaN(this.ui.apellido.val())) || this.ui.apellido.val() == null || this.ui.apellido.val().length == 0 || /^\s+$/.test(this.ui.apellido.val()) || this.ui.apellido.val() == this.ui.apellido.attr("placeholder")) {
    			error.flag = true;
    			error.fields.apellido = true;
    			this.ui.apellido.addClass("error");
    		}else{
    			this.ui.apellido.removeClass('error');
    		}

    		//valido email
    		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.ui.email.val())) || this.ui.email.val() == this.ui.email.attr("placeholder")) {
    			error.flag = true;
    			error.fields.email = true;
    			this.ui.email.addClass("error");
    		}else{
    			this.ui.email.removeClass('error');
    		}

    		//valido telefono
    		if(this.ui.telefono.val() == null || this.ui.telefono.val() == 0 || this.ui.telefono.val() == "" ){
    			//puede estar vacio
    			this.ui.telefono.removeClass('error');
    		}else{
    			//Si tiene datos los valido
    			if( isNaN(this.ui.telefono.val()) || /^\s+$/.test(this.ui.telefono.val())) {
    				error.flag = true;
    				error.fields.telefono = true;
    				this.ui.telefono.addClass("error");
    			}else{
    				this.ui.telefono.removeClass('error');
    			}
    		}

            //valido ciudad
    		if(this.ui.ciudad.val() == null || this.ui.ciudad.val().length == 0 || this.ui.ciudad.val() == this.ui.ciudad.attr("placeholder")) {
    			error.flag = true;
    			error.ciudad = true;
    			this.ui.ciudad.addClass("error");
    		}else{
    			this.ui.ciudad.removeClass('error');
    		}

            //valido empresa
    		if(this.ui.empresa.val() == null || this.ui.empresa.val().length == 0 || this.ui.empresa.val() == this.ui.empresa.attr("placeholder")) {
    			error.flag = true;
    			error.fields.empresa = true;
    			this.ui.empresa.addClass("error");
    		}else{
    			this.ui.empresa.removeClass('error');
    		}

    		//valido consulta
    		if(this.ui.consulta.val().length <= 10) {
    			error.flag = true;
    			error.fields.consulta = true;
    			this.ui.consulta.addClass("error");
    		}else{
    			this.ui.consulta.removeClass('error');
    		}

    		//Si hubo errores
    		if (error.flag){
                this.showErrorForm(error,'1');
    		}else{
    			$.ajax({
    				type:'post',
    				url:'send-form.php',
    				data:{
    					'nombre': this.ui.nombre.val(),
    					'apellido': this.ui.apellido.val(),
    					'email': this.ui.email.val(),
    					'telefono': this.ui.telefono.val(),
    					'ciudad': this.ui.ciudad.val(),
    					'empresa': this.ui.empresa.val(),
    					'consulta': this.ui.consulta.val(),
                        'section': 'contact'
    				},
    				dataType:'json',
    				success:function(datos, status){
                        if (datos.success) {
                            that.showSuccessForm();
                        } else {
                            that.showErrorForm(error, '2');
                        }
    				},
                    error: function() {
                        that.showErrorForm(error,'2');
                    }
    			});
    		}
        },

        showSuccessForm: function() {
            this.ui.nombre.val('');
            this.ui.apellido.val('');
            this.ui.email.val('');
            this.ui.telefono.val('');
            this.ui.ciudad.val('');
            this.ui.empresa.val('');
            this.ui.consulta.val('');
            this.ui.contentError.append('<p id="mensajeExito">Los datos fueron enviados correctamente. Muchas Gracias.</p>');
            this.ui.contentError.fadeIn(1000);
        },

        showErrorForm: function(error, type) {
            var mensaje = '';

            if (type === '1') {
                mensaje = '<p id="mensajeError">Los siguientes campos tienen errores: ';
                if(error.fields.nombre){ mensaje += 'Nombre. ';}
    			if(error.fields.apellido){ mensaje += 'Apellido. ';}
    			if(error.fields.email){ mensaje += 'Email. ';}
    			if(error.fields.telefono){ mensaje += 'Telefono (Solo numeros). ';}
    			if(error.fields.ciudad){ mensaje += 'Ciudad ';}
    			if(error.fields.empresa){ mensaje += 'Empresa ';}
    			if(error.fields.consulta){ mensaje += 'Consulta. ';}
                mensaje += '</p>';
            }

            if (error.type === '2') {
                mensaje = '<p id="mensajeError">No se pudo enviar la consulta, intente nuevamente.</p>';
            }

            this.ui.contentError.append(mensaje);
            this.ui.contentError.fadeIn(1000);
        }

    });

});
