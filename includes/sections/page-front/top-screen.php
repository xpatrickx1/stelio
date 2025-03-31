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

    <figure class="top-screen__imgs">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg' ?>"
        class="lazy"
        width="1"
        height="1"
      />
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-trekami.jpg' ?>"
        class="lazy"
        width="1"
        height="1"
      />
    </figure>


  </div>
</section>