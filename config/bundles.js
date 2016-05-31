var merge = require('deepmerge');

/**
 * Files
 */
var shared = require('./resources/shared.resources');
var home = require('./resources/home.resources');
var html5shiv = require('./resources/html5shiv.resources');


/**
 * Bundles
 */
exports.scripts = {
    'bundle__home': merge(shared.scripts, home.scripts),
    'html5shiv': html5shiv.scripts
};

exports.styles = {
    'bundle__home': merge(shared.styles, home.styles)
};

exports.fonts = {
    'fonts': shared.fonts
};

exports.images = {
    'images': shared.images
};
