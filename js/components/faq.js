
// --close all accordion items --
$('.faq__item').each(function (index) {
    if(index!==0) {
        $('.faq__description').slideUp();
    }
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


