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

	  <div class="top-screen--center video-wrapper">
		  <a 
        href="#"
        rel="nofollow" id="callTopQuizPopup"
        class="button--second button--main button--call">
        <svg width="62" height="61" viewBox="0 0 62 61" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="61.712" height="60.3008" rx="4" fill="#545454"/>
          <path d="M46.2326 44.063V16.2379C46.2326 14.187 44.5479 12.5767 42.5714 12.5767H19.1397C17.1633 12.5767 15.4785 14.2614 15.4785 16.2379V44.063C15.4785 46.1138 17.1633 47.7242 19.1397 47.7242H42.5714C44.5479 47.7242 46.2326 46.1138 46.2326 44.063ZM19.2126 16.7497C19.2126 16.3106 19.5058 16.0175 19.9448 16.0175H41.6916C42.1307 16.0175 42.4239 16.3106 42.4239 16.7497V23.1941C42.4239 23.6332 42.1307 23.9264 41.6916 23.9264H19.9448C19.5058 23.9264 19.2126 23.6332 19.2126 23.1941V16.7497ZM25.4366 42.3052C25.4366 42.6714 25.1434 43.0375 24.7044 43.0375H19.9448C19.5787 43.0375 19.2126 42.6714 19.2126 42.3052V37.5457C19.2126 37.1066 19.5787 36.8134 19.9448 36.8134H24.7044C25.1434 36.8134 25.4366 37.1066 25.4366 37.5457V42.3052ZM25.4366 34.2506C25.4366 34.6167 25.1434 34.9828 24.7044 34.9828H19.9448C19.5787 34.9828 19.2126 34.6167 19.2126 34.2506V29.491C19.2126 29.052 19.5787 28.7588 19.9448 28.7588H24.7044C25.1434 28.7588 25.4366 29.052 25.4366 29.491V34.2506ZM33.9302 42.3052C33.9302 42.6714 33.6371 43.0375 33.198 43.0375H28.4384C28.0723 43.0375 27.7062 42.6714 27.7062 42.3052V37.5457C27.7062 37.1066 28.0723 36.8134 28.4384 36.8134H33.198C33.637 36.8134 33.9302 37.1066 33.9302 37.5457V42.3052ZM33.9302 34.2506C33.9302 34.6167 33.6371 34.9828 33.198 34.9828H28.4384C28.0723 34.9828 27.7062 34.6167 27.7062 34.2506V29.491C27.7062 29.052 28.0723 28.7588 28.4384 28.7588H33.198C33.637 28.7588 33.9302 29.052 33.9302 29.491V34.2506ZM37.2997 43.1847C36.8606 43.1847 36.5674 42.8915 36.5674 42.4524V29.6382C36.5674 29.1992 36.8606 28.906 37.2997 28.906H42.4254C42.8644 28.906 43.1576 29.1992 43.1576 29.6382V42.4524C43.1576 42.8915 42.8644 43.1847 42.4254 43.1847H37.2997Z" fill="#A1A1A1"/>
        </svg>

        <span>
          <?php if (get_bloginfo("language") == 'ru') {
            echo 'Узнай стоимость твоего потолка за 1 мин.' ;
          } else {
            echo 'Дізнайся вартість твоєї стелі за 1 хв.';
          }; ?>
        </span>
      </a>
	  <!-- Видео для десктопа

      <iframe id="video-on-main-page-desktop" src="https://player.vimeo.com/video/1082698393?h=63c53ee6d9&amp;autoplay=1&amp;muted=1&amp;autopause=0&amp;loop=1&amp;background=1" width="100%" height="500" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-forms allow-popups allow-popups-to-escape-sandbox"></iframe>
	  -->

    <script src="https://player.vimeo.com/api/player.js"></script>
	<!-- Видео для мобайла -->
      <img
        class="video-poster"
        src="<?= get_template_directory_uri() ?>/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg"
        alt=""
        width="1200"
        height="700"
      >
      <iframe id="video-on-main-page-mobile" 
      src="https://player.vimeo.com/video/1082909969?h=3022128c72&amp;autoplay=1&amp;muted=1&amp;autopause=0&amp;loop=1&amp;background=1&amp;api=1" width="100%" height="700" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-forms allow-popups allow-popups-to-escape-sandbox"></iframe>
          
          
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