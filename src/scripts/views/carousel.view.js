App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Carousel = Marionette.ItemView.extend({

        template: App.templates.carousel,

        ui: {
            'container': '[data-js="owl-carousel"]'
        },

        onShow: function() {

            this.ui.container.owlCarousel({
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
        }
    });

});
