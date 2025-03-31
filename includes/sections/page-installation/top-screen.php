<?php
  $topscreenList = [
    'Быстрые сроки — от замера до монтажа 1-2 дня',
    'Чистая работа благодаря перфораторам с пылесборником, который собирает грязь на 80%',
    'Используем усиленный алюминиевый профиль и сертифицированные полотна',
    'Повышенная гарантия 7 лет на всю работу и материалы',
  ];
?>

<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>
    
    <div class="top-screen__top">
      <div class="top-screen--left">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('installation_top_img_1')['url'] ? get_field('installation_top_img_1')['url'] : bloginfo('template_url') . '/images/page-installation/installation1.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
      <div class="top-screen--right">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('installation_top_img_2')['url'] ? get_field('installation_top_img_2')['url'] : bloginfo('template_url') . '/images/page-installation/installation2.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('installation_top_img_3')['url'] ? get_field('installation_top_img_3')['url'] : bloginfo('template_url') . '/images/page-installation/installation3.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
    </div>

    <div class="top-screen__bottom">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>
      <div class="top-screen__bottom--right">
        <div class="top-screen__bottom--wrp">
          <div class="top-screen__description">
            <?= get_field('top_screen_description_1') ? the_field('top_screen_description_1') : 'Правильная установка натяжных потолков — залог долговечности, эстетичности и надёжности конструкции. Выполняется только профессионалами, а не мастерами-универсалами.' ?>
          </div>
          <div class="top-screen__description">
            <?= get_field('top_screen_description_2') ? the_field('top_screen_description_2') : 'Тогда вы избавите себя от рисков, связанных с безопасностью при монтажных работах, эстетичностью и долговечности конструкции.' ?>
          </div>
        </div>
        <ul class="top-screen__list">
            <?php if (have_rows('top_screen_list')) :
              while ( have_rows('top_screen_list')) : the_row(); ?>
                <li class="item"><?= get_sub_field('item_title') ?></li>
              <?php endwhile; ?>
            <?php else : ?>
              <?php foreach ( $topscreenList as $key => $item ) : ?>
                <li class="item"><?= $item ?></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
          <a 
            href="#"
            rel="nofollow"
            id="installationOrder"
            data-hover="<?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір'?>"
            class="button--main">
            <span><?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір'?></span>
          </a>
      </div>
    </div>
  </div>
</section>
