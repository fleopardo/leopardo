App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Services = Marionette.ItemView.extend({

        template: App.templates.services,

        onShow: function() {

        }
    });

});
