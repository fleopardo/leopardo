this["App"] = this["App"] || {};
this["App"]["templates"] = this["App"]["templates"] || {};
this["App"]["templates"]["carousel"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section data-js=\"owl-carousel\" class=\"hosepower-carouselHeader owl-carousel owl-theme\">\n    <div>\n        <img src=\"./build/images/destacado-header.jpg\" alt=\"\">\n    </div>\n    <div>\n        <img src=\"./build/images/destacado-header.jpg\" alt=\"\">\n    </div>\n    <div>\n        <img src=\"./build/images/destacado-header.jpg\" alt=\"\">\n    </div>\n</section>\n";
},"useData":true});
this["App"]["templates"]["company"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section class=\"hosepower-company__container\">\n\n    <div class=\"hosepower-sections-title\">\n        <h2 class=\"hosepower-container\">Hose power S.A.</h2>\n    </div>\n\n    <div class=\"hosepower-container hosepower-company__content\">\n        <div class=\"hosepower-company__col\">\n            <p>En <strong>Hose Power</strong>, diseñamos, fabricamos y comercializamos mangueras técnicas para una amplia gama de aplicaciones donde se requieren productos de alto rendimiento. Brindamos una propuesta de valor diferenciada a nuestros clientes, ofreciendo un portfolio completo de productos de primera calidad tanto para aplicaciones de reemplazo como para fabricantes de equipos originales. Nuestro compromiso es el de proveer soluciones superadoras que aumenten la productividad de nuestros clientes.</p>\n            <p>Valoramos una cultura de ética fuerte con todos nuestros socios de la cadena de suministros, incluyendo clientes y proveedores.  Crear y mantener una relación de confianza y transparencia, son la base para una plataforma de mutuo beneficio y crecimiento.</p>\n            <p>Nuestro éxito como empresa depende del mejor activo de Hose Power: Nuestra gente. Su experiencia, conocimiento, amplitud y diversidad, son la base para ofrecer un servicio excepcional a nuestros clientes.</p>\n\n            <a href=\"#/productos\"><i class=\"fa fa-tag\"></i> Ingresar al catálogo</a>\n        </div>\n\n        <div class=\"hosepower-company__col hosepower-company__col-photo\"></div>\n    </div>\n\n</section>\n";
},"useData":true});
this["App"]["templates"]["contact"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section class=\"hosepower-contact__container\">\n\n    <div class=\"hosepower-sections-title\">\n        <h2 class=\"hosepower-container\">Contáctenos</h2>\n    </div>\n\n    <div class=\"hosepower-container\">\n        <div class=\"hosepower-contact__left\">\n            <article class=\"hosepower-contact__container-article\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Dirección</h3>\n                <p>Dr. Pedro Ignacio Rivera 5738</p>\n                <p>Código Postal CP1431</p>\n                <p>Ciudad Autonoma de Buenos Aires</p>\n                <p>República Argentina</p>\n            </article>\n\n            <article class=\"hosepower-contact__container-article\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Teléfonos</h3>\n                <p>(011) 4574-2842</p>\n                <p>(011) 4571-7241</p>\n                <p>(011) 4571-0940</p>\n            </article>\n\n            <article class=\"hosepower-contact__container-article\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Email</h3>\n                <p><a href=\"mailto: ventas@hosepower.com.ar\">ventas@hosepower.com.ar</a></p>\n                <p><a href=\"mailto: administracion@hosepower.com.ar\">administracion@hosepower.com.ar</a></p>\n            </article>\n\n            <article class=\"hosepower-contact__container-article\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Horarios de atención</h3>\n                <p>Lunes a Viernes</p>\n                <p>8:00hs a 13:00hs y 14:00hs a 17:00hs</p>\n            </article>\n        </div>\n\n        <div class=\"hosepower-contact__right\">\n            <article class=\"hosepower-contact__container-article\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-map\" aria-hidden=\"true\"></i> Ubicación</h3>\n\n                <div id=\"map\" class=\"horsepower-contact__article-map\"></div>\n            </article>\n\n            <article class=\"hosepower-contact__container-article hosepower-contact__container-article-message\">\n                <h3 class=\"horsepower-contact__article-title\"><i class=\"fa fa-comment\" aria-hidden=\"true\"></i> Mensaje</h3>\n\n                <input type=\"text\" placeholder=\"Nombre\" data-js=\"nombre\" />\n                <input type=\"text\" placeholder=\"Apellido\" data-js=\"apellido\" />\n                <input type=\"text\" placeholder=\"E-mail\" data-js=\"email\" />\n                <input type=\"text\" placeholder=\"Teléfono\" data-js=\"telefono\" />\n                <input type=\"text\" placeholder=\"Ciudad\" data-js=\"ciudad\" />\n                <input type=\"text\" placeholder=\"Empresa\" data-js=\"empresa\" />\n\n                <textarea placeholder=\"Consulta\" data-js=\"consulta\"></textarea>\n\n                <button type=\"submit\" class=\"hosepower-contact-submit\" data-js=\"btnSubmit\"><i class=\"fa fa-send\"></i> Enviar</button>\n                <div class=\"contentError\" data-js=\"contentError\"></div>\n            </article>\n        </div>\n    </div>\n</section>\n";
},"useData":true});
this["App"]["templates"]["footer"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<footer class=\"hosepower-footer\">\n    <nav class=\"hosepower-footer__nav\">\n        <ul>\n            <li><a href=\"#\" title=\"Home\">Home</a></li>\n            <li><a href=\"#empresa\" title=\"Empresa\">Empresa</a></li>\n            <li><a href=\"#productos\" title=\"Catálogo de productos\">Productos</a></li>\n            <li><a href=\"#servicios\" title=\"Servicios\">Servicios</a></li>\n            <li><a href=\"#contacto\" title=\"Contacto\">Contacto y ubicación</a></li>\n        </ul>\n    </nav>\n\n    <p class=\"hosepower-footer__info\">\n        Camarones 4061/63 - Código Postal 1407 - Ciudad de Buenos Aires - República Argentina.<br />\n        Teléfonos/Fax:( 54-11) 4639-1897 // 4639-1673 // 4567-2410 // 4648-1551 // 4568-4936\n    </p>\n\n    <div class=\"hosepower-footer__social\">\n        <a href=\"#\"><i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></a>\n        <a href=\"#\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>\n        <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>\n        <a href=\"#\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i></a>\n    </div>\n</footer>\n";
},"useData":true});
this["App"]["templates"]["header"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<header class=\"hosepower-header\">\n    <div class=\"hosepower-header__logo\">\n        <h1>\n            <a href=\"#\" title=\"Hosepower\">HosePower</a>\n        </h1>\n    </div>\n\n    <nav class=\"hosepower-header__nav\">\n        <ul>\n            <li><a href=\"#\" title=\"Home\">Home</a></li>\n            <li><a href=\"#empresa\" title=\"Empresa\">Empresa</a></li>\n            <li><a href=\"#productos\" title=\"Catálogo de productos\">Catálogo de productos</a></li>\n            <li><a href=\"#servicios\" title=\"Servicios\">Servicios</a></li>\n            <li><a href=\"#contacto\" title=\"Contacto\">Contacto</a></li>\n        </ul>\n    </nav>\n</header>\n";
},"useData":true});
this["App"]["templates"]["home"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section class=\"hosepower-container hosepower-home__container\">\n    <article class=\"hosepower-home__container-article\">\n        <h2><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Bienvenidos</h1>\n        <p>En <strong>Hose Power</strong>, diseñamos, fabricamos y comercializamos mangueras técnicas para una amplia gama de aplicaciones donde se requieren productos de alto rendimiento. Brindamos una propuesta de valor diferenciada a nuestros clientes, ofreciendo un portfolio completo de productos de primera calidad tanto para aplicaciones de reemplazo como para fabricantes de equipos originales. Nuestro compromiso es el de proveer soluciones superadoras que aumenten la productividad de nuestros clientes.</p>\n        <a href=\"#/productos\" title=\"Ver catálogo de productos\" class=\"button\"><i class=\"fa fa-tag\" aria-hidden=\"true\"></i> Ver catálogo de productos</a>\n    </article>\n\n    <article class=\"hosepower-home__container-article\">\n        <h2><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> Nuestros servicios</h1>\n        <p>· Asesoramiento técnico personalizado en la selección e instalación de conductores de fluidos.</p>\n        <p>· Relevamiento en plantas de todo el país.</p>\n        <p>· Diagnóstico de fallas, identificación de problemas y desarrollo de soluciones.</p>\n        <p>· Armado de Mangueras Industriales, Composite e Hidráulicas.</p>\n        <a href=\"#/servicios\" title=\"Ver más\" class=\"button\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Ver más</a>\n    </article>\n\n    <article class=\"hosepower-home__container-article\">\n        <h2><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Contáctenos</h1>\n        <form>\n            <fieldset>\n                <input type=\"text\" placeholder=\"Nombre\">\n                <input type=\"email\" placeholder=\"Email\">\n                <input type=\"text\" placeholder=\"Teléfono\">\n                <textarea placeholder=\"Consulta\"></textarea>\n                <button type=\"submit\" class=\"button\"><i class=\"fa fa-send\" aria-hidden=\"true\"></i> Enviar</button>\n            </fieldset>\n        </form>\n    </article>\n\n</section>\n\n<div class=\"hosepower-home__catalogo\">\n    <section class=\"hosepower-container clearfix\">\n        <h1 class=\"hosepower-home__catalogo-title\">Catálogo de productos</h1>\n\n        <div class=\"article-cont clearfix\">\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/mangueras-industriales.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Mangueras industriales</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/mangueras-metalicas.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Mangueras metálicas y de PTFE</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/racords.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Racords</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/acoples-rapidos.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Acoples rápidos</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/abrazaderas.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Abrazaderas</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n\n            <article class=\"hosepower-home__catalogo-product\">\n                <a href=\"#\" title=\"\">\n                    <img src=\"./build/images/home/accesorios.jpg\" width=\"162\" height=\"162\" />\n                    <div class=\"hosepower-home__catalogo-product-info\">\n                        <h2 class=\"title\">Accesorios</h2>\n                        <span class=\"view\">Ver</span>\n                    </div>\n                </a>\n            </article>\n        </div>\n\n        <p class=\"hosepower-home__catalogo-view-all\">\n            <a href=\"#/productos\" title=\"Ver catálogo completo\">> Ver catálogo completo</a>\n        </p>\n\n    </section>\n</div>\n";
},"useData":true});
this["App"]["templates"]["notFound"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<h1>UPS!!</h1>\n";
},"useData":true});
this["App"]["templates"]["products"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section class=\"hosepower-products__container\">\n\n    <div class=\"hosepower-sections-title\">\n        <h2 class=\"hosepower-container\">Catálogo de Productos</h2>\n    </div>\n\n    <div class=\"hosepower-container hosepower-products__content\">\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Mangueras Industriales</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/mangueras-industriales.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Acidos / Quimicos</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Agua / Aire</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Alimentos / Bebidas</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Desobstructora</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hidrocarburos</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Humo / Gases</a>\n                    </li>\n                </ul>\n\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Materiales Abrasivos</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Mineria</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Vapor / Agua Caliente</a>\n                    </li>\n                </ul>\n            </div>\n        </article>\n\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Mangueras metálicas y de PTFE</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/mangueras-metalicas.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Corrugado De Acero</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Ptfe Corrugado</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Ptfe Liso</a>\n                    </li>\n                </ul>\n            </div>\n        </article>\n\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Acoples rápidos</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/acoples-rapidos.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Sistemas A Levas</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Cierre En Seco</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Media Vuelta Americanos</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Media Vuelta Europeos</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Media Vuelta Arenado</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Split Fast</a>\n                    </li>\n                </ul>\n\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hidraulicos </a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hidraulicos </a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hidraulicos </a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hidraulicos </a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Accesorios - Juntas y levas</a>\n                    </li>\n                </ul>\n            </div>\n        </article>\n\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Abrazaderas</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/abrazaderas.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Banda estampada - Inoxidable AISI 304</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Cremallera - Acero zincado plateado</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Mordaza deslizante\n                        </a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Super presión - Acero zincado plateado</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Super presión - Inoxidable AISI 304</a>\n                    </li>\n                </ul>\n            </div>\n        </article>\n\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Racords</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/racords.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li><i class=\"fa fa-plus\"></i> Racord Doble</li>\n                    <li><i class=\"fa fa-plus\"></i> Racord Macho Fijo</li>\n                </ul>\n            </div>\n        </article>\n\n        <article class=\"hosepower-products__category\">\n            <h3 class=\"hosepower-products__category-title\"><i class=\"fa fa-chevron-right\"></i> Accesorios</h3>\n\n            <div class=\"hosepower-products__category-container clearfix\">\n                <img src=\"./build/images/products/accesorios.jpg\" width=\"168\" height=\"157\" class=\"hosepower-products__category-image\" />\n                <ul class=\"hosepower-products__category-list\">\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Hebillas</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Maquinas Sunchadoras</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Porta Mangueras</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Protecciones Hdpe</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Soportes Para Mangueras</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Traba Palancas</a>\n                    </li>\n                    <li>\n                        <a href=\"\" title=\"\" target=\"_blank\"><i class=\"fa fa-plus\"></i> Whipcheck</a>\n                    </li>\n                </ul>\n            </div>\n        </article>\n    </div>\n\n\n</section>\n";
},"useData":true});
this["App"]["templates"]["services"] = Handlebars.template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<section class=\"hosepower-services__container\">\n\n    <div class=\"hosepower-sections-title\">\n        <h2 class=\"hosepower-container\">Servicios</h2>\n    </div>\n\n    <div class=\"hosepower-container\">\n        <div class=\"hosepower-container hosepower-services__content\">\n            <div class=\"hosepower-services__col\">\n                <ul>\n                    <li><i class=\"fa fa-check-square-o\"></i> Asesoramiento técnico personalizado en la selección e instalación de conductores de fluidos.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Relevamiento en plantas de todo el país.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Diagnóstico de fallas, identificación de problemas y desarrollo de soluciones.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Armado de Mangueras Industriales, Composite e Hidráulicas.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Ensayos según normas internacionales (BS, API, FDA, CE, etc.), certificados de prueba hidráulica, elongación, curvatura y conductividad eléctrica.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Entregas a cualquier punto del país.</li>\n                    <li><i class=\"fa fa-check-square-o\"></i> Análisis de rendimiento y satisfacción del usuario.</li>\n                </ul>\n            </div>\n\n            <div class=\"hosepower-services__col hosepower-services__col-photo\"></div>\n        </div>\n    </div>\n\n</section>\n";
},"useData":true});