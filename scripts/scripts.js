




$ = jQuery.noConflict();


var prevScrollpos = $(window).scrollTop() + 70;
$(window).scroll(function () {
    var currentScrollPos = $(window).scrollTop();

    var header = $("#tipos-pisos");
    var filtro = $(".selectfilters");

    var sticky = header.scrollTop() + 70

    if ($(window).scrollTop() > sticky) {
        filtro.addClass("sticky");
    } else {
        filtro.removeClass("sticky");
    }


    if ($(window).scrollTop() > 70) {
        if (prevScrollpos > currentScrollPos) {
            $("#masthead").css('top', '0')
        }
        else {
            $("#masthead").css('top', '-70px')
        }
        prevScrollpos = currentScrollPos;
    }

});


var last_known_scroll_position = $(window).scroll;
var ticking = false;




function doSomething(scroll_pos) {


    if ($(window).scrollTop() === 0) {
        console.log($(window).scrollTop())
        $('#logito').attr('src', '/mayo/wp-content/themes/mayo/images/logo.svg')


    } else {
        $('#logito').attr('src', '/mayo/wp-content/themes/mayo/images/logo.svg')

    }


}


window.addEventListener('scroll', function (e) {
    last_known_scroll_position = window.scrollY;
    if (!ticking) {
        window.requestAnimationFrame(function () {
            doSomething(last_known_scroll_position);
            ticking = false;
        });
    }
    ticking = true;
});









$(document).ready(function () {
    AOS.init();


    $('.input-field').focusin(function (e) {
        $(this).addClass('active')

    })

    $('.sandwich').click(function () {
        $('.sandwich a').toggleClass('icon-close icon-menu');
        $('.container-nav').toggleClass('active');

    })


    $('.input-field').focusout(function (e) {


        if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length <= 0) {
            $(this).removeClass('active')


        } else if ($(this).find('.wpcf7-form-control-wrap input').attr('value').length >= 0) {
            $(this).addClass('active')
        }


    })


})


$('.clientes-satisfechos').owlCarousel({

    loop: true,
    items: 1,
    margin: 20,
    responsive: {
        0: {


            items: 1,
        },
        700: {
            items: 2,
        },
        900: {
            items: 3,
        }
    }


})

$('.slider-pisos').owlCarousel({

    loop: true,
    items: 1,
    margin: 20,
    autoplay: true,
    dots: false,
    autoplayTimeout: 3000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',

    responsive: {
        0: {
            items: 1,
        },
        700: {
            items: 1,
        },
        900: {
            items: 1,
        }
    }
})

$('.button-filter').click(function () {
    $('.filter').toggleClass('active');
})

$('.cerrar-filtro').click(function () {
    $('.filter').toggleClass('active');
})





$('.content-sugerencias').owlCarousel({

    loop: true,
    items: 1,
    margin: 20,
    responsive: {
        0: {
            items: 1,
        },
        700: {
            items: 3,
        }
    }


})


$('.cta-productos').owlCarousel({

    loop: true,
    items: 1,
    margin: 0,
    responsive: {

        0: {


            items: 1,
        },
        700: {
            items: 2,
        },
        900: {
            items: 3,
        }
    }


})

if (window.matchMedia("(max-width: 800px)").matches) {


    $('.marcas-partners').addClass('owl-carousel owl-theme');
    $('.marcas-partners').owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        responsive: {

            0: {


                items: 1,
            },
            700: {
                items: 2,
            },

        }

    })

    $('.fichas-multiproducto-slide').addClass('owl-carousel owl-theme');
    $('.fichas-multiproducto-slide').owlCarousel({
        loop: true,
        items: 1,
        margin: 20,
        autoplay: true,
        responsive: {

            0: {


                items: 1,
            },
            700: {
                items: 2,
                margin: 20,

            },

        }

    })
} else {
    /* La pantalla tiene menos de 400 píxeles de ancho */

}


























