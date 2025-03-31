<?php

$works = [
  'Все фотографии', 'Теневые', 'Бесщелевые','Световые линии','С треками','Детская','Ванная','Кухня','В зале','Матовые'
];

?>

<section class="top-screen">
  <div class="container">
  <div class="breadcrumbs">
    <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
    <span class="breadcrumbs__slash"> / </span>
    <span><a href="/works/"><?= get_bloginfo("language") == 'ru' ? 'Наши работы' : 'Наші роботи' ?></a></span>
    <span class="breadcrumbs__slash"> / </span>
    <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Матовый потолок' ?></span>
  </div>

    <h1>
      <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
    </h1>

    <div class="works__list">

      <?php if (get_bloginfo("language") == 'ru') { 
          if (has_nav_menu('categoty_works_ru')) {
            $nav_args = array(
              'theme_location' => 'categoty_works_ru',
              'container' => '',
              'items_wrap' => '%3$s',
            );
            wp_nav_menu($nav_args);
          }
        } else {
          if (has_nav_menu('categoty_works')) {
            $nav_args = array(
              'theme_location' => 'categoty_works',
              'container' => '',
              'items_wrap' => '%3$s',
            );
            wp_nav_menu($nav_args);
          }
        }; ?>
    </div>
    
  </div>
</section>


<section class="category-content">
  <div class="container">
    <div class="category-content__wrap">
      <?php
        if (have_posts() ) {
          while (have_posts()) : the_post();
            echo apply_filters( 'the_content', get_the_content() );
          endwhile;
        }
      ?>
    </div>
  </div>
</section>

