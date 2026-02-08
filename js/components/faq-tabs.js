$('.faq .faq__accordion').not(':first').hide();

$('.faq .faq__tabs .tabs__item').click(function() {
    console.log(1);
    
    $('.faq .tabs__item').removeClass('active').eq($(this).index()).addClass('active');
    $('.faq .faq__accordion').hide().removeClass('active').eq($(this).index()).fadeIn().addClass('active');
    $(window).scroll();
}).eq(0).addClass('active');


// --close all accordion items --
$('.faq .faq__accordion').each(function () {
    $('.faq__item').each(function (index) {
        if(index!==0) {
            $('.faq__description').slideUp();
        }
    });
});


// --open first item in each accordion--
$('.faq .faq__accordion').each(function () {
    const $faqFirstTab = $('.faq__item', this).first();
    $faqFirstTab.addClass( 'currentFaq' );
    $faqFirstTab.find('.faq__description').slideDown();
    $faqFirstTab.find('.faq__question-icon').addClass('active');
    $faqFirstTab.find('.faq__title').addClass('active');
});

function openAccordionItem(el) {
    el.addClass('currentFaq');
    el.find('.faq__description').slideDown();
    el.find('.faq__question-icon').addClass('active');
    el.find('.faq__title').addClass('active');
}

function closeAccordionItem(el) {
    el.removeClass('currentFaq');
    el.find('.faq__description').slideUp();
    el.find('.faq__question-icon').removeClass('active');
    el.find('.faq__title').removeClass('active');
}


$('.faq__item').on('click', function(el){
    let accordion =  $(this).parent('.faq__accordion');
    if (accordion) {
        if ($(this).hasClass('currentFaq')) {
            closeAccordionItem($(this));
            return;
        }
        accordion.children().each(function () {
            if($(this).hasClass('currentFaq')){
                closeAccordionItem($(this));
            }
        });

        openAccordionItem($(this));
    }
});

const faqTabs = function () {
    $('.faq__tabs')

        .slick({
            infinite: false,
            speed: 300,
            centerMode: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: false,
            nextArrow: false,
            variableWidth: true,
        })

        .on('afterChange', e => {
            $(window).scroll();
        });
};


function mediaSiz() {

    if (window.matchMedia('(max-width: 1023px)').matches) {
        faqTabs();
    }

};


mediaSiz();

$( window ).on('resize', mediaSiz);


