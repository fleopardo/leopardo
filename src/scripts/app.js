;(function (win) {
    // Check if app has been launched
    if (win.App) { return; }

    // Create app
    var App = new Backbone.Marionette.Application();

    App.addRegions({
        'header': '[data-js="header-region"]',
        'carousel': '[data-js="carousel-region"]',
        'main': '[data-js="main-region"]',
        'footer': '[data-js="footer-region"]'
    });

    // Subscribe to "start" application event
    App.on('start', function () {
        Backbone.history.start();
    });

    // App.channel = Backbone.Radio.channel('channel');

    // Start the App
    $(function() {
        // This fire "start" application event
        App.start();
    });

    // Export Application
    win.App = App;
}(window));
