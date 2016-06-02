App.module('Hosepower.Views', function (Views, App, Backbone, Marionette, $, _) {

    Views.Header = Marionette.ItemView.extend({

        template: App.templates.header,

        onShow: function() {

        }
    });

});
