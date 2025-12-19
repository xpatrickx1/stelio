//= include plugins/*

$(document).ready(() => {
    //= include components/header.js
    //= include components/footer.js

    $('#reviewsShowmore').click(() => {
        $('.reviews__center').addClass('active');
        $('#reviewsShowmore').addClass('hide');
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('video-on-main-page-mobile');
    const poster = document.querySelector('.video-poster');
  
    if (!iframe || !poster || typeof Vimeo === 'undefined') return;
  
    const player = new Vimeo.Player(iframe);
    console.log(player);
    let hidden = false;
  
    function hidePoster() {
        if (hidden) return;
        hidden = true;
  
        poster.style.transition = 'opacity .4s ease';
        poster.style.opacity = '0';
        setTimeout(() => poster.remove(), 400);
    }
  
    // коли відео реально почало грати
    player.on('play', hidePoster);
  
    // fallback — якщо play не прийшов
    setTimeout(hidePoster, 1500);
});

//= include components/helpers.js
//= include components/modules/popup.js
//= include components/modules/phone-mask.js

