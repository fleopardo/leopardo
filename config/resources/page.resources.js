exports.scripts = [
    // pollyfils
    'src/scripts/polyfills.js',
    'node_modules/json2/lib/JSON2/static/json2.js',
    // Dependencies SPA
    'node_modules/jquery/dist/jquery.js',
    'node_modules/underscore/underscore.js',
    'node_modules/handlebars/dist/handlebars.js',
    'node_modules/backbone/backbone.js',
    'node_modules/backbone.marionette/lib/backbone.marionette.js',
    // 'node_modules/backbone.radio/build/backbone.radio.js',
    // Vendors
    'node_modules/owl.carousel/dist/owl.carousel.js',
    // Application and Configs
    'src/scripts/app.js',
    'build/templates/templates__page.js',
    'build/temporal/productsJson.js',
    // Modules
    'src/scripts/modules/handlebars-helpers.module.js',
    'src/scripts/modules/utils.module.js',
    'src/scripts/modules/config.module.js',
    'src/scripts/modules/urls.module.js',
    'src/scripts/modules/router.module.js',
    'src/scripts/modules/hosepower.module.js',
    // Models
    'src/scripts/models/product.model.js',
    // collections
    'src/scripts/collections/products.collection.js',
    // Views
    'src/scripts/views/header.view.js',
    'src/scripts/views/footer.view.js',
    'src/scripts/views/carousel.view.js',
    'src/scripts/views/home.view.js',
    'src/scripts/views/company.view.js',
    'src/scripts/views/services.view.js',
    'src/scripts/views/products.view.js',
    'src/scripts/views/productsDetail.view.js',
    'src/scripts/views/contact.view.js'
];

exports.styles = [
    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'src/styles/page.scss'
];

exports.fonts = [];

exports.images = []

exports.templates = [
    'src/templates/**/*.hbs'
]
