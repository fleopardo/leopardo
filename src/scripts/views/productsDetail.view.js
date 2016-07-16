App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.ProductsDetail = Marionette.ItemView.extend({

        template: App.templates.productsDetail,

        onShow: function() {

        }
    });

});
