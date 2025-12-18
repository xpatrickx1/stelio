
const popupTriggers = [
    '#caculatorOrder',
    '#footerOrder',
    '#recommendationOrder',
    '#installationOrder',
    '#headerOrderBtn',
];

function popup(buttonId, popupId) {
    $(buttonId).on('click', function(e) {
        e.preventDefault();
        $(popupId).removeClass('disabled');
        setTimeout(function(){
            $(popupId).addClass('active'); 
        }, 10); 
    });

    $( '.popup__close, .popup__bg' ).click( function() {
        $( '.popup' ).removeClass('active');
        setTimeout(function(){
            $( '.popup' ).addClass('disabled');
        }, 100); 
    } );
}

popupTriggers.forEach(trigger => {
    popup(trigger, '#popup');
});

popup('#headerCallbackPopup', '#popup2');

popup('#headerQuizPopup', '#popupQuiz');

popup('#callQuizPopup', '#popupQuiz');

popup('#callTopQuizPopup', '#popupQuiz');