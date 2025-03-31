<?php

  $calculator = [
    'ru' => [
      [
        'title' => 'Калькулятор позволяет быстро приценится по стоимости потолка на классической конструкции.',
        'text' => 'Рассчитайте стоимость установки натяжного потолка «под ключ» в Киеве: c учётом монтажных работ, материалов и комплектующих.',
      ],
      [
        'title' => 'Производится расчёт полотна, углов, точек освещения и труб уходящих в потолок.',
        'text' => 'Расчёт нестандартных примыканий и конструкций — теневые, бесщелевые, многоуровневые, производится только после обсуждения проекта с менеджером компании. Отправьте запрос и мы посчитаем нестандартные потолки с освещением и вышлем вам предложение.',
      ],
    ],

    'ua' => [
      [
        'title' => 'Калькулятор дозволяє швидко прицінитись за вартістю стелі на класичній конструкції.',
        'text' => 'Розрахуйте вартість встановлення натяжної стелі «під ключ» у Києві: з урахуванням монтажних робіт, матеріалів та комплектуючих.',
      ],
      [
        'title' => 'Проводиться розрахунок полотна, кутів, точок освітлення і труб, що йдуть у стелю.',
        'text' => 'Розрахунок нестандартних примикань та конструкцій — тіньові, безщілинні, багаторівневі, провадиться тільки після обговорення проекту з менеджером компанії. Надішліть запит і ми порахуємо нестандартні стелі з освітленням і надішлемо вам пропозицію.',
      ],
    ]

  ];

?>

<section class="top-screen">
  <div class="container">
  <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><a href="/prices/"><?= get_bloginfo("language") == 'ru' ? 'Цены' : 'Ціни' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Калькулятор' ?></span>
    </div>
  </div>
  
  <div class="container">
    <div class="top-screen__wrap">
      <div class="top-screen--left">
        <h1>
          <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
        </h1>
      

        <ul class="top-screen__list">
          <?php if (have_rows('top_list')) :
            while ( have_rows('top_list')) : the_row(); ?>
              <li class="item">
                <div class="item__title item-title18">
                  <?= get_sub_field('item_title') ?>
                </div>  
                <div class="item__text">
                  <?= get_sub_field('item_text') ?>
                </div>  
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( get_bloginfo("language") == 'ru' ? $calculator['ru'] : $calculator['ua'] as $key => $item ) : ?>
              <li class="item">
                <div class="item__title item-title18">
                  <?= $item['title'] ?>
                </div>  
                <div class="item__text">
                  <?= $item['text'] ?> 
                </div>  
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

      <div class="top-screen--right">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-calculator/calcbg2.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
    </div>
  </div>
</section>
