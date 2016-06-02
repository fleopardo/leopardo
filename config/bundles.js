var merge = require('deepmerge');

/**
 * Files
 */
var page = require('./resources/page.resources');
var html5shiv = require('./resources/html5shiv.resources');


/**
 * Bundles
 */
exports.scripts = {
    'bundle': page.scripts,
    'html5shiv': html5shiv.scripts
};

exports.styles = {
    'bundle': page.styles
};

exports.fonts = {
    'fonts': page.fonts
};

exports.images = {
    'images': page.images
};

exports.templates = {
    'templates': page.templates
};
