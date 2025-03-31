<?php

  $order = [
    [
      'text' => 'Мы — профессиональная монтажная компания по натяжным потолкам в Киеве. Специализируемся на установке современных систем: бесщелевые, теневые, многоуровневые. ',
    ],
    [
      'text' => 'Обновляем интерьеры с помощью минималистичных потолков с функциональным освещением. Скрываем инженерные коммуникации, комбинируем конструкции и виды примыканий.',
    ],
  ];

?>

<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'О компании' ?></span>
    </div>
  </div>
  
  <div class="container ">
    <div class="top-screen__wrap">
      <div class="top-screen--top">
        <h1>
          <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
      
        <ul class="top-screen__list">
          <?php if (have_rows('top_list')) :
            while ( have_rows('top_list')) : the_row(); ?>
              <li class="item"><?= get_sub_field('item_text') ?></li>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $order as $key => $item ) : ?>
              <li class="item"><?= $item['text'] ?> </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

      <div class="top-screen--bottom">
        <div class="top-screen__images--top">
          <img 
            src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
            data-src="<?= get_field('team_top_1')['url'] ? get_field('team_top_1')['url'] : bloginfo('template_url') . '/images/page-team/team1.webp' ?>"
            class="lazy"
            width="1px"
            height="1px"
          />
        </div>
        <div class="top-screen__images--bottom">
          
          <div class="top-screen__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_field('team_top_2')['url'] ? get_field('team_top_2')['url'] : bloginfo('template_url') . '/images/page-team/team2.webp' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
          <div class="top-screen__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_field('team_top_3')['url'] ? get_field('team_top_3')['url'] : bloginfo('template_url') . '/images/page-team/team3.webp' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
          <div class="top-screen__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_field('team_top_4')['url'] ? get_field('team_top_4')['url'] : bloginfo('template_url') . '/images/page-team/team4.webp' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
