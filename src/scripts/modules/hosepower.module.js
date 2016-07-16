App.module('Hosepower', function(Hosepower, App, Backbone, Marionette, $, _) {

    Hosepower.getProducts = function() {
        return $.ajax({
            'dataType': 'json',
            'url': 'products.json',
            'success': function(data) {
                App.Hosepower.Products.add(data.products);
            }
        });
    };

    Hosepower.addInitializer(function(){

        Hosepower.Products = new App.Hosepower.Collections.Products();

        $.when(Hosepower.getProducts()).then(function(data) {

            Hosepower.Products.add(data.products);

            var headerView = new App.Hosepower.Views.Header();
            App.getRegion('header').show(headerView);

            var carouselView = new App.Hosepower.Views.Carousel();
            App.getRegion('carousel').show(carouselView);

            var footerView = new App.Hosepower.Views.Footer();
            App.getRegion('footer').show(footerView);

            new App.Hosepower.Router();

        });
    });

});
