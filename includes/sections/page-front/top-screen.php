<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen--left">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>
    </div>
    
    <div class="top-screen--right">
      <div class="top-screen__description">
        <?= get_field('top_screen_description') ? the_field('top_screen_description') : 'Компания «Стелио» профессионально занимается установкой натяжных потолков в Киеве.
                Современные решения для наших интерьеров позволяют реализовывать нестандартные и сложные проекты с безупречной проработкой.' ?>
      </div>
    </div>

	  <div class="top-screen--center">
		  <a 
        href="#"
        rel="nofollow" id="callTopQuizPopup"
        class="button--second button--main button--call">
        <?php if (get_bloginfo("language") == 'ru') {
              echo 'Заказать беспланый замер' ;
            } else {
              echo 'Замовити безкоштовний замір';
            }; ?>
      </a>
	  <!-- Видео для десктопа

      <iframe id="video-on-main-page-desktop" src="https://player.vimeo.com/video/1082698393?h=63c53ee6d9&amp;autoplay=1&amp;muted=1&amp;autopause=0&amp;loop=1&amp;background=1" width="100%" height="500" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-forms allow-popups allow-popups-to-escape-sandbox"></iframe>
	  -->


	<!-- Видео для мобайла -->
	  	  <iframe id="video-on-main-page-mobile" src="https://player.vimeo.com/video/1082909969?h=3022128c72&amp;autoplay=1&amp;muted=1&amp;autopause=0&amp;loop=1&amp;background=1" width="100%" height="700" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-forms allow-popups allow-popups-to-escape-sandbox"></iframe>
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg' ?>"
            class="lazy"
            width="1200"
            height="600"
            style="position: absolute; top: 0; left: 0;"
          />
	  
	  </div>
   <!-- <figure class="top-screen__imgs">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg' ?>"
        class="lazy"
        width="1200"
        height="600"
      />
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-trekami.jpg' ?>"
        class="lazy"
        width="1200"
        height="600"
      />
    </figure> -->


  </div>
</section>