
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

setTimeout(function() {
    if (!localStorage.getItem('quizPopupShown')) {
        $('#headerQuizPopup').click();
        localStorage.setItem('quizPopupShown', 'true');
        const expiryDate = new Date();
        expiryDate.setDate(expiryDate.getDate() + 1);
        localStorage.setItem('quizPopupExpiry', expiryDate.getTime());
    }
}, 15000);
  
function checkPopupExpiry() {
    const expiry = localStorage.getItem('quizPopupExpiry');
    if (expiry && Date.now() > parseInt(expiry)) {
        localStorage.removeItem('quizPopupShown');
        localStorage.removeItem('quizPopupExpiry');
    }
}
  
checkPopupExpiry();