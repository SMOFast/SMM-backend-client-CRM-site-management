
import.meta.glob([
    '../assets/img/**',
    '../assets/fonts/**',
]);

import '../sass/app.scss'
import '../sass/global.scss'

import ClipboardJS from "clipboard";

import { createPopper } from '@popperjs/core';

import jQuery from 'jquery';
window.$ = jQuery;

import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap;

import slick from 'slick-carousel'

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')

let count = 0;

$(document).ready(function() {
    $(".nav-link").click(function(){
        $('.category-slider').slick('refresh');
    });

    $('.choose-slider, .category-slider').slick({
        dots: false,
        infinite: false,
        speed: 200,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2.4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerMode: true,
                    dots: false,
                    infinite: true,
                    speed: 100,
                    slidesToShow: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.customers-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2.4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerMode: true,
                    dots: false,
                    infinite: true,
                    speed: 100,
                    slidesToShow: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    // Clipboard

    const clipboard = new ClipboardJS('.btn-clipboard')

    clipboard.on('success', function(e) {

        $('.tooltip-inner').html('Copied')
        $(e.trigger).tooltip('update')

        e.clearSelection()
    })

    clipboard.on('error', function (e) {
        var fallbackMsg = /Mac/i.test(navigator.userAgent) ? 'Press \u2318 to copy' : 'Press Ctrl-C to copy'

        $('.tooltip-inner').html(fallbackMsg)
        $(e.trigger).tooltip('update')
    })

    count = $('input[type=checkbox]:checked').length;
    displayCount();

    $('input[type=checkbox]').bind('click', function(e, a) {
        if (this.checked) {
            count += a ? -1 : 1;
        } else {
            count += a ? 1 : -1;
        }
        displayCount();
    });
    $('#count-post__reset').click(function(e) {
        $('#count-post, #count-post-2').text(0);
        $('input[type=checkbox]').removeAttr("checked");
        count = 0;
    });
});


$(window).on('load resize', function() {
    if ($(window).width() < 991) {
        $('#mobile-slider:not(.slick-initialized)').slick({
            centerMode: true,
            dots: false,
            infinite: true,
            speed: 100,
            slidesToShow: 1
        });
    } else {
        $("#mobile-slider.slick-initialized").slick("unslick");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
        everydropdown.addEventListener('shown.bs.dropdown', function() {
            let el_overlay = document.createElement('span');
            el_overlay.className = 'screen-darken';
            document.body.appendChild(el_overlay)
        });

        everydropdown.addEventListener('hide.bs.dropdown', function() {
            document.body.removeChild(document.querySelector('.screen-darken'));
        });
    });

});

function displayCount() {
    $('#count-post, #count-post-2').text(count);
}

