App.module('Urls', function(Urls, App, Backbone, Marionette, $, _) {

    var lang = App.module('Config').lang;
    var map = {
        'es': {},
        'pt': {}
    };

    /**
     * @example
     * App.module('Urls').set({'es': ...});
     */
    Urls.set = function (urls) {
        $.extend(true, map, urls);
    };

    /**
     * @example
     * App.module('Urls').get('catalog:newProduct');
     * @example
     * App.module('Urls').get('catalog:newProduct', ['replaceMents']);
     */
    Urls.get = function (key, replacements) {
        // Validate required params
        if (!key) {
            throw new Error('Urls: Provide at least a "key" param.');
            return;
        }
        var url = map[lang][key];
        // Validate URL existence
        if (!url) {
            throw new Error('Urls: The requested url doesn\'t exist.');
            return;
        }
        // URL without replacements (Router)
        if (!replacements) {
            return url;
        }
        // URL with replacements
        var i = -1;
        return url.replace(/:([a-z]+[A-Z]*)+/g, function () {
            return replacements[i += 1];
        });
    };
});
