App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Home = Marionette.ItemView.extend({

        template: App.templates.home,

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
        }
    });

});
