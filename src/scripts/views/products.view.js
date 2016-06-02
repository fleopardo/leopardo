App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Products = Marionette.ItemView.extend({

        template: App.templates.products,

        onShow: function() {

        }
    });

});
