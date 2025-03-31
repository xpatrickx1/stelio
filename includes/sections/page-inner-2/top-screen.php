<?php

  $topScreen = [
    'ru' => [
      [
        'title' => '7 лет гарантии на установку и качество материалов.',
      ],
      [
        'title' => 'Сделаем бесплатный расчет проекта и покажем доступные образцы.',
      ],
      [
        'title' => 'Мы поддерживаем любой вид оплаты, от  налички до криптовалюты.',
      ],
      [
        'title' => 'Работаем исключительно по договору с фиксированными ценами.',
      ],
    ],
    'ua' => [
      [
        'title' => '7 років гарантії на встановлення та якість матеріалів.',
      ],
      [
        'title' => 'Зробимо безкоштовний розрахунок проекту та покажемо доступні зразки.',
      ],
      [
        'title' => 'Ми підтримуємо будь-який вид оплати, від готівки до криптовалюти.',
      ],
      [
        'title' => 'Працюємо виключно за договором із фіксованими цінами.',
      ],
    ]
  ];
?>

<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><a href="/catalog/"><?= get_bloginfo("language") == 'ru' ? 'Каталог' : 'Каталог' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <?php 
        if ( get_subcategory_name() ) { 
        ?>
            <span href="/design-sub"><?php echo get_subcategory_name(); ?></span>
            <span class="breadcrumbs__slash"> / </span>
        <?php } 
      ?>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Матовый потолок' ?></span>
    </div>
  </div>

  <div class="container">
    <div class="top-screen__wrap">
      
      <div class="top-screen__top">
        <h1>
          <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
        <div class="top-screen__description">
          <?= get_field('top_screen_description_1') ? the_field('top_screen_description_1') : 'Устанавливаем матовые натяжные потолки качественно, честно и без скрытых платежей.' ?>
        </div>
        <div class="top-screen__description">
          <?= get_field('top_screen_description2') ? the_field('top_screen_description2') : 'Подберем лучший вариант для вашего бюджета, заключим договор и выполним работу в оговоренные сроки с полной уборкой после монтажа.' ?>
        </div>

        <a 
          href="#"
          data-hover="<?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір' ?>"
          rel="nofollow" id="headerOrderBtn"
          class="button--main">
          <span><?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір'?></span>
        </a>
      </div>
      
      <div class="top-screen__bottom">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('inner_top_1')['url'] ? get_field('inner_top_1')['url'] : bloginfo('template_url') . '/images/page-inner-2/inner2top.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
    </div>
    <ul class="top-screen__list">
      <?php if (have_rows('top_screen_list')) :
        while ( have_rows('top_screen_list')) : the_row(); ?>
          <li class="item">
            <div class="item__img">
              <?php if(get_sub_field('item_img')['url']) : ?>
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('item_img')['url'] ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              <?php endif; ?>
            </div>
            <div class="item__title"><?= get_sub_field('item_title') ?></div>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( get_bloginfo("language") == 'ru' ? $topScreen['ru'] : $topScreen['ua'] as $key => $item ) : ?>
          <li class="item">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-inner-2/top-screen-list-' . ($key + 1) . '.svg' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>
