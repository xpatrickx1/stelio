<section class="banner">
    <div class="banner__wrap">
      <div class="banner__left">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-front/banner.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
      <div class="banner__right">
        <a 
          href="<?= get_field('banner_href') ? the_field('banner_href') : '#' ?>"
          data-hover="<?= get_bloginfo("language") == 'ru' ? 'Оформить оплату частями' : 'Оформити оплату частинами' ?>"
          rel="nofollow" id="orderBanner"
          class="button--main">
          <span><?= get_bloginfo("language") == 'ru' ? 'Оформить оплату частями' : 'Оформити оплату частинами'?></span>
        </a>

        <div class="banner__text">
        <?php if ( get_field('banner_title'))  { 
          echo get_field('banner_title') ;
          } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Рассрочка до 8 платежей от Монобанка под 0%' ;
          } else {
            echo 'Розстрочка до 8 платежів від Монобанку під 0%';
          } 
        }; ?>
        </div>
      </div>
    </div>
  </div>
</section>