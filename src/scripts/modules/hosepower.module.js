App.module('Hosepower', function(Hosepower, App, Backbone, Marionette, $, _) {

    Hosepower.Products = null;

    Hosepower.addInitializer(function(){

        var headerView = new App.Hosepower.Views.Header();
        App.getRegion('header').show(headerView);

        var carouselView = new App.Hosepower.Views.Carousel();
        App.getRegion('carousel').show(carouselView);

        var footerView = new App.Hosepower.Views.Footer();
        App.getRegion('footer').show(footerView);

        new App.Hosepower.Router();
    });

});
