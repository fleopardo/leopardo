App.module('Hosepower.Collections', function(Collections, App, Backbone, Marionette, $, _) {
    Collections.Products = Backbone.Collection.extend({
        model: App.Hosepower.Models.Product
    });
});
