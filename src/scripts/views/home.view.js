App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Home = Marionette.ItemView.extend({

        template: App.templates.home,

        ui: {
            'btnSubmit': '[data-js="btnSubmit"]',
            'nombre': '[data-js="nombre"]',
    		'email': '[data-js="email"]',
    		'telefono': '[data-js="telefono"]',
    		'consulta': '[data-js="consulta"]',
            'contentError': '[data-js="contentError"]',
            'modalNuevaUbicacion' : '[data-js="modalNuevaUbicacion"]',
            'closeModal' : '[data-js="closeModal"]'
        },

        events: {
            'click @ui.btnSubmit': 'contact',
            'click @ui.closeModal' : 'closeModal'
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

            if (sessionStorage && !sessionStorage.getItem('modalNuevaUbicacionStorage')) {
                sessionStorage.setItem('modalNuevaUbicacionStorage',true);
                this.ui.modalNuevaUbicacion.addClass('show');
            }
        },

        closeModal: function(event) {
            event.preventDefault();
            if(event.target.className == 'close') {
                this.ui.modalNuevaUbicacion.removeClass('show');
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
    			error.fieldsnombre = true;
    			this.ui.nombre.addClass("error");
    		}else{
    			this.ui.nombre.removeClass('error');
    		}

    		//valido email
    		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.ui.email.val())) || this.ui.email.val() == this.ui.email.attr("placeholder")) {
    			error.flag = true;
    			error.email = true;
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
    				error.telefono = true;
    				this.ui.telefono.addClass("error");
    			}else{
    				this.ui.telefono.removeClass('error');
    			}
    		}

    		//valido consulta
    		if(this.ui.consulta.val().length <= 10) {
    			error.flag = true;
    			error.consulta = true;
    			this.ui.consulta.addClass("error");
    		}else{
    			this.ui.consulta.removeClass('error');
    		}

    		//Si hubo errores
    		if (error.flag){
                this.showErrorForm(error, '1');
    		}else{
    			$.ajax({
    				type:'post',
    				url:'send-form.php',
    				data:{
    					'nombre': this.ui.nombre.val(),
    					'email': this.ui.email.val(),
    					'telefono': this.ui.telefono.val(),
    					'consulta': this.ui.consulta.val(),
                        'section': 'home'
    				},
    				dataType:'json',
    				success: function(datos,status){
                        if (datos.success) {
                            that.showSuccessForm();
                        } else {
                            that.showErrorForm(error, '2');
                        }
    				},
                    error: function() {
                        that.showErrorForm(error, '2');
                    }
    			});

    		}
        },

        showSuccessForm: function() {
            this.ui.nombre.val('');
            this.ui.email.val('');
            this.ui.telefono.val('');
            this.ui.consulta.val('');
            this.ui.contentError.append('<p id="mensajeExito">Los datos fueron enviados correctamente. Muchas Gracias.</p>');
            this.ui.contentError.fadeIn(1000);
        },

        showErrorForm: function(error, type) {
            var mensaje = '';

            if (type === '1') {
                mensaje = '<p id="mensajeError">Los siguientes campos tienen errores: ';
                if(error.fieldsnombre){ mensaje += 'Nombre. ';}
                if(error.email){ mensaje += 'Email. ';}
                if(error.telefono){ mensaje += 'Telefono (Solo numeros). ';}
                if(error.consulta){ mensaje += 'Consulta. ';}
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
