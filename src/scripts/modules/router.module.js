'use strict';

App.module('Hosepower.Router', function (Router, App, Backbone, Marionette, $, _) {
    'use strict';

    var controller = {},
        routes = {};

    controller.home = function () {
        var page = new App.Hosepower.Views.Home();
        App.getRegion('main').show(page);
    };

    controller.company = function () {
        var page = new App.Hosepower.Views.Company();
        App.getRegion('main').show(page);
    };

    controller.services = function () {
        var page = new App.Hosepower.Views.Services();
        App.getRegion('main').show(page);
    };

    controller.products = function () {
        var page = new App.Hosepower.Views.Products();
        App.getRegion('main').show(page);
    };

    controller.contact = function () {
        var page = new App.Hosepower.Views.Contact();
        App.getRegion('main').show(page);
    };

    controller.notFound = function () {
        // var page = new App.Hosepower.Views.notFound();
        App.getRegion('main').$el.html(App.templates.notFound());
    };

    /**
     * Hosepower.Router
     */
     routes[''] = 'home';
     routes['empresa'] = 'company';
     routes['productos'] = 'products';
     routes['servicios'] = 'services';
     routes['contacto'] = 'contact';
     routes['*any'] = 'notFound';

    /**
     * Hosepower.Controller
     */
    App.Hosepower.Controller = controller;
    App.Hosepower.Router = Marionette.AppRouter.extend({
        'appRoutes': routes,
        'controller': controller,
        'onRoute': function() {
            document.body.scrollTop = 0;
        }
    });

});
