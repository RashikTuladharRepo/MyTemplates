/*** Created by Rashik on 9/14/2015.*/

//Scroll To Top

$(window).on('scroll', function () {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 100;
    if (y_scroll_pos > scroll_pos_test) {
        $('.back-to-top').fadeIn();
    }
    else {
        $('.back-to-top').fadeOut();
    }
});


//owl carousel

jQuery(document).ready(function ($) {
    'use strict';
    $(".our-listing").owlCarousel({
        items: 3,
        navigation: true,
        autoPlay: 5000,
        slideSpeed: 200,
        navigationText: ["&larr;", "&rarr;"],
    });
});

$(window).on('load', function () {
    $("#cover").fadeOut(200);
});


//comments

/* * * CONFIGURATION VARIABLES * * */
var disqus_shortname = 'rashikblog';
/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
    var dsq = document.createElement('script');
    dsq.type = 'text/javascript';
    dsq.async = true;
    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
