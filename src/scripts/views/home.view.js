App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Home = Marionette.ItemView.extend({

        template: App.templates.home,

        ui: {
            'btnSubmit': '[data-js="btnSubmit"]',
            'nombre': '[data-js="nombre"]',
    		'email': '[data-js="email"]',
    		'telefono': '[data-js="telefono"]',
    		'consulta': '[data-js="consulta"]',
            'contentError': '[data-js="contentError"]'
        },

        events: {
            'click @ui.btnSubmit': 'contact'
        },

        onShow: function() {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                responsiveClass: true,
                dotsEach: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    800:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }

            });
        },

        contact: function(event) {

    		event.preventDefault();
    		event.stopPropagation();

            var error = false;
    		var errorNombre = false;
    		var errorEmail = false;
    		var errorTelefono = false;
    		var errorConsulta = false;

            var nombreIngresado = this.ui.nombre.val();
    		var emailIngresado = this.ui.email.val();
    		var telefonoIngresado = this.ui.telefono.val();
    		var consultaIngresado = this.ui.consulta.val();

    		//Si ya hay mensajes los oculto
    		this.ui.contentError.html('').hide();

    		//valido nombre
    		if(!(isNaN(this.ui.nombre.val())) || this.ui.nombre.val() == null || this.ui.nombre.val().length == 0 || /^\s+$/.test(this.ui.nombre.val()) || this.ui.nombre.val() == this.ui.nombre.attr("placeholder")) {
    			error = true;
    			errorNombre = true;
    			this.ui.nombre.addClass("error");
    		}else{
    			this.ui.nombre.removeClass('error');
    		}

    		//valido email
    		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.ui.email.val())) || this.ui.email.val() == this.ui.email.attr("placeholder")) {
    			error = true;
    			errorEmail = true;
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
    				error = true;
    				errorTelefono = true;
    				this.ui.telefono.addClass("error");
    			}else{
    				this.ui.telefono.removeClass('error');
    			}
    		}

    		//valido consulta
    		if(this.ui.consulta.val().length <= 10) {
    			error = true;
    			errorConsulta = true;
    			this.ui.consulta.addClass("error");
    		}else{
    			this.ui.consulta.removeClass('error');
    		}

    		//Si hubo errores
    		if (error){

    			var mensajeError = '<p id="mensajeError">Los siguientes campos tienen errores: ';
    			if(errorNombre){ mensajeError += 'Nombre. ';}
    			if(errorEmail){ mensajeError += 'Email. ';}
    			if(errorTelefono){ mensajeError += 'Telefono (Solo numeros). ';}
    			if(errorConsulta){ mensajeError += 'Consulta. ';}
    			mensajeError += '</p>';

    			this.ui.contentError.append(mensajeError);
    			this.ui.contentError.fadeIn(1000);

    		}else{

    			$.ajax({
    				type:'post',
    				url:'envio-formulario.php',
    				data:{
    					'nombre': nombreIngresado,
    					'email': emailIngresado,
    					'telefono': telefonoIngresado,
    					'consulta': consultaIngresado,
                        'section': 'home'
    				},
    				dataType:'json',
    				success:function(datos,status){
    					if(datos.success == true){
    						this.ui.contentError.append('<p id="mensajeExito">Los datos fueron enviados correctamente. Muchas Gracias.</p>');
    						this.ui.nombre.val('');
    						this.ui.email.val('');
    						this.ui.telefono.val('');
    						this.ui.consulta.val('');
    					}else{
    						this.ui.contentError.append('<p id="mensajeError">No se pudo enviar la consulta, intente nuevamente.</p>');
    					}
    					this.ui.contentError.fadeIn(1000);
    				}
    			});

    		}
        }

    });

});
