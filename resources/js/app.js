window._ = require('lodash');
window.swal = require('sweetalert2');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');
    require('isotope-layout/dist/isotope.pkgd.min.js');
    require('bootstrap');
    require('magnific-popup');
    require('@fortawesome/fontawesome-free/js/all.js');
    require('jquery-animated-headlines');
    require('waypoints/lib/jquery.waypoints.min.js');
    require('counterup/jquery.counterup.min.js');
    require('jquery.easing');
    require('startbootstrap-scrolling-nav/js/scrolling-nav.js');
    require('imagesloaded');
    require('scrollup');

} catch (e) {}
