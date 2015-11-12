// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }

}());

// Place any jQuery/helper plugins in here.

$(document).ready(function(){ 

  var owl = $('.owl-carousel');
  owl.owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    autoplaySpeed:3000,
    responsive:{
        0:{
            items:3
            },
        400:{
            items:4
            },
        600:{
            items:7
            }
        }
    });
    owl.trigger('autoplay.play.owl',[5000])

  var owl = $('.owl-carousel-2');
  owl.owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    autoplaySpeed:3000,
    responsive:{
        0:{
            items:3
            },
        400:{
            items:4
            },
        600:{
            items:7
            }
        }
    });
    owl.trigger('autoplay.play.owl',[5000])
});