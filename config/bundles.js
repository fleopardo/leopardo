var merge = require('deepmerge');

/**
 * Files
 */
var shared = require('./resources/shared.resources');
var page = require('./resources/page.resources');
var coomingSoon = require('./resources/coomingSoon.resources');
var html5shiv = require('./resources/html5shiv.resources');


/**
 * Bundles
 */
exports.scripts = {
    'bundle__page': page.scripts,
    'html5shiv': html5shiv.scripts
};

exports.styles = {
    'bundle__page': page.styles,
    'bundle__coomingSoon': coomingSoon.styles
};

exports.fonts = {
    'fonts': shared.fonts
};

exports.images = {
    'images': shared.images
};

exports.templates = {
    'templates__page': page.templates
};
