window._ = require('lodash');
window.swal = require('sweetalert2');
window.toastr = require('toastr');



try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default; // default is very important.

    require('bootstrap');
    require('isotope-layout/dist/isotope.pkgd.min.js');
    require('magnific-popup');
    require('infinite-scroll/dist/infinite-scroll.pkgd.min.js');
    require('@fortawesome/fontawesome-free/js/all.js');
    require('jquery-animated-headlines');
    require('waypoints/lib/jquery.waypoints.min.js');
    require('counterup/jquery.counterup.min.js');
    require('jquery.easing');
    require('startbootstrap-scrolling-nav/js/scrolling-nav.js');
    require('imagesloaded');
    require('scrollup');
} catch (e) {}
