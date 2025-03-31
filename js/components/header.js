$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('body').toggleClass('no-scroll');
});


$( window ).scroll( scroll, scroll() );

function scroll () {
    if ( $(window).scrollTop() >= 60 ){
        $('.header').addClass('header-fixed');
    } else {
        $('.header').removeClass('header-fixed');
    }
}


$(function () {
    $('.header__navigation li a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});


let anchors = [];
const documentURL = document.location.href;
const pathNameURL = document.location.pathname;

let urlsForCheck = documentURL == 'http://localhost:8080/trustnet/'
  || documentURL == 'http://localhost/trustnet/'
  || documentURL == 'https://trustnet.com/'
  ;


const checkUrls = () => {

    anchors.map( e => {

        if( !urlsForCheck ) {
            if (!($('.header__navigation li:has(ul)'))) {
                $( '.header__navigation li a[href="' + e + '"]' ).attr( 'href', '/' + e );
                $( '.footer__menu--terms li a[href="' + e + '"]' ).attr( 'href', '/' + e );
            }
        }
    } );

};


$('.header__navigation li a').each( function () {
    if  (($( this ).attr( 'href' ) ).match(/^#/i)) {
        anchors.push( $( this ).attr( 'href' ) );
    }

}).promise().done( checkUrls() );

$('.header__navigation li a, .footer__menu li a').click(function(event) {
    console.log( event.target);
    console.log( event.target);
    const $this = $(this);
    const $parent = $this.parent('li');
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
        location.hostname == this.hostname) {
        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 75
            }, 1000);
        }
    }

    if ($parent.hasClass('menu-item-has-children')) {
        event.stopPropagation();
    } else if( $( 'body' ).hasClass( 'is-open no-scroll' ) ) {
        $('.js-hamburger').click();
    }
});


const $menu = $('.header__navigation');
const top_level_link = '.menu-item-has-children > a';
function setup_collapsible_submenus() {
    $menu.find(top_level_link).each(function() {
        $(this).next('.sub-menu').addClass('hide');
        $(this).next('.second-level-sub-menu').addClass('hide');

        $(this).on('click', function(event) {
            event.stopPropagation();

            if($(this).parent('li').parent('ul').hasClass('header__navigation')) {
                if (!($(this).hasClass('open'))) {
                    $menu.find(top_level_link).removeClass('open');
                }
                $('.second-level-sub-menu').removeClass('visible');
                $('.second-level-sub-menu').addClass('hide');
                $('.sub-menu').removeClass('visible');
                $('.sub-menu').addClass('hide');
            }

            if (!($(this).hasClass('open'))) {
                $('.sub-menu a').removeClass('open');
                $('.second-level-sub-menu').removeClass('visible');
                $(this).addClass('open');
                $(this).next('ul').addClass('visible').removeClass('hide');
            } else {
                $(this).removeClass('open');
                $(this).next('ul').removeClass('visible').addClass('hide');
            }
            return false;
        });
    });

    $(window).click(function(event) {
        if (!($(event.target).parents('.sub-menu').length)) {
            $('.sub-menu').removeClass('visible').addClass('hide');
            $('.second-level-sub-menu').removeClass('visible').addClass('hide');
            $('.header__navigation a').removeClass('open');
        }
    });
}

setup_collapsible_submenus();

$('.header__show-phones').on('click', function(event) {
    $('.header__phones').toggleClass('visible');
    return false;
});
	