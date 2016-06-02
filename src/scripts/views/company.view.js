App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Company = Marionette.ItemView.extend({

        template: App.templates.company,

        onShow: function() {

        }
    });

});
